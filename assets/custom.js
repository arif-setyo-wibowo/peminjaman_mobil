// Dismiss Alert
setTimeout(function () {
	document.getElementById("autoDismissAlert").style.display = "none";
}, 3000);

// Edit Kategori
function editKategori(id, kategori) {
	$('[href="#tab-tambah-edit"]').tab("show");
	$("#idkategori").val(id);
	$("#kategori").val(kategori);
	$("#proses").val("Update");
}

// Hapus Value Kategori
$("#custom-tab-tambah-edit").on("click", function () {
	$("#idkategori").val("");
	$("#kategori").val("");
	$("#proses").val("Tambah");
});

// Edit Pengguna
function editPengguna(id, nama, username, email, level) {
	$('[href="#tambah-edit"]').tab("show");
	$("#idpengguna").val(id);
	$("#nama").val(nama);
	$("#username").val(username);
	$("#email").val(email);
	$("#level").val(level);
	$("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Password");
	$("#password").removeAttr("required");
	$("#proses").val("Update");
}

// Hapus Value Pengguna
$("#tambah-edit-tab").on("click", function () {
	$("#idpengguna").val("");
	$("#nama").val("");
	$("#username").val("");
	$("#email").val("");
	$("#level").val("User");
	$("#notifPassword").empty();
	$("#password").prop("required", true);
	$("#proses").val("Tambah");
});

// Edit Mobil
function editMobil(
	id,
	merk_mobil,
	nama_mobil,
	idkategori,
	tahun_mobil,
	kapasitas,
	harga_sewa,
	stok,
	no_plat,
	warna,
	no_bpkb
) {
	$('[href="#tambah-edit"]').tab("show");
	$("#idmobil").val(id);
	$("#merk_mobil").val(merk_mobil);
	$("#nama_mobil").val(nama_mobil);
	$("#idkategori").val(idkategori);
	$("#tahun_mobil").val(tahun_mobil);
	$("#kapasitas").val(kapasitas);
	$("#harga_sewa").val(harga_sewa);
	$("#stok").val(stok);
	$("#no_plat").val(no_plat);
	$("#warna").val(warna);
	$("#no_bpkb").val(no_bpkb);
	$("#notifGambar").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
	$("#gambar").removeAttr("required");
	$("#proses").val("Update");
}

$("#tambah-edit-tab").on("click", function () {
	$("#idmobil").val("");
	$("#merk_mobil").val();
	$("#nama_mobil").val("");
	$("#idkategori").val();
	$("#tahun_mobil").val();
	$("#kapasitas").val();
	$("#harga_sewa").val("");
	$("#stok").val();
	$("#no_plat").val("");
	$("#warna").val("");
	$("#no_bpkb").val("");
	$("#notifGambar").empty();
	$("#gambar").prop("required", true);
	$("#proses").val("Tambah");
});
