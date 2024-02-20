// Mengambil elemen-elemen yang dibutuhkan dari DOM
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModal");
var span = document.getElementsByClassName("close")[0];

// Ketika tombol "Open Modal" di-klik, tampilkan modal
btn.onclick = function() {
	modal.style.display = "block";
}

// Ketika tombol close di-klik, sembunyikan modal
span.onclick = function() {
	modal.style.display = "none";
}

// Ketika pengguna meng-klik di luar modal, sembunyikan modal
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}