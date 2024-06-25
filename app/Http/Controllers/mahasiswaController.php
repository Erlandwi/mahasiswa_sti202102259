<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('mahasiswa.index');  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('mahasiswa.create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required|numeric|unique|:mahasiswa,id',
            'nim'=>'required|numeric|unique|:mahasiswa,nim',
            'nim'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'agama'=>'required',
            'status'=>'required',
            'foto'=>'required',
        ],[
'id.required'=>'ID wajib diisi bro',
'nim.required'=>'nim wajib diisi bro',
'nim.unique'=>'nim wisan diisi bro',
'nama.required'=>'nama wajib diisi bro',
'alamat.required'=>'email wajib diisi bro',
'email.required'=>'email wajib diisi bro',
'tempat_lahir.required'=>'tempat_lahir wajib diisi bro',
'tgl_lahir.required'=>'tgl_lahir wajib diisi bro',
'agama.required'=>'agama wajib diisi bro',
'status.required'=>'status wajib diisi bro',
'foto.required'=>'ID wajib diisi bro',

        ]);
        $data =[
        'id'=> $request->id,
        'nim'=> $request->nim,
        'nama'=> $request->nama,
        'alamat'=> $request->alamat,
        'email'=> $request->email,
        'tempat_lahir'=> $request->tempat_lahir,
        'tgl_lahir'=> $request->tgl_lahir,
        'agama'=> $request->agama,
        'status'=> $request->status,
        'foto'=> $request->foto,

        ];
        mahasiswa::create($data);
      return 'HI';  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
