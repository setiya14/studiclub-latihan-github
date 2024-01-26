@extends('component.layout')

@section('title', 'Tabel Mahasiswa')
@section('body')
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Tabel Data Mahasiswa</h1>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>NIM</th>
                     <th>Nama</th>
                     <th>Kelas</th>
                     <th>Deskripso</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>No</th>
                     <th>NIM</th>
                     <th>Nama</th>
                     <th>Kelas</th>
                     <th>Deskripso</th>
                     <th>Action</th>
                  </tr>
               </tfoot>
               <tbody>
                  @foreach ($dataMhs as $data)
                  <tr>
                     <td>{{ $loop->index + 1 }}</td>
                     <td>{{ $data['nim'] }}</td>
                     <td>{{ $data['nama'] }}</td>
                     <td>{{ $data['kelas'] }}</td>
                     <td>{{ $data['des'] }}</td>
                     <td>
                        <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-warning btn-icon-split btn-sm">
                           <span class="text">Edit</span>
                        </a>
                        <a href="#" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#detailModal" onclick="showDetail('{{ $data->id }}', '{{ $data->nim }}', '{{ $data->nama }}', '{{ $data->kelas }}', '{{ $data->des }}', '{{ $data->created_at }}', '{{ $data->updated_at }}', '{{route('mahasiswa.edit', $data->id)}}')">
                           <span class="text">Detail</span>
                        </a>
                        <form id="delete-form-{{ $data->id }}" action="{{ route('mahasiswa.destroy', $data->id) }}" method="POST" style="display: inline;">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger btn-icon-split btn-sm" onclick="return confirm('Are you sure you want to delete?')">
                              <span class="text">Delete</span>
                           </button>
                        </form>
                     </td>

                  </tr>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>

</div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="detailModalLabel">Detail Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <table class="table">
               <tbody>
                  <tr>
                     <th>ID</th>
                     <td id="detailId"></td>
                  </tr>
                  <tr>
                     <th>NIM</th>
                     <td id="detailNim"></td>
                  </tr>
                  <tr>
                     <th>Nama</th>
                     <td id="detailNama"></td>
                  </tr>
                  <tr>
                     <th>Kelas</th>
                     <td id="detailKelas"></td>
                  </tr>
                  <tr>
                     <th>Deskripsi</th>
                     <td id="detailDeskripsi"></td>
                  </tr>
                  <tr>
                     <th>Created At</th>
                     <td id="detailCreatedAt"></td>
                  </tr>
                  <tr>
                     <th>Updated At</th>
                     <td id="detailUpdatedAt"></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="modal-footer">
            <a id="editButton" href="" class="btn btn-warning btn-icon-split">
               <span class="text">Edit</span>
            </a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

@endsection

@section('js')
<script>
   function showDetail(id, nim, nama, kelas, deskripsi, createdAt, updatedAt, linkedit) {
      // Set the detailed information in the modal
      document.getElementById('detailId').innerHTML = id;
      document.getElementById('detailNim').innerHTML = nim;
      document.getElementById('detailNama').innerHTML = nama;
      document.getElementById('detailKelas').innerHTML = kelas;
      document.getElementById('detailDeskripsi').innerHTML = deskripsi;
      document.getElementById('detailCreatedAt').innerHTML = createdAt;
      document.getElementById('detailUpdatedAt').innerHTML = updatedAt;

      // Set the "Edit" button's href attribute dynamically
      document.getElementById('editButton').href = linkedit;

   }
</script>
@endsection