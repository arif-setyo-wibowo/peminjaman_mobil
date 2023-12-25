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

// Hapus Value
$("#custom-tab-tambah-edit").on("click", function () {
	$("#idkategori").val("");
	$("#kategori").val("");
	$("#proses").val("Tambah");
});
