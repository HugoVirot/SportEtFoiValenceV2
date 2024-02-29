<?php

namespace App\Http\Controllers\API;

use App\Models\Download;
use App\Http\Requests\StoreDownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;

class DownloadController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sendResponse(Download::all(), 'Téléchargements récupérés avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDownloadRequest $request)
    {
        $download = Download::create($request->all());
        return $this->sendResponse($download, 'Téléchargement créé avec succès', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Download $download)
    {
        return $this->sendResponse($download, 'Téléchargement récupéré avec succès');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDownloadRequest $request, Download $download)
    {
        $download->update($request->all());
        return $this->sendResponse($download, 'Téléchargement modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        $download->delete();
        return $this->sendResponse($download, "Téléchargement supprimé avec succès");
    }
}
