$( document ).ready(function() {
    
    $('#DaftarPaketWisata').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/admin/paket_wisata/get",
        "columns": [
            { "data": "no" },
            { "data": "judul_wisata" },
            { "data": "nama_kategori" },
            { "data": "jumlah_hari" },
            { "data": "tgl_keberangkatan" },
            { "data": "tgl_kembali" },
            { "data": "harga" },
            { "data": "detail" },
            { "data": "status" }
        ]
    });

    $('#DaftarPaketWisataDetail').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/admin/paket_wisata_detail/get",
        "columns": [
            { "data": "no" },
            { "data": "judul_wisata" },
            { "data": "hari_ke" },
            { "data": "rute" },
            { "data": "detail" }
        ]
    });

    $('#DaftarRute').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/admin/paket_wisata_detail/getRute/" + $('#paket_wisata_detail_id').val(),
        "columns": [
            { "data": "no" },
            { "data": "rute" },
            { "data": "hari_ke" },
            { "data": "detail" }
        ]
    });

    $('#DaftarUser').dataTable({
        "ajax": window.location.origin + "/anugrah_tour/admin/user/get",
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
        "ajax": window.location.origin + "/anugrah_tour/admin/pembayaran/get",
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
        "ajax": window.location.origin + "/anugrah_tour/admin/customer/get",
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
              url: window.location.origin + "/anugrah_tour/admin/pembayaran/cek_info_customer/" + no_faktur,
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
        "ajax": window.location.origin + "/anugrah_tour/admin/pemesanan/get",
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

    $("#tgl_keberangkatan").on('keyup change', function() {
        var tgl_keberangkatan = document.getElementById("tgl_keberangkatan").value;
        var jumlah_hari       = document.getElementById("jumlah_hari").value;

        tgl_keberangkatan   = new Date(tgl_keberangkatan);
        hari_keberangkatan  = tgl_keberangkatan.getDate();
        bulan_keberangkatan = tgl_keberangkatan.getMonth();
        tahun_keberangkatan = tgl_keberangkatan.getFullYear();

        hari_keberangkatan = parseInt(hari_keberangkatan);
        jumlah_hari        = parseInt(jumlah_hari);
        hari_kembali       = hari_keberangkatan + jumlah_hari;

        var tgl_kembali = new Date(hari_kembali + "/" + bulan_keberangkatan + "/" + tahun_keberangkatan);

        console.log(tgl_kembali);
    });

    $( "#jml_orang_dewasa" ).on('keyup change', function() {
        var wisata_id = $('#wisata_id').val();
        var jml_orang_dewasa = $('#jml_orang_dewasa').val();
        var jml_orang_anak = $('#jml_orang_anak').val();

        $.ajax({
          url: window.location.origin + "/anugrah_tour/admin/pemesanan/cek_total_biaya",
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
          url: window.location.origin + "/anugrah_tour/admin/pemesanan/cek_total_biaya",
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
          url: window.location.origin + "/anugrah_tour/admin/paket_wisata/get_list_paket_wisata",
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

    $('#gambar').bind('change', function() {

      var file_size = this.files[0].size;
      var file_type = this.files[0].type;

      if (file_size > 5242880) {
        alert("Ukuran gambar terlalu besar");
      }

      if (file_type != null) 
      {

        var allowed_type;

        if (file_type == "image/png") {
            allowed_type = true;
        } else if (file_type == "image/jpeg") {
            allowed_type = true;
        } else if (file_type == "image/gif") {
            allowed_type = true;
        } else {
            allowed_type = false;
        }

        if (allowed_type == false) {
            alert("Type file tidak diperbolehkan");
            $('#gambar').val("");
        }
        
      } else {
        alert("Type file tidak diperbolehkan");
        $('#gambar').val("");
      }

    });

    

});

