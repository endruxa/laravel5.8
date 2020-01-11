<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
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
        return view('articles.create');
    }

    /**
     * Store article
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'title'       => 'required|unique:title|max:50|min:2',
                'description' => 'required|unique:description|max:250|min:5',
                'user_id'     => 'nullable'
            ]);
            
            \DB::beginTransaction();
                $article = Article::create($request);
                // $article = new Article;
                // $article['title'] = $request->title;
                // $article['description'] = $request->description;
                // $article->save();
            \DB::commit();
        }catch(\Exception $e) {
            \DB::rollBack();

            return back()->withErrors($e->getMessage())->withInput();
        }
        //unset($article);
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

    }

    /**
     * Update article by $id
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Delete article
     *
     * @param [type] $id
     * @return void
     */
    public function deleteArticle($id)
    {

    }
}
