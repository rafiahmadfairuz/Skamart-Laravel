<x-Customer.head></x-Customer.head>
<x-Customer.navbar></x-Customer.navbar>
<x-Customer.carousel></x-Customer.carousel>
<!-- KATEGORI -->
<div class="kategori container  py-sm-2  d-flex flex-column " id="beranda">
    <h4 class="fw-bold mb-3 ms-0 ms-lg-4">Kategori tersedia</h4>
    <div class="d-flex ">
        <div class="isi-kategori d-flex justify-content-between text-center  flex-fill">
            <div class="mx-3 kotak d-flex flex-column justify-content-center align-items-center rounded-1"
                data-category="Jajanan">
                <div class="kotak-kategori shadow-sm d-flex justify-content-center align-items-center border rounded">
                    <img src="{{ url('storage/icon/download__14_-removebg-preview.png') }}" alt="">
                </div>
                <span class="mt-1 fw-bold">Jajanan</span>
            </div>

            <div class="mx-3 kotak d-flex flex-column justify-content-center align-items-center rounded-1"
                data-category="Minuman">
                <div class="kotak-kategori shadow-sm d-flex justify-content-center align-items-center border rounded">
                    <img src="{{ url('storage/icon/Olatte_drink_Pin_pink_ver__1_-removebg-preview.png') }}" alt="">
                </div>
                <span class="mt-1 fw-bold">Minuman</span>
            </div>
            <div class="mx-3 kotak d-flex flex-column justify-content-center align-items-center rounded-1"
                data-category="Bumbu">
                <div class="kotak-kategori shadow-sm d-flex justify-content-center align-items-center border rounded">
                    <img src="{{ url('storage/icon/download__15_-removebg-preview.png') }}" alt="">
                </div>
                <span class="mt-1 fw-bold">Bumbu</span>
            </div>
            <div class="mx-3 kotak d-flex flex-column justify-content-center align-items-center rounded-1"
                data-category="Sayuran">
                <div class="kotak-kategori shadow-sm d-flex justify-content-center align-items-center border rounded">
                    <img src="{{ url('storage/icon/sayuran icon.png') }}" alt="">
                </div>
                <span class="mt-1 fw-bold">Sayuran</span>
            </div>
            <div class="mx-3 kotak d-flex flex-column justify-content-center align-items-center rounded-1"
                data-category="Buah">
                <div class="kotak-kategori shadow-sm d-flex justify-content-center align-items-center border rounded">
                    <img src="{{ url('storage/icon/buah.png') }}" alt="">
                </div>
                <span class="mt-1 fw-bold">Buah</span>
            </div>
            <div class="mx-3 kotak d-flex flex-column justify-content-center align-items-center rounded-1"
                data-category="ItemHarian">
                <div class="kotak-kategori shadow-sm d-flex justify-content-center align-items-center border rounded">
                    <img src="{{ url('storage/icon/sabun.png') }}" alt="">
                </div>
                <span class="mt-1 fw-bold">Item Harian</span>
            </div>
        </div>
    </div>
