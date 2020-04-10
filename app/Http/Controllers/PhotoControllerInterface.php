<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

interface PhotoControllerInterface
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return void
     */
    public function index();

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create();

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request);

    /**
     * Display the specified resource.
     *
     * @param Photo $photo
     * @return void
     */
    public function show(Photo $photo);

    /**
     * Show the form for editing the specified resource.
     *
     * @param Photo $photo
     * @return Response
     */
    public function edit(Photo $photo);

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Photo $photo
     * @return Response
     */
    public function update(Request $request, Photo $photo);

    /**
     * Remove the specified resource from storage.
     *
     * @param Photo $photo
     * @return Response
     */
    public function destroy(Photo $photo);
}
