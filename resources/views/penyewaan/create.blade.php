@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penyewaan</h1>

    <form action="{{ route('penyewaan.store') }}" method="POST">
        @csrf

        @include('penyewaan.form')
        <div class="mb-3 row justify-content-end">
            <div class="col-2">
                <button type="submit" class="btn btn-sm btn-primary w-100">Simpan</button>
            </div>
        </div>
        {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
        {{-- <a href="{{ route('penyewaan.index') }}" class="btn btn-secondary">Batal</a> --}}
    </form>
</div>
@endsection

