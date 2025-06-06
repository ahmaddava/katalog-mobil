<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-in">
        <h2 class="fw-bold">Jelajahi Koleksi Kami</h2>
        <p class="text-muted">Gunakan filter untuk menemukan mobil yang paling sesuai untuk Anda.</p>
    </div>

    <div class="filter-section card card-body shadow-sm mb-5" data-aos="fade-in" data-aos-delay="100">
        <div class="row g-3 align-items-center">
            
            <div class="col-12 col-lg-6">
                <label class="form-label fw-semibold">Filter berdasarkan Merek:</label>
                <div class="btn-group w-100" role="group" aria-label="Filter Merek">
                    <button wire:click="filterByBrand('')" type="button" class="btn {{ $brand == '' ? 'btn-primary' : 'btn-outline-primary' }}">Semua</button>
                    @foreach($brands as $brandOption)
                    <button wire:click="filterByBrand('{{ $brandOption }}')" type="button" class="btn {{ $brand == $brandOption ? 'btn-primary' : 'btn-outline-primary' }}">{{ $brandOption }}</button>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row g-3">
                    <div class="col-12 col-md-7">
                        <label class="form-label fw-semibold">Cari Model:</label>
                        <input wire:model.live.debounce.300ms="search" type="text" class="form-control" placeholder="cth: Avanza, CR-V...">
                    </div>
                    <div class="col-12 col-md-5">
                        <label class="form-label fw-semibold">Urutkan:</label>
                        <select wire:model.live="sort" class="form-select">
                            <option value="latest">Terbaru</option>
                            <option value="price_asc">Harga Terendah</option>
                            <option value="price_desc">Harga Tertinggi</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
        <div wire:loading.grid wire:target="search,brand,sort" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @for ($i = 0; $i < 6; $i++)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 skeleton-card" aria-hidden="true">
                    <div class="skeleton-image"></div>
                    <div class="card-body">
                        <div class="skeleton-text" style="width: 80%;"></div>
                        <div class="skeleton-text mt-2" style="width: 50%;"></div>
                        <div class="skeleton-text mt-3" style="width: 100%;"></div>
                        <div class="skeleton-text mt-1" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div wire:loading.remove class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($cars as $car)
                <div class="col" data-aos="fade-in" data-aos-delay="{{ ($loop->iteration % 3) * 100 }}">
                    <x-car-card :car="$car" />
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5 empty-state" data-aos="fade-in">
                        <img src="https://www.svgrepo.com/show/493549/search-car.svg" alt="Mobil tidak ditemukan" width="120" class="mb-3">
                        <h4 class="fw-semibold">Oops! Mobil Tidak Ditemukan</h4>
                        <p class="text-muted">Coba ubah kriteria pencarian atau filter merek Anda.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    
    <div class="mt-5" wire:loading.remove>
        {{ $cars->links() }}
    </div>
</div>