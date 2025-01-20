@extends('layouts.main')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Menu Kami</h2>
    <div class="row">
        @foreach ($menus as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('storage/images/'.$item->gambar) }}" class="card-img-top" alt="Kopi Spesial">
                <div class="card-body">
                    <h3 class="card-title">{{ $item->nama }}</h3>
                    <p class="card-text">{{ $item->deskripsi }}</p>
                    <p class="text-primary fw-bold">Harga: Rp {{ number_format($item->harga) }}</p>
                    <div class="d-grid">
                        <a href="{{ route('checkout') }}"
                            class="btn btn-success"
                            onclick="return confirm('Anda yakin checkout?')">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
