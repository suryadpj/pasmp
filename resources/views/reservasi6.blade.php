
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
    <link rel="icon" type="image/png" href="../assets/img/logo_tunas.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/logo_tunas.png">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="manifest" href="__manifest.json">
    <style>
        @media print {
            body {
                visibility: hidden;
            }
            #section-to-print {
                visibility: visible;
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <img src="../assets/img/logo_tunas.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border">
        <div class="pageTitle">Personal Assisstant Apps</div>
        <div class="right">
            <a href="../homepage" class="headerButton">
                <ion-icon name="home-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="section mt-2" id="section-to-print">
            <div class="section-title">Rekap Pemesanan</div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Tanggal</th>
                                <td>{{ date('d F Y H:i:s') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>{{ $datainput->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nomor Plat</th>
                                <td>{{ $datainput->nomorplat }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kendaraan</th>
                                <td>{{ $datainput->kendaraan }}/{{ number_format($datainput->km,0) }} km/@if($datainput->tranmisi == 2) MT @elseif($datainput->tranmisi == 1) AT @else - @endif / @if($datainput->kategori == 1) T-Care @elseif($datainput->kategori == 2) Non T-Care @else - @endif</td>
                            </tr>
                            <tr>
                                <th scope="row">Paket</th>
                                <td>@if($datainput->paket == 1) Gold @elseif($datainput->paket == 2) Silver @elseif($datainput->paket == 3) Basic @endif</td>
                            </tr>
                            <tr>
                                <th scope="row">Biaya Jasa</th>
                                <td><span>{{ number_format($datainputdetail->totaljasa,0) }}</span><br><code>*hitungan estimasi</code></td>
                            </tr>
                            <tr>
                                <th scope="row">Biaya Material dan part</th>
                                <td><span>{{ number_format($datainputdetail->totalmatpart,0) }}</span><br><code>*hitungan estimasi</code></td>
                            </tr>
                            <tr>
                                <th scope="row">Biaya Total</th>
                                <td><span>{{ number_format($datainputdetail->total,0) }}</span><br><code>*hitungan estimasi</code></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="carousel-button-footer">
            <div class="row">
                <div class="col-6">
                    <a href="javascript:history.back()" class="btn btn-secondary btn-outline-secondary btn-lg btn-block">Kembali</a>
                </div>
                <div class="col-6">
                    <a href="#" class="reservasi btn btn-success btn-lg btn-block" id="submit">Reservasi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->
    <!-- android style 6 -->
    <div id="notification-6" class="notification-box">
        <div class="notification-dialog android-style bg-success">
            <div class="notification-header">
                <div class="in">
                    <img src="../assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
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
                        Pesanan berhasil dicetak
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * android style 6 -->

    @php
        if($datainput->kategori == 1 && $datainput->km <= 60000)
        {
            $jasa->jasa = 0;
        }
    @endphp

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="../assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="../assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="../assets/js/base.js"></script>
    <script>
        const isilampiran = [];
        const isilampiran2 = [];
        const isilampiran3 = [];
        var totaljasa = 0;
        var totalmaterial = 0;
        var totalpart = 0;
        var totalmatpart = 0;
        $(document).on('click', '.reservasi', function(){
                window.print();
                notification('notification-6', 3000)
        });
    </script>


</body>

</html>
