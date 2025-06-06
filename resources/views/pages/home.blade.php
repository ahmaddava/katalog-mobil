@extends('layouts.app')
@section('title', 'Garda Oto | Dealer Mobil Terpercaya')

@section('content')

<div class="bg-dark text-white">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?q=80&w=2070&auto=format&fit=crop" class="d-block mx-lg-auto img-fluid rounded-3" alt="Mobil Hero" loading="lazy">
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-5 fw-bold lh-1 mb-3">Temukan Mobil Impian Anda Bersama Garda Oto</h1>
                <p class="lead">Kami menyediakan koleksi mobil terbaik dengan kualitas terjamin, harga kompetitif, dan layanan profesional untuk pengalaman membeli mobil yang tak terlupakan.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ route('cars.index') }}" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Lihat Semua Koleksi</a>
                    <a href="{{ route('contact') }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom text-center" data-aos="fade-up">Mengapa Memilih Kami?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-patch-check-fill text-primary"></i>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Kualitas Terjamin</h3>
                <p>Setiap unit mobil kami telah melewati proses inspeksi ketat untuk memastikan Anda mendapatkan produk dengan kondisi terbaik.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-tag-fill text-primary"></i>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Harga Kompetitif</h3>
                <p>Kami menawarkan harga terbaik di pasaran dengan skema pembayaran yang transparan dan tanpa biaya tersembunyi.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-headset text-primary"></i>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Layanan Profesional</h3>
                <p>Tim kami yang berpengalaman siap membantu Anda dari proses pemilihan hingga serah terima unit mobil impian Anda.</p>
            </div>
        </div>
    </div>
</div>


<div class="bg-white py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Koleksi Terbaru Kami</h2>
            <p class="text-muted">Berikut adalah beberapa unit terbaik yang baru saja kami tambahkan.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($cars as $car)
                <div class="col" data-aos="fade-up" data-aos-delay="{{ ($loop->iteration % 3) * 100 }}">
                    <x-car-card :car="$car" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Belum ada mobil unggulan saat ini.</p>
                </div>
            @endforelse
        </div>
         <div class="text-center mt-5">
             <a href="{{ route('cars.index') }}" class="btn btn-outline-primary btn-lg">Jelajahi Semua Mobil</a>
         </div>
    </div>
</div>

@endsection