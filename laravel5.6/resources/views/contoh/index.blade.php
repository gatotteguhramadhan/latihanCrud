@extends('master')

@section('content')
     ini adalah page index Crud<br>
     berikut contoh table Crud<br>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">001</th>
      <td>Absensi Karyawan menggunakan fingerprint</td>
      <td>PKN</td>
      <td>Tot</td>
      <td>Date</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">002</th>
      <td>Membuat lampu hidup meledak melalui sms gateway</td>
      <td>Proposal</td>
      <td>Tot</td>
      <td>Date</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">003</th>
      <td>Membuat lampu hidup meledak melalui via online</td>
      <td>Skripsi</td>
      <td>Tot</td>
      <td>Date</td>
      <td></td>
    </tr>
  </tbody>
</table>
@endsection