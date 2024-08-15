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
    <link rel="icon" type="image/png" href="../../../../../../assets/img/logo_tunas.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../../../../assets/img/logo_tunas.png">
    <link rel="stylesheet" href="../../../../../../assets/css/style2.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <img src="../../../../../../assets/img/logo_tunas.png" alt="icon" class="loading-icon">
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
        <form role="form" id="formdt" method='post' enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="nomorplat" value="{{ $nomorplat }}">
            <input type="hidden" name="nama" value="{{ $nama }}">
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
                                    <td>{{ $kendaraan }}/{{ number_format($kilometer, 0) }} km/@if ($transmisi == 2)
                                            MT
                                        @elseif($transmisi == 1)
                                            AT
                                        @else
                                            -
                                            @endif / @if ($kat == 1)
                                                T-Care
                                            @elseif($kat == 2)
                                                Non T-Care
                                            @else
                                                -
                                            @endif
                                    </td>
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
                <!-- carousel single -->
                <div class="card">
                    <div class="card-body">

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="paketservice">Paket Service</label>
                                <select name="paketservice" class="form-control custom-select" id="paketservice">
                                    <option value="0">-</option>
                                    <option
                                        value="{{ $kendaraan }}_1_{{ $kilometer }}_{{ $transmisi }}_{{ $kat }}">
                                        Gold</option>
                                    <option
                                        value="{{ $kendaraan }}_2_{{ $kilometer }}_{{ $transmisi }}_{{ $kat }}">
                                        Silver</option>
                                    <option
                                        value="{{ $kendaraan }}_3_{{ $kilometer }}_{{ $transmisi }}_{{ $kat }}">
                                        Basic</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-button-footer">
                <div class="row">
                    <div class="col-6">
                        <a href="../../" class="btn btn-secondary btn-outline-secondary btn-lg btn-block">Kembali</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="reservasi btn btn-success btn-lg btn-block" id="submit">Simpan</button>
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
                                    <th scope="col">Harga</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                    <th scope="col" class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody class="datachecksheet">
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                            <tbody class="datachecksheet2">
                            </tbody>
                            <tbody class="datachecksheet3">
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
        </form>
    </div>
    <!-- * App Capsule -->
    <!-- android style 6 -->
    <div id="notification-6" class="notification-box">
        <div class="notification-dialog android-style bg-secondary">
            <div class="notification-header">
                <div class="in">
                    <img src="../../../../../../assets/img/sample/avatar/avatar3.jpg" alt="image"
                        class="imaged w24 rounded">
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

    @php
        if ($kat == 1 && $kilometer <= 60000) {
            $jasa->jasa = 0;
        }
    @endphp
    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="../../../../../../assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="../../../../../../assets/js/jquery.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="../../../../../../assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="../../../../../../assets/js/base.js"></script>
    <script>
        function functionHarga(clicked_id, clicked_value) {
            var z = clicked_id.split('-');
            var qty = document.getElementById('jasaqty-' + z[1]).value;
            var total = clicked_value * qty;
            $('#total-' + z[1]).val(total.toLocaleString('en-US'));
            const inputs = document.getElementsByName('totaljasa[]');
            let totaljasa = 0;
            for (let input of inputs) {
                totaljasa = totaljasa + Number(input.value.replace(/,/g, ''));
            }
            console.log('total jasa :' + totaljasa)
            document.getElementById('totaljasa').textContent = totaljasa.toLocaleString('en-US');

            resetsum();
        }

        function functionQty(clicked_id, clicked_value) {
            var z = clicked_id.split('-');
            var harga = document.getElementById('harga-' + z[1]).value;
            var total = clicked_value * harga;
            $('#total-' + z[1]).val(total.toLocaleString('en-US'));
            const inputs = document.getElementsByName('totaljasa[]');
            let totaljasa = 0;
            for (let input of inputs) {
                totaljasa = totaljasa + Number(input.value.replace(/,/g, ''));
            }
            console.log('total jasa :' + totaljasa)
            document.getElementById('totaljasa').textContent = totaljasa.toLocaleString('en-US');

            resetsum();
        }

        function functionQty2(clicked_id, clicked_value) {
            var z = clicked_id.split('-');
            var harga = document.getElementById('harga2-' + z[1]).value;
            var total = clicked_value * harga;
            $('#totalmaterial-' + z[1]).val(total.toLocaleString('en-US'));

            const inputs1 = document.getElementsByName('totalmaterial[]');
            const inputs2 = document.getElementsByName('totalpart[]');
            let totalmaterialjasa = 0;
            for (let input1 of inputs1) {
                totalmaterialjasa = totalmaterialjasa + Number(input1.value.replace(/,/g, ''));
            }
            for (let input2 of inputs2) {
                totalmaterialjasa = totalmaterialjasa + Number(input2.value.replace(/,/g, ''));
            }
            document.getElementById('totalpartm').textContent = totalmaterialjasa.toLocaleString('en-US');

            resetsum();
        }

        function functionHarga2(clicked_id, clicked_value) {
            var z = clicked_id.split('-');
            var qty = document.getElementById('materialqty-' + z[1]).value;
            var total = clicked_value * qty;
            $('#totalmaterial-' + z[1]).val(total.toLocaleString('en-US'));

            const inputs1 = document.getElementsByName('totalmaterial[]');
            const inputs2 = document.getElementsByName('totalpart[]');
            let totalmaterialjasa = 0;
            for (let input1 of inputs1) {
                totalmaterialjasa = totalmaterialjasa + Number(input1.value.replace(/,/g, ''));
            }
            for (let input2 of inputs2) {
                totalmaterialjasa = totalmaterialjasa + Number(input2.value.replace(/,/g, ''));
            }
            document.getElementById('totalpartm').textContent = totalmaterialjasa.toLocaleString('en-US');

            resetsum();
        }

        function functionQty3(clicked_id, clicked_value) {
            var z = clicked_id.split('-');
            var harga = document.getElementById('harga3-' + z[1]).value;
            var total = clicked_value * harga;
            $('#totalpart-' + z[1]).val(total.toLocaleString('en-US'));

            const inputs1 = document.getElementsByName('totalmaterial[]');
            const inputs2 = document.getElementsByName('totalpart[]');
            let totalmaterialjasa = 0;
            for (let input1 of inputs1) {
                totalmaterialjasa = totalmaterialjasa + Number(input1.value.replace(/,/g, ''));
            }
            for (let input2 of inputs2) {
                totalmaterialjasa = totalmaterialjasa + Number(input2.value.replace(/,/g, ''));
            }
            document.getElementById('totalpartm').textContent = totalmaterialjasa.toLocaleString('en-US');
            console.log(totalmaterialjasa)

            resetsum();
        }

        function functionHarga3(clicked_id, clicked_value) {
            var z = clicked_id.split('-');
            var qty = document.getElementById('partqty-' + z[1]).value;
            var total = clicked_value * qty;
            $('#totalpart-' + z[1]).val(total.toLocaleString('en-US'));

            const inputs1 = document.getElementsByName('totalmaterial[]');
            const inputs2 = document.getElementsByName('totalpart[]');
            let totalmaterialjasa = 0;
            for (let input1 of inputs1) {
                totalmaterialjasa = totalmaterialjasa + Number(input1.value.replace(/,/g, ''));
            }
            for (let input2 of inputs2) {
                totalmaterialjasa = totalmaterialjasa + Number(input2.value.replace(/,/g, ''));
            }
            document.getElementById('totalpartm').textContent = totalmaterialjasa.toLocaleString('en-US');

            resetsum();
        }

        function resetsum() {
            const inputs1 = document.getElementsByName('totaljasa[]');
            const inputs2 = document.getElementsByName('totalmaterial[]');
            const inputs3 = document.getElementsByName('totalpart[]');
            let totaljasa = 0;
            let totalmaterialjasa = 0;

            //generate sum jasa
            for (let input1 of inputs1) {
                totaljasa = totaljasa + Number(input1.value.replace(/,/g, ''));
            }
            document.getElementById('totaljasa').textContent = totaljasa.toLocaleString('en-US');

            //generate sum material
            for (let input2 of inputs2) {
                totalmaterialjasa = totalmaterialjasa + Number(input2.value.replace(/,/g, ''));
            }
            for (let input3 of inputs3) {
                totalmaterialjasa = totalmaterialjasa + Number(input3.value.replace(/,/g, ''));
            }
            document.getElementById('totalpartm').textContent = totalmaterialjasa.toLocaleString('en-US');

            //total all
            total = totaljasa + totalmaterialjasa
            document.getElementById('totalall').textContent = total.toLocaleString('en-US');


        }


        $('select').on('change', function() {
            var z = this.value;
            const [kendaraan, paket, km, transmisi, kat] = z.split('_');
            const isilampiran = [];
            const isilampiran2 = [];
            const isilampiran3 = [];
            if (km > 5000) {
                $.ajax({
                    url: "../../../../../../showpaket/" + kendaraan + "/" + paket,
                    dataType: "json",
                    success: function(response) {
                        number = 1;
                        len = response.length;
                        isilampiran.push(
                            '<tr><th colspan="5">Jasa <button type="button" name="add" id="addd" class="btn btn-primary btn-sm me-1">tambah data</button></th></tr><td scope="row">Jasa</td><td><input type="text" readonly class="form-control-plaintext" value="Perawatan Berkala {{ number_format($kilometer, 0) }} KM" name="opl[]" id="opl-' +
                            number +
                            '"></td><td><input type="text" onInput="functionHarga(this.id,this.value)" id="harga-' +
                            number +
                            '" name="harga[]" value="{{ $jasa->jasa }}"></td><td><input onInput="functionQty(this.id,this.value)" type="text" id="jasaqty-' +
                            number +
                            '" name="jasaqty[]" value="1"></td><td class="text-primary"><input type="text" class="text-primary form-control-plaintext" id="total-' +
                            number +
                            '" name="totaljasa[]" value="{{ number_format($jasa->jasa, 0) }}"></td><td class="text-end">-</td></tr>'
                        );
                        for (var x = 0; x < len; x++) {
                            console.log()
                            number = number + 1;
                            isilampiran.push(
                                '<tr><td>Jasa</td><td><input type="text" readonly class="form-control-plaintext" value="' +
                                response[x].opl +
                                '" name="opl[]" id="opl-' + number +
                                '"></td><td><input type="text" onInput="functionHarga(this.id,this.value)" id="harga-' +
                                number + '" name="harga[]" value="' + response[x]
                                .harga +
                                '"></td><td><input onInput="functionQty(this.id,this.value)" type="text" id="jasaqty-' +
                                number +
                                '" name="jasaqty[]" value="' +
                                response[x].qty +
                                '"></td><td class="text-primary"><input type="text" class="text-primary form-control-plaintext" id="total-' +
                                number + '" name="totaljasa[]" value="' + response[x]
                                .hargaformat + '"></td><td class="text-end">-</td></tr>')
                        }
                        $('.datachecksheet').html(isilampiran);
                        var count = number;
                        // dynamic_field(count);

                        function dynamic_field(number) {
                            html = '<tr>';
                            html +=
                                '<td>Jasa</td>';
                            html +=
                                '<td><input type="text" name="opl[]" placeholder="Detail" id="opl-' +
                                number + '" /></td>';
                            html +=
                                '<td><input type="text" value="0" name="harga[]"" onInput="functionHarga(this.id,this.value)" placeholder="Harga" id="harga-' +
                                number + '" /></td>';
                            html +=
                                '<td><input type="text" value="0" name="jasaqty[]" onInput="functionQty(this.id,this.value)" placeholder="Qty" id="jasaqty-' +
                                number + '" /></td>';
                            html +=
                                '<td class="text-end text-primary"><input type="text" class="text-primary form-control-plaintext" id="total-' +
                                number + '" name="totaljasa[]"></td>';
                            if (number > 1) {
                                html +=
                                    '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                                $('.datachecksheet').append(html);
                                //$(html).append('.bodykomponen');
                            } else {
                                html +=
                                    '<td><button type="button" name="add" id="addd" class="btn btn-success">+ tambah</button></td></tr>';
                                $('.datachecksheet').append(html);
                                //$(html).appendTo('.bodykomponen');
                            }
                        }
                        $(document).on('click', '#addd', function() {
                            count++;
                            dynamic_field(count);
                            dynamic_field_komponen(count);
                        });

                        $(document).on('click', '.remove', function() {
                            count--;
                            $(this).closest("tr").remove();
                            $(this).closest("tr").remove();
                            resetsum();
                        });
                    }
                });
                $.ajax({
                    url: "../../../../../../sumpaket/" + kendaraan + "/" + paket + "/" +
                        {{ $jasa->jasa }},
                    dataType: "json",
                    async: false,
                    success: function(html) {
                        totaljasa = html.hargasum;
                        $('#totaljasa').html(html.hargaformat);
                    }
                });

                $.ajax({
                    url: "../../../../../../showmaterial/" + kendaraan + "/" + paket,
                    dataType: "json",
                    success: function(response) {
                        number2 = 0;
                        len = response.length;
                        isilampiran2.push(
                            '<tr><th colspan="5">Material <button type="button" name="add2" id="addd2" class="btn btn-primary btn-sm me-1">tambah data</button></th></tr>'
                        );
                        for (var x = 0; x < len; x++) {
                            console.log()
                            number2 = number2 + 1;
                            isilampiran2.push(
                                '<tr><td>Material</td><td><input type="text" readonly class="form-control-plaintext" value="' +
                                response[x].material +
                                '" name="material[]" id="material-' + number2 +
                                '"></td><td><input type="text" onInput="functionHarga2(this.id,this.value)" id="harga2-' +
                                number2 + '" name="harga2[]" value="' + response[x]
                                .harga +
                                '"></td><td><input onInput="functionQty2(this.id,this.value)" type="text" id="materialqty-' +
                                number2 +
                                '" name="materialqty[]" value="' +
                                response[x].qty +
                                '"></td><td class="text-primary"><input type="text" class="text-primary form-control-plaintext" id="totalmaterial-' +
                                number2 + '" name="totalmaterial[]" value="' + response[x]
                                .hargaformat + '"></td><td class="text-end">-</td></tr>')
                        }
                        // html.forEach(x => isilampiran2.push('<tr><td>Material</td><td>' + x.material +
                        //     '</td><td>' + x.qty + '</td><td class="text-end text-primary">' + x
                        //     .hargaformat + '</tr>'))
                        $('.datachecksheet2').html(isilampiran2);
                        var count2 = number2;
                        // dynamic_field(count);

                        function dynamic_field2(number2) {
                            console.log('dinamic field berjalan2')
                            html = '<tr>';
                            html +=
                                '<td>Material</td>';
                            html +=
                                '<td><input type="text" name="material[]" placeholder="Detail" id="material-' +
                                number2 + '" /></td>';
                            html +=
                                '<td><input type="text" value="0" name="harga2[]"" onInput="functionHarga2(this.id,this.value)" placeholder="Harga" id="harga2-' +
                                number2 + '" /></td>';
                            html +=
                                '<td><input type="text" value="0" name="materialqty[]" onInput="functionQty2(this.id,this.value)" placeholder="Qty" id="materialqty-' +
                                number2 + '" /></td>';
                            html +=
                                '<td class="text-end text-primary"><input type="text" class="text-primary form-control-plaintext" id="totalmaterial-' +
                                number2 + '" name="totalmaterial[]"></td>';
                            if (number2 > 1) {
                                html +=
                                    '<td><button type="button" name="remove" id="" class="btn btn-danger remove2">Remove</button></td></tr>';
                                $('.datachecksheet2').append(html);
                                //$(html).append('.bodykomponen');
                            } else {
                                html +=
                                    '<td><button type="button" name="add2" id="addd2" class="btn btn-success">+ tambah</button></td></tr>';
                                $('.datachecksheet2').append(html);
                                //$(html).appendTo('.bodykomponen');
                            }
                        }
                        $(document).on('click', '#addd2', function() {
                            count2++;
                            dynamic_field2(count2);
                        });

                        $(document).on('click', '.remove2', function() {
                            count2--;
                            $(this).closest("tr").remove();
                            $(this).closest("tr").remove();
                            resetsum();
                        });
                    }
                });

                $.ajax({
                    url: "../../../../../../showpart/" + kendaraan + "/" + paket + "/" + km + "/" +
                        transmisi + "/" + kat,
                    dataType: "json",
                    success: function(response) {
                        number3 = 0;
                        len = response.length;
                        isilampiran3.push(
                            '<tr><th colspan="5">Part &nbsp; <button type="button" name="add3" id="addd3" class="btn btn-primary btn-sm me-1">tambah data</button></th></tr>'
                        );
                        if (len > 0) {
                            for (var x = 0; x < len; x++) {
                                number3 = number3 + 1;
                                isilampiran3.push(
                                    '<tr><td>Part</td><td><input type="text" readonly class="form-control-plaintext" value="' +
                                    response[x].part +
                                    '" name="part[]" id="part-' + number3 +
                                    '"></td><td><input type="text" onInput="functionHarga3(this.id,this.value)" id="harga3-' +
                                    number3 + '" name="harga3[]" value="' + response[x]
                                    .harga +
                                    '"></td><td><input onInput="functionQty3(this.id,this.value)" type="text" id="partqty-' +
                                    number3 +
                                    '" name="partqty[]" value="' +
                                    response[x].qty +
                                    '"></td><td class="text-primary"><input type="text" class="text-primary form-control-plaintext" id="totalpart-' +
                                    number3 + '" name="totalpart[]" value="' + response[x]
                                    .hargaformat + '"></td><td class="text-end">-</td></tr>')
                            }
                        }
                        $('.datachecksheet3').html(isilampiran3);
                        var count3 = number3;
                        // dynamic_field(count);

                        function dynamic_field3(number3) {
                            console.log('dinamic field berjalan3')
                            html = '<tr>';
                            html +=
                                '<td>Part</td>';
                            html +=
                                '<td><input type="text" name="part[]" placeholder="Detail" id="part-' +
                                number3 + '" /></td>';
                            html +=
                                '<td><input type="text" value="0" name="harga3[]"" onInput="functionHarga3(this.id,this.value)" placeholder="Harga" id="harga3-' +
                                number3 + '" /></td>';
                            html +=
                                '<td><input type="text" value="0" name="partqty[]" onInput="functionQty3(this.id,this.value)" placeholder="Qty" id="partqty-' +
                                number3 + '" /></td>';
                            html +=
                                '<td class="text-end text-primary"><input type="text" class="text-primary form-control-plaintext" id="totalpart-' +
                                number3 + '" name="totalpart[]"></td>';
                            html +=
                                '<td><button type="button" name="remove" id="" class="btn btn-danger remove3">Remove</button></td></tr>';
                            $('.datachecksheet3').append(html);
                        }
                        $(document).on('click', '#addd3', function() {
                            count3++;
                            dynamic_field3(count3);
                        });

                        $(document).on('click', '.remove3', function() {
                            count3--;
                            $(this).closest("tr").remove();
                            $(this).closest("tr").remove();
                            resetsum();
                        });
                    }
                });

                $.ajax({
                    url: "../../../../../../sumparmat/" + kendaraan + "/" + paket + "/" + km + "/" +
                        transmisi + "/" + kat,
                    async: false,
                    dataType: "json",
                    success: function(html) {
                        totalmaterial = html.hargasum;
                        $('#totalpartm').html(html.hargaformat);
                    }
                });


                var sum = parseInt(totaljasa) + parseInt(totalmaterial);
                $('#totalall').html(parseInt(sum).toLocaleString('en'));

            }
            if (km == 5000) {
                isilampiran.push(
                    '<th scope="row">Jasa</th><td>Perawatan Berkala {{ $kilometer }} KM</td><td>-</td><td class="text-end text-primary">Rp {{ number_format($jasa->jasa, 0) }}</td>'
                );
                totaljasa = {{ $jasa->jasa }};
                $('#totaljasa').html(totaljasa.toLocaleString());
                $.ajax({
                    url: "../../../../../../showpart/" + kendaraan + "/" + paket + "/" + km + "/" +
                        transmisi + "/" + kat,
                    dataType: "json",
                    success: function(html) {
                        html.forEach(x => isilampiran3.push('<tr><td>part</td><td>' + x.part +
                            '</td><td>' + x.qty + '</td><td class="text-end text-primary">' + x
                            .hargaformat + '</tr>'))
                        $('#datachecksheet2').html(isilampiran3);
                    }
                });

                $.ajax({
                    url: "../../../../../../sumpart/" + kendaraan + "/" + paket + "/" + km + "/" +
                        transmisi + "/" + kat,
                    async: false,
                    dataType: "json",
                    success: function(html) {
                        totalpart = totalmaterial + html.hargasum;
                    }
                });
                var totalmatpart = parseInt(totaljasa) + parseInt(totalpart);
                $('#totalpartm').html(totalpart.toLocaleString());
                $('#totalall').html(totalmatpart.toLocaleString());
            }
            $('#datachecksheet').html(isilampiran)
        });
        // $(document).on('click', '.reservasi', function() {
        //     var x = document.getElementById('paketservice').value;
        //     const [kendaraan, paket, km, transmisi] = x.split('_');
        //     if (x == 0) {
        //         notification('notification-6', 3000)
        //     } else {
        //         window.location.href = "{{ $kat }}/" + paket;
        //     }
        // });
        $('#formdt').on('submit', function(event) {
            console.log('submit')
            event.preventDefault();
            $.ajax({
                url: "{{ route('simpanreservasi') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                beforeSend: function() {
                    $('#submit').html(
                        '<i disable class="fa fa-spinner fa-spin"></i>').attr(
                        'disabled', true);
                },
                success: function(data) {
                    console.log(data)
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
                        $('#submit').html('Simpan').attr('disabled',
                            false);
                    }
                    if (data.duplicate) {
                        swal.fire({
                            icon: 'warning',
                            title: 'Data gagal disimpan',
                            text: html
                        })
                        $('#submit').html('Simpan').attr('disabled',
                            false);
                    }
                    if (data.alertlampiran) {
                        swal.fire({
                            icon: 'warning',
                            title: 'Data gagal disimpan',
                            text: data.alertlampiran
                        })
                        $('#submit').html('Simpan').attr('disabled',
                            false);
                    }
                    if (data.success) {
                        console.log('sukses')
                        $('#submit').html('Simpan').attr('disabled',
                            false);
                        alert('Data berhasil disimpan');
                        window.location.href = '../../../../../../konfirmasireservasi/{{ $nomorplat }}';

                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    swal.fire({
                        icon: 'error',
                        title: 'Data gagal disimpan',
                        text: errorMessage
                    })
                    $('.money').mask('#.##0', {
                        reverse: true
                    }, {
                        selectOnFocus: true
                    });
                    $('#action_button').html('Simpan').attr('disabled', false);
                }
            })
        });
    </script>


</body>

</html>
