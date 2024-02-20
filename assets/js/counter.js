$(document).ready(function() {
    // Mengirim permintaan AJAX ke server untuk menambah jumlah visitor
    $.ajax({
        url: "<?php echo site_url('visitor/addVisitor'); ?>",
        type: "GET",
        success: function() {
            // Permintaan berhasil, tidak perlu tindakan lebih lanjut
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });

    // Mengirim permintaan AJAX ke server untuk mendapatkan jumlah visitor
    $.ajax({
        url: "<?php echo site_url('visitor/index'); ?>",
        type: "GET",
        dataType: "html",
        success: function(response) {
            // Menampilkan response (halaman visitor_count.php) di elemen dengan ID "visitor-count"
            $("#visitor-count").html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});