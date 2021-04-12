<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentsFormRequest;
use App\Models\Comment;
use Exception;

class CommentsController extends Controller
{

    /**
     * Display a listing of the comments.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $comments = Comment::paginate(25);

        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new comment.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('comments.create');
    }

    /**
     * Store a new comment in the storage.
     *
     * @param App\Http\Requests\CommentsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(CommentsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Comment::create($data);

            return redirect()->route('comments.comment.index')
                ->with('success_message', trans('comments.model_was_added'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('comments.unexpected_error')]);
        }
    }

    /**
     * Display the specified comment.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);

        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified comment.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        

        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified comment in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\CommentsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, CommentsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $comment = Comment::findOrFail($id);
            $comment->update($data);

            return redirect()->route('comments.comment.index')
                ->with('success_message', trans('comments.model_was_updated'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('comments.unexpected_error')]);
        }        
    }

    /**
     * Remove the specified comment from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $comment = Comment::findOrFail($id);
            $comment->delete();

            return redirect()->route('comments.comment.index')
                ->with('success_message', trans('comments.model_was_deleted'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('comments.unexpected_error')]);
        }
    }



}
