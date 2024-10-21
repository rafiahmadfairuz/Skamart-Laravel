<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<div class="container mt-4">
    @if(session()->has('gagal'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('gagal') }}
      </div>
    @endif
</div>
<div class="container p-5 mt-5">

    <form action="{{ route('form.tiga.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            {{-- <input type="hidden" class="form-control border-success" id="kodeBarang" name="kode"
                value="{{ $kode_barang }}"> --}}
            <label for="productName" class="form-label fw-bold">Kode Barang</label>
            <input type="text" class="form-control border-success" id="productName"
                placeholder="Masukkan Kode Barang" value="{{ $kode_barang }}" name="kode" readonly>
            <div class="mb-3">
                <label for="kode_rating" class="form-label fw-bold">Kode Rating</label>
                <input type="text" class="form-control border-success" id="kode_rating"
                placeholder="Kode_Rating Auto Increment" disabled>
            </div>
        </div>
        <div class="mb-3">
            <label for="nilai" class="form-label fw-bold">Nilai</label>
            <select class="form-select border-success" name="nilai" id="nilai" required>
                <option selected>Nilai 1 - 5</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <button type="submit" name="next" value="tiga" class="btn btn-success me-2 fw-bold">Save / Add</button>
            <button type="reset" name="reset" class="btn btn-outline-danger">Back</button>
        </div>
    </form>
</div>
<x-Dashboard.foot></x-Dashboard.foot>
