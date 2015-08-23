$( document ).ready(function() {

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    
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

    $('#DaftarRute').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/paket_wisata_detail/getRute/" + $('#paket_wisata_detail_id').val(),
        "columns": [
            { "data": "no" },
            { "data": "rute" },
            { "data": "hari_ke" },
            { "data": "detail" }
        ]
    });

    $('#DaftarUser').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/user/get",
        "columns": [
            { "data": "no" },
            { "data": "nama_lengkap" },
            { "data": "email" },
            { "data": "grup_user" },
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
            { "data": "jumlah_orang_dewasa" },
            { "data": "jumlah_orang_anak" },
            { "data": "total" },
            { "data": "detail" }
        ]
    });

    $( "#jml_orang_dewasa" ).on('keyup change', function() {
        var wisata_id = $('#wisata_id').val();
        var jml_orang_dewasa = $('#jml_orang_dewasa').val();
        var jml_orang_anak = $('#jml_orang_anak').val();

        $.ajax({
          url: window.location.origin + "/anugrah_tour/pemesanan/cek_total_biaya",
          data: {
            "wisata_id" : wisata_id,
            "jml_orang_dewasa" : jml_orang_dewasa,
            "jml_orang_anak" : jml_orang_anak
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

    $( "#jml_orang_anak" ).on('keyup change', function() {
        var wisata_id = $('#wisata_id').val();
        var jml_orang_dewasa = $('#jml_orang_dewasa').val();
        var jml_orang_anak = $('#jml_orang_anak').val();

        $.ajax({
          url: window.location.origin + "/anugrah_tour/pemesanan/cek_total_biaya",
          data: {
            "wisata_id" : wisata_id,
            "jml_orang_dewasa" : jml_orang_dewasa,
            "jml_orang_anak" : jml_orang_anak
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

    $('input[type=radio][name=kategori_wisata]').change(function() {
        var kategori_id = this.value;
        getPaketWisataByKategoriId(kategori_id)
    });

    function getPaketWisataByKategoriId(kategori_id)
    {
        $.ajax({
          url: window.location.origin + "/anugrah_tour/paket_wisata/get_list_paket_wisata",
          data:  {
            "kategori_id" : kategori_id
          },
          type: 'GET',
          dataType: 'json',
          success: function(data, textStatus, jqXHR) {
            var $wisata_id = $("#wisata_id");

            $wisata_id.removeAttr("disabled");
            $wisata_id.empty();
            
            $.each(data, function(i, item) {
              $wisata_id.append($("<option></option>")
                 .attr("value", data[i].id).text(data[i].judul_wisata));
            });

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
    }

});

