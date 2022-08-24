@extends('admin.admin')
@section('is_title', 'MasterProject')
@section('is_title_konten', 'MasterProject' )
@section('is_konten')
<form action="/masterproject" method="post">
    @csrf
    <button class="btn btn-primary col-md-12 mb-3">-</button>
</form>
@endsection