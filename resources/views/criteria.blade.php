@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="bx bx-data fs-2"></i>
  <p class="fs-3 m-0">Data Kriteria</p>
</div>
<div class="breadcrumbs-box rounded rounded-2 bg-white p-2 mt-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-apps-line"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
    </ol>
  </nav>
</div>
<div class="content-box p-3 mt-3 rounded rounded-2 bg-white">
  <div class="content rounded rounded-2 border border-1 p-3">
    <div class="btn-wrapper mt-2">

      {{-- Error Alert --}}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="btn btn-success" id="add" data-bs-toggle="modal" data-bs-target="#addnew"><i
          class="ri-add-box-line"></i> Tambah Kriteria
      </div>
    </div>

    <div class="Produk mt-2 mb-2">
      <table id="example" class="table table-striped mt-3 table-hover" style="width: 100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Bobot</th>
            <th>Jenis</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          @foreach ($criteria as $criterion)
          <tr>
            <td>{{$criterion->id}}</td>
            <td>C{{$loop->iteration}}</td>
            <td>{{$criterion->name}}</td>
            <td>{{$criterion->weight}}</td>
            <td>{{$criterion->benefited == 1 ? 'Benefit' : 'Cost'}}</td>
            <td class="">
              <div class="btn-wrapper d-flex gap-2 flex-wrap">
                <a href="#" data-id="{{$criterion->id}}" data-name="{{$criterion->name}}"
                  data-weight="{{$criterion->weight}}" data-benefited="{{$criterion->benefited}}"
                  class="btn edit btn-action btn-warning text-white"><i class="bx bx-edit"></i></a>
                <a href="#" class="delete btn btn-action btn-danger text-white" data-name="{{$criterion->name}}"
                  data-id="{{$criterion->id}}">
                  <i class="bx bx-trash"></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Bobot</th>
            <th>Jenis</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

@include('modal.criteriaModal')

@endsection

@push('js')
<script type="text/javascript">
  $(document).ready(function(){
      
      // $.ajaxSetup({
      //     headers: {
      //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //     }
      // });

       
      $(document).on('click', '.edit', function (event){
          event.preventDefault();
          var id = $(this).data('id');
          var name = $(this).data('name');
          var weight = $(this).data('weight');
          var benefited = $(this).data('benefited');
          $('#editmodal').modal('show');
          $('#name-edit').val(name);
          $('#weight-edit').val(weight);
          $('#benefited-edit').val(benefited);
          $('#edit-id').val(id);
      });
       
      $(document).on('click', '.delete', function(event){
          event.preventDefault();
          var id = $(this).data('id');
          var name = $(this).data('name');
          $('#deletemodal').modal('show');
          $('#delete-id').val(id);
          $('.criteria-name').html(name);
      });
       
       
      // $('#deletecriteria').click(function(){
      //     var id = $(this).data('id');
          
      //     $.post("{{ route('criteria.store') }}",{id:id}, function(){
      //         $('#deletemodal').modal('hide');
      //         showCriteria();
      //     })
      // });
       
  });

    
</script>
@endpush