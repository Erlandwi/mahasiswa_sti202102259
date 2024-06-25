
       
        @extends('layout.template')
        <!-- START DATA -->
        @section('konten')
       <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">id</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">alamat</th>
                            <th class="col-md-2">email</th>
                            <th class="col-md-2">tempat_lahir</th>
                            <th class="col-md-2">tgl_lahir</th>
                            <th class="col-md-2">agama</th>
                            <th class="col-md-2">status</th>
                            <th class="col-md-2">foto</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1904</td>
                            <td>STI202102259</td>
                            <td>Erlan Dwiyanto</td>
                            <td>Desa.Sangkanayu RT09/RW03, Kecamatan.Mrebet, Kabupaten.Purbalingga, Kode POS.53352</POS></td>
                            <td>erlandwi697@gmail.com</td>
                            <td>Purbalingga</td>
                            <td>19 April 2001</td>
                            <td>Islam</td>
                            <td>Mahasiswa</td>
                            <td><picture></picture></td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
          @endsection