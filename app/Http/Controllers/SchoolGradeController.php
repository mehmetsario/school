<?php

namespace App\Http\Controllers;

use App\Models\SchoolGrade;
use Illuminate\Http\Request;

class SchoolGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Stages');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolGrade  $schoolGrade
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolGrade $schoolGrade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolGrade  $schoolGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolGrade $schoolGrade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SchoolGrade  $schoolGrade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolGrade $schoolGrade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolGrade  $schoolGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolGrade $schoolGrade)
    {
        //
    }
}
