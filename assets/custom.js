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
	gambar,
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
	$("#gambar_lama").val(gambar);
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

// Edit Pinjam
function editPinjam(id, pengguna, idmobil, tglpinjam, jumlah) {
	$('[href="#tambah-edit"]').tab("show");
	$("#idpinjam").val(id);
	$("#idpengguna").val(pengguna);
	$("#tgl_pinjam").val(tglpinjam);
	$("#proses").val("Update");
}

//Menampilkan Stok
function ubahPilihan() {
	var selectMobil = document.getElementById("idmobil");
	var selectedOption = selectMobil.options[selectMobil.selectedIndex];
	var stokMobil = selectedOption.getAttribute("data-stok");

	var selectJumlah = document.getElementById("jumlah");
	selectJumlah.innerHTML = "";

	var defaultOption = document.createElement("option");
	defaultOption.value = "";
	defaultOption.text = "Pilih Jumlah";
	defaultOption.selected = true;
	defaultOption.disabled = true;
	selectJumlah.appendChild(defaultOption);

	for (var i = 1; i <= stokMobil; i++) {
		var option = document.createElement("option");
		option.value = i;
		option.text = i;
		selectJumlah.appendChild(option);
	}
}

// Hapus Value Pinjam
$("#tambah-edit-tab").on("click", function () {
	$("#idpinjam").val();
	$("#idpengguna").val();
	$("#idmobil").val();
	$("#tgl_pinjam").val("");
	$("#proses").val("Tambah");
});
