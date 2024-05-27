<?php

namespace App\Http\Controllers;

use App\Models\M_user;
use Illuminate\Http\Request;

class C_user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = M_user :: all();
        return view('v_user', compact('view'));
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
     * @param  \App\Models\M_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function show(M_user $m_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\M_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function edit(M_user $m_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\M_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, M_user $m_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\M_user  $m_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(M_user $m_user)
    {
        //
    }
}
