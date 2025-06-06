@extends('layouts.app')
@section('title', 'Hubungi Kami')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="text-center" data-aos="fade-in">
            <h1 class="fw-bold">Hubungi Kami</h1>
            <p class="lead">Kami siap mendengar dari Anda. Jangan ragu untuk menghubungi kami.</p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-6" data-aos="fade-right">
            <h3 class="fw-semibold mb-3">Informasi Kontak</h3>
            <p class="text-muted">Kunjungi showroom kami atau hubungi kami melalui detail di bawah ini.</p>
            <ul class="list-unstyled">
                <li class="d-flex mb-3">
                    <i class="bi bi-geo-alt-fill fs-4 text-primary me-3"></i>
                    <div>
                        <strong>Alamat:</strong><br>
                        Jalan Jenderal Sudirman No. 123, Jakarta Selatan, Indonesia
                    </div>
                </li>
                 <li class="d-flex mb-3">
                    <i class="bi bi-telephone-fill fs-4 text-primary me-3"></i>
                    <div>
                        <strong>Telepon:</strong><br>
                        (021) 123-4567
                    </div>
                </li>
                 <li class="d-flex mb-3">
                    <i class="bi bi-envelope-fill fs-4 text-primary me-3"></i>
                    <div>
                        <strong>Email:</strong><br>
                        info@gardaoto.test
                    </div>
                </li>
            </ul>

            <div class="ratio ratio-16x9 mt-4 rounded-3 overflow-hidden shadow">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.411649633842!2d106.82458407480119!3d-6.209635993778211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f41bcc76d379%3A0x1d375344c6b04855!2sMonumen%20Selamat%20Datang!5e0!3m2!1sen!2sid!4v1717765181786!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
            <h3 class="fw-semibold mb-3">Kirim Pesan</h3>
            <div class="card card-body border-0 shadow-sm">
                 <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                     <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                </form>
            </div>
            <p class="text-muted small mt-2">*Catatan: Form ini hanya sebatas tampilan. Fungsionalitas pengiriman email perlu diimplementasikan di backend.</p>
        </div>
    </div>
</div>
@endsection