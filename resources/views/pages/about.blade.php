@extends('layouts.app')
@section('title', 'Tentang Garda Oto')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="text-center" data-aos="fade-in">
            <h1 class="fw-bold">Tentang Kami</h1>
            <p class="lead">Mengenal lebih dekat visi, misi, dan tim di balik Garda Oto.</p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
            <img src="https://images.unsplash.com/photo-1580927357716-2c93a023495b?q=80&w=2070&auto=format&fit=crop" alt="Showroom" class="img-fluid rounded-3 shadow">
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <h2 class="fw-semibold lh-1">Visi Kami</h2>
            <p class="text-muted">Menjadi dealer mobil terdepan di Indonesia yang dikenal karena integritas, kualitas, dan kepuasan pelanggan.</p>
            <h2 class="fw-semibold lh-1 mt-4">Misi Kami</h2>
            <ul class="list-unstyled text-muted">
                <li class="d-flex align-items-start mb-2"><i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i><span>Menyediakan kendaraan berkualitas tinggi dengan harga yang adil.</span></li>
                <li class="d-flex align-items-start mb-2"><i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i><span>Memberikan pengalaman pelanggan yang luar biasa melalui layanan yang ramah dan profesional.</span></li>
                <li class="d-flex align-items-start"><i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i><span>Membangun hubungan jangka panjang yang didasarkan pada kepercayaan dan transparansi.</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Tim Profesional Kami</h2>
            <p class="text-muted">Figur-figur berdedikasi yang siap melayani Anda.</p>
        </div>
        <div class="row text-center">
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow team-member-card">
                    <img src="https://i.pravatar.cc/300?u=a042581f4e29026704d" class="card-img-top" alt="Tim 1">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Andi Wijaya</h5><span class="small text-muted">CEO & Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow team-member-card">
                    <img src="https://i.pravatar.cc/300?u=a042581f4e29026704e" class="card-img-top" alt="Tim 2">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Bunga Citra</h5><span class="small text-muted">Head of Sales</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow team-member-card">
                    <img src="https://i.pravatar.cc/300?u=a042581f4e29026704f" class="card-img-top" alt="Tim 3">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Charlie Darmawan</h5><span class="small text-muted">Head of Marketing</span>
                    </div>
                </div>
            </div>
             <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow team-member-card">
                    <img src="https://i.pravatar.cc/300?u=a042581f4e29026704g" class="card-img-top" alt="Tim 4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Diana Putri</h5><span class="small text-muted">Customer Service</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection