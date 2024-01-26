@extends('component.layout')

@section('title', 'Edit Data Mahasiswa')

@section('body')
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">
      @if(isset($mahasiswa))
      Edit Data Mahasiswa
      @else
      Tambah Data Mahasiswa
      @endif
   </h1>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">

      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
         <form action="{{ isset($mahasiswa) ? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store') }}" method="POST">
            @csrf
            @if(isset($mahasiswa))
            @method('PUT')
            @endif

            <div class="form-group">
               <label for="nim">NIM</label>
               <input type="text" class="form-control" name="nim" placeholder="NIM" value="{{ isset($mahasiswa) ? $mahasiswa->nim : '' }}" required>
            </div>

            <div class="form-group">
               <label for="nama">Nama</label>
               <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ isset($mahasiswa) ? $mahasiswa->nama : '' }}" required>
            </div>

            <div class="form-group">
               <label for="kelas">Kelas</label>
               <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="{{ isset($mahasiswa) ? $mahasiswa->kelas : '' }}" required>
            </div>

            <div class="form-group">
               <label for="deskripsi">Deskripsi</label>
               <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" required>{{ isset($mahasiswa) ? $mahasiswa->des : '' }}</textarea>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-primary form-control">
                  @if(isset($mahasiswa))
                  Update
                  @else
                  Submit
                  @endif
               </button>
            </div>
         </form>
      </div>

   </div>
</div>


@endsection