$(function () {
  // Mengubah tampilan
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah data mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah data");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah data mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah data");
    // 
    // ketika kita klik ubah akan memanggil method ubah
    $(".modal-body form").attr(
      "action",
      "http://localhost/pendalamanphp-tutor-wpu/mvc/public/mahasiswa/ubah",
    );

    // Mengambil id dari data-id
    const id = $(this).data("id");
    console.log(id);

    // meminta data method getubah di controlers tanpa mengreload halamanya
    $.ajax({
      url: "http://localhost/pendalamanphp-tutor-wpu/mvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      // jika success maka akan memperoleh data dari controller berupa json_encode
      success: function (data) {
        $("id").val(data.id);
        $("#nama").val(data.nama);
        $("#nis").val(data.nis);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
