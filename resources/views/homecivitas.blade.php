<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> 
    <title>SIKI-Institut Teknologi Del</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css"> 
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="/homecivitas" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="/FormAddKaryaAdmin" aria-expanded="true"><i class="ti-pie-chart"></i><span>Kirim Karya Ilmiah</span></a>
                            </li>
                            <li>
                                <a href="/civitaskaryailmiah" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Koleksi</span></a>
                            </li>
                            <li>
                                <a href="/civitaspenulis" aria-expanded="true"><i class="ti-pie-chart"></i><span>Penulis</span></a>
                            </li>
                            <li>
                                <a href="civitasprodi" aria-expanded="true"><i class="ti-palette"></i><span>Prodi</span></a>
                            </li>
                            <li>
                                <a href="/civitastentang" aria-expanded="true"><i class="ti-slice"></i><span>Tentang</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form class="form-inline my-2 my-lg-0" method="GET" action="/civitaskaryailmiah">
                                <input type="text" name="cari" placeholder="Cari Karya Ilmiah" required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>

                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <?php
                                    $karyailmiah = \DB::select("SELECT * FROM karyailmiah where NOT Status='Requested'");
                                ?>
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>{{count($karyailmiah)}}</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have new notifications <a href="/civitaskaryailmiah">view all</a></span>
                                    <div class="nofity-list">
                                    @foreach($karyailmiah as $ki)
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <a href="/civitaskaryailmiah">
                                                <p>{{ $ki->Judul }}</p>
                                                <span>{{ $ki->Status }}</span>
                                                <span>{{ $ki->updated_at }}</span>
                                                </a>
                                            </div>
                                    @endforeach
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>

            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="homecivitas">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- overview area start -->
                <div class="row">
                <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Karya Ilmiah Populer</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="assets/images/icon/ab.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Yolanda Melani</span>
                                            <h2><a href="blog.html">Sistem Informasi Perpustakaan</a></h2>
                                            <p>Sistem Informasi Perpustakaan Institut Teknologi Del merupakan salah satu sistem informasi yang dapat digunakan...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/icon/2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Angelia Meilysa</span>
                                            <h2><a href="blog.html">Sistem Informasi Kampus (CIS)</a></h2>
                                            <p>Sistem Informasi Kampus (CIS) Institut Teknologi Del merupakan salah satu sistem informasi yang dapat digunakan...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/icon/3.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Mega Yohana</span>
                                            <h2><a href="blog.html">Penerapan Algoritma YOLO dalam Penyiraman Tanaman</a></h2>
                                            <p>Algoritma YOLO merupakan salah satu algoritma Real Object Detection yang sering digunakan dalam mengembangkan ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-2 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <div id="container"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                <?php
                $karyai = \DB::select("SELECT * FROM karyailmiah where Status='Requested'");
                ?>
                @foreach($karyai as $k)
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>{{ $k->Judul }}</h4>
                            <span class="time"><i class="ti-time"></i>{{ $k->created_at }}</span>
                            <span class="time">{{ $k->Status }}</span>
                        </div>
                        <p>{{ $k->Deskripsi }}</p>
                    </div>
                @endforeach
                <?php
                $karyail = \DB::select("SELECT * FROM karyailmiah where NOT Status='Requested'");
                ?>
                @foreach($karyail as $kl)
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>{{ $kl->Judul }}</h4>
                            <span class="time"><i class="ti-time"></i>{{ $kl->updated_at }}</span>
                            <span class="time">{{ $kl->Status }}</span>
                        </div>
                        <p>{{ $kl->Deskripsi }}</p>
                    </div>
                @endforeach
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Kata Kunci Populer'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{ 
            name: 'Sistem',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Laravel',
            y: 11.84
        }, {
            name: 'Del',
            y: 4.67
        }, {
            name: 'Tugas Akhir',
            y: 4.18
        }]
    }]
});

    </script>
   <!-- footer area start-->
   </br>
      <footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #3c8dbc;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us!</h6>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Sistem Informasi Karya Ilmiah Institut Teknologi Del</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p> Sistem Informasi Karya Ilmiah Institut Teknologi Del (SIKI IT Del) merupakan salah satu sistem 
        informasi kampus yang memiliki tujuan untuk melestarikan aset intelektual yang dihasilkan oleh civitas institut serta memastikan aset tersebut dapat diakses dengan mudah.</p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Location</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a>Institut Teknologi Del</a>
        </p>
        <p>
          <a>JL. Sisimangaraja, Sitoluama</a>
        </p>
        <p>
          <a>Laguboti, Toba Samosir</a>
        </p>
        <p>
          <a>Sumatera Utara, Indonesia</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact Information</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a>Kode Pos: 22381</a>
        </p>
        <p>
          <a>Telp : +62632331234</a>
        </p>
        <p>
          <a>Fax  :  +62632331116</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">About</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
           <li><i class="icofont-rounded-right"></i> <strong>Email Us:</strong> <br> info@del.ac.id </li> <br>
        <p>
           <li><i class="icofont-rounded-right"></i> <strong>Learn more about IT Del:</strong><p><a  href="https://www.del.ac.id/?lang=en">Detail</a></p> </li>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> PSI - 04</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>

</html>
