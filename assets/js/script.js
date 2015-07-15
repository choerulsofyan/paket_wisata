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

