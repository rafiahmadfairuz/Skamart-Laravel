<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<div class="d-flex row justify-content-center  py-3 container-fluid detail ">
    <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column col-10 col-lg-4">
        <div class="carousel-indicators">
            <?php foreach ($gambarArray as $index => $gambar): ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>"
                <?php echo $index === 0 ? 'class="active"' : ''; ?> aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner border shadow">
            <?php foreach ($gambarArray as $index => $gambar): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="../asset/uploads/<?php echo $gambar; ?>" class="d-block w-100 gambar zoom"
                    alt="Gambar <?php echo $index + 1; ?>">
            </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        </button>
        <span id="carouselImageNumber" class="border mt-3 py-2 px-5 fw-bold shadow bg-light">Image 1 /
            <?php echo count($gambarArray); ?></span>
    </div>


    <div class="border shadow col-11 col-lg-5 py-3 px-5 mt-3 mt-lg-0">
        <h2 class="fw-bold text-success text-nowrap py-4 border-bottom">Preview Barang </h2>
        <div class="py-5">
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Kode Barang : </p>
                <p><?php echo $data['kode_barang']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Nama Barang : </p>
                <p><?php echo $data['nama_barang']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Satuan : </p>
                <p><?php echo $data['satuan']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Diskon : </p>
                <p><?php echo $data['diskon']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Varian : </p>
                <p><?php echo $data['varian']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Harga : </p>
                <p><?php echo $data['harga']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Jumlah Stok : </p>
                <p><?php echo $data['jumlah_stok']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Nama Kategori : </p>
                <p><?php echo $data['nama_kategori']; ?></p>
            </div>
            <div class="d-flex column-gap-2 align-items-center">
                <p class="fw-bold">Nilai : </p>
                <p><?php echo $data['rating']; ?></p>
            </div>

        </div>

    </div>
</div>

<x-Dashboard.foot></x-Dashboard.foot>
