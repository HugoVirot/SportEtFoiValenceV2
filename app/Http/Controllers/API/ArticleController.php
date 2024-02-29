<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sendResponse(Article::all(), 'Articles récupérés avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all());
        return $this->sendResponse($article, 'Article créé avec succès', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return $this->sendResponse($article, 'Article récupéré avec succès');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        return $this->sendResponse($article, 'Article modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return $this->sendResponse($article, "Article supprimé avec succès");
    }
}
