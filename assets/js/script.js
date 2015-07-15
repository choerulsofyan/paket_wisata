$( document ).ready(function() {

    $('#DaftarPaketWisata').dataTable({
        "ajax": "http://localhost/tour/paket_wisata/get",
        "columns": [
            { "data": "no" },
            { "data": "judul_wisata" },
            { "data": "nama_kategori" },
            { "data": "jumlah_hari" },
            { "data": "harga" }
        ]
    });

});

