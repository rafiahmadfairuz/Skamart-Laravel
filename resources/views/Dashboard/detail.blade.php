<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<div class="d-flex row justify-content-center  py-3 container-fluid detail ">
    <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column col-10 col-lg-4">
        <div class="carousel-indicators">
            @foreach ($dataGambar as $index => $gambar)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>"
                <?php echo $index === 0 ? 'class="active"' : ''; ?> aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
            @endforeach
        </div>
        <div class="carousel-inner border shadow">
            @foreach ( $dataGambar as $index => $gambar )
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="{{ url('storage/'. $gambar)  }}" class="d-block w-100 gambar zoom"
                    alt="Gambar <?php echo $index + 1; ?>">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        </button>
        <span id="carouselImageNumber" class="border mt-3 py-2 px-5 fw-bold shadow bg-light">Image 1 /
            {{ count($dataGambar) }}</span>
    </div>


    <div class="border shadow col-11 col-lg-5 py-3 px-5 mt-3 mt-lg-0">
        <h2 class="fw-bold text-success text-nowrap py-4 border-bottom">Preview Barang </h2>
        <div class="py-5">
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Kode Barang : </p>
                <p>{{ $dataBarang->kode_barang }}</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Nama Barang : </p>
                <p>{{ $dataBarang->nama_barang }}</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Satuan : </p>
                <p>{{ $dataBarang->satuan }}</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Diskon : </p>
                <p>{{ $dataBarang->diskon }}%</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Varian : </p>
                <p>{{ $dataBarang->gambar->varian }}</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Harga : </p>
                <p>{{ $dataBarang->gambar->harga }}</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Jumlah Stok : </p>
                <p>{{ $dataBarang->gambar->stok }}</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Nama Kategori : </p>
                <p>{{ $dataBarang->kategori->nama_kategori }}</p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Nilai : </p>
                <p>{{ $dataBarang->nilai->nilai }}</p>
            </div>

        </div>

    </div>
</div>

<x-Dashboard.foot></x-Dashboard.foot>
