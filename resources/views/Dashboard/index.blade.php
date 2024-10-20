<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<div class="container">
    <div class="row column-gap-3 p-3 ms-3">
        <a class="col-4 mb-4 btn btn-success fw-bold text-nowrap" href="{{ route('form.utama') }}"> + Tambah Produk</a>

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

            </tbody>
        </table>
    </div>
</div>
<x-Dashboard.foot></x-Dashboard.foot>
