<!DOCTYPE html>
<html lang="en" translate="no" data-dpr="1" style="font-size: 38.32px;">

<head>

    <title>{{ config('app.name') }}</title>

    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="./ico.png">
    <meta name="google" content="notranslate">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="manifest">
    <link rel="stylesheet" href="{{ asset('assets/css/modules-96f5a6e8.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/page-activity-871556fb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/page-home-0d70abbb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index-08abe1f5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/colorprediction/css/style.css') }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <style>
        .RecordNav__C>div[data-v-4e271e20] {
            width: calc((300% - .50667rem)/3);
            height: 100%;
            background: #e8e7e8;
            border-radius: 0.11333rem;
            font-size: .37333rem;
            color: #333;
            text-align: center;
            overflow: hidden;
        }

        .content {
            background: #f7f8ff00 !important;
        }

        .GameList__C[data-v-484ec2ec] {
            height: 2.7rem;
            width: calc(100% - .69333rem);
            background: #fff;
            box-shadow: 0 .05333rem .10667rem #c5c5da40;
            border-radius: .26667rem;
            position: relative;
            margin: .34667rem auto 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
        }
    </style>

    <script>
        $(document).ready(function() {
            $("#saprebalancetop").load('balance.php');

            setInterval(function() {
                $("#saprebalancetop").load('balance.php');
            }, 2000);




            setInterval(function() {

            }, 2000);







            setInterval(function() {
                if (typeof m == 'undefined') {
                    m = 1;
                }
                document.getElementById("sapregtotal").innerHTML = document.getElementById("sapregin")
                    .value * m;
                document.getElementById("sapregfamount").value = document.getElementById("sapregin").value *
                    m;
                if (typeof n == 'undefined') {
                    n = 1;
                }
                document.getElementById("saprertotal").innerHTML = document.getElementById("saprerin")
                    .value * n;
                document.getElementById("saprerfamount").value = document.getElementById("saprerin").value *
                    n;
                if (typeof o == 'undefined') {
                    o = 1;
                }
                document.getElementById("saprevtotal").innerHTML = document.getElementById("saprevin")
                    .value * o;
                document.getElementById("saprevfamount").value = document.getElementById("saprevin").value *
                    o;

                if (typeof p == 'undefined') {
                    p = 10;
                }
                document.getElementById("sapre0total").innerHTML = document.getElementById("saprein0")
                    .value * p;
                document.getElementById("saprefamount0").value = document.getElementById("saprein0").value *
                    p;

                if (typeof q == 'undefined') {
                    q = 10;
                }
                document.getElementById("sapre1total").innerHTML = document.getElementById("saprein1")
                    .value * q;
                document.getElementById("saprefamount1").value = document.getElementById("saprein1").value *
                    q;

                if (typeof r == 'undefined') {
                    r = 10;
                }
                document.getElementById("sapre2total").innerHTML = document.getElementById("saprein2")
                    .value * r;
                document.getElementById("saprefamount2").value = document.getElementById("saprein2").value *
                    r;

                if (typeof s == 'undefined') {
                    s = 10;
                }
                document.getElementById("sapre3total").innerHTML = document.getElementById("saprein3")
                    .value * s;
                document.getElementById("saprefamount3").value = document.getElementById("saprein3").value *
                    s;

                if (typeof t == 'undefined') {
                    t = 10;
                }
                document.getElementById("sapre4total").innerHTML = document.getElementById("saprein4")
                    .value * t;
                document.getElementById("saprefamount4").value = document.getElementById("saprein4").value *
                    t;

                if (typeof u == 'undefined') {
                    u = 10;
                }
                document.getElementById("sapre5total").innerHTML = document.getElementById("saprein5")
                    .value * u;
                document.getElementById("saprefamount5").value = document.getElementById("saprein5").value *
                    u;

                if (typeof v == 'undefined') {
                    v = 10;
                }
                v
                document.getElementById("sapre6total").innerHTML = document.getElementById("saprein6")
                    .value * v;
                document.getElementById("saprefamount6").value = document.getElementById("saprein6").value *
                    v;

                if (typeof w == 'undefined') {
                    w = 10;
                }
                document.getElementById("sapre7total").innerHTML = document.getElementById("saprein7")
                    .value * w;
                document.getElementById("saprefamount7").value = document.getElementById("saprein7").value *
                    w;

                if (typeof z == 'undefined') {
                    z = 10;
                }
                document.getElementById("sapre8total").innerHTML = document.getElementById("saprein8")
                    .value * z;
                document.getElementById("saprefamount8").value = document.getElementById("saprein8").value *
                    z;

                if (typeof y == 'undefined') {
                    y = 10;
                }
                document.getElementById("sapre9total").innerHTML = document.getElementById("saprein9")
                    .value * y;
                document.getElementById("saprefamount9").value = document.getElementById("saprein9").value *
                    y;
            }, 100);
        })

        function sapresel(e) {
            document.getElementById("sapre69").className = "cu-item";
            document.getElementById("sapre1").className = "cu-item";
            document.getElementById("sapre2").className = "cu-item";
            document.getElementById("sapre3").className = "cu-item";
            document.getElementById("sapre4").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;
            if (x == 69) {
                m = 1;
            }
            if (x == 1) {
                m = 10;
            }
            if (x == 2) {
                m = 100;
            }
            if (x == 3) {
                m = 1000;
            }
            if (x == 4) {
                m = 10000;
            }
        }

        function minus(id) {
            var x = id.value;
            if (x > 1) {
                id.value = x - 1;
            }

        }

        function plus(id) {
            id.value++;
        }

        function sapreselr(e) {
            document.getElementById("sapre59").className = "cu-item";
            document.getElementById("sapre5").className = "cu-item";
            document.getElementById("sapre6").className = "cu-item";
            document.getElementById("sapre7").className = "cu-item";
            document.getElementById("sapre8").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;
            if (x == 59) {
                m = 1;
            }
            if (x == 5) {
                n = 10;
            }
            if (x == 6) {
                n = 100;
            }
            if (x == 7) {
                n = 1000;
            }
            if (x == 8) {
                n = 10000;
            }
        }

        function sapreselv(e) {
            document.getElementById("sapre79").className = "cu-item";
            document.getElementById("sapre9").className = "cu-item";
            document.getElementById("sapre10").className = "cu-item";
            document.getElementById("sapre11").className = "cu-item";
            document.getElementById("sapre12").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;
            if (x == 79) {
                m = 1;
            }
            if (x == 9) {
                o = 10;
            }
            if (x == 10) {
                o = 100;
            }
            if (x == 11) {
                o = 1000;
            }
            if (x == 12) {
                o = 10000;
            }
        }

        function sapresel0(e) {

            document.getElementById("sapre13").className = "cu-item";
            document.getElementById("sapre14").className = "cu-item";
            document.getElementById("sapre15").className = "cu-item";
            document.getElementById("sapre16").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 13) {
                p = 10;
            }
            if (x == 14) {
                p = 100;
            }
            if (x == 15) {
                p = 1000;
            }
            if (x == 16) {
                p = 10000;
            }
        }

        function sapresel1(e) {

            document.getElementById("sapre17").className = "cu-item";
            document.getElementById("sapre18").className = "cu-item";
            document.getElementById("sapre19").className = "cu-item";
            document.getElementById("sapre20").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 17) {
                q = 10;
            }
            if (x == 18) {
                q = 100;
            }
            if (x == 19) {
                q = 1000;
            }
            if (x == 20) {
                q = 10000;
            }
        }

        function sapresel2(e) {

            document.getElementById("sapre21").className = "cu-item";
            document.getElementById("sapre22").className = "cu-item";
            document.getElementById("sapre23").className = "cu-item";
            document.getElementById("sapre24").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 21) {
                r = 10;
            }
            if (x == 22) {
                r = 100;
            }
            if (x == 23) {
                r = 1000;
            }
            if (x == 24) {
                r = 10000;
            }
        }


        function sapresel3(e) {

            document.getElementById("sapre25").className = "cu-item";
            document.getElementById("sapre26").className = "cu-item";
            document.getElementById("sapre27").className = "cu-item";
            document.getElementById("sapre28").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 25) {
                s = 10;
            }
            if (x == 26) {
                s = 100;
            }
            if (x == 27) {
                s = 1000;
            }
            if (x == 28) {
                s = 10000;
            }
        }

        function sapresel4(e) {

            document.getElementById("sapre29").className = "cu-item";
            document.getElementById("sapre30").className = "cu-item";
            document.getElementById("sapre31").className = "cu-item";
            document.getElementById("sapre32").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 29) {
                t = 10;
            }
            if (x == 30) {
                t = 100;
            }
            if (x == 31) {
                t = 1000;
            }
            if (x == 32) {
                t = 10000;
            }
        }

        function sapresel5(e) {

            document.getElementById("sapre33").className = "cu-item";
            document.getElementById("sapre34").className = "cu-item";
            document.getElementById("sapre35").className = "cu-item";
            document.getElementById("sapre36").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 33) {
                u = 10;
            }
            if (x == 34) {
                u = 100;
            }
            if (x == 35) {
                u = 1000;
            }
            if (x == 36) {
                u = 10000;
            }
        }

        function sapresel6(e) {

            document.getElementById("sapre37").className = "cu-item";
            document.getElementById("sapre38").className = "cu-item";
            document.getElementById("sapre39").className = "cu-item";
            document.getElementById("sapre40").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 37) {
                v = 10;
            }
            if (x == 38) {
                v = 100;
            }
            if (x == 39) {
                v = 1000;
            }
            if (x == 40) {
                v = 10000;
            }
        }

        function sapresel7(e) {

            document.getElementById("sapre41").className = "cu-item";
            document.getElementById("sapre42").className = "cu-item";
            document.getElementById("sapre43").className = "cu-item";
            document.getElementById("sapre44").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;

            if (x == 41) {
                w = 10;
            }
            if (x == 42) {
                w = 100;
            }
            if (x == 43) {
                w = 1000;
            }
            if (x == 44) {
                w = 10000;
            }
        }

        function sapresel8(e) {

            document.getElementById("sapre45").className = "cu-item";
            document.getElementById("sapre46").className = "cu-item";
            document.getElementById("sapre47").className = "cu-item";
            document.getElementById("sapre48").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;


            if (x == 45) {
                z = 10;
            }
            if (x == 46) {
                z = 100;
            }
            if (x == 47) {
                z = 1000;
            }
            if (x == 48) {
                z = 10000;
            }
        }

        function sapresel9(e) {

            document.getElementById("sapre49").className = "cu-item";
            document.getElementById("sapre50").className = "cu-item";
            document.getElementById("sapre51").className = "cu-item";
            document.getElementById("sapre52").className = "cu-item";
            document.getElementById("sapre" + e).className = "cu-item text-blue cur";
            var x = e;
            if (x == 49) {
                y = 10;
            }
            if (x == 50) {
                y = 100;
            }
            if (x == 51) {
                y = 1000;
            }
            if (x == 52) {
                y = 10000;
            }
        }



        function red() {
            console.log("red")
            document.getElementById("saprered").className = "cu-modal show";
        }

        function green() {
            document.getElementById("sapregreenbox").className = "cu-modal show";
        }

        function vio() {
            document.getElementById("sapreviobox").className = "cu-modal show";
        }

        function saprenum0() {
            document.getElementById("sapre0box").className = "cu-modal show";
        }

        function saprenum1() {
            document.getElementById("sapre1box").className = "cu-modal show";
        }

        function saprenum2() {
            document.getElementById("sapre2box").className = "cu-modal show";
        }

        function saprenum3() {
            document.getElementById("sapre3box").className = "cu-modal show";
        }

        function saprenum4() {
            document.getElementById("sapre4box").className = "cu-modal show";
        }

        function saprenum5() {
            document.getElementById("sapre5box").className = "cu-modal show";
        }

        function saprenum6() {
            document.getElementById("sapre6box").className = "cu-modal show";
        }

        function saprenum7() {
            document.getElementById("sapre7box").className = "cu-modal show";
        }

        function saprenum8() {
            document.getElementById("sapre8box").className = "cu-modal show";
        }

        function saprenum9() {
            document.getElementById("sapre9box").className = "cu-modal show";
        }

        function saprec0() {
            document.getElementById("sapre0box").className = "cu-modal";
        }

        function saprec1() {
            document.getElementById("sapre1box").className = "cu-modal";
        }

        function saprec2() {
            document.getElementById("sapre2box").className = "cu-modal";
        }

        function saprec3() {
            document.getElementById("sapre3box").className = "cu-modal";
        }

        function saprec4() {
            document.getElementById("sapre4box").className = "cu-modal";
        }

        function saprec5() {
            document.getElementById("sapre5box").className = "cu-modal";
        }

        function saprec6() {
            document.getElementById("sapre6box").className = "cu-modal";
        }

        function saprec7() {
            document.getElementById("sapre7box").className = "cu-modal";
        }

        function saprec8() {
            document.getElementById("sapre8box").className = "cu-modal";
        }

        function saprec9() {
            document.getElementById("sapre9box").className = "cu-modal";
        }


        function gsapreproceed() {



            if (document.getElementById("sapregtotal").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapregform").submit();
            }
        }

        function vsapreproceed() {



            if (document.getElementById("saprevtotal").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("saprevform").submit();
            }
        }


        function rsapreproceed() {



            if (document.getElementById("saprertotal").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("saprerform").submit();
            }
        }




        function sapreproceed0() {



            if (document.getElementById("sapre0total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre0form").submit();
            }
        }


        function sapreproceed1() {



            if (document.getElementById("sapre1total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre1form").submit();
            }
        }

        function sapreproceed2() {



            if (document.getElementById("sapre2total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre2form").submit();
            }
        }


        function sapreproceed3() {



            if (document.getElementById("sapre3total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre3form").submit();
            }
        }

        function sapreproceed4() {



            if (document.getElementById("sapre4total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre4form").submit();
            }
        }

        function sapreproceed5() {



            if (document.getElementById("sapre5total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre5form").submit();
            }
        }

        function sapreproceed6() {



            if (document.getElementById("sapre6total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre6form").submit();
            }
        }

        function sapreproceed7() {



            if (document.getElementById("sapre7total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre7form").submit();
            }
        }

        function sapreproceed8() {



            if (document.getElementById("sapre8total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre8form").submit();
            }
        }

        function sapreproceed9() {



            if (document.getElementById("sapre9total").innerHTML == 0) {

                var x = document.getElementById("saprecopied");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            } else {
                console.log("submit");
                document.getElementById("sapre9form").submit();
            }
        }
    </script>

