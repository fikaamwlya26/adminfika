<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Laundry</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Laundry</h1>
        <form method="post" action="submit_laundry_data.php">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="baru">Baru</option>
                    <option value="lama">Lama</option>
                    <option value="proses">Proses</option>
                    <option value="sudah_diambil">Sudah Diambil</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kode_invoice">Kode Invoice:</label>
                <input type="text" id="kode_invoice" name="kode_invoice" required>
            </div>
            <div class="form-group">
                <label for="pelanggan">Pelanggan:</label>
                <input type="text" id="pelanggan" name="pelanggan" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="batas_waktu">Batas Waktu:</label>
                <input type="date" id="batas_waktu" name="batas_waktu" required>
            </div>
            <div class="form-group">
                <label for="dibayar">Dibayar:</label>
                <select id="dibayar" name="dibayar" required>
                    <option value="belum">Belum</option>
                    <option value="sudah">Sudah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="text" id="total" name="total" required>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>

    
</body>
</html>