<?php

namespace App\Http\Controllers\API;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;

class SectionController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sendResponse(Section::all(), 'Sections récupérées avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {
        $section = Section::create($request->all());
        return $this->sendResponse($section, 'Section créée avec succès', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return $this->sendResponse($section, 'Section récupérée avec succès');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $section->update($request->all());
        return $this->sendResponse($section, 'Section modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return $this->sendResponse($section, "Section supprimée avec succès");
    }
}
