<x-Dashboard.head></x-Dashboard.head>
<x-Dashboard.navbar></x-Dashboard.navbar>
<div class="container p-5 mt-5">

    <form action="{{ form.tiga.store }}" method="POST">

        <div class="mb-3">

            <?php
        require_once "../config/database.php";
        $conn = connectDatabase();

        if (isset($_GET['rating'])) {
          $kode = $_GET['rating'];
          $sql = mysqli_query($conn, "SELECT * FROM master_barang WHERE kode_barang = $kode");
          $data = mysqli_fetch_assoc($sql);
        ?>
            <input type="hidden" class="form-control border-success" id="kodeBarang" name="kode_barang"
                value="<?php echo $data['kode_barang']; ?>">
            <?php } else { ?>
            <label for="productName" class="form-label fw-bold">Kode Barang</label>
            <input type="text" class="form-control border-success" id="productName"
                placeholder="Masukkan Kode Barang" value="<?php echo $_SESSION['kode_barang']; ?>" disabled>
            <div class="mb-3">
                <label for="kode_rating" class="form-label fw-bold">Kode Rating</label>
                <input type="text" class="form-control border-success" id="kode_rating"
                    placeholder="Kode_Rating Auto Increment" disabled>
            </div>
            <?php } ?>
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
            <?php if (isset($_GET['rating'])) { ?>
            <button type="submit" name="simpan" value="rating" class="btn btn-success me-2 fw-bold">Save Edit</button>
            <?php } else { ?>
            <button type="submit" name="next" value="tiga" class="btn btn-success me-2 fw-bold">Save /
                Add</button>
            <?php } ?>
            <button type="reset" name="reset" class="btn btn-outline-danger">Back</button>
        </div>
    </form>
</div>
<x-Dashboard.foot></x-Dashboard.foot>
