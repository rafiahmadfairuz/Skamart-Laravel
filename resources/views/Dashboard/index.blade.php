<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<div class="container">
    <div class="row column-gap-3 p-3 ms-3">
        <a class="col-4 mb-4 btn btn-success fw-bold text-nowrap" href="{{ route('form.utama') }}"> + Tambah Produk</a>
        @if(session()->has('sukses'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('sukses') }}
          </div>
        @endif
        <table id="tabelData" class="table table-hover table-striped border border-dark table-bordered">
            <thead class="bg-secondary">
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->kode_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->kategori->nama_kategori }}</td>
                    <td>{{ $barang->gambar->harga }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('detail.barang', $barang->kode_barang) }}" class="btn btn-primary rounded"><i class="bi fw-bold  bi-eye"></i></a>
                        <a href="{{ route('update.tb.gambar', $barang->kode_barang) }}" class="btn btn-success rounded"><i class="bi fw-bold  bi-box-arrow-up"></i></a>
                        <form action="{{ route('hapus.barang', $barang->kode_barang) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="button" class="btn btn-danger rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi fw-bold bi-trash3"></i>
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus barang dengan kode {{ $barang->kode_barang }}?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Hapus Barang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <a href="{{ route('update.rating', $barang->kode_barang) }}" class="btn btn-warning rounded"><i class="bi fw-bold text-dark bi-star"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-Dashboard.foot></x-Dashboard.foot>
