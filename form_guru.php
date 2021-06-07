<?php
include "includes/header.php";
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Data Guru & Karyawan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="data_guru.php">Home</li>
            <li class="breadcrumb-item active">Form data Guru & Karyawan</li>
        </ol>
        <form action="#" method="POST">
            <div class="form-group row">
                <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIP" placeholder="NIP">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode_guru" class="col-sm-2 col-form-label">Kode Guru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_guru" placeholder="Kode Guru">
                </div>
            </div>
            <div class="form-group row">
                <label for="tp_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tp_lahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tl-lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tl-lahir" name="tl_lahir" placeholder="NIP">
                </div>
            </div>
            <div class="form-group row">
                <label for="j_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="j_kelamin" id="laki-laki" value="Laki - Laki" <?php if(isset($_POST['j_kelamin']) && $_POST['j_kelamin'] == "Laki - Laki") echo "checked"; ?>>
                        <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="j_kelamin" id="perempuan" value="Perempuan" <?php if(isset($_POST['j_kelamin']) && $_POST['j_kelamin'] == "Perempuan") echo "checked";?>>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="h_perJam" class="col-sm-2 col-form-label">Honor Per Jam</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="h_perJam" placeholder="Honor Per Jam">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="h_perJam" placeholder="Username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include "includes/footer.php";
?>