</head>

<body>
    <div id="app" data-v-app="">`
        <div data-v-f31474c6="" class="WinGo__C" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-4c21fa9e="" data-v-f31474c6=""
                style="height: 0.5rem; z-index: 100;-webkit-box-flex: 0;-webkit-flex: none;">
                <div data-v-4c21fa9e="" class="navbar-fixed wc"
                    style="background: linear-gradient(90deg, rgb(222, 35, 37) 0%, rgb(255, 80, 74) 100%);">
                    <div data-v-4c21fa9e="" class="navbar__content">
                        <div data-v-4c21fa9e="" onclick="window.location.href='{{ route('home') }}'"
                            class="navbar__content-left">
                            <img src="{{ asset('assets/png/back.png') }}" width="12" height="12" />
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-center">
                            <div data-v-4c21fa9e="" class="headLogo"
                                style="background-image: url({{ asset('assets/img/logo/Wlogo.png') }});">
                            </div>
                            <div data-v-4c21fa9e="" class="navbar__content-title"></div>
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-right">
                            <div data-v-f31474c6="" onclick="window.location.href='/keFuMenu#/'"
                                class="WinGo__C-head-more">
                                <div data-v-f31474c6=""></div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-ed6673b8="" data-v-f31474c6="" class="Wallet__C">
                <div data-v-ed6673b8="" class="Wallet__C-balance">
                    <div data-v-ed6673b8="" class="Wallet__C-balance-l1">
                        <div onclick="location.reload()" data-v-ed6673b8="">₹<span
                                id="saprebalancetop">{{ auth()->user()->balance }}</span>
                        </div>
                    </div>
                    <div data-v-ed6673b8="" class="Wallet__C-balance-l2">
                        <div data-v-ed6673b8="">Wallet balance</div>
                    </div>
                    <div data-v-ed6673b8="" class="Wallet__C-balance-l3">
                        <div data-v-ed6673b8="" onclick="location.href='/withdrawal#/'">Withdraw</div>
                        <div data-v-ed6673b8="" onclick="location.href='/recharge#/'">Deposit</div>
                    </div>
                </div>
            </div>
            <div data-v-b4633b52="" data-v-f31474c6="" class="noticeBar__container">
                <svg data-v-b4633b52="" width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_589_37747)">
                        <path
                            d="M15.9993 4V28C11.3327 28 7.86502 21.8927 7.86502 21.8927H3.99935C3.26297 21.8927 2.66602 21.2958 2.66602 20.5594V11.3405C2.66602 10.6041 3.26297 10.0072 3.99935 10.0072H7.86502C7.86502 10.0072 11.3327 4 15.9993 4Z"
                            fill="url(#paint0_linear_589_37747)"></path>
                        <path
                            d="M21.334 10C21.7495 10.371 22.1261 10.7865 22.4567 11.2392C23.4265 12.5669 24.0007 14.2149 24.0007 16C24.0007 17.7697 23.4363 19.4045 22.4819 20.7262C22.1452 21.1923 21.7601 21.6195 21.334 22"
                            stroke="url(#paint1_linear_589_37747)" stroke-width="1.8" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path
                            d="M22.8242 27.4571C26.7227 25.1302 29.3336 20.87 29.3336 16C29.3336 11.2057 26.8031 7.00234 23.005 4.65271"
                            stroke="url(#paint2_linear_589_37747)" stroke-width="1.8" stroke-linecap="round"></path>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_589_37747" x1="9.33268" y1="4" x2="9.33268"
                            y2="28" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF7C7C"></stop>
                            <stop offset="0.74876" stop-color="#F54545"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_589_37747" x1="22.6673" y1="10" x2="22.6673"
                            y2="22" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF7C7C"></stop>
                            <stop offset="0.74876" stop-color="#F54545"></stop>
                        </linearGradient>
                        <linearGradient id="paint2_linear_589_37747" x1="26.0789" y1="4.65271" x2="26.0789"
                            y2="27.4571" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF7C7C"></stop>
                            <stop offset="0.74876" stop-color="#F54545"></stop>
                        </linearGradient>
                        <clipPath id="clip0_589_37747">
                            <rect width="32" height="32" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <div data-v-b4633b52="" class="noticeBar__container-body">
                    <div data-v-b4633b52="" class="noticeBar__container-body-text">
                        {{ $Setting->welcome_node }}
                    </div>
                </div>
                <button data-v-b4633b52="">
                    <svg data-v-b4633b52="" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_589_37755)">
                            <path d="M24 0H0V24H24V0Z" fill="white" fill-opacity="0.01"></path>
                            <path
                                d="M12 22C16.1173 22 19.4999 18.7371 19.4999 14.5491C19.4999 13.5209 19.4476 12.4187 18.8778 10.7058C18.3079 8.9929 18.1931 8.7718 17.5905 7.71395C17.333 9.8727 15.9555 10.7724 15.6055 11.0413C15.6055 10.7615 14.7722 7.66795 13.5088 5.81695C12.2685 4 10.5817 2.80796 9.59265 2C9.59265 3.53489 9.16095 5.81695 8.5427 6.9797C7.92445 8.14245 7.80835 8.1848 7.0361 9.0501C6.2639 9.9154 5.90945 10.1826 5.2637 11.2325C4.61798 12.2825 4.5 13.6809 4.5 14.7091C4.5 18.8971 7.88265 22 12 22Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_589_37755">
                                <rect width="24" height="24" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg> Detail
                </button>
            </div>
            <div data-v-78027f36=""
                style="width: 100%;height: 4.375rem;padding: 0 0.3rem;margin-bottom: 0.375rem;position: relative;z-index: 1;"
                class="bonus-box">
                <div style="width: 100%; height: 100%; background: url({{ asset('assets/png/UBanner.png') }}) no-repeat 50%; border-radius: 0.36667rem; background-size: cover;"
                    data-v-78027f36="" class="bonus-bg" style="">
                    <div data-v-78027f36=""
                        style="font-family: MulticoloreFont; color: #d37116; font-size: .75rem; line-height: .5rem; position: absolute; width: 100%; text-align: center; font-weight: 600; top: 0.60rem; left: 50%; -webkit-transform: translateX(-50%); transform: translateX(-50%);"
                        class="inner">
                        <span
                            style="font-family: MulticoloreFont; color: #d37116; font-size: .75rem; line-height: .5rem; position: absolute; width: 100%; text-align: center; font-weight: 600; top: 0.60rem; left: 50%; -webkit-transform: translateX(-50%); transform: translateX(-50%);"
                            data-v-78027f36="">₹
                            {{ auth()->user()->balance + auth()->user()->deposit + auth()->user()->bonus }}</span>
                    </div>
                </div>
            </div>

            @yield('content')

            <uni-view data-v-6d17f23c="" data-v-91f724d0="" id="rule" class="cu-modal">
                <div role="dialog" tabindex="0" class="van-popup van-popup--round van-popup--center"
                    style="z-index: 2003;">
                    <div data-v-a7a14dc2="" class="TimeLeft__C-PreSale">
                        <div data-v-a7a14dc2="" class="TimeLeft__C-PreSale-head">How to play</div>
                        <div data-v-a7a14dc2="" class="TimeLeft__C-PreSale-body">
                            <div data-v-a7a14dc2="">
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        1 minutes 1 issue, 45 seconds to order, 15 seconds waiting for the draw. It
                                        opens all day. The total number of trade is 1440 issues.</font>
                                    <br>
                                </p>
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        If you spend 100 to trade, after deducting 2 service fee, your contract amount
                                        is 98:</font>
                                </p>
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        1.&nbsp;</font><span
                                        style="font-family: Arial, &quot;Microsoft YaHei&quot;, , &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Select</span>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        &nbsp;green: if the result shows 1,3,7,9 you will get (98*2) 196;If the result
                                        shows 5, you will get (98*1.5) 147</font>
                                </p>
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        2.&nbsp;</font><span
                                        style="font-family: Arial, &quot;Microsoft YaHei&quot;,  &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Select</span>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        &nbsp;red:&nbsp; &nbsp;if the result shows 2,4,6,8 you will get (98*2) 196;If
                                        the result shows 0, you will get (98*1.5) 147</font>
                                </p>
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        3.&nbsp;</font><span
                                        style="font-family: Arial, &quot;Microsoft YaHei&quot;,  &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Select</span>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        &nbsp;violet:if the result shows 0 or 5, you will get (98*4.5) 441</font>
                                </p>
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        4. Select number:if the result is the same as the number you selected, you will
                                        get (98*9) 882&nbsp;</font>
                                </p>
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        5. Select big: if the result shows 5,6,7,8,9 you will get (98 * 2) 196</font>
                                </p>
                                <p>
                                    <font face="Arial, Microsoft YaHei,  Malgun Gothic, Meiryo, sans-serif">
                                        6. Select small: if the result shows 0,1,2,3,4 you will get (98 * 2) 196</font>
                                </p>
                            </div>
                        </div>
                        <div data-v-a7a14dc2="" class="TimeLeft__C-PreSale-foot">
                            <div id="ruleclose" data-v-a7a14dc2="" class="TimeLeft__C-PreSale-foot-btn">Close</div>
                        </div>
                    </div>
                </div>
            </uni-view>

        </div>
    </div>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapregreenbox" class="cu-modal">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-green"
                style="background:linear-gradient(90deg,#3faa70 0%,#47ba7c 100%);
                height: 2.53333rem;
                position: relative;
                padding-top: 0.4rem;">
                <uni-view data-v-1a01b218="" class="content"
                    style="height: 0.58667rem; 
                    font-weight: 700; 
                    font-size: .48rem; 
                    text-align: center; 
                    color: #fff;">Win
                    Go 3Min
                    <div data-v-15f0cefa=""
                        style="width: 7.46667rem; 
                        height: 0.66667rem; 
                        margin: 0.21333rem auto 0; 
                        background: #fff; 
                        border-radius: 0.13333rem; 
                        text-align: center; 
                        font-weight: 500; 
                        color:#000; 
                        font-size: .34667rem;"
                        class="Betting__Popup-head-selectName">
                        <span data-v-15f0cefa="">Select</span>
                        <span data-v-15f0cefa="">Green</span>
                    </div>
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218="">
                        <span>Contract Money</span>
                    </uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="69" id="sapre69" onclick="sapresel(69)"
                                    class="cu-item text-blue cur">1
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="0" id="sapre1" onclick="sapresel(1)"
                                    class="cu-item">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre2" onclick="sapresel(2)"
                                    class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre3" onclick="sapresel(3)"
                                    class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre4" onclick="sapresel(4)"
                                    class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218="">
                        <span>Number</span>
                    </uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox" style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(sapregin)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef="" style="display: none;">
                                </div>
                                <input maxlength="140" step="0.000000000000000001" id="sapregin" value="1"
                                    enterkeyhint="done" autocomplete="off" type="number" class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(sapregin)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>



                <form id="sapregform" method="post" action="{{ route('set.colorBet') }}">
                    @csrf
                    <input type="hidden" id="sapreper" name="period"
                        value="
                    @if (Route::currentRouteName() == 'win1') {{ renderGameId1() }}
                     @elseif(Route::currentRouteName() == 'win3')
                     {{ renderGameId3() }}
                     @elseif(Route::currentRouteName() == 'win5')
                     {{ renderGameId5() }} @endif
                     ">

                    <input type="hidden" name="game"
                        value=" @if (Route::currentRouteName() == 'win1') win1
                     @elseif(Route::currentRouteName() == 'win3')
                     win3
                     @elseif(Route::currentRouteName() == 'win5')
                     win5 @endif">
                    <input type="hidden" name="ans" value="green">
                    <input type="hidden" type="text" id="sapregfamount" name="amount" value="10">
                </form>
                <uni-text data-v-1a01b218="" class="sm margin-left">
                    <span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left">
                    <span>PRE-SALE RULE</span>
                </uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button style="color: #9d7d7d;" id="sapreclose">CLOSE
                    </uni-button>
                    <uni-button style="color:#40ad72;" onclick="gsapreproceed()">
                        Total amount ₹<span id="sapregtotal">1</span></span>.00</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="saprered" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-red"
                style="background:linear-gradient(90deg,#fd565c 0%,#fd565c 100%);height: 2.53333rem;position: relative;padding-top: 0.4rem;">
                <uni-view data-v-1a01b218="" class="content"
                    style="height: 0.58667rem;font-weight: 700;font-size: .48rem;text-align: center;color: #fff;"
                    style="font-weight: bold;">Win Go 3Min<div data-v-15f0cefa=""
                        style="width: 7.46667rem; 
                        height: 0.66667rem; 
                        margin: 0.21333rem auto 0; 
                        background: #fff; 
                        border-radius: 0.13333rem; 
                        text-align: center; 
                        font-weight: 500; 
                        color:#000; 
                        font-size: .34667rem;"
                        class="Betting__Popup-head-selectName"><span data-v-15f0cefa="">Select</span><span
                            data-v-15f0cefa="">Red</span></div>
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="59" id="sapre59" onclick="sapreselr(59)"
                                    class="cu-item text-blue cur">1
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="0" id="sapre5" onclick="sapreselr(5)"
                                    class="cu-item">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre6" onclick="sapreselr(6)"
                                    class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre7" onclick="sapreselr(7)"
                                    class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre8" onclick="sapreselr(8)"
                                    class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox" style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprerin)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef="" style="display: none;">
                                </div><input maxlength="140" step="0.000000000000000001" id="saprerin"
                                    value="1" enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprerin)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="saprerform" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="saprerper" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="red">
                    <input type="hidden" type="text" id="saprerfamount" name="amount" value="10">
                </form>
                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button style="background: #25253c;color: #7d7d9d;" data-v-1a01b218="" id="sapreclose3"
                        class="cu-btn text-gray border">CLOSE
                    </uni-button>
                    <uni-button style="background-color: #fd565c;color:#fff;" data-v-1a01b218=""
                        onclick="rsapreproceed()" class="cu-btn text-blue border margin-left">
                        Total amount ₹<span id="saprertotal">1</span></span>.00</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapreviobox" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218=""
                style="background:linear-gradient(90deg,#b658fe 0%,#b658fe 100%);height: 2.53333rem;position: relative;padding-top: 0.4rem;"
                class="cu-bar justify-end bg-purple">
                <uni-view data-v-1a01b218="" class="content"
                    style="height: 0.58667rem;font-weight: 700;font-size: .48rem;text-align: center;color: #fff;"
                    style="font-weight: bold;">Win Go 3Min<div data-v-15f0cefa=""
                        style="width: 7.46667rem;
                        height: 0.66667rem;
                        margin: 0.21333rem auto 0;
                        background: #fff;
                        border-radius: 0.13333rem;
                        text-align: center;
                        font-weight: 500;
                        color:#000;
                        font-size: .34667rem;"
                        class="Betting__Popup-head-selectName"><span data-v-15f0cefa="">Select</span><span
                            data-v-15f0cefa="">Violet</span></div>
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="79" id="sapre79" onclick="sapreselv(79)"
                                    class="cu-item text-blue cur">1
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="0" id="sapre9" onclick="sapreselv(9)"
                                    class="cu-item">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre10" onclick="sapreselv(10)"
                                    class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre11" onclick="sapreselv(11)"
                                    class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre12" onclick="sapreselv(12)"
                                    class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox" style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprevin)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef="" style="display: none;">
                                </div><input maxlength="140" step="0.000000000000000001" id="saprevin"
                                    value="1" enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprevin)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="saprevform" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="saprevper" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="violet">
                    <input type="hidden" type="text" id="saprevfamount" name="amount" value="10">
                </form>
                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button style="background: #25253c;color: #7d7d9d;" data-v-1a01b218="" id="sapreclose1"
                        class="cu-btn text-gray border">CLOSE
                    </uni-button>
                    <uni-button style="background-color: #b658fe;color:#fff;" data-v-1a01b218=""
                        onclick="vsapreproceed()" class="cu-btn text-blue border margin-left">
                        Total amount ₹<span id="saprevtotal">1</span></span>.00</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre0box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;"> Select
                    0
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre13" onclick="sapresel0(13)"
                                    class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre14" onclick="sapresel0(14)"
                                    class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre15" onclick="sapresel0(15)"
                                    class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre16" onclick="sapresel0(16)"
                                    class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox" style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein0)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef="" style="display: none;">
                                </div><input maxlength="140" step="0.000000000000000001" id="saprein0"
                                    value="1" enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein0)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="sapre0form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper0" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="0">
                    <input type="hidden" type="text" id="saprefamount0" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span id="sapre0total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec0()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed0()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre1box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 1
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre17" onclick="sapresel1(17)"
                                    class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre18" onclick="sapresel1(18)"
                                    class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre19" onclick="sapresel1(19)"
                                    class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre20" onclick="sapresel1(20)"
                                    class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox" style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein1)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef="" style="display: none;">
                                </div><input maxlength="140" step="0.000000000000000001" id="saprein1"
                                    value="1" enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein1)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="sapre1form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper1" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="1">
                    <input type="hidden" type="text" id="saprefamount1" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span id="sapre1total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec1()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed1()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre2box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 2
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre21" onclick="sapresel2(21)"
                                    class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre22" onclick="sapresel2(22)"
                                    class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre23" onclick="sapresel2(23)"
                                    class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre24" onclick="sapresel2(24)"
                                    class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox" style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein2)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef="" style="display: none;">
                                </div><input maxlength="140" step="0.000000000000000001" id="saprein2"
                                    value="1" enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein2)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="sapre2form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper2" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="2">
                    <input type="hidden" type="text" id="saprefamount2" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span id="sapre2total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec2()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed2()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre3box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 3
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre25" onclick="sapresel3(25)"
                                    class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre26" onclick="sapresel3(26)"
                                    class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre27" onclick="sapresel3(27)"
                                    class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre28" onclick="sapresel3(28)"
                                    class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox" style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein3)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef="" style="display: none;">
                                </div><input maxlength="140" step="0.000000000000000001" id="saprein3"
                                    value="1" enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein3)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="sapre3form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper3" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="3">
                    <input type="hidden" type="text" id="saprefamount3" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span id="sapre3total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec3()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed3()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre4box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">Select 4
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre29"
                                    onclick="sapresel4(29)" class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre30"
                                    onclick="sapresel4(30)" class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre31"
                                    onclick="sapresel4(31)" class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre32"
                                    onclick="sapresel4(32)" class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                        style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein4)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef=""
                                    style="display: none;"></div><input maxlength="140"
                                    step="0.000000000000000001" id="saprein4" value="1"
                                    enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein4)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text"><span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="sapre4form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper4" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="4">
                    <input type="hidden" type="text" id="saprefamount4" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span
                                id="sapre4total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left"><span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec4()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed4()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre5box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">
                    Select 5
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre33"
                                    onclick="sapresel5(33)" class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre34"
                                    onclick="sapresel5(34)" class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre35"
                                    onclick="sapresel5(35)" class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre36"
                                    onclick="sapresel5(36)" class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                        style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein5)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef=""
                                    style="display: none;"></div><input maxlength="140"
                                    step="0.000000000000000001" id="saprein5" value="1"
                                    enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein5)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>
                <form id="sapre5form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper5" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="5">
                    <input type="hidden" type="text" id="saprefamount5" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span
                                id="sapre5total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left">
                    <span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec5()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed5()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre6box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">
                    Select 6
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre37"
                                    onclick="sapresel6(37)" class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre38"
                                    onclick="sapresel6(38)" class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre39"
                                    onclick="sapresel6(39)" class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre40"
                                    onclick="sapresel6(40)" class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                        style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein6)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef=""
                                    style="display: none;"></div><input maxlength="140"
                                    step="0.000000000000000001" id="saprein6" value="1"
                                    enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein6)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>


                <form id="sapre6form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper6" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="6">
                    <input type="hidden" type="text" id="saprefamount6" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span
                                id="sapre6total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left">
                    <span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec6()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed6()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre7box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">
                    Select 7
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre41"
                                    onclick="sapresel7(41)" class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre42"
                                    onclick="sapresel7(42)" class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre43"
                                    onclick="sapresel7(43)" class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre44"
                                    onclick="sapresel7(44)" class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                        style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein7)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef=""
                                    style="display: none;"></div><input maxlength="140"
                                    step="0.000000000000000001" id="saprein7" value="1"
                                    enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein7)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>

                {{-- formUpdate --}}
                <form id="sapre7form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper7" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="7">
                    <input type="hidden" type="text" id="saprefamount7" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span
                                id="sapre7total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left">
                    <span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec7()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed7()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre8box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">
                    Select 8
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre45"
                                    onclick="sapresel8(45)" class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre46"
                                    onclick="sapresel8(46)" class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre47"
                                    onclick="sapresel8(47)" class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre48"
                                    onclick="sapresel8(48)" class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218=""><span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                        style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein8)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef=""
                                    style="display: none;"></div><input maxlength="140"
                                    step="0.000000000000000001" id="saprein8" value="1"
                                    enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein8)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>

                {{-- formUpdate --}}
                <form id="sapre8form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper8" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="8">
                    <input type="hidden" type="text" id="saprefamount8" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span
                                id="sapre8total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left">
                    <span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec8()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed8()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

    <uni-view data-v-1a01b218="" data-v-91f724d0="" id="sapre9box" class="cu-modal ">
        <uni-view data-v-1a01b218="" class="cu-dialog bg-white">
            <uni-view data-v-1a01b218="" class="cu-bar justify-end bg-blue">
                <uni-view data-v-1a01b218="" class="content" style="font-weight: bold;">
                    Select 9
                </uni-view>
            </uni-view>
            <uni-view data-v-1a01b218="">
                <uni-view data-v-1a01b218="" class="cu-bar padding-xl">
                    <uni-text data-v-1a01b218=""><span>Contract Money</span></uni-text>
                </uni-view>
                <uni-scroll-view data-v-1a01b218="" class="bg-white nav text-left"
                    style="margin-left: 10px; margin-top: -20px;">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                            <div class="uni-scroll-view-content">

                                <uni-view data-v-1a01b218="" data-id="0" id="sapre49"
                                    onclick="sapresel9(49)" class="cu-item text-blue cur">10
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="1" id="sapre50"
                                    onclick="sapresel9(50)" class="cu-item">100
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="2" id="sapre51"
                                    onclick="sapresel9(51)" class="cu-item">1000
                                </uni-view>
                                <uni-view data-v-1a01b218="" data-id="3" id="sapre52"
                                    onclick="sapresel9(52)" class="cu-item">10000
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
                <uni-view data-v-1a01b218="" class="cu-bar  padding-xl justify-start">
                    <uni-text data-v-1a01b218="">
                        <span>Number</span></uni-text>
                    <uni-view data-v-9d9b8ed0="" data-v-1a01b218="" class="uni-numbox"
                        style="margin-left: 10px;">
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__minus" onclick="minus(saprein9)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>-</span>
                            </uni-text>
                        </uni-view>
                        <uni-input data-v-9d9b8ed0="" class="uni-numbox__value">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-9d9b8ed0=""
                                    data-v-1a01b218="" data-v-91f724d0="" data-v-5d7012ef=""
                                    style="display: none;"></div><input maxlength="140"
                                    step="0.000000000000000001" id="saprein9" value="1"
                                    enterkeyhint="done" autocomplete="off" type="number"
                                    class="uni-input-input">

                            </div>
                        </uni-input>
                        <uni-view data-v-9d9b8ed0="" class="uni-numbox__plus" onclick="plus(saprein9)">
                            <uni-text data-v-9d9b8ed0="" class="uni-numbox--text">
                                <span>+</span>
                            </uni-text>
                        </uni-view>
                    </uni-view>
                </uni-view>

                {{-- formUpdate --}}
                <form id="sapre9form" method="post" action="{{ route('set.colorBet') }}">
                    <input type="hidden" id="sapreper9" name="period" value="{{ renderGameId1() }}">
                    <input type="hidden" name="ans" value="9">
                    <input type="hidden" type="text" id="saprefamount9" name="amount" value="10">
                </form>
                <uni-view data-v-1a01b218="" class=" margin-bottom">
                    <uni-text data-v-1a01b218=""><span>Total contract money is <span
                                id="sapre9total">10</span></span>
                    </uni-text>
                </uni-view>

                <uni-text data-v-1a01b218="" class="sm margin-left"><span>I agree</span>
                </uni-text>
                <uni-text data-v-1a01b218="" class="sm text-blue margin-left">
                    <span>PRE-SALE
                        RULE</span></uni-text>
                </uni-checkbox-group>
            </uni-view>
            <uni-view data-v-1a01b218="" class="cu-bar justify-end solids-top margin-top">
                <uni-view data-v-1a01b218="" class="action">
                    <uni-button data-v-1a01b218="" class="cu-btn text-gray border" onclick="saprec9()">CLOSE
                    </uni-button>
                    <uni-button data-v-1a01b218="" class="cu-btn text-blue border margin-left"
                        onclick="sapreproceed9()">
                        CONFIRM</uni-button>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>






<script>
    $(document).ready(function() {
        $('#tableID').DataTable({
            searching: false,
            paging: ture,
            info: false,
            ordering: false,
            dom: 'rtip',
            ajax: {
                url: "{{ route('win1') }}",
                dataSrc: function(response) {
                    if (response && Array.isArray(response)) {
                        return response;
                    } else {
                        toastr.error("No data found or invalid response. Please try again.");
                        return [];
                    }
                },
                error: function(xhr, error, thrown) {
                    toastr.error("No data found or invalid response. Please try again.");
                }
            },
            columns: [
                { data: 'period' },
                { data: 'ans' },
                { data: 'num' },
                {
                    data: 'clo',
                    render: function(data, type, row, meta) {
                        if (data === 'R') {
                            return `
                                <div style="margin: auto; background-color: rgb(255, 0, 0); border-radius: 20px; height: 15px; width: 15px;">
                                </div>`;
                        } else {
                            return '';
                        }
                    }
                }
            ],
        });
    });





        var interval = setInterval(func, 1000);
        var sapremodal = document.getElementById("sapregreenbox");
        var saprespan = document.getElementById("sapreclose");
        var saprespan3 = document.getElementById("sapreclose3");
        var saprespan1 = document.getElementById("sapreclose1");
        saprespan3.onclick = function() {
            document.getElementById("saprered").className = "cu-modal";
        }
        saprespan1.onclick = function() {
            document.getElementById("sapreviobox").className = "cu-modal";
        }

        saprespan.onclick = function() {
            sapremodal.className = "cu-modal";
        }

        document.getElementById("readrule").onclick = function() {
            document.getElementById("rule").className = "cu-modal show";
        }
        document.getElementById("ruleclose").onclick = function() {
            document.getElementById("rule").className = "cu-modal";
        }
    </script>

</body>

</html>
