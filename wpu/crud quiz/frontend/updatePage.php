<?php 
require_once '../koneksi.php';
$id = $_GET["id"];
$sqlsintaks = "SELECT * FROM stok WHERE id = '$id' ";
$eksekusi = mysqli_query($koneksi, $sqlsintaks);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Update Data</h2>

        <form action="../backend/update.php" method="POST" class="space-y-5">
            <?php  while ( $datastok = mysqli_fetch_assoc($eksekusi)){?>
            <input type="hidden" name="id" value="<?php echo $datastok["id"]; ?>">
            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan nama produk" value="<?php echo $datastok["nama_produk"]; ?>">
            </div>

            <div>
                <label for="warna" class="block text-sm font-medium text-gray-700 mb-1">Warna</label>
                <input type="text" id="warna" name="warna"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan warna" value="<?php echo $datastok["warna"]; ?>">
            </div>

            <div>
                <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <input type="text" id="kategori" name="kategori"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan kategori" value="<?php echo $datastok["kategori"]; ?>">
            </div>

            <div>
                <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                <input type="text" id="harga" name="harga"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan harga" value="<?php echo $datastok["harga"]; ?>">
            </div>
            <div>
                <label for="rilis" class="block text-sm font-medium text-gray-700 mb-1">Tahun Rilis</label>
                <input type="rilis" id="rilis" name="rilis"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan tahun rilis" value="<?php echo $datastok["rilis"]; ?>">
            </div>
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
                Submit
            </button>
            <?php }?>
        </form>
    </div>

</body>

</html>