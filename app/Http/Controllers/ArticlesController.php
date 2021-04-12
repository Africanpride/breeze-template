<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
// use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ArticlesController extends Controller
{

    /**
     * Display a listing of the articles.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::with('creator','user','category','comment')->paginate(25);

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $creators = User::pluck('name','id')->all();
        $users = User::pluck('name','id')->all();
        // $categories = Category::pluck('id','id')->all();
        // $comments = Comment::pluck('id','id')->all();

        return view('articles.create', compact('creators','users'));
    }

    /**
     * Store a new article in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            $data['created_by'] = Auth::Id();
            Article::create($data);

            return redirect()->route('articles.article.index')
                ->with('success_message', trans('articles.model_was_added'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('articles.unexpected_error')]);
        }
    }

    /**
     * Display the specified article.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::with('creator','user','category','comment')->findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $creators = User::pluck('name','id')->all();
        $users = User::pluck('name','id')->all();
        $categories = Category::pluck('id','id')->all();
        $comments = Comment::pluck('id','id')->all();

        return view('articles.edit', compact('article','creators','users','categories','comments'));
    }

    /**
     * Update the specified article in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $article = Article::findOrFail($id);
            $article->update($data);

            return redirect()->route('articles.article.index')
                ->with('success_message', trans('articles.model_was_updated'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('articles.unexpected_error')]);
        }
    }

    /**
     * Remove the specified article from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();

            return redirect()->route('articles.article.index')
                ->with('success_message', trans('articles.model_was_deleted'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('articles.unexpected_error')]);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'title' => 'string|min:1|max:255|nullable',
            'slug' => 'string|min:1|nullable',
            'content' => 'string|min:1|nullable',
            'notes' => 'string|min:1|max:1000|nullable',
            'created_by' => 'nullable',
            'body' => 'string|min:1|nullable',
            'image' => 'numeric|nullable',
            'active' => 'string|min:1|nullable',
            'featured' => 'string|min:1|nullable',
            'user_id' => 'nullable',
            'category_id' => 'nullable',
            'comment_id' => 'nullable',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
