
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
    <link rel="icon" type="image/png" href="../../../../../assets/img/logo_tunas.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../../../assets/img/logo_tunas.png">
    <link rel="stylesheet" href="../../../../../assets/css/style2.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <img src="../../../../../assets/img/logo_tunas.png" alt="icon" class="loading-icon">
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
                                <td>{{ $kendaraan }}/{{ number_format($kilometer,0) }} km/@if($transmisi == 2) MT @elseif($transmisi == 1) AT @else - @endif</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="section mt-2 text-center">
            <h4>Pilih paket service</h4>
        </div>
        <div class="section mb-5 p-2">
            <form role="form" id="formdt" method='post' enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- carousel single -->
            <div class="card">
                <div class="card-body">

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="paketservice">Paket Service</label>
                            <select class="form-control custom-select" id="paketservice">
                                <option value="0">-</option>
                                <option value="{{ $kendaraan }}_1_{{ $kilometer }}_{{ $transmisi }}">Gold</option>
                                <option value="{{ $kendaraan }}_2_{{ $kilometer }}_{{ $transmisi }}">Silver</option>
                                <option value="{{ $kendaraan }}_3_{{ $kilometer }}_{{ $transmisi }}">Basic</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            </form>
        </div>
        <div class="carousel-button-footer">
            <div class="row">
                <div class="col-6">
                    <a href="../" class="btn btn-secondary btn-outline-secondary btn-lg btn-block">Kembali</a>
                </div>
                <div class="col-6">
                    <a href="#" class="reservasi btn btn-success btn-lg btn-block" id="submit">Next</a>
                </div>
            </div>
        </div>
        <div class="section mt-2">
            <div class="section-title" id="titlepaket">Detail Paket</div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Qty</th>
                                <th scope="col" class="text-end">Harga</th>
                            </tr>
                        </thead>
                        <tbody id="datachecksheet">
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                        <tbody id="datachecksheet2">
                        </tbody>
                        <tbody id="datachecksheet3">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="section mt-2">
            <div class="section-title" id="titlepaket">Total</div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Total Jasa</th>
                                <td id="totaljasa" class="text-end text-primary">0</td>
                            </tr>
                            <tr>
                                <th>Total Part & Material</th>
                                <td id="totalpartm" class="text-end text-primary">0</td>
                            </tr>
                            <tr>
                                <th>Grand Total</th>
                                <td id="totalall" class="text-end text-primary">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->
    <!-- android style 6 -->
    <div id="notification-6" class="notification-box">
        <div class="notification-dialog android-style bg-secondary">
            <div class="notification-header">
                <div class="in">
                    <img src="../../../../../assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
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
                        Paket Service belum diisi
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * android style 6 -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="../../../../../assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../../../../assets/js/jquery.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="../../../../../assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="../../../../../assets/js/base.js"></script>
    <script>
        $('select').on('change', function() {
            var z = this.value;
            const [kendaraan, paket, km, transmisi] = z.split('_');
            const isilampiran = [];
            const isilampiran2 = [];
            const isilampiran3 = [];
            if(km > 5000 )
            {
                $.ajax({
                    url:"../../../../../showpaket/"+kendaraan+"/"+paket,
                    dataType:"json",
                    success:function(html)
                    {
                        isilampiran.push('<th scope="row">Jasa</th><td>Perawatan Berkala {{ number_format($kilometer,0) }} KM</td><td>-</td><td class="text-end text-primary">{{ number_format($jasa->jasa,0) }}</td>');
                        html.forEach( x => isilampiran.push('<tr><td>Jasa</td><td>' + x.opl + '</td><td>'+x.qty+'</td><td class="text-end text-primary">'+x.hargaformat+'</tr>'))
                        $('#datachecksheet').html(isilampiran);
                    }
                });
                $.ajax({
                    url:"../../../../../sumpaket/"+kendaraan+"/"+paket+"/"+{{ $jasa->jasa }},
                    dataType:"json",
                    async: false,
                    success:function(html)
                    {
                        totaljasa = html.hargasum;
                        $('#totaljasa').html(html.hargaformat);
                    }
                });

                $.ajax({
                    url:"../../../../../showmaterial/"+kendaraan+"/"+paket,
                    dataType:"json",
                    success:function(html)
                    {
                        html.forEach( x => isilampiran2.push('<tr><td>Material</td><td>' + x.material + '</td><td>'+x.qty+'</td><td class="text-end text-primary">'+x.hargaformat+'</tr>'))
                        $('#datachecksheet2').html(isilampiran2);
                    }
                });

                $.ajax({
                    url:"../../../../../showpart/"+kendaraan+"/"+paket+"/"+km+"/"+transmisi,
                    dataType:"json",
                    success:function(html)
                    {
                        html.forEach( x => isilampiran3.push('<tr><td>part</td><td>' + x.part + '</td><td>'+x.qty+'</td><td class="text-end text-primary">'+x.hargaformat+'</tr>'))
                        $('#datachecksheet3').html(isilampiran3);
                    }
                });

                $.ajax({
                    url:"../../../../../sumparmat/"+kendaraan+"/"+paket+"/"+km+"/"+transmisi,
                    async: false,
                    dataType:"json",
                    success:function(html)
                    {
                        totalmaterial = html.hargasum;
                        $('#totalpartm').html(html.hargaformat);
                    }
                });


                var sum = parseInt(totaljasa) + parseInt(totalmaterial);
                $('#totalall').html(parseInt(sum).toLocaleString('en'));

            }
            if(km == 5000)
            {
                    isilampiran.push('<th scope="row">Jasa</th><td>Perawatan Berkala {{ $kilometer }} KM</td><td>-</td><td class="text-end text-primary">Rp {{ number_format($jasa->jasa,0) }}</td>');
                    totaljasa = {{ $jasa->jasa }};
                    $('#totaljasa').html(totaljasa.toLocaleString());
                    $.ajax({
                        url:"../../../../../showpart/"+kendaraan+"/"+paket+"/"+km+"/"+transmisi,
                        dataType:"json",
                        success:function(html)
                        {
                            html.forEach( x => isilampiran3.push('<tr><td>part</td><td>' + x.part + '</td><td>'+x.qty+'</td><td class="text-end text-primary">'+x.hargaformat+'</tr>'))
                            $('#datachecksheet2').html(isilampiran3);
                        }
                    });

                    $.ajax({
                        url:"../../../../../sumpart/"+kendaraan+"/"+paket+"/"+km+"/"+transmisi,
                        async: false,
                        dataType:"json",
                        success:function(html)
                        {
                            totalpart = totalmaterial + html.hargasum;
                        }
                    });
                    var totalmatpart = parseInt(totaljasa) + parseInt(totalpart);
                    $('#totalpartm').html(totalpart.toLocaleString());
                    $('#totalall').html(totalmatpart.toLocaleString());
            }
            $('#datachecksheet').html(isilampiran)
        });
        $(document).on('click', '.reservasi', function(){
            var x = document.getElementById('paketservice').value;
            const [kendaraan, paket, km, transmisi] = x.split('_');
            if(x == 0)
            {
                notification('notification-6', 3000)
            }
            else
            {
                window.location.href = "{{ $transmisi }}/" + paket;
            }
        });
    </script>


</body>

</html>
