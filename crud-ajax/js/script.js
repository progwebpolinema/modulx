// Fungsi untuk menampilkan data mahasiswa dari database
function readRecords() {
    $.get("controller/readMhs.php", {}, function (data, status) {
        $("#dataMhs").html(data);
    });
}

$(document).ready(function () {
    readRecords(); // calling function
});