@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="ri-calculator-line fs-2"></i>
  <p class="fs-3 m-0">Data Perhitungan</p>
</div>
<div class="breadcrumbs-box rounded rounded-2 bg-white p-2 mt-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-apps-line"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Data Perhitungan</li>
    </ol>
  </nav>
</div>
<div class="content-box p-3 mt-3 rounded rounded-2 bg-white d-flex flex-column gap-4">
  <div class="card" id="Matriks Keputusan">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Matriks Keputusan
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A1</td>
            <td>2</td>
            <td>3</td>
            <td>6</td>
            <td>7</td>
          </tr>
          <tr>
            <td>A2</td>
            <td>2</td>
            <td>5</td>
            <td>7</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A3</td>
            <td>4</td>
            <td>4</td>
            <td>7</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A4</td>
            <td>7</td>
            <td>5</td>
            <td>6</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A5</td>
            <td>9</td>
            <td>3</td>
            <td>2</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card" id="Matrik Ternormalisasi">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Matriks Ternormalisasi
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A1</td>
            <td>2</td>
            <td>3</td>
            <td>6</td>
            <td>7</td>
          </tr>
          <tr>
            <td>A2</td>
            <td>2</td>
            <td>5</td>
            <td>7</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A3</td>
            <td>4</td>
            <td>4</td>
            <td>7</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A4</td>
            <td>7</td>
            <td>5</td>
            <td>6</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A5</td>
            <td>9</td>
            <td>3</td>
            <td>2</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Matriks Ternormalisasi Terbobot
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A1</td>
            <td>2</td>
            <td>3</td>
            <td>6</td>
            <td>7</td>
          </tr>
          <tr>
            <td>A2</td>
            <td>2</td>
            <td>5</td>
            <td>7</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A3</td>
            <td>4</td>
            <td>4</td>
            <td>7</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A4</td>
            <td>7</td>
            <td>5</td>
            <td>6</td>
            <td>4</td>
          </tr>
          <tr>
            <td>A5</td>
            <td>9</td>
            <td>3</td>
            <td>2</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Solusi Ideal Positif (A+)
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2</td>
            <td>3</td>
            <td>6</td>
            <td>7</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Solusi Ideal Positif (A-)
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2</td>
            <td>3</td>
            <td>6</td>
            <td>7</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Jarak Ideal Positif (S+)
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Jarak Ideal Positif (S+)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A1</td>
            <td>ASUS TUF Gaming</td>
            <td>0.3649494</td>
          </tr>
          <tr>
            <td>A2</td>
            <td>HP 14S</td>
            <td>0.21323494</td>
          </tr>
          <tr>
            <td>A1</td>
            <td>Lenovo Ideapad</td>
            <td>0.9863</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Jarak Ideal Negatif (S-)
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Jarak Ideal Negatif (S-)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A1</td>
            <td>ASUS TUF Gaming</td>
            <td>0.3649494</td>
          </tr>
          <tr>
            <td>A2</td>
            <td>HP 14S</td>
            <td>0.21323494</td>
          </tr>
          <tr>
            <td>A1</td>
            <td>Lenovo Ideapad</td>
            <td>0.9863</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Kedekatan Relatif Terhadap Solusi Ideal (V)
    </div>
    <div class="card-body p-1">
      <table id="example" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A1</td>
            <td>ASUS TUF Gaming</td>
            <td>0.5656</td>
          </tr>
          <tr>
            <td>A2</td>
            <td>HP 14S</td>
            <td>0.3232</td>
          </tr>
          <tr>
            <td>A1</td>
            <td>Lenovo Ideapad</td>
            <td>0.21423</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection