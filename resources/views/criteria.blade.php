@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="bx bx-data fs-2"></i>
  <p class="fs-3">Data Kriteria</p>
</div>
<div class="breadcrumbs-box rounded rounded-2 bg-white p-2">
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
      <div class="btn btn-outline-success">Tambah Kriteria</div>
    </div>

    @if(session()-> has('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif

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
        <tbody>
          @foreach ($criteria as $criterion)
          <tr>
            <td>{{$criterion->id}}</td>
            <td>C{{$loop->iteration}}</td>
            <td>{{$criterion->name}}</td>
            <td>{{$criterion->weight}}</td>
            <td>{{$criterion->benefited == 1 ? 'Benefit' : 'Cost'}}</td>
            <td class="">
              <div class="btn-wrapper d-flex gap-2 flex-wrap">
                <a href="#" class="btn btn-action btn-warning text-white"><i class="bx bx-edit"></i></a>
                <a href="#">
                  <form action="Post">
                    <input type="hidden" name="" />
                    <button type="submit" class="btn btn-action btn-danger">
                      <i class="bx bx-trash text-white"></i>
                    </button>
                  </form>
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
@endsection