</div>
<!-- ============================================ -->
<!-- PROMO -->
<div class="container my-3 my-md-5 d-flex justify-content-center align-items-center" id="promo">
    <div class=" promo d-flex flex-column flex-lg-row justify-content-between py-3 py-md-5 rounded">
        <div class="d-flex flex-column col-12 col-lg-3 px-0 px-lg-5 ms-3 ms-lg-0 ">
            <h1 class="fw-bold mb-2 mb-md-4 display-2 ">Flash Sale</h1>
            <h4 class="fw-bold my-2 d-none d-lg-block">Diskon tiap hari sampai 70%!</h4>
            <p class="d-none d-lg-block">Mau nikmatin Flash Deal? Beli Sekarang Di Skamart</p>
        </div>


        <div class="pr">
            <div class="kotak-promo d-flex justify-content-around ">
                <a href="detailProduct.html" class="text-decoration-none mx-2 card d-flex" id="card-promo">
                    <img loading="lazy" src="asset/img/download (6).jpeg" class="card-img-top align-self-center mt-2"
                        alt="...">
                    <div class="card-body text-nowrap">
                        <span class="card-title fs-5">Chitato</span><br>
                        <span class="border border-success text-success px-2">Jajanan</span>
                        <span class="border border-danger text-success px-2">PROMO</span>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <h5 class="card-text fw-bold my-1">Rp 5.000</h5>
                            <span class="text-secondary">Stok: 30</span>
                        </div>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <span class="text-secondary text-decoration-line-through">Rp 25.000</span>
                            <span class="fw-bold text-success">70%</span>
                        </div>
                        <div class="d-flex align-items-center d-none d-md-block"><i
                                class="bi bi-geo-alt-fill text-success me-2"></i><span>Madura</span></div>
                        <div class="rating d-flex align-items-center">
                            <div class="d-flex  align-items-center">
                                <i class="bi bi-star-fill me-2 text-warning "></i>
                                <span>4.5</span>
                            </div>
                            <div class="vr mx-2"></div>
                            <span class="ulasan">51 (Ulasan)</span>
                        </div>
                    </div>
                </a>
                <a href="detailProduct.html" class="text-decoration-none mx-2 card " id="card-promo">
                    <img loading="lazy" src="asset/img/download (1).jpeg" class="card-img-top align-self-center mt-2"
                        alt="...">
                    <div class="card-body text-nowrap">
                        <span class="card-title fs-5">Gulaku</span><br>
                        <span class="border border-success text-success px-2">Bumbu</span>
                        <span class="border border-danger text-success px-2">PROMO</span>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <h5 class="card-text fw-bold my-1">Rp 5.000</h5>
                            <span class="text-secondary">Stok: 30</span>
                        </div>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <span class="text-secondary text-decoration-line-through">Rp 25.000</span>
                            <span class="fw-bold text-success">70%</span>
                        </div>
                        <div class="d-flex align-items-center d-none d-md-block"><i
                                class="bi bi-geo-alt-fill text-success me-2"></i><span>Madura</span></div>
                        <div class="rating d-flex align-items-center">
                            <div class="d-flex  align-items-center">
                                <i class="bi bi-star-fill me-2 text-warning "></i>
                                <span>4.5</span>
                            </div>
                            <div class="vr mx-2"></div>
                            <span class="ulasan">51 (Ulasan)</span>
                        </div>
                    </div>
                </a>
                <a href="detailProduct.html" class="text-decoration-none mx-2 card " id="card-promo">
                    <img loading="lazy" src="asset/img/download (4).jpeg" class="card-img-top align-self-center mt-2"
                        alt="...">
                    <div class="card-body text-nowrap">
                        <span class="card-title fs-5">Susu Kental Manis</span><br>
                        <span class="border border-success text-success px-2">Minuman</span>
                        <span class="border border-danger text-success px-2">PROMO</span>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <h5 class="card-text fw-bold my-1">Rp 24.000</h5>
                            <span class="text-secondary">Stok: 30</span>
                        </div>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <span class="text-secondary text-decoration-line-through">Rp 25.000</span>
                            <span class="fw-bold text-success">70%</span>
                        </div>
                        <div class="d-flex align-items-center d-none d-md-block"><i
                                class="bi bi-geo-alt-fill text-success me-2"></i><span>Madura</span></div>
                        <div class="rating d-flex align-items-center">
                            <div class="d-flex  align-items-center">
                                <i class="bi bi-star-fill me-2 text-warning "></i>
                                <span>4.5</span>
                            </div>
                            <div class="vr mx-2"></div>
                            <span class="ulasan">51 (Ulasan)</span>
                        </div>
                    </div>
                </a>
                <a href="detailProduct.html" class="text-decoration-none mx-2 card " id="card-promo">
                    <img loading="lazy" src="asset/img/download (4).jpeg" class="card-img-top align-self-center mt-2"
                        alt="...">
                    <div class="card-body text-nowrap">
                        <span class="card-title fs-5">Susu Kental Manis</span><br>
                        <span class="border border-success text-success px-2">Minuman</span>
                        <span class="border border-danger text-success px-2">PROMO</span>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <h5 class="card-text fw-bold my-1">Rp 24.000</h5>
                            <span class="text-secondary">Stok: 30</span>
                        </div>
                        <div class="d-flex align-items-center column-gap-2 text-nowrap">
                            <span class="text-secondary text-decoration-line-through">Rp 25.000</span>
                            <span class="fw-bold text-success">70%</span>
                        </div>
                        <div class="d-flex align-items-center d-none d-md-block"><i
                                class="bi bi-geo-alt-fill text-success me-2"></i><span>Madura</span></div>
                        <div class="rating d-flex align-items-center">
                            <div class="d-flex  align-items-center">
                                <i class="bi bi-star-fill me-2 text-warning "></i>
                                <span>4.5</span>
                            </div>
                            <div class="vr mx-2"></div>
                            <span class="ulasan">51 (Ulasan)</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- ============================================ -->
