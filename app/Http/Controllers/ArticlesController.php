<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Show all articles
     *
     * @return void
     */
    public function showArticles()
    {
        $articles = Article::orderBy('updated_at', 'DESC')->paginate(10);

        return view('articles.showArticles', compact('articles'));
    }

    /**
     * Show article by $id
     *
     * @param [type] $id
     * @return void
     */
    public function singleArticle($id)
    {
        $article = Article::find($id);

        return view('articles.indexArticle', [
            'article' => $article
        ]);
    }

    /**
     * Create article
     *
     * @return void
     */
    public function createArticle()
    {
        $categories = Category::all();

        return view('articles.create', compact('categories'));
    }

    /**
     * Undocumented function
     *
     * @param ArticleRequest $request
     * @return void
     */
    public function store(ArticleRequest $request)
    {
        try{
            \DB::beginTransaction();
                //$article = Article::create($request);
                $article = new Article;
                $article['title'] = $request->title;
                $article['description'] = $request->description;
                $article->save();
                $article->categories()->sync($request->categories);
            \DB::commit();
        }catch(\Exception $e) {
            \DB::rollBack();

            return back()->withErrors($e->getMessage())->withInput();
        }
        unset($article);

        return redirect()->route('articles');
    }

    /**
     * Edit article by $id
     *
     * @param [type] $id
     * @return void
     */
    public function editArticle($id)
    {
        $article = Article::find($id);
        $categories = Category::all();

        return view('articles.edit_article', compact('article', 'categories'));
    }

    /**
     * Undocumented function
     *
     * @param ArticleRequest $request
     * @param Article $article
     * @return void
     */
    public function update(ArticleRequest $request, Article $article)
    {
        try{
            \DB::beginTransaction();
                $article->update($request->all());
                $article->categories()->sync($request->categories);
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput();
        }

        unset($article);
        return redirect()->route('articles');
    }

    /**
     * Undocumented function
     *
     * @param Article $article
     * @return void
     */
    public function deleteArticle(Article $article)
    {
        $article->delete();

        return redirect()->route('articles');
    }
}
