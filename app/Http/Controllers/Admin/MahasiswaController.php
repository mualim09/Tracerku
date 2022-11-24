<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['show','create','edit','destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.datamahasiswa.index');
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
        //jika user ADMIN
        if(Auth::user()->role == 'ADMIN'){
            // 
        }
        // jika user USER
        elseif(Auth::user()->role == 'USER'){
            // 
        }else{
            abort(403,'you do not have permission ! <a href="'.route('admin').'">Go Back</a>');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DataMahasiswa $dataMahasiswa)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataMahasiswa $dataMahasiswa)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataMahasiswa $dataMahasiswa)
    {
        //jika user ADMIN
        if(Auth::user()->role == 'ADMIN'){
            // 
        }
        // jika user USER
        elseif(Auth::user()->role == 'USER'){
            // 
        }else{
            abort(403,'you do not have permission ! <a href="'.route('admin').'">Go Back</a>');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataMahasiswa $dataMahasiswa)
    {
        // 
    }
}
