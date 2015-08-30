 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
          <li role="user" class="active"><a href="<?=base_url() . 'admin/user';?>">Daftar</a></li>
          <li role="user"><a href="<?=base_url() . 'admin/user/create';?>">Tambah</a></li>
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
    
    <table id="DaftarUser" class="table table-hover table-striped">
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