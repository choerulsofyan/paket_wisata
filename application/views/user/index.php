 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
          <li role="user" class="active"><a href="<?=base_url() . 'user';?>">Daftar</a></li>
          <li role="user"><a href="<?=base_url() . 'user/create';?>">Tambah</a></li>
        </ul>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
    <br/>
    <h3>
        <?=$title;?>
    </h3>
    <br/>
    
    <table id="DaftarUser">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Grup User</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>

        </table>
    </div>
</div>
<!-- /.row -->