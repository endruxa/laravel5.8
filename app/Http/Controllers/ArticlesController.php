<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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

        return view('articles.create_article', compact('categories'));
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
                if($request->has('image')){
                    $path = $request->file('image')->store('upload/'.$request->user()->id, 'public');
                    $article['image_path'] = $path;
                }
                $article->save();
                $article->categories()->sync($request->categories);
            \DB::commit();
            Alert::success('Успешно создана', 'Поздравляем!');
        }catch(\Exception $e) {
            \DB::rollBack();
            return redirect('createArticle')->with('Error', $e->getMessage())->withInput();
        }
        unset($article);

        return redirect('articles');
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
                if($request->has('image')){
                    if(\Storage::disk('public')->exists($article->image_path)) \Storage::disk('public')->delete($article->image_path);
                    $path = $request->file('image')->store('upload/'.$request->user()->id, 'public');
                    $article['image_path'] = $path;
                }
                $article->update($request->all());
                $article->categories()->sync($request->categories);
            \DB::commit();
            Alert::success('Успешно обновлена', 'Ты молодец!!!');
        }catch(\Exception $e){
            \DB::rollBack();
            Alert::error('Не удалось обновить', $e->getMessage());
            return back()->withInput();
        }
    
        unset($article);
        return redirect('articles');
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
