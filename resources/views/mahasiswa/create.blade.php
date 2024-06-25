@extends('layout.template')
<!-- START FORM -->
@section('konten')
@if ($errors->any())
    <div class="pt-3">
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $item)
        <li>{{$item}}/<li>
    @endforeach
    <ul>  
</div>
    </div>
@endif
<form action='{{ url('mahasiswa') }}' method='post'>
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">

        
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='id' id="id">
                </div>
            </div>
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" name='nim' id="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" name='nama' id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" name='alamat' id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" name='email' id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">tempat_lahir</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" name='tempat_lahir' id="tempat_lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">tgl_lahir</label>
                <div class="col-sm-10">
                    <input type="string" class="form-control" name='tgl_lahir' id="tgl_lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">agama</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" name='agama' id="agama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" name='status' id="status">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">foto</label>
                <div class="col-sm-10">
                    <input type="picture" class="form-control" name='foto' id="foto">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        @endsection