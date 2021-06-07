<?php
include "includes/header.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Guru & Karyawan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div class="row" style="padding-bottom: 35px;">
                <div class="col-xl-5 col-md-6">
                    <form method="POST" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input Kode Guru/NIP/Nama Guru">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-md-6">
                    <button type="button" class="float-right ml-8" onclick="tambahGuru()"> Tambah Guru & Karyawan </button>
                </div>
            </div>
            <table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">NIP</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Kode Guru</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">
                            <a href="#?kode=<?php echo $data['id_koleksi']; ?>">
                                <input type="button" class="btn btn-success" value="Edit">
                            </a>
                            <a href="#?kode=<?php echo $data['id_koleksi']; ?>">
                                <input type="button" class="btn btn-danger" value="Hapus">
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center" style="width: 150px;">NIP</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Kode Guru</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    function tambahGuru() {
        location.href = "form_guru.php";
    }
</script>

<?php
include "includes/footer.php";
?>