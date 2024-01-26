@extends('component.layout')

@section('title', 'Tambah Data Mahasiswa')

@section('body')

<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Tambah Data Mahasiswa</h1>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">

      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
         <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
               <label for="nim">NIM</label>
               <input type="text" class="form-control" name="nim" placeholder="NIM" required>
            </div>

            <div class="form-group">
               <label for="nama">Nama</label>
               <input type="text" class="form-control" name="nama" placeholder="Nama" required>
            </div>

            <div class="form-group">
               <label for="kelas">Kelas</label>
               <input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
            </div>

            <div class="form-group">
               <label for="deskripsi">Deskripsi</label>
               <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" required></textarea>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
         </form>
      </div>

   </div>
</div>



@endsection