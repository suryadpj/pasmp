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
    <link rel="icon" type="image/png" href="assets/img/logo_tunas.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo_tunas.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/logo_tunas.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Katalog
        </div>
        <div class="right">
            <a href="reservasi" class="headerButton">
                <ion-icon name="bag-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Our Product</div>
            <div class="transactions">
                @foreach ($ourproduct as $a)
                    <!-- item -->
                    <a href="#" class="show item" id="1_{{ $a->id }}">
                        <div class="detail">
                            <img src="{{ $a->source }}" alt="img" class="image-block imaged w48">
                            <div>
                                <strong>{{ $a->judul }}</strong>
                                <p>{{ $a->ringkasan }}</p>
                            </div>
                        </div>
                    </a>
                    <!-- * item -->
                @endforeach
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Service Berkala</div>
            <div class="transactions">
                @foreach ($serviceberkala as $b)
                    <!-- item -->
                    <a href="#" class="show item" id="2_{{ $b->id }}">
                        <div class="detail">
                            <img src="{{ $b->source }}" alt="img" class="image-block imaged w48">
                            <div>
                                <strong>{{ $b->judul }}</strong>
                                <p>{{ $b->ringkasan }}</p>
                            </div>
                        </div>
                    </a>
                    <!-- * item -->
                @endforeach
            </div>
        </div>
        <!-- News -->
        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">Pekerjaan lain</h2>
            </div>

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($pekerjaanlain as $c)
                        <li class="splide__slide">
                            <a href="#" class="show" id="3_{{ $c->id }}">
                                <div class="blog-card">
                                    <img src="{{ $c->source }}" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">{{ $c->judul }}</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>
        <!-- * News -->

        <!-- * Transactions -->

        <div class="section mt-2 mb-2">
            <a href="reservasi" class="btn btn-primary btn-block btn-lg">Reservasi</a>
        </div>
        <!-- Modal Basic -->
        <div class="modal fade modalbox" id="ModalBasic" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judul">Modal title</h5>
                        <a href="#" data-bs-dismiss="modal">Close</a>
                    </div>
                    <div class="modal-body">
                        <p id="gambar"></p>
                        <p id="penjelasan"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Modal Basic -->




    </div>
    <!-- * App Capsule -->



    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
    <script>
        $(document).on('click', '.show', function(){
            var id = $(this).attr('id');
            console.log(id)
            const [segmen, iddata] = id.split('_');
            $.ajax({
                url:"showcatalog/"+segmen+"/"+iddata,
                dataType:"json",
                success:function(html)
                {
                    $('#judul').html(html.judul);
                    if(html.segmen == 1)
                    {
                        $('#gambar').html('<img src="'+html.source+'" alt="image" class="imaged w36">');
                    }else if(html.segmen == 2)
                    {
                        $('#gambar').html('<img src="'+html.source+'" alt="image" class="imaged w36">');
                    }else if(html.segmen == 3)
                    {
                        $('#gambar').html('<img src="'+html.source+'" alt="image" class="imaged img-fluid">');
                    }
                    $('#penjelasan').html(html.penjelasan);
                    $('#ModalBasic').modal('show');
                }
            })
        });
    </script>


</body>

</html>
