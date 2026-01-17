<?php 
require_once '../koneksi.php';
$sqlsintaks = "SELECT * FROM stok";
if(isset($_POST["cari"])){
    $mencari = $_POST["mencari"];
    $sqlsintaks = "SELECT * FROM stok WHERE nama_produk LIKE '%$mencari%' OR warna LIKE '%$mencari%' OR kategori LIKE '%$mencari%' OR harga LIKE '%$mencari%' OR rilis LIKE '%$mencari%'";
}

$eksekusi = mysqli_query($koneksi, $sqlsintaks);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Laptop</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="p-20">
  <div class="flex items-center justify-between">

    <h1 class=" text-3xl font-bold mb-8">Toko Laptop</h1>
    <a href="tambahPage.php">
      <button class="h-full bg-black mt-[-23px] text-white p-2 rounded-xl">Tambah Produk</button>
    </a>
  </div>
  <form action="" method="post">
    <input type="text" name="mencari">
    <button type="submit" name="cari">Cari</button>
  </form>
  <div class="relative overflow-x-auto rounded-xl ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            No
          </th>
          <th scope="col" class="px-6 py-3">
            Nama Produk
          </th>
          <th scope="col" class="px-6 py-3">
            Warna
          </th>
          <th scope="col" class="px-6 py-3">
            Ketegori
          </th>
          <th scope="col" class="px-6 py-3">
            Harga
          </th>
          <th scope="col" class="px-6 py-3">
            Release
          </th>
          <th scope="col" class="px-6 py-3">
            Gambar
          </th>
          <th scope="col" class="px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        <?php while( $datastok = mysqli_fetch_assoc($eksekusi)){ ?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            <?php echo $datastok['id']; ?>
          </th>
          <td class="px-6 py-4">
            <?php echo $datastok['nama_produk']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $datastok['warna']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $datastok['kategori']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $datastok['harga']; ?>
          </td>

          <td class="px-6 py-4">
            <?php echo $datastok['rilis']; ?>
          </td>
          <td>
            <img src="../img/<?php echo $datastok["gambar"];?>" alt="" class="h-15">
          </td>
          <td class=" px-6 py-4">
            <a href="../backend/hapus.php?id=<?php echo $datastok['id']; ?>"
              class="text-red-500 hover:underline">Hapus</a> |
            <a href="../frontend/updatePage.php?id=<?php echo $datastok['id']; ?>"
              class="text-blue-500 hover:underline">Edit</a>
          </td>

        </tr>
        <?php } ?>
      </tbody>

      </tbody>
    </table>
  </div>

</body>

</html>