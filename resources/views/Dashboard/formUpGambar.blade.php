<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<div class="container mt-4">
    @if(session()->has('gagal'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('gagal') }}
      </div>
    @endif
</div>
<div class="d-flex row justify-content-center  py-3 container-fluid detail ">
    <form action="{{ route('store.update.tb.gambar', $dataGambar->kode_barang) }}" method="POST" class="col-md-6 order-1 order-md-0" enctype="multipart/form-data">
         @csrf
        <div class="mb-3">
            <label for="imageInput" class="form-label fw-bold">Gambar Poduk <span class="fw-bold text-danger">(Masukkan
                    6 Gambar)</span></label>
            <input type="file" multiple class="form-control border-success" value="{{ old('gambar') }}" id="imageInput" name="gambar[]"
                accept="image/*" >
        </div>
        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-success me-2 fw-bold">Save</button>
            <button type="reset" name="reset" class="btn btn-outline-danger">Cancel</button>
        </div>
    </form>

    <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column col-10 col-lg-4 mt-5">
        <div class="carousel-indicators" id="carouselIndicators"></div>
        <div class="carousel-inner border shadow" id="carouselInner"></div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <span id="carouselImageNumber" class="border mt-3 py-2 px-5 fw-bold shadow bg-light">Image 1 / 0</span>
    </div>
    <!-- =========================================================================================================================== -->
</div>
<x-Dashboard.foot></x-Dashboard.foot>
