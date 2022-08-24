@extends('main');

@section('title', 'Kontak')
@section('container');
<!-- kontak -->
<div class="container-fluid pt-5 pb-5 kontak">
    <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
        <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, porro.
        </p>
        <div class="row pb-3">
            <div class="col-md-6">
            <input
                class="form-control form-control-lg mb-3"
                type="text"
                placeholder="Nama"
            />
            <input
                class="form-control form-control-lg mb-3"
                type="text"
                placeholder="Email"
            />
            <input
                class="form-control form-control-lg"
                type="text"
                placeholder="No. Phone"
            />
            </div>
            <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
            </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
            <button type="button" class="btn btn-danger btn-lg">
            Kirim Pesan
            </button>
        </div>
    </div>
</div>
@endsection;