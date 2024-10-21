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

    <form action="{{ route('store.update.rating', $dataRating->kode_barang) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nilai" class="form-label fw-bold">Nilai</label>
            <select class="form-select border-success" name="nilai" id="nilai" required>
                <option disabled>Nilai 1 - 5</option>
                <option value="1" {{ $dataRating->nilai == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ $dataRating->nilai == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ $dataRating->nilai == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ $dataRating->nilai == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ $dataRating->nilai == 5 ? 'selected' : '' }}>5</option>
            </select>

        </div>

        <div class="d-flex justify-content-end mt-3">
            <button type="submit" name="next" value="tiga" class="btn btn-success me-2 fw-bold">Save</button>
            <button name="reset" class="btn btn-outline-danger">Back</button>
        </div>
    </form>
</div>
<x-Dashboard.foot></x-Dashboard.foot>
