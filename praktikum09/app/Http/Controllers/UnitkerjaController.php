<?php

namespace App\Http\Controllers;

use App\Models\unitkerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_unitkerja = unitkerja::all();
        return view('unitkerja.index', compact('list_unitkerja'));
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
     * @param  \App\Models\unitkerja  $unitkerja
     * @return \Illuminate\Http\Response
     */
    public function show(unitkerja $unitkerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unitkerja  $unitkerja
     * @return \Illuminate\Http\Response
     */
    public function edit(unitkerja $unitkerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unit_kerja  $unit_kerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, unitkerja $unitkerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unitkerja  $unit_kerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(unitkerja $unitkerja)
    {
        //
    }
}