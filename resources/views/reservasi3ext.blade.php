
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

        <div class="section mt-2 text-center">
            <h2>Haloo, {{ $nama }}</h2>
            <br>
            <h4>Pilih jenis kendaraan anda</h4>
            <input type="text" class="form-control" id="search" placeholder="cari kendaraan" value="{{ $kendaraancari }}">
            <hr>
        </div>
        <div class="section mb-5 p-2">
            <form role="form" id="formdt" method='post' enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- carousel single -->
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list" id="find">
                            @foreach ($kendaraan as $a)
                                <li class="splide__slide">
                                    <div class="card">
                                        <a href="../../../reservasi/{{ $nama }}/{{ $nomorplat }}/{{ $a->nama }}">
                                            <img src="../{{ $a->source }}" class="card-img-top" alt="image">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $a->namashow }}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                    <!-- * carousel single -->
                <div class="section mt-2 mb-2">
                    <a href="../../../reservasi/{{ $nama }}/{{ $nomorplat }}" class="btn btn-primary btn-block btn-lg">Kembali</a>
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
                    <div class="text">Data yang anda submit tidak lengkap</div>
                    <div class="text">
                        Nomor plat kosong
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
            var x = document.getElementById('smscode').value;
            if(x == "")
            {
                notification('notification-6', 3000)
            }
            else
            {
                window.location.href = "reservasi/{{ $nama }}/" + x;
            }
        });
        //setup before functions
        var typingTimer;                //timer identifier
        var doneTypingInterval = 500;  //time in ms, 5 seconds for example
        var $input = $('#search');

        //on keyup, start the countdown
        $input.on('keyup', function () {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        //on keydown, clear the countdown
        $input.on('keydown', function () {
        clearTimeout(typingTimer);
        });

        //user is "finished typing," do something
        function doneTyping () {
            var x = document.getElementById('search').value;
            if(x == "")
            {
                window.location = "../../../reservasi/{{ $nama }}/{{ $nomorplat }}/"+x;
            }
            else
            {
                window.location = "../../../reservasifindcar/{{ $nama }}/{{ $nomorplat }}/"+x;
            }
        }
    </script>


</body>

</html>
