<div class="card h-100 shadow-sm border-0 product-card-v2">
    <div class="product-card-img-container">
        {{-- Jika ada gambar, tampilkan. Jika tidak, gunakan placeholder. --}}
        @if($car->image)
            <img src="{{ Storage::url($car->image) }}" class="card-img-top" alt="{{ $car->name }}">
        @else
            <img src="https://via.placeholder.com/400x250/6c757d/ffffff?text={{ $car->brand }}" class="card-img-top" alt="{{ $car->name }}">
        @endif
    </div>
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $car->name }}</h5>
        <h6 class="card-subtitle mb-3 text-primary fw-bold">Rp {{ number_format($car->price, 0, ',', '.') }}</h6>

        <div class="mt-auto">
            <ul class="list-group list-group-flush small mb-3">
                <li class="list-group-item d-flex justify-content-between px-0">
                    <span><i class="bi bi-calendar-check me-2"></i>Tahun</span>
                    <strong>{{ $car->year }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between px-0">
                    <span><i class="bi bi-gear-wide-connected me-2"></i>Transmisi</span>
                    <strong>{{ $car->transmission }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between px-0">
                    <span><i class="bi bi-fuel-pump-fill me-2"></i>Bahan Bakar</span>
                    <strong>{{ $car->fuel_type }}</strong>
                </li>
            </ul>
            {{-- 
            ===========================================================
            == INI ADALAH BARIS YANG DIPERBAIKI ==
            ===========================================================
            --}}
            <a href="{{ route('car.detail', $car->id) }}" class="btn btn-outline-primary w-100 stretched-link">Lihat Detail</a>
        </div>
    </div>
</div>