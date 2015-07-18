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

    $('#DaftarPaketWisataDetail').dataTable({
        "ajax": window.location.origin + "/tour/paket_wisata_detail/get",
        "columns": [
            { "data": "no" },
            { "data": "judul_wisata" },
            { "data": "hari_ke" },
            { "data": "rute" },
            { "data": "detail" }
        ]
    });

    $('#delete').on('click', function () {
        return confirm('Apakah anda yakin akan menghapus?');
    });
});

