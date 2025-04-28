@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penyewaan</h1>

    <form action="{{ route('penyewaan.update', $penyewaan->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('penyewaan.form', ['penyewaan' => $penyewaan])

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('penyewaan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection


