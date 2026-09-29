<?php 
include 'conf/koneksi.php';
include 'buka_cook.php';
include 'cek_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI Akademik</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">SISTEM INFORMASI AKADEMIK</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $nm_user; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Manajemen Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admin.php?titel=11Tabel Jurusan">Tabel Jurusan</a>
                            </li>
                            <li>
                                <a href="admin.php?titel=12Tabel Prodi">Tabel Prodi</a>
                            </li>
                            <li>
                                <a href="admin.php?titel=13Master Mahasiswa">Master Mahasiswa</a>
                            </li>
                            <li>
                                <a href="admin.php?titel=14Kurikulum">Kurikulum</a>
                            </li>
                            <li>
                                <a href="admin.php?titel=15Master dosen">Master dosen</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Pemeliharaan Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Jadwal Kuliah</a>
                            </li>
                            <li>
                                <a href="#">Nilai Mahasiswa</a>
                            </li>
                            <li>
                                <a href="#">Aktivitas Mahasiswa<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Aktif Kembali</a>
                                    </li>
                                    <li>
                                        <a href="#">Cuti</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropout</a>
                                    </li>
                                    <li>
                                        <a href="#">Mengundurkan Diri</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Laporan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Statistik Mahasiswa</a>
                            </li>
                            <li>
                                <a href="#">Statistik Dosen</a>
                            </li>
                            <li>
                                <a href="#">Kurikulum</a>
                            </li>
                            <li>
                                <a href="#">Aktivitas Mahasiswa</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Manajemen User <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Create User</a>
                            </li>
                            <li>
                                <a href="#">Ganti Password</a>
                            </li>
                            <li>
                                <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <?php 
            $kode=substr($_GET['titel'], 0,2);
            $titel=substr($_GET['titel'], 2);
             ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $titel; ?></h1>
                </div>
                <div class="col-lg-12">
                    <?php 
                    if ($kode=="11") 
                            $fail="apps/view_jurusan.php";
                    elseif ($kode=="12") 
                            $fail="apps/viiew_prodi.php";
                    elseif ($kode=="13") 
                            $fail="apps/view_mahasiswa.php";
                    elseif ($kode=="14") 
                            $fail="";
                    elseif ($kode=="15") 
                            $fail="";
                    elseif ($kode=="16") 
                            $fail="";

                    echo "<iframe name='I2' width='100%' height='1000' src='$fail' scrolling='yes' border='0' frameborder='0'> Maaf browser anda tidak mendukung InlineFrame coba install browser terbaru</iframe>";  
                     ?>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
