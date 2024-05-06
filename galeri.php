<?php
include 'koneksi.php';
session_start();
if (isset($_POST['submit'])) {
    $post_id = $_POST['post_id'];
    $position = $_POST['position'];
    $status = $_POST['status'];


        $sql = "SELECT `id`, `post_id`, `position`, `status` FROM `galery` WHERE 1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Woops! position Sudah Terdaftar.')</script>";
        } else {
           
            $sql = "INSERT INTO galery (post_id,position,status)VALUES ('post_id','position','status')";            
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Galeri Berhasil di Tambahkan')</script>";
                $post_id = "";
                $position = "";
                $status = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GALERI FOTO</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">GALERI SMK 1 TRIPLE J</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="m_admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>MANAJEMEN ADMIN</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="kategori.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>KATEGORI </span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="post.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>POST</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="galeri.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>GALERI</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 font-weight-bold mb-0 text-gray-800">Galery</h1>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <div class="col-lg-12">
                            <div class="card shadow mb-4">

    <div class="card-body">
    <button type="button" class="btn btn-primary btn-md mb-3" data-toggle="modal" data-target="#post">
    +Tambah Galery
    </button>
    <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Judul galeri</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php
                    $hasil = mysqli_query($conn, "SELECT galery.id AS galery_id, kategori.judul AS kategori_judul, petugas.username, galery.status, 
                    FROM galery
                    INNER JOIN kategori ON posts.kategori_id = kategori.id 
                    INNER JOIN petugas ON posts.petugas_id = petugas.id");

                    $no = 1;
                    while ($row = ($hasil)) :
                    ?>
                    
                    
                <tbody>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['galery.id']?></td>
                    <td><?php echo $row['kategori_judul']?></td>
                    <td><?php echo $row['username']?></td> <!-- asumsi kolom username ada di tabel petugas -->
                    <td><?php echo $row['status']?></td> <!-- asumsi kolom status ada di tabel posts -->
                    <td><?php echo $row['created_at']?></td> <!-- asumsi kolom created_at ada di tabel posts -->
                    
                        
                        <td>
                        <a href="edit_galeri.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-md mx-2 mb-3">
                            <i class="fas fa-edit"></i>
                            </a>
                        <a href="hapus_galeri.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-md mb-3" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                            <i class="fas fa-trash"></i>

                        </td>
                        </tr>
                    </tr>
                    
            </tbody>
            <?php endwhile; ?>
        </table>
            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- The Modal -->
<div class="modal" id="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah foto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form method="post">
      <div class="modal-body">

      <h5 class="m-2 font-weight-bold text-primary">Judul Galery</h5>
      <input type="text" class="form-control bg-light border-1 small"placeholder="Masukan data" name="judul galery" required>

                <?php 
                include 'koneksi.php';
                $sql = mysqli_query($conn, "SELECT * FROM galery") or die (mysqli_error($conn));
                while ($data = mysqli_fetch_array($sql)) {
                    echo '<option value="'.$data['id'].'">'.$data['post_id'].'</option>';
                } 
                ?>
            </select>
            <body>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto[]" multiple>
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
                <label class="m-2 font-weight-bold text-primary">Position</label>
                
                <textarea name="isi" class="form-control" required></textarea>
                    

                <div class="form-group mb-2">
                    <label class="m-2 font-weight-bold text-primary" for="status">status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="">Pilih status</option>
                        <option value="publish">Publish</option>
                        <option value="draft">draft</option>
                    </select>
                </div>

                <button name="submit" id="submit" class="btn btn-primary btn-md mb-3 mt-3">Tambah data</button>
                <a href="post.php" class="btn btn-secondary">
                        <span class="text">Kembali</span>
                    </a>

      </div>
      </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</html>