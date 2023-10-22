<!DOCTYPE HTML>
<html>
<head>
    <title>Penjualan dan Laporan Rugi Laba</title>
    <script>
        function cariKombinasiPaket() {
            var barang = [
                { id: 1, harga: 10, stok: 5 },
                { id: 2, harga: 20, stok: 3 },
                { id: 3, harga: 15, stok: 2 },
                { id: 4, harga: 25, stok: 4 }
            ];

            var kombinasiPaket = [];

            // Logika heuristik sederhana: tambahkan barang ke dalam paket jika stok tersedia
            for (var i = 0; i < barang.length; i++) {
                if (barang[i].stok > 0) {
                    kombinasiPaket.push(barang[i]);
                    barang[i].stok--; // Kurangi stok
                }
            }

            // Tampilkan hasil dalam tabel HTML
            var resultTable = document.getElementById("resultTable");
            var resultBody = document.getElementById("resultBody");
            resultBody.innerHTML = "";

            for (var j = 0; j < kombinasiPaket.length; j++) {
                var item = kombinasiPaket[j];
                var row = resultBody.insertRow(j);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);

                cell1.innerHTML = item.id;
                cell2.innerHTML = item.harga;
                cell3.innerHTML = item.stok;
            }
        }

        function hitungLaporanRugiLaba() {
            // Data barang yang terjual dan biaya yang dikeluarkan
            var dataTerjual = [
                { id: 1, harga: 10, qty: 3 },
                { id: 2, harga: 20, qty: 2 },
                { id: 3, harga: 15, qty: 1 },
            ];

            // Hitung total pendapatan
            var totalPendapatan = 0;
            for (var i = 0; i < dataTerjual.length; i++) {
                totalPendapatan += dataTerjual[i].harga * dataTerjual[i].qty;
            }

            // Hitung total biaya
            var totalBiaya = 0;
            var biayaOperasional = 500; // Contoh biaya operasional
            var biayaLainnya = 200; // Contoh biaya lainnya
            totalBiaya = biayaOperasional + biayaLainnya;

            // Hitung laba bersih
            var labaBersih = totalPendapatan - totalBiaya;

            // Update elemen HTML dengan hasil
            document.getElementById("totalPendapatan").textContent = totalPendapatan;
            document.getElementById("totalBiaya").textContent = totalBiaya;
            document.getElementById("labaBersih").textContent = labaBersih;
        }
    </script>
</head>
<body>
    <h1>Penjualan dan Laporan Rugi Laba</h1>

    <!-- Form untuk menambah pelanggan -->
    <div class="container">
        <span style="color:#fff;">Selamat Datang, NamaPelanggan</span>
        <div class="float-right">
            <a href="index.php" class="btn btn-success btn-md" style="margin-right:1pc;"><span class="fa fa-home"></span> Kembali</a>
            <a href="logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a>
        </div>
        <br/><br/><br/>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <form action="proses/crud.php?aksi=tambah" method="POST">
                            <div class="form-group">
                                <label>IdPenjualan </label>
                                <input type="text" value="" class="form-control" name="IdPenjualan">
                            </div>
                            <div class="form-group">
                                <label>NamaPelanggan</label>
                                <input type="text" value="" class="form-control" name="NamaPelanggan">
                            </div>
                            <div class="form-group">
                                <label>NamaBarang</label>
                                <input type="text" value="" class="form-control" name="NamaBarang">
                            </div>
                            <div class="form-group">
                                <label>Qty</label>
                                <input type="number" value="" class="form-control" name="Qty">
                            </div>
                            <div class="form-group">
                                <label>HargaBarang</label>
                                <input type="number" value="" class="form-control" name="HargaBarang">
                            </div>
                            <button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

    <!-- Hasil pencarian kombinasi paket penjualan -->
    <h2>Hasil Kombinasi Paket Penjualan</h2>
    <button onclick="cariKombinasiPaket()">Cari Kombinasi Paket</button>
    <table id="resultTable">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody id="resultBody">
        </tbody>
    </table>

    <!-- Dashboard Laporan Rugi Laba -->
    <h2>Dashboard Laporan Rugi Laba</h2>
    <div id="dashboard">
        <p>Total Pendapatan: <span id="totalPendapatan">0</span></p>
        <p>Total Biaya: <span id="totalBiaya">0</span></p>
        <p>Laba Bersih: <span id="labaBersih">0</span></p>
    </div>

    <button onclick="hitungLaporanRugiLaba()">Hitung Laporan Rugi Laba</button>
</body>
</html>