<!-- DISPLAY PRODUK -->
<div class="container py-5" id="produk">
    <div class="judul-produk  d-flex justify-content-between align-items-center">
        <h4 class="fw-bold ms-0 ms-lg-4 text-center text-nowrap">Temukan Kebutuhan Anda</h4>
        <div class="dropdown">
            <i class="bi bi-funnel fs-3" type="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu dropdown-menu-light border shadow-sm p-3" style="width: 60vw;">
                <div class="w-100 d-flex justify-content-center justify-content-lg-end">
                    <button type="button" class="btn btn-success" id="resetFilter">Reset Filter</button>
                </div>
                <hr class="text-success">
                <li class="mb-3">
                    <label for="priceRange" class="form-label">Range Harga</label>
                    <div class="d-flex align-items-center">
                        <input type="number" name="hargarendah" class="form-control" id="minHarga"
                            placeholder="Min" min="1" max="10000000" step="5000">
                        <hr class="mx-2 w-25">
                        <input type="number" name="hargatinggi" class="form-control" id="maxHarga"
                            placeholder="Max" min="1" max="10000000" step="5000">
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="mb-3">
                    <label for="stockRange" class="form-label">Range Stok</label>
                    <div class="d-flex align-items-center">
                        <input type="range" name="" class="form-range flex-grow-1" id="rangeStok"
                            value="500" min="1" max="500">
                        <span class="ms-2 text-nowrap" id="stokTerpilih">500</span>
                    </div>
                </li>

                <li class="mb-3">
                    <label for="ratingOrder" class="form-label">Urutkan Rating</label>
                    <select id="ratingOrder" name="rating" class="form-select">
                        <option value="">Pilih Urutan Rating</option>
                        <option value="highest">Tertinggi</option>
                        <option value="lowest">Terendah</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5 g-4 " id="displayProduk"
        id="product-container">
        @foreach ($produks as $produk)
            <a href="{{ $produk->kode_barang }}" class='text-decoration-none col card-produk'>
                <div class='card mx-auto'>
                    <img loading='lazy' src="{{ url('storage/' . $produk->gambar->url_gambar) }}"
                        class='card-img-top'>
                    <div class='card-body text-nowrap'>
                        <span class='card-title fs-5'>{{ $produk->nama_barang }}</span><br>
                        <span class='border border-success text-success px-2'>{{ $produk->nama_kategori }}</span>
                        <div class='d-flex align-items-center column-gap-1 text-nowrap'>
                            <h5 class='card-text fw-bold my-1'>Rp {{ $produk->gambar->harga }}</h5>
                        </div>
                        <span class='text-secondary stok'>Stok: {{ $produk->gambar->stok }}</span>
                        <div class='rating d-flex align-items-center'>
                            <div class='d-flex align-items-center'>
                                <i class='bi bi-star-fill me-2 text-warning'></i>
                                <span>{{ $produk->nilai->nilai }}</span>
                            </div>
                            <div class='vr mx-1 mx-md-2'></div>
                            <span class='ulasan'>{{ $produk->gambar->stok }} (Terjual)</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
<!-- ============================================ -->





<x-Customer.tentang></x-Customer.tentang>
<x-Customer.footer></x-Customer.footer>
<x-Customer.foot></x-Customer.foot>
