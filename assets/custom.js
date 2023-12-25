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
