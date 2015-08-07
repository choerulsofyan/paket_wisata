$( document ).ready(function() {

    $('#DaftarPaketWisata').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/paket_wisata/get",
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
        "ajax": window.location.origin + "/anugrah_tour/paket_wisata_detail/get",
        "columns": [
            { "data": "no" },
            { "data": "judul_wisata" },
            { "data": "hari_ke" },
            { "data": "rute" },
            { "data": "detail" }
        ]
    });

    $('#DaftarUser').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/user/get",
        "columns": [
            { "data": "no" },
            { "data": "nama_lengkap" },
            { "data": "email" },
            { "data": "hak_akses" },
            { "data": "status" },
            { "data": "detail" }
        ]
    });

    $('#DaftarPembayaran').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/pembayaran/get",
        "columns": [
            { "data": "no" },
            { "data": "no_faktur" },
            { "data": "tgl_pembayaran" },
            { "data": "customer_nama" },
            { "data": "total" },
            { "data": "pembayaran" },
            { "data": "angsuran_ke" },
            { "data": "detail" }
        ]
    });

    $('#Customer').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/customer/get",
        "columns": [
            { "data": "no" },
            { "data": "nama" },
            { "data": "tgl_lahir" },
            { "data": "jenis_kelamin" },
            { "data": "no_telp" },
            { "data": "email" },
            { "data": "status" },
            { "data": "detail" }
        ]
    });

    $('#delete').on('click', function () {
        return confirm('Apakah anda yakin akan menghapus?');
    });

    $('#tgl_lahir').datepicker({
        format: 'yyyy/mm/dd'
    });

    $('#tgl_pemesanan').datepicker({
        format: 'yyyy/mm/dd'
    });

    $('#no_faktur').keypress(function(e) {
        if(e.which == 13) {

            var no_faktur = $('#no_faktur').val();

            $.ajax({
              url: window.location.origin + "/anugrah_tour/pembayaran/cek_info_customer/" + no_faktur,
              type: 'GET',
              data: no_faktur,
              dataType: 'json',
              success: function(data) {
                
                if (data.sisa_bayar != 0) {
                    $('#customer_nama').val(data.nama);
                    $('#total').val(data.total);
                    $('#angsuran_ke').val(data.angsuran_ke);
                    $('#sisa_bayar').val(data.sisa_bayar);
                    $('#pemesanan_id').val(data.pemesanan_id);
                    $('#customer_id').val(data.customer_id);
                    $('#pembayaran').focus();
                } else {
                    alert('Data tidak tersedia');
                    $('#customer_nama').val('');
                    $('#total').val('');
                    $('#angsuran_ke').val('');
                    $('#sisa_bayar').val('');
                    $('#pemesanan_id').val('');
                    $('#customer_id').val('');
                }

              },
              error: function(xhr, status, error) {
                console.log('xhr:');
                console.log(xhr);
                console.log('status:');
                console.log(status);
                console.log('error:');
                console.log(error);
              }
            });

            e.preventDefault();
            return false;
        }
    });

    $('#DaftarPemesanan').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/pemesanan/get",
        "columns": [
            { "data": "no" },
            { "data": "nama" },
            { "data": "judul_wisata" },
            { "data": "no_faktur" },
            { "data": "tgl_pemesanan" },
            { "data": "jumlah_orang" },
            { "data": "total" },
            { "data": "detail" }
        ]
    });

    $( "#jml_orang" ).keyup(function() {
        var wisata_id = $('#wisata_id').val();
        var jml_orang = $('#jml_orang').val();

        $.ajax({
          url: window.location.origin + "/anugrah_tour/pemesanan/cek_total_biaya",
          data: {
            "wisata_id" : wisata_id,
            "jml_orang" : jml_orang
          },
          type: 'GET',
          success: function(data) {
            $('#total').val(data);
          },
          error: function(xhr, status, error) {
            console.log('xhr:');
            console.log(xhr);
            console.log('status:');
            console.log(status);
            console.log('error:');
            console.log(error);
          }
        });
    });

});

