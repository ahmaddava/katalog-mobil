@extends('layouts.app')
@section('title', $car->name . ' | Detail Mobil')

@section('content')
    {{-- Wrapper utama dengan container dan margin atas-bawah --}}
    <div class="container my-5">

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $car->name }}</li>
            </ol>
        </nav>

        <div class="row g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="img-container shadow-lg rounded-3">
                    @if($car->image)
                        <img src="{{ Storage::url($car->image) }}" class="img-fluid rounded-3" alt="{{ $car->name }}">
                    @else
                        <img src="https://via.placeholder.com/800x600/6c757d/ffffff?text={{ $car->brand }}" class="img-fluid rounded-3" alt="{{ $car->name }}">
                    @endif
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">

                {{-- Nama & Harga --}}
                <h1 class="display-5 fw-bold">{{ $car->name }}</h1>
                <p class="text-muted fs-4">{{ $car->brand }}</p>
                <p class="display-6 text-primary fw-bolder mt-3">
                    Rp {{ number_format($car->price, 0, ',', '.') }}
                </p>
                <hr>

                {{-- Spesifikasi Utama --}}
                <div class="mt-4">
                    <h4 class="fw-semibold">Spesifikasi</h4>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Merek <span class="badge bg-secondary rounded-pill">{{ $car->brand }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Tahun <span class="badge bg-secondary rounded-pill">{{ $car->year }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Transmisi <span class="badge bg-secondary rounded-pill">{{ $car->transmission }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Bahan Bakar <span class="badge bg-secondary rounded-pill">{{ $car->fuel_type }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Kapasitas Mesin <span class="badge bg-secondary rounded-pill">{{ $car->engine_capacity }}</span>
                        </li>
                    </ul>
                </div>

                {{-- Deskripsi --}}
                <div class="mt-4">
                    <h4 class="fw-semibold">Deskripsi</h4>
                    {{-- 
                    ===========================================================
                    == INI ADALAH PERBAIKAN UNTUK DESKRIPSI ==
                    ===========================================================
                    Menggunakan {!! !!} untuk merender tag HTML dari RichEditor.
                    --}}
                    <div class="mt-3 description-content">
                        {!! $car->description !!}
                    </div>
                </div>

                {{-- Tombol Aksi (Call to Action) --}}
                <div class="d-grid gap-2 mt-5">
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20mobil%20{{ urlencode($car->name) }}" target="_blank" class="btn btn-success btn-lg">
                        <i class="bi bi-whatsapp me-2"></i>Hubungi via WhatsApp
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary">Kembali ke Katalog</a>
                </div>
            </div>
        </div>
    </div>
@endsection