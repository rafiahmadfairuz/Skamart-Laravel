<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<form action="{{ route('form.utama.store') }}" method="POST">
    <div class="mb-3">
        <label for="kode" class="form-label fw-bold">Kode Barang</label>
        <input type="text" class="form-control border-success" id="kode" name="kode" >
        @error('kode')
        <span class="text-danger my-1 text-nowrap">
            <i class="bi bi-exclamation-triangle me-2"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="kategori" class="form-label fw-bold">Nama Kategori</label>
        <select class="form-select border-success" name="kategori" id="kategori" >
            <option selected>Nama Kategori</option>
            <option value="Jajanan">Jajanan</option>
            <option value="Minuman">Minuman</option>
            <option value="Bumbu">Bumbu</option>
            <option value="Buah">Buah</option>
            <option value="Sayuran">Sayuran</option>
            <option value="Kebutuhan Harian">Kebutuhan Harian</option>
        </select>
        @error('kategori')
        <span class="text-danger my-1 text-nowrap">
            <i class="bi bi-exclamation-triangle me-2"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label fw-bold">Nama Barang</label>
        <input type="text" class="form-control border-success" name="nama" id="nama" >
        @error('nama')
        <span class="text-danger my-1 text-nowrap">
            <i class="bi bi-exclamation-triangle me-2"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
        <textarea style="max-height: 100px;" name="deskripsi" type="text" class="form-control border-success"
            id="deskripsi" ></textarea>
            @error('deskripsi')
        <span class="text-danger my-1 text-nowrap">
            <i class="bi bi-exclamation-triangle me-2"></i>
            {{ $message }}
        </span>
        @enderror
    </div>


    <div class="mb-3">
        <label for="satuan" class="form-label fw-bold">Satuan</label>
        <select class="form-select border-success" name="satuan" id="satuan" >
            <option selected>Satuan</option>
            <option>Kg</option>
            <option>Pcs</option>
            <option>Pak</option>
            <option>Karton</option>
        </select>
        @error('satuan')
        <span class="text-danger my-1 text-nowrap">
            <i class="bi bi-exclamation-triangle me-2"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="diskon" class="form-label fw-bold">Diskon</label>
        <input type="number" name="diskon" class="form-control border-success" id="diskon" >
        @error('diskon')
        <span class="text-danger my-1 text-nowrap">
            <i class="bi bi-exclamation-triangle me-2"></i>
            {{ $message }}
        </span>
        @enderror
    </div>


    <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-success me-2 fw-bold" name="next" value="satu">Next</button>
        <button type="reset" name="reset" class="btn btn-outline-danger">Cancel</button>
    </div>
</form>
</div>
<x-Dashboard.foot></x-Dashboard.foot>
