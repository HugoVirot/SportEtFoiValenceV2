<?php

namespace App\Http\Controllers\API;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sendResponse(Comment::all(), 'Commentaires récupérés avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $comment = Comment::create($request->all());
        return $this->sendResponse($comment, 'Commentaire créé avec succès', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return $this->sendResponse($comment, 'Commentaire récupéré avec succès');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $comment->update($request->all());
        return $this->sendResponse($comment, 'Commentaire modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return $this->sendResponse($comment, "Commentaire supprimé avec succès");
    }
}
