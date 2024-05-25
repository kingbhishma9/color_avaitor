<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!--====== Title ======-->
    <title>{{ env('APP_NAME') }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="https://aviator.bhishmadhakal.com.np/images/logo.png" type="image/png" />

    <!--====== Material Design Icons CSS ======-->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--====== mCustomScrollbar CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/jquery.mCustomScrollbar.min.css') }}" />

    <!--====== Pretty Checkbox CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/pretty-checkbox.min.css') }}" />
    <!--====== Cuntry Selection CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/niceCountryInput.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/aviator/css/jquery.ccpicker.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/bootstrap.css') }}" />

    <!--====== Owl Carousel CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/owl.carousel.min.css') }}" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/style.css') }}" />

    <!-- ====== Toastr CSS ====== -->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/toastr.min.css') }}" />

    <!-- ====== Datatable CSS ====== -->
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/aviator/css/responsive.dataTables.min.css') }}" />

    <script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>


    <style>
        label.error {
            color: #fa0000;
            font-size: 14px;
            font-weight: 500;
        }

        #success_msg {
            color: #6b7d8e !important;
            text-align: center !important;
            font-size: 14px !important;
            font-weight: 500 !important;
        }

        .okbtn {
            min-width: auto;
            font-size: 18px !important;
        }

        .tab_title {
            padding: 10px;
        }

        .tab-content>.active {
            display: contents;
        }

        .avatar_img {
            padding: 10px;
        }

        #image_div {
            text-align: -webkit-center;
        }

        .side_logo {
            width: 60px;
        }

        .balance_btn {
            background-color: #003364;
        }

        #invite_link_btn {
            color: #003364;
            background-color: #fff;
        }

        .copy_owner_details:hover {
            color: #0c5396;
        }
    </style>

</head>


