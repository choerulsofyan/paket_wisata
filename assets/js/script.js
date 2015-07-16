$( document ).ready(function() {

    $('#DaftarPaketWisata').dataTable({
        "ajax": window.location.origin + "/tour/paket_wisata/get",
        "columns": [
            { "data": "no" },
            { "data": "judul_wisata" },
            { "data": "nama_kategori" },
            { "data": "jumlah_hari" },
            { "data": "harga" },
            { "data": "detail" }
        ]
    });
});

function confirmDelete(id)
{
    if (confirm("Apakah anda yakin akan menghapus?")) {
        location.href= window.location.origin + "/tour/paket_wisata/delete/" + id;
    }
}