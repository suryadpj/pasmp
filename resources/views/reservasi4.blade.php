
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Personal Asisstant Apps</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="../../../assets/img/logo_tunas.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/logo_tunas.png">
    <link rel="stylesheet" href="../../../assets/css/style2.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <img src="../../../assets/img/logo_tunas.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border">
        <div class="pageTitle">Personal Assisstant Apps</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="section mt-2">
            <div class="section-title">Profil</div>
            <div class="card">

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>{{ $nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nomor Plat</th>
                                <td>{{ $nomorplat }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kendaraan</th>
                                <td>{{ $kendaraan }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="section mt-2 text-center">
            <h4>Isi kilometer dan transmisi</h4>
        </div>
        <div class="section mb-5 p-2">
            <form role="form" id="formdt" method='post' enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- carousel single -->
            <div class="card">
                <div class="card-body">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="kilometer"><b>Kilometer</b></label>
                            <select class="form-control custom-select" id="kilometer">
                                <option value="0">-</option>
                                <option value="5000">5.000</option>
                                <option value="10000">10.000</option>
                                <option value="20000">20.000</option>
                                <option value="30000">30.000</option>
                                <option value="40000">40.000</option>
                                <option value="50000">50.000</option>
                                <option value="60000">60.000</option>
                                <option value="70000">70.000</option>
                                <option value="80000">80.000</option>
                                <option value="90000">90.000</option>
                                <option value="100000">100.000</option>
                                <option value="110000">110.000</option>
                                <option value="120000">120.000</option>
                                <option value="130000">130.000</option>
                                <option value="140000">140.000</option>
                                <option value="150000">150.000</option>
                                <option value="160000">160.000</option>
                                <option value="170000">170.000</option>
                                <option value="180000">180.000</option>
                                <option value="190000">190.000</option>
                                <option value="200000">200.000</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="transmisi">Transmisi</label>
                            <select class="form-control custom-select" id="transmisi">
                                <option value="0">-</option>
                                <option value="1">AT</option>
                                <option value="2">MT</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-button-footer">
                <div class="row">
                    <div class="col-6">
                        <a href="./" class="btn btn-secondary btn-outline-secondary btn-lg btn-block">Kembali</a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="reservasi btn btn-success btn-lg btn-block" id="submit">Next</a>
                    </div>
                </div>
            </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->
    <!-- android style 6 -->
    <div id="notification-6" class="notification-box">
        <div class="notification-dialog android-style bg-secondary">
            <div class="notification-header">
                <div class="in">
                    <img src="../../../assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
                    <strong>Pemberitahuan</strong>
                    <span>now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <div class="text">
                        Kilometer belum diisi
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * android style 6 -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="../../../assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/jquery.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="../../../assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="../../../assets/js/base.js"></script>
    <script>
        $(document).on('click', '.reservasi', function(){
            var x = document.getElementById('kilometer').value;
            var y = document.getElementById('transmisi').value;
            if(x == 0)
            {
                notification('notification-6', 3000)
            }
            else
            {
                window.location.href = "{{ $kendaraan }}/" + x + "/" + y;
            }
        });
    </script>


</body>

</html>
