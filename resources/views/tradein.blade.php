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
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/logo_tunas.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo_tunas.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="manifest" href="__manifest.json">
    <script type="text/javascript">
        (function() {
            var rootScript = 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.1.0/dist/flasher.min.js';
            var FLASHER_FLASH_BAG_PLACE_HOLDER = {};
            var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);

            function mergeOptions(first, second) {
                return {
                    context: merge(first.context || {}, second.context || {}),
                    envelopes: merge(first.envelopes || [], second.envelopes || []),
                    options: merge(first.options || {}, second.options || {}),
                    scripts: merge(first.scripts || [], second.scripts || []),
                    styles: merge(first.styles || [], second.styles || []),
                };
            }

            function merge(first, second) {
                if (Array.isArray(first) && Array.isArray(second)) {
                    return first.concat(second).filter(function(item, index, array) {
                        return array.indexOf(item) === index;
                    });
                }
                return Object.assign({}, first, second);
            }

            function renderOptions(options) {
                if (!window.hasOwnProperty('flasher')) {
                    console.error('Flasher is not loaded');
                    return;
                }
                window.flasher.render(options);
            }

            function render(options) {
                if ('loading' !== document.readyState) {
                    renderOptions(options);
                    return;
                }
                document.addEventListener('DOMContentLoaded', function() {
                    renderOptions(options);
                });
            }
            document.addEventListener('flasher:render', function(event) {
                render(event.detail);
            });
            if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript +
                    '"]')) {
                render(options);
            } else {
                var tag = document.createElement('script');
                tag.setAttribute('src', rootScript);
                tag.setAttribute('type', 'text/javascript');
                tag.onload = function() {
                    render(options);
                };
                document.head.appendChild(tag);
            }
        })();
    </script>
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/logo_tunas.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent">
        <div class="pageTitle">Trade in - Tunas Toyota Mampang</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">
                        <div class="text-center">
                            <img src="assets/img/tradeinimg.jpg" alt="alt" class="imaged img-fluid">
                        </div>
                        <center>
                            <div class="p-3 form-style" style="background-color:white;">
                                <!-- delete class hide -->
                                <center id="main-form" class="detail" id="detail">
                                    <!-- delete class hide -->
                                    <h4 class="py-3">Isi Detail Mobil Anda</h4>
                                    <table width="100%" cellpadding="7">
                                        <tr align="center">
                                            <td><button id="btn-1" type="button"
                                                    class="disable btn btn-link shadowed btn-style btn-frm btn-form-active"
                                                    onclick="OnMenuClick(this)"><b>MERK</b></button></td>
                                            <td><button id="btn-2" type="button"
                                                    class="btn btn-link shadowed btn-style btn-frm btn-form-readonly"
                                                    onclick="OnMenuClick(this)"><b>MODEL</b></button></td>
                                        </tr>
                                        <tr align="center">
                                            <td><button id="btn-3" type="button"
                                                    class="btn btn-link shadowed btn-style btn-frm btn-form-readonly"
                                                    onclick="OnMenuClick(this)"><b>TAHUN</b></button></td>
                                            <td><button id="btn-4" type="button"
                                                    class="btn btn-link shadowed btn-style btn-frm btn-form-readonly"
                                                    onclick="OnMenuClick(this)"><b>VARIAN</b></button></td>
                                        </tr>
                                        <tr align="center">
                                            <td><button id="btn-5" type="button"
                                                    class="btn btn-link shadowed btn-style btn-frm btn-form-readonly"
                                                    onclick="OnMenuClick(this)"><b>TRANSMISI</b></button></td>
                                        </tr>
                                    </table>
                                </center>
                                <div id="rootComponent"></div>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-button-footer">
            <div class="row">
                <div class="col-4">
                    <a href="catalog" class="btn btn-danger btn-outline-secondary btn-lg btn-block">Katalog</a>
                </div>
                <div class="col-4">
                    <a href="reservasi" class="btn btn-success btn-lg btn-block">Reservasi</a>
                </div>
                <div class="col-4">
                    <a href="tradein" class="btn btn-primary btn-lg btn-block">Trade In</a>
                </div>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <!-- part of tradein -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="http://afarkas.github.io/lazysizes/lazysizes.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#isilagi').hide();
            var oTable = $('#myTable').DataTable({
                responsive: true,
            });
            $('.slider').slick({
                lazyLoad: 'ondemand',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 3500,
                dots: true,
                arrows: false,
                pauseOnHover: true
            });
            var temp1 = document.getElementById("btn-1");
            var temp2 = document.getElementById("form-1");
            var str1, str2;
            var selectedCarMerk = null;
            var selectedCarModel = null;
            var selectedCarYear = null;
            var selectedCarVariant = null;
            var selectedCarTransmition = null;
            // $('#rootComponent').load('tradein/models/list', function() {
            $('#rootComponent').load('tradein/merk/list', function() {
                console.log('HAPPY');
            });
        });

        function OnMenuClick(ele) {
            countform = ele.id.split('-')[1] - 1;

            if (countform == 1) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models');
            } else if (countform == 2) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years');
            } else if (countform == 3) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years/' +
                    selectedCarYear + '/variants');
            } else if (countform == 4) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years/' +
                    selectedCarYear + '/variants/' +
                    selectedCarVariant + '/transmisi');
            } else if (countform == 5) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years/' +
                    selectedCarYear + '/variants/' +
                    selectedCarVariant + '/transmitions/' + selectedCarTransmition + '/detail');
            } else {
                $('#rootComponent').load('tradein/merk/list');
            }

            // temp2.classList.add("hide");
            temp1.classList.remove("btn-form-active");
            temp1.classList.add("btn-form-readonly");
            temp1 = ele;
            // temp2 = document.getElementById("form-"+countform);
            temp1.classList.add("btn-form-active");
            // temp2.classList.remove("hide");
            console.log(countform + ' ok');

            // for(x=4;x>countform;x--){
            //     document.getElementById("btn-"+x).disabled = true;
            // }
        }

        function setupHttpHeaders() {
            $.ajaxSetup({
                'headers': {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }

        function OnOptionClick(ele) {
            setupHttpHeaders();

            // data-* is an ID of every car's part
            selectedCarMerk = ele.getAttribute('data-merk');
            selectedCarModel = ele.getAttribute('data-model');
            selectedCarYear = ele.getAttribute('data-year');
            selectedCarVariant = ele.getAttribute('data-variant');
            selectedCarTransmition = ele.getAttribute('data-transmition');

            var countform;
            countform = ele.id.split('-')[1];
            console.log(countform)
            console.log('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years/' +
                    selectedCarYear + '/variants/' +
                    selectedCarVariant + '/transmisi'   )

            //load komponen berdasarkan step/langkah
            if (countform == 1) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models');
                // temp2  = document.getElementById("form-"+countform);
                temp1 = document.getElementById("btn-" + countform);
                // temp2.classList.add("hide");
                temp1.classList.remove("btn-form-active");
                temp1.classList.add("btn-form-readonly");
                var nextcount = countform++;
                temp1 = document.getElementById("btn-" + countform);
                // temp2 = document.getElementById("form-"+countform);
                temp1.classList.remove("btn-form-readonly");
                temp1.classList.add("btn-form-active");
                // temp2.classList.remove("hide");
                temp1.disabled = false;
            } else if (countform == 2) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years');
                // temp2  = document.getElementById("form-"+countform);
                temp1 = document.getElementById("btn-" + countform);
                // temp2.classList.add("hide");
                temp1.classList.remove("btn-form-active");
                temp1.classList.add("btn-form-readonly");
                var nextcount = countform++;
                temp1 = document.getElementById("btn-" + countform);
                // temp2 = document.getElementById("form-"+countform);
                temp1.classList.remove("btn-form-readonly");
                temp1.classList.add("btn-form-active");
                // temp2.classList.remove("hide");
                temp1.disabled = false;
            } else if (countform == 3) {
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years/' +
                    selectedCarYear + '/variants');
                // temp2  = document.getElementById("form-"+countform);
                temp1 = document.getElementById("btn-" + countform);
                // temp2.classList.add("hide");
                temp1.classList.remove("btn-form-active");
                temp1.classList.add("btn-form-readonly");
                var nextcount = countform++;
                temp1 = document.getElementById("btn-" + countform);
                // temp2 = document.getElementById("form-"+countform);
                temp1.classList.remove("btn-form-readonly");
                temp1.classList.add("btn-form-active");
                // temp2.classList.remove("hide");
                temp1.disabled = false;
            } else if (countform == 4) {
                console.log('load 4')
                $('#rootComponent').html();
                $('#rootComponent').load('tradein/merk/' + selectedCarMerk + '/models/' + selectedCarModel + '/years/' +
                    selectedCarYear + '/variants/' +
                    selectedCarVariant + '/transmisi');
                // temp2  = document.getElementById("form-"+countform);
                temp1 = document.getElementById("btn-" + countform);
                // temp2.classList.add("hide");
                temp1.classList.remove("btn-form-active");
                temp1.classList.add("btn-form-readonly");
                var nextcount = countform++;
                temp1 = document.getElementById("btn-" + countform);
                // temp2 = document.getElementById("form-"+countform);
                temp1.classList.remove("btn-form-readonly");
                temp1.classList.add("btn-form-active");
                // temp2.classList.remove("hide");
                temp1.disabled = false;
            } else if (countform == 5) {
                $('#isilagi').show();
                $('.detail').hide();
                var id = $(this).attr('id');
                selectedCarMerk = ele.getAttribute('data-merk');
                selectedCarModel = ele.getAttribute('data-model');
                selectedCarYear = ele.getAttribute('data-year');
                selectedCarVariant = ele.getAttribute('data-variant');
                selectedCarTransmition = ele.getAttribute('data-transmition');
                $.ajax({
                    type: "POST",
                    url: "tradeinsimpan",
                    dataType: 'JSON',
                    data: {
                        'merk': selectedCarMerk,
                        'model': selectedCarModel,
                        'year': selectedCarYear,
                        'variant': selectedCarVariant,
                        'transmition': selectedCarTransmition,
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        var html = '';
                        if (data.errors) {
                            html = '';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += data.errors[count] + ', ';
                            }
                            swal.fire({
                                icon: 'warning',
                                title: 'Data gagal disimpan',
                                text: html
                            })
                            $('#action_button').html('Save changes').attr('disabled', false);
                        }
                        if (data.duplicate) {
                            swal.fire({
                                icon: 'warning',
                                title: 'Data gagal disimpan',
                                text: html
                            })
                            $('#action_button').html('Save changes').attr('disabled', false);
                        }
                        if (data.success) {
                            $('#formtradein')[0].reset();
                            $('#rootComponent').load('tradein/final/' + data.success);
                            // $('#rootComponent').html('<br><b>' + data.success + '</b>');
                            // Swal.fire('Data trade in berhasil disimpan', '', 'success')
                            var idrespon = data.success;
                            console.log(idrespon)
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText
                        swal.fire({
                            icon: 'error',
                            title: 'Data gagal disimpan',
                            text: errorMessage
                        })
                        $('#action_button').html('Save changes').attr('disabled', false);
                    }
                });
            }
        }

        function showDiv() {
            $('.detail').show();
            $('#isilagi').hide();
        }

        $(document).on('click', '.bookingrumah', function() {
            console.log('cek2')
            var idrespon = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: "tradeinspesial",
                dataType: 'JSON',
                data: {
                    'id': idrespon,
                    'location': 1,
                    '_token': '{{ csrf_token() }}',
                },
                success: function(data) {
                    var html = '';
                    if (data.errors) {
                        html = '';
                        for (var count = 0; count < data.errors.length; count++) {
                            html += data.errors[count] + ', ';
                        }
                        swal.fire({
                            icon: 'warning',
                            title: 'Data gagal disimpan',
                            text: html
                        })
                        $('#action_button').html('Save changes').attr('disabled', false);
                    }
                    if (data.duplicate) {
                        swal.fire({
                            icon: 'warning',
                            title: 'Data gagal disimpan',
                            text: html
                        })
                        $('#action_button').html('Save changes').attr('disabled', false);
                    }
                    if (data.success) {
                        // $('#rootComponent').load('tradein/final/'+data.success);
                        // $('#rootComponent').html('<br><b>' + data.success + '</b>');
                        Swal.fire('Data trade in berhasil disimpan', '', 'success')
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    swal.fire({
                        icon: 'error',
                        title: 'Data gagal disimpan',
                        text: errorMessage
                    })
                    $('#action_button').html('Save changes').attr('disabled', false);
                }
            });
        });
        $(document).on('click', '.bookingdealer', function() {
            console.log('cek2')
            var idrespon = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: "tradeinspesial",
                dataType: 'JSON',
                data: {
                    'id': idrespon,
                    'location': 2,
                    '_token': '{{ csrf_token() }}',
                },
                success: function(data) {
                    var html = '';
                    if (data.errors) {
                        html = '';
                        for (var count = 0; count < data.errors.length; count++) {
                            html += data.errors[count] + ', ';
                        }
                        swal.fire({
                            icon: 'warning',
                            title: 'Data gagal disimpan',
                            text: html
                        })
                        $('#action_button').html('Save changes').attr('disabled', false);
                    }
                    if (data.duplicate) {
                        swal.fire({
                            icon: 'warning',
                            title: 'Data gagal disimpan',
                            text: html
                        })
                        $('#action_button').html('Save changes').attr('disabled', false);
                    }
                    if (data.success) {
                        // $('#rootComponent').load('tradein/final/'+data.success);
                        // $('#rootComponent').html('<br><b>' + data.success + '</b>');
                        Swal.fire('Data trade in berhasil disimpan', '', 'success')
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    swal.fire({
                        icon: 'error',
                        title: 'Data gagal disimpan',
                        text: errorMessage
                    })
                    $('#action_button').html('Save changes').attr('disabled', false);
                }
            });
        });
    </script>


</body>

</html>
