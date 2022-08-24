@extends('admin.admin')
@section('is_title', 'MasterSiswa')
@section('is_title_konten', 'MasterSiswa' )
@section('is_konten')
<form action="/mastersiswa" method="post">
    @csrf
    <button class="btn btn-primary col-md-12 mb-3">Kirim</button>
</form>
@endsection