<body class="dark-bg-main">




    <style>
        .blink_section {
            opacity: 0.5 !important;
        }

        .stage-board {
            background-color: #000;
        }

        body {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Old versions of Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
        supported by Chrome, Edge, Opera and Firefox */
        }

        /* toastr START */
        .custom-toaster {
            position: fixed;
            top: 50px;
            transform: translateX(-50%);
            left: 50%;
            z-index: 99999;
        }

        .cashout-toaster1,
        .cashout-toaster2 {
            height: 55px;
            border-radius: 55px;
            min-width: 300px;
            background: #123405;
            border: 1px solid #4EAF11;
            display: flex;
            align-items: center;
            transition: all 0.4s;
            padding: 0 0 0 15px;
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
            opacity: 0;
            margin-bottom: -55px;
            visibility: hidden;
        }

        .error-toaster1 {
            height: 55px;
            border-radius: 55px;
            min-width: 300px;
            background-color: #B3021B;
            border-color: #B3021B;
            display: flex;
            align-items: center;
            transition: all 0.4s;
            padding: 0 0 0 15px;
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
            opacity: 0;
            margin-bottom: -55px;
            visibility: hidden;
        }

        .error-toaster1.show {
            margin: 0;
            opacity: 1;
            visibility: visible;
        }

        .error-toaster2 {
            height: 55px;
            border-radius: 55px;
            min-width: 300px;
            background-color: #B3021B;
            border-color: #B3021B;
            display: flex;
            align-items: center;
            transition: all 0.4s;
            padding: 0 0 0 15px;
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
            opacity: 0;
            margin-bottom: -55px;
            visibility: hidden;
        }

        .error-toaster2.show {
            margin: 0;
            opacity: 1;
            visibility: visible;
        }

        .cashout-toaster1.show {
            margin: 0;
            opacity: 1;
            visibility: visible;
        }

        .cashout-toaster2.show {
            opacity: 1;
            visibility: visible;
        }

        .cashout-toaster2 {
            margin-top: 10px;
        }

        .cashout-stop {
            color: #D2D2D2;
        }

        .stop-number {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
        }

        .got-block {
            width: 120px;
            height: 45px;
            background: #4EAF11;
            border-radius: 45px;
            margin-left: 10px;
            overflow: hidden;
        }

        .star-left {
            width: 30px;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.6;
        }

        .star-right {
            width: 30px;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.6;
        }

        .got-amout {
            font-size: 13px;
            line-height: 16px;
            color: #fff;
            font-weight: 500;
            z-index: 2;
        }

        .custom-toaster .material-symbols-outlined {
            color: #72836B;
            font-size: 20px;
            margin-left: 5px;
            cursor: pointer;
            font-variation-settings: 'FILL' 0, 'wght' 700, 'GRAD' 0, 'opsz' 48;
        }

        .custom-toaster-error {
            background-color: #B3021B;
            border-color: #B3021B;
            border-radius: 10px;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        /* toastr END */

        .hide {
            display: none !important;
        }

        /* .game-play div {
        pointer-events: none;
    } */
        .load-txt {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #fff;
            z-index: 90;
        }

        .stop-action {
            pointer-events: none;
            opacity: 0.7;
        }

        .counter-num {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            font-weight: 700;
            color: #fff;
            z-index: 3;
        }

        .counter-num span {
            font-size: 80px;
            font-weight: 700;
            margin-left: 5px;
        }

        /* .list-body {
        max-height: 500px !important;
    } */
        .text-danger {
            color: #f7001f !important;
        }

        @media (max-width:768px) {
            #auto_increment_number_div .flew_away_section {
                font-size: 18px;
            }

            #auto_increment_number_div #auto_increment_number {
                font-size: 65PX;
                line-height: 40px;
            }

            .center-loading svg {
                width: 100px;
                height: 50px;
            }

            .game-play {
                height: auto;
            }

            #extra_bet_section {
                margin-top: 10px;
            }

            footer {
                display: none;
            }
        }

        .bet-border-red {
            border-color: #f7001f !important;
        }

        .bet-border-yellow {
            border-color: #e69308 !important;
        }
    </style>
    {{-- Preloader area  --}}
    <div class="load-txt">
        <div class="loading-game-1">
            <div class="center-loading text-white text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120">
                    <g fill="#E50539" fill-rule="nonzero">
                        <path
                            d="M67.785 67.77a10.882 10.882 0 0 0 2.995-5.502l18.37-6.36c.47-.163.876-.471 1.16-.88l29.263-42.18a2.343 2.343 0 0 0-.268-2.993L110.153.704a2.344 2.344 0 0 0-3.314 0L95.73 11.813C71.965-5.861 38.683-3.514 17.58 17.588a60.26 60.26 0 0 0-8.829 11.21 2.343 2.343 0 0 0 4.001 2.441 55.575 55.575 0 0 1 8.142-10.336C40.184 1.613 70.512-.68 92.378 15.165l-5.72 5.72c-8.742-5.967-19.302-8.837-29.947-8.1a47.31 47.31 0 0 0-30.183 13.751 47.722 47.722 0 0 0-5.92 7.207 2.344 2.344 0 0 0 3.897 2.605 42.996 42.996 0 0 1 5.337-6.497c14.233-14.234 36.774-16.445 53.436-5.586l-6.818 6.818a33.418 33.418 0 0 0-19.773-4.186A33.338 33.338 0 0 0 36.47 36.48a2.344 2.344 0 0 0 3.314 3.314c8.787-8.786 22.336-10.795 33.215-5.248L58.38 49.163a10.969 10.969 0 0 0-6.164 3.084 10.882 10.882 0 0 0-2.996 5.504l-18.37 6.36c-.47.163-.876.47-1.159.879L.427 107.17a2.343 2.343 0 0 0 .268 2.992l9.152 9.151a2.337 2.337 0 0 0 1.657.687c.6 0 1.2-.23 1.657-.687l11.109-11.109A59.835 59.835 0 0 0 59.99 120a59.873 59.873 0 0 0 42.43-17.571 60.476 60.476 0 0 0 7.162-8.63 2.343 2.343 0 1 0-3.87-2.643 55.793 55.793 0 0 1-6.606 7.959c-19.321 19.32-49.61 21.598-71.487 5.74l5.722-5.723a47.325 47.325 0 0 0 30.058 8.092A47.318 47.318 0 0 0 93.472 93.48a47.82 47.82 0 0 0 5.15-6.09 2.343 2.343 0 0 0-3.82-2.715 43.106 43.106 0 0 1-4.644 5.49c-14.21 14.211-36.783 16.436-53.436 5.587l6.82-6.82a33.416 33.416 0 0 0 19.825 4.182A33.343 33.343 0 0 0 83.53 83.54a2.344 2.344 0 0 0-3.314-3.315c-8.777 8.778-22.34 10.792-33.215 5.25L61.62 70.855a10.97 10.97 0 0 0 6.165-3.084zm40.711-62.095l6.11 6.11-27.712 39.944-16.207 5.61a10.892 10.892 0 0 0-2.903-5.092 10.953 10.953 0 0 0-3.512-2.348l44.224-44.224zM11.504 114.342l-6.11-6.11 27.712-39.944 16.207-5.61a10.892 10.892 0 0 0 2.903 5.092 10.953 10.953 0 0 0 3.512 2.348l-44.224 44.224zm44.018-49.894a6.223 6.223 0 0 1-1.85-4.44l.003-.094c.036-.19.047-.383.035-.579a6.22 6.22 0 0 1 1.812-3.766A6.33 6.33 0 0 1 60 53.726a6.33 6.33 0 0 1 4.478 1.843 6.223 6.223 0 0 1 1.85 4.44l-.003.094a2.325 2.325 0 0 0-.035.579 6.22 6.22 0 0 1-1.812 3.766c-2.47 2.458-6.487 2.457-8.956 0z" />
                        <path
                            d="M113.341 82.064a2.344 2.344 0 0 0-3.115 1.131l-.026.057a2.343 2.343 0 1 0 4.26 1.955l.013-.028a2.344 2.344 0 0 0-1.132-3.115zM7.65 35.765a2.343 2.343 0 0 0-3.072 1.241l-.021.05a2.338 2.338 0 0 0 2.165 3.228c.922 0 1.8-.55 2.173-1.454.5-1.19-.056-2.56-1.245-3.065z" />
                    </g>
                </svg>
                <div class="secondary-font f-40 mt-2 waiting-text"> WAITING FOR NEXT ROUND</div>
                <div class="line-loader mt-2">
                    <div class="fill-line"></div>
                </div>
            </div>
        </div>
    </div>

    @include('games.aviator.include.game-header')


    @yield('content')



      <!--====== Hinal (End) ======-->
    <script>
        var hash_id = '{{ csrf_token() }}';
        var currency_id = '₹';
        var currency_symbol = '₹';
        var wallet_balance = '{{ wallet(user('id')) }}';
        var profile_image = '1';
        var member_id = '{{auth()->user()->id}}';
        var min_bet_amount = parseFloat('{{ setting('min_bet_amount') }}');
        var max_bet_amount = parseFloat('{{ setting('max_bet_amount') }}');
        var current_game_data = {{ currentid() }};
    </script>




    @include('games.aviator.include.footer')
    <!--====== Avatar Modal Start ======-->
    <div class="modal fade" id="avtar-modal" tabindex="-1" aria-labelledby="avtar-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">CHOOSE GAME AVATAR </h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-data-tbl mt-2">
                        <div class="list-body scroll-div list-body1">
                            <div id="image_div">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Avatar Modal End ======-->

    <!--====== Plugin js ======-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--====== Slimscroll js ======-->
    <!--<script src="/js/jquery.mCustomScrollbar.js"></script>-->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>


    <!--====== Country Selection js ======-->
    <script src="{{ asset('assets/js/niceCountryInput.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ccpicker.js') }}" type="text/javascript"></script>

    <!--====== Animation Selection js ======-->
    <script src="{{ asset('assets/js/anime.min.js') }}"></script>

    <!--====== Owl Carousel js ======-->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!--====== Validate js ======-->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

    <!--====== Toastr js ======-->
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

    <!--====== Datatable js ======-->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var successMessage = '';
        var errorMessage = '';
        let game_id = 0;
        var bet_array = [];
        let currentbet;
        var main_cash_out = 0;
        var extra_cash_out = 0;
        var main_incrementor;
        var extra_incrementor;
        let stage_time_out = 0;
        var is_game_generated = 0;
    </script>
    <script src="{{ asset('assets/js/avatar.js') }}"></script>
    <script src="{{ asset('assets/js/canvas.js') }}"></script>
    <script src="{{ asset('assets/js/aviatorold.js?v=') }}{{ env('APP_VERSION') }}"></script>
    <script src="{{ asset('assets/js/aviatorbyapp.js?v=') }}{{ env('APP_VERSION') }}"></script>


    <script>
        $(document).ready(function() {

            if (successMessage != undefined && successMessage != '') {
                swal('Success', successMessage, "success");
                'false';
            } else if (errorMessage != undefined && errorMessage != '') {
                swal('Error', errorMessage, "error");
                'false';
            }
            $.ajax({
                url: 'get_user_details',
                type: 'get',
                success: function(result) {
                    if (result.isSuccess) {
                        $("#avatar_img").prop('src', result.data.avatar)
                        $("#username").text(result.data.username)
                        if (result.data.notification != '') {
                            swal(
                                'Notification',
                                result.data.notification,
                                'success'
                            ).then(function() {
                                $.ajax({
                                    url: 'update_is_notify',
                                    type: 'post',
                                    data: {
                                        'id': result.data.id,
                                        'request_type': result.data.request_type
                                    },
                                });
                            });
                        }
                    }
                }
            });
            $.ajax({
                url: '/game/currentlybet',
                type: "POST",
                data: {
                    _token: hash_id
                },
                dataType: "json",
                success: function(intialData) {
                    info_data(intialData);
                }
            });
        });
        $(".load-txt").hide();
        gamegenerate();
        // setInterval(()=>{
        //     $.ajax({
        //     url: '/game/existence',
        //     type: "POST",
        //     data: {
        //         "_token": hash_id,
        //         "event": 'check'
        //     },
        //     dataType: "json",
        //     success: function (result) {
        //         if (result.data == true) {
        //             if(is_game_generated == 0){
        //                 $(".load-txt").hide();
        //             setTimeout(()=>{
        //                 gamegenerate();
        //             },1000);
        //             }
        //             return;
        //         } else {
        //             $(".load-txt").show();
        //             return
        //         }
        //     }
        // });
        // },1000);
    </script>
</body>

</html>
