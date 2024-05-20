<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!--====== Title ======-->
    <title>{{config('app.name')}}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="https://aviator.bhishmadhakal.com.np/images/logo.png" type="image/png" />

    <!--====== Material Design Icons CSS ======-->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--====== mCustomScrollbar CSS ======-->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/jquery.mCustomScrollbar.min.css" />

    <!--====== Pretty Checkbox CSS ======-->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/pretty-checkbox.min.css" />
    <!--====== Cuntry Selection CSS ======-->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/niceCountryInput.css" />
    <link rel="stylesheet" type="text/css" href="https://aviator.bhishmadhakal.com.np/css/jquery.ccpicker.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/bootstrap.css" />

    <!--====== Owl Carousel CSS ======-->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/owl.carousel.min.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/style.css" />

    <!-- ====== Toastr CSS ====== -->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/toastr.min.css" />

    <!-- ====== Datatable CSS ====== -->
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://aviator.bhishmadhakal.com.np/css/responsive.dataTables.min.css" />

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

    <!--====== Header Start ======-->
    <header>
        <div class="header-top">
            <div class="header-left">
                <a href="dashboard">
                    <img src="https://aviator.bhishmadhakal.com.np/images/logo.svg" class="logo1" />
                </a>
            </div>
            <div class="header-right d-flex align-items-center">
                <a href="{{ route('recharge') }}">
                    <button class="deposite-btn rounded-pill d-flex align-items-center me-2">
                        <span class="material-symbols-outlined me-2"> payments </span>
                        <!-- <span>$</span> -->
                        <span class="me-2" id="header_wallet_balance">₹</span>
                        DEPOSIT
                    </button>
                </a>
                <div class="btn-group">
                    <button type="button"
                        class="btn btn-transparent dropdown-toggle p-0 d-flex align-items-center justify-content-center caret-none"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-symbols-outlined f-24 menu-icon text-white">
                            menu
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark profile-dropdown p-0">
                        <li class="profile-head d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="" class="avtar-ico" id="avatar_img">
                                <div>
                                    <div class="profile-name mb-1">{{ auth()->user()->name ?? '' }}</div>
                                    <div class="profile-name" id="username">{{ auth()->user()->username }}</div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <a class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico">
                                        volume_mute
                                    </span>SOUND

                                </div>
                                <div>
                                    <div class="form-check form-switch lg-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="sound"
                                            checked="">
                                        <label class="form-check-label" for="sound"></label>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-22">
                                        music_note
                                    </span>MUSIC
                                </div>
                                <div>
                                    <div class="form-check form-switch lg-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="music"
                                            checked="">
                                        <label class="form-check-label" for="music"></label>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        mode_fan
                                    </span>ANIMATION
                                </div>
                                <div>
                                    <div class="form-check form-switch lg-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="animation" checked="">
                                        <label class="form-check-label" for="animation"></label>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="/crash" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        flight_takeoff
                                    </span>
                                    <img src="https://aviator.bhishmadhakal.com.np/images/logo.svg" class="side_logo">
                                </div>
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('recharge') }}" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>DEPOSIT FUNDS
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('withdrawal') }}" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>WITHDRAW FUNDS FROM THE ACCOUNT
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('account') }}" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        account_circle
                                    </span>PERSONAL DETAILS
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('rechargerecord') }}" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>TRANSACTION HISTORY
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('promotion') }}" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>LEVEL MANAGEMENT
                                </div>
                            </a>
                        </li>

                        <li>
                            <form id="form" action="{{ route('logout') }}" method="POST">@csrf</form>
                            <a href="javascript:void(0)" onclick="document.getElementById('form').submit()"></a>
                            {{-- <a href="/logout" class="f-12 justify-content-between"> --}}
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>SIGN OUT
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>




            </div>
        </div>
        <div class="header-bottom ">
            <div class="header-left">
                <img src="https://aviator.bhishmadhakal.com.np/images/logo.svg" class="logo" />
            </div>
            <div class="header-right d-flex align-items-center">

                <div class="wallet-balance h-26">
                    <span id="wallet_balance">4,999,436</span>
                </div>
            </div>
        </div>
    </header>
    <!--====== Header End ======-->
    <div class="custom-toaster">
        <div class="cashout-toaster1 ">
            <div class="cashout-stop">
                <div style="font-weight: 600; color: white;">You have cashed out!</div>
                <div class="stop-number"></div>
            </div>
            <div class="got-block position-relative d-flex align-items-center justify-content-center">
                <img src="https://aviator.bhishmadhakal.com.np/images/star.svg" class="star-right" />
                <img src="https://aviator.bhishmadhakal.com.np/images/star1.svg" class="star-left" />
                <div class="got-amout">
                    <div style="font-weight: 600;">You got:</div>
                    <div class="out-amount" style="font-weight: 600;"></div>
                </div>
            </div>
            <span class="material-symbols-outlined bold-icon">
                close
            </span>
        </div>

        <div class="cashout-toaster2 ">
            <div class="cashout-stop">
                <div style="font-weight: 600; color: white;">You have cashed out!</div>
                <div class="stop-number"></div>
            </div>
            <div class="got-block position-relative d-flex align-items-center justify-content-center">
                <img src="https://aviator.bhishmadhakal.com.np/images/star.svg" class="star-right" />
                <img src="https://aviator.bhishmadhakal.com.np/images/star1.svg" class="star-left" />
                <div class="got-amout">
                    <div style="font-weight: 600;">You got:</div>
                    <div class="out-amount" style="font-weight: 600;"></div>
                </div>
            </div>
            <span class="material-symbols-outlined bold-icon">
                close
            </span>
        </div>

        <div class="error-toaster1 justify-content-between custom-toaster-error">
            <div class="msg">You have cashed out!</div>
            <span class="material-symbols-outlined bold-icon me-2" style="color: white;">
                close
            </span>
        </div>

        <div class="error-toaster2 justify-content-between custom-toaster-error">
            <div class="msg">Stage time out!</div>
            <span class="material-symbols-outlined bold-icon me-2" style="color: white;">
                close
            </span>
        </div>
    </div>

    <div class="main-container">
        <!--====== Left Sidebar Start ======-->
        <div class="left-sidebar">
            <div class="tabs-navs">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item active" role="presentation">
                        <button class="nav-link active" id="pills-allbets-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-allbets" type="button" role="tab"
                            aria-controls="pills-allbets" aria-selected="true">All Bets</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mybets-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-mybets" type="button" role="tab"
                            aria-controls="pills-mybets" aria-selected="false">My Bets</button>
                    </li>
                    <span class="active-line"></span>
                </ul>
            </div>
            <div class="contents-blocks">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-allbets" role="tabpanel"
                        aria-labelledby="pills-allbets-tab">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bets-count secondary-font f-14">TOTAL BETS : <span class="text-success"
                                    id="total_bets">0</span></div>
                            <div class="custom-badge mx-auto hide" id="prev_win_multi">0.00x</div>
                            <div class="">
                                <button class="btn btn-transparent previous-history d-flex align-items-center"
                                    id="current_hand_btn" onclick="previous_hand(1);">
                                    <span class="material-symbols-outlined f-18 me-1 history-icos">
                                        history
                                    </span>
                                    <span class="material-symbols-outlined f-18 me-1 close-icos">
                                        close
                                    </span>
                                    Previous hand
                                </button>
                                <button
                                    class="btn btn-transparent previous-history selected d-flex align-items-center hide"
                                    id="previous_hand_btn" onclick="previous_hand(2);">
                                    <span class="material-symbols-outlined f-18 me-1 history-icos">
                                        history
                                    </span>
                                    <span class="material-symbols-outlined f-18 me-1 close-icos">
                                        close
                                    </span>
                                    Previous hand
                                </button>
                            </div>
                        </div>
                        <div class="list-data-tbl mt-2">
                            <div class="list-header">
                                <div class="column-1">
                                    User
                                </div>
                                <div class="column-2">
                                    Bet
                                </div>
                                <div class="column-3">
                                    Mult.
                                </div>
                                <div class="column-4">
                                    Cash out
                                </div>
                            </div>
                            <div class="list-body scroll-div list-body0" id="all_bets"> </div>

                            <div class="list-body scroll-div list-body0 hide" id="prev_bets"> </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-mybets" role="tabpanel" aria-labelledby="pills-mybets-tab">
                        <div class="list-data-tbl mt-2">
                            <div class="list-header">
                                <div class="column-1">
                                    Date
                                </div>
                                <div class="column-2">
                                    Bet
                                </div>
                                <div class="column-3">
                                    Mult.
                                </div>
                                <div class="column-4">
                                    Cash out
                                </div>
                                <div class="ps-2"></div>
                            </div>
                            <div class="list-body scroll-div list-body1" id="my_bet_list">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--====== Left Sidebar End ======-->
        <!--====== Right Sidebar Start ======-->
        <div class="right-sidebar">
            <div class="game-play">
                <div class="history-top">
                    <div class="stats">
                        <div class="payouts-wrapper">
                            <div class="payouts-block">
                            </div>
                        </div>
                        <div class="shadow">
                        </div>
                        <div class="button-block">
                            <div class="dropdown-toggle button histry-toggle">
                                <div class="trigger">
                                    <span class="material-symbols-outlined">
                                        history
                                    </span>
                                    <span class="material-symbols-outlined dd-icon up-arrow">
                                        arrow_drop_up
                                    </span>
                                    <span class="material-symbols-outlined dd-icon down-arrow">
                                        arrow_drop_down
                                    </span>
                                </div>
                            </div>
                            <div class="history-dropdown">
                                <div class="pa-5 secondary-font text-white pb-0">ROUND HISTORY</div>
                                <div class="d-flex flex-wrap pa-5 round-history-list">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stage-board">
                    <div class="counter-num text-center" id="auto_increment_number_div" style="display: none;">
                        <div class="secondary-font f-40 flew_away_section" style="display: none;">FLEW AWAY!</div>
                        <div id="auto_increment_number">1.00<span>X</span></div>
                    </div>
                    <!-- <div class="counter-num" id="auto_increment_number" style="display: none;">1.00<span>X</span></div> -->
                    <div class="loading-game">
                        <div class="center-loading text-white text-center game-centeral-loading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                viewBox="0 0 120 120">
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
                        <div class="bottom-left-plane">
                            <img class="plane-static" src="https://aviator.bhishmadhakal.com.np/images/p.png" />
                        </div>
                    </div>
                    <img src="https://aviator.bhishmadhakal.com.np/images/bg-rotate-old.svg"
                        class="rotateimage rotatebg" />
                    <canvas id="myCanvas" height=400 width="1900"></canvas>
                </div>

                <div class="bet-controls">
                    <div class="bet-control double-bet" id="main_bet_section">
                        <div class="controls">
                            <div class="bet-box-action" style="display: none;" id="add_extra_bet_section_btn">
                                <span class="material-symbols-outlined text-success">
                                    add_circle
                                </span>
                            </div>
                            <div class="navigation">
                                <input id="bet_type" type="hidden" value="0">
                                <div class="navigation-switcher">
                                    <div class="slider bet-btn">Bet</div>
                                    <div class="slider auto-btn">Auto</div>
                                    <span class="active-line"></span>
                                </div>
                            </div>
                            <div class="first-row auto-game-feature">
                                <div class="bet-block">
                                    <div class="spinner">
                                        <div class="input">
                                            <input id="bet_amount" value="10.00" type="text"
                                                class="main_bet_amount"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        </div>
                                        <div class="qty-buttons">
                                            <button class="minus " id="main_minus_btn"
                                                onclick="bet_amount_decremental(this);">
                                                <span class="material-symbols-outlined">
                                                    remove
                                                </span>
                                            </button>
                                            <button class="plus" id="main_plus_btn"
                                                onclick="bet_amount_incremental(this);">
                                                <span class="material-symbols-outlined">
                                                    add
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bets-opt-list">
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">100</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">200</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">500</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">1000</span><span class="currency">₹</span></button>
                                    </div>
                                </div>
                                <div class="buttons-block" id="bet_button">
                                    <button class="btn btn-success bet font-family-title ng-star-inserted main_bet_btn"
                                        onclick="bet_now(this, 0);" id="main_bet_now"><label
                                            class="font-family-title label">BET</label></button>
                                </div>
                                <div class="buttons-block" id="cancle_button" style="display: none;">
                                    <div class="btn-tooltip f-14 mb-1" id="waiting" style="display: none;">Waiting
                                        for next round</div>
                                    <button
                                        class="btn btn-danger bet font-family-title height-70 ng-star-inserted main_bet_btn"
                                        onclick="cancle_now(this, 0);" id="main_cancel_now"><label
                                            class="font-family-title label">CANCEL</label></button>
                                </div>
                                <div class="buttons-block" id="cashout_button" style="display: none;">
                                    <input type="hidden" name="main_bet_id" id="main_bet_id">
                                    <button class="btn btn-warning bet font-family-title ng-star-inserted"
                                        onclick="cash_out_now(this, 0);">
                                        <label class="font-family-title label">CASH OUT</label>
                                        <div class="font-family-title label" id="cash_out_amount"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="second-row">

                                <div class="cashout-block m-0">
                                    <div class="cash-out-switcher">
                                        <div class="form-check form-switch lg-switch d-flex align-items-center pe-5">
                                            <label class="form-check-label f-12 me-1" for="bet">Auto Bet</label>
                                            <input class="form-check-input m-0" type="checkbox" role="bet"
                                                id="main_auto_bet">
                                        </div>
                                        <div class="form-check form-switch lg-switch d-flex align-items-center">
                                            <label class="form-check-label f-12 me-1" for="cashout">Auto Cash
                                                Out</label>
                                            <input class="form-check-input m-0" type="checkbox" role="cashout"
                                                id="main_checkout">
                                        </div>
                                    </div>
                                    <div class="cashout-spinner-wrapper">
                                        <div class="cashout-spinner disabled">
                                            <div class="spinner small">
                                                <div class="input full-width">
                                                    <input class="f-16 font-weight-bold" disabled type="text"
                                                        value="1.01" id="main_incrementor"
                                                        onchange="main_incrementor_change(this.value);">
                                                </div>
                                                <div class="text text-x">
                                                    <span class="material-symbols-outlined">
                                                        close
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bet-control double-bet" id="extra_bet_section">
                        <div class="controls">
                            <div class="bet-box-action" id="remove_extra_section_btn">
                                <span class="material-symbols-outlined">
                                    do_not_disturb_on
                                </span>
                            </div>
                            <div class="navigation">
                                <input id="bet_type" type="hidden" value="0">
                                <div class="navigation-switcher">
                                    <div class="slider bet-btn">Bet</div>
                                    <div class="slider auto-btn">Auto</div>
                                    <span class="active-line"></span>
                                </div>
                            </div>
                            <div class="first-row auto-game-feature">
                                <div class="bet-block">
                                    <div class="spinner">
                                        <div class="input">
                                            <input id="bet_amount" value="10.00" class="extra_bet_amount"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        </div>
                                        <div class="qty-buttons">
                                            <button class="minus" id="extra_minus_btn"
                                                onclick="bet_amount_decremental(this);">
                                                <span class="material-symbols-outlined">
                                                    remove
                                                </span>
                                            </button>
                                            <button class="plus" id="extra_plus_btn"
                                                onclick="bet_amount_incremental(this);">
                                                <span class="material-symbols-outlined">
                                                    add
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bets-opt-list">
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">100</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">200</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">500</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">1000</span><span class="currency">₹</span></button>
                                    </div>
                                </div>
                                <div class="buttons-block" id="bet_button">
                                    <button class="btn btn-success bet font-family-title ng-star-inserted main_bet_btn"
                                        id="extra_bet_now" onclick="bet_now(this, 1);"><label
                                            class="font-family-title label">BET</label></button>
                                </div>
                                <div class="buttons-block" id="cancle_button" style="display: none;">
                                    <div class="btn-tooltip f-14 mb-1" id="waiting" style="display: none;">Waiting
                                        for next round</div>
                                    <button
                                        class="btn btn-danger bet font-family-title height-70 ng-star-inserted main_bet_btn"
                                        id="extra_cancel_now" onclick="cancle_now(this, 1);"><label
                                            class="font-family-title label">CANCEL</label></button>
                                </div>
                                <div class="buttons-block" id="cashout_button" style="display: none;">
                                    <input type="hidden" name="extra_bet_id" id="extra_bet_id">
                                    <button class="btn btn-warning bet font-family-title ng-star-inserted"
                                        onclick="cash_out_now(this, 1);">
                                        <label class="font-family-title label">CASH OUT</label>
                                        <div class="font-family-title label" id="cash_out_amount"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="second-row">

                                <div class="cashout-block m-0">
                                    <div class="cash-out-switcher">
                                        <div class="form-check form-switch lg-switch d-flex align-items-center pe-5">
                                            <label class="form-check-label f-12 me-1" for="bet">Auto Bet</label>
                                            <input class="form-check-input m-0" type="checkbox" role="bet"
                                                id="extra_auto_bet">
                                        </div>
                                        <div class="form-check form-switch lg-switch d-flex align-items-center">
                                            <label class="form-check-label f-12 me-1" for="cashout">Auto Cash
                                                Out</label>
                                            <input class="form-check-input" type="checkbox" role="cashout"
                                                id="extra_checkout">
                                        </div>
                                    </div>
                                    <div class="cashout-spinner-wrapper">
                                        <div class="cashout-spinner disabled">
                                            <div class="spinner small">
                                                <div class="input full-width">
                                                    <input class="f-16 font-weight-bold" type="text" disabled
                                                        value="1.01" id="extra_incrementor"
                                                        onchange="extra_incrementor_change(this.value);">
                                                </div>
                                                <div class="text text-x">
                                                    <span class="material-symbols-outlined">
                                                        close
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Right Sidebar End ======-->
    </div>

    <!--====== Hinal (Start) ======-->

    <!--====== Game Limit Modal Start ======-->
    <div class="modal fade" id="game-limit" tabindex="-1" aria-labelledby="game-limit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">GAME LIMITS</h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled limit-rules">
                        <li class="list-group-item">
                            Minimum Bet:
                            <span class="badge badge-success px-2 font-family-number">10 ₹ </span>
                        </li>
                        <li class="list-group-item">
                            Maximum Bet:
                            <span class="badge badge-success px-2 font-family-number">8000 ₹ </span>
                        </li>
                        <li class="list-group-item">
                            Maximum win for one bet:
                            <span class="badge badge-success px-2 font-family-number">800000 ₹ </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--====== Game Limit Modal End ======-->

    <!--====== My Bet History Modal Start ======-->
    <div class="modal fade" id="bet-history" tabindex="-1" aria-labelledby="bet-history" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">MY BET HISTORY</h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-data-tbl mt-2">
                        <div class="list-header">
                            <div class="column-1">
                                Time
                            </div>
                            <div class="column-2">
                                Bet
                            </div>
                            <div class="column-3">
                                Mult.
                            </div>
                            <div class="column-4">
                                Cash out
                            </div>
                            <!-- <div class="ps-2 column-5"></div> -->
                        </div>
                        <div class="list-body scroll-div list-body1" id="member_bet">

                        </div>
                        <div>
                            <button class="btn btn-dark md-btn custm-btn-2 mx-auto mt-3 mb-1" id="load_btn"
                                onclick="loadData()">Load More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== My Bet History Modal End ======-->

    <!--====== Game Rules Modal Start ======-->
    <div class="modal fade" id="game-rule" tabindex="-1" aria-labelledby="game-rule" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">GAME RULES</h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-grey">Aviator is a new generation of iGaming entertainment. You can win many times
                        more, in seconds! Aviator is built on a provably fair system, which is currently the only real
                        guarantee of honesty in the gambling industry.</p>
                    <h6 class="secondary-font">HOW TO PLAY</h6>
                    <iframe width="420" height="600"
                        src="https://www.youtube.com/embed/PZejs3XDCSY?playsinline=1">
                    </iframe>
                    <h6 class="secondary-font mt-2">Aviator is as easy to play as 1-2-3:</h6>
                    <div class="steps-container">
                        <div class="step step-1">
                            <h3>01</h3>
                            <img src="https://aviator.bhishmadhakal.com.np/images/step-01.png" class="w-100" />
                            <div class="step-text pt-2">
                                <span>BET</span> before take-off
                            </div>
                        </div>
                        <div class="step step-1">
                            <h3>02</h3>
                            <img src="https://aviator.bhishmadhakal.com.np/images/step-02.png" class="w-100" />
                            <div class="step-text pt-2">
                                <span>WATCH</span> as your Lucky Plane takes off and your winnings increase.
                            </div>
                        </div>
                        <div class="step step-1">
                            <h3>03</h3>
                            <img src="https://aviator.bhishmadhakal.com.np/images/step-03.png" class="w-100" />
                            <div class="step-text pt-2">
                                <span>CASH OUT</span>before the plane disappears and wins X times more!
                            </div>
                        </div>
                    </div>
                    <p class="mt-2">But remember, if you did not have time to Cash Out before the Lucky Plane flies
                        away, your bet will be lost. Aviator is pure excitement! Risk and win. It’s all in your hands!
                    </p>
                    <h6 class="secondary-font mt-2">More Detail</h6>
                    <ul class="list-unstyled list-ul">
                        <li>The win multiplier starts at 1x and grows more and more as the Lucky Plane takes off.</li>
                        <li>Your winnings are calculated at the multiplier at which you made a Cash Out, multiplied by
                            your bet.</li>
                        <li>Before the start of each round, our provably fair random number generator generates the
                            multiplier at which the Lucky Plane will fly away. You can check the honesty of this
                            generation by clicking on </li>
                    </ul>
                    <h5 class="secondary-font mt-2">GAME FUNCTIONS</h5>
                    <h6 class="secondary-font mt-2">Bet & Cash Out</h6>
                    <ul class="list-unstyled list-ul">
                        <li>Select an amount and press the “Bet” button to make a bet.</li>
                        <li>You can make two bets simultaneously, by adding a second bet panel. To add a second bet
                            panel, press the plus icon, which is located on the top right corner of the first bet panel.
                        </li>
                        <li>Press the “Cash Out” button to cash out your winnings. Your win is your bet multiplied by
                            the Cash Out multiplier.</li>
                        <li>Your bet is lost, if you didn’t cash out before the plane flies away.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Auto Play & Auto Cash Out</h6>
                    <ul class="list-unstyled list-ul">
                        <li>Auto Play is activated from the “Auto” tab on the Bet Panel, by pressing the “Auto Play”
                            button.</li>
                        <li>In the Auto Play Panel, the “Stop if cash decreases by” option stops Auto Play, if the
                            balance is decreased by the selected amount.</li>
                        <li>In the Auto Play Panel, the “Stop if cash increases by” option stops Auto Play, if the
                            balance is increased by the selected amount.</li>
                        <li>In the Auto Play Panel, the “Stop if single win exceeds” option stops Auto Play, if a single
                            win exceeds the selected amount.</li>
                        <li>Auto Cash Out is available from the “Auto” tab on the Bet panel. After activation, your bet
                            will be automatically cashed out when it reaches the multiplier entered</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Live Bets & Statistics</h6>
                    <ul class="list-unstyled list-ul">
                        <li>On the left side of the game interface (or under the Bet Panel on mobile), is located the
                            Live Bets panel. Here you can see all bets that are being made in the current round.</li>
                        <li>In the “My Bets” panel you can see all of your bets and Cash Out information.</li>
                        <li>In the “Top” panel, game statistics are located. You can browse wins by amount, or Cash Out
                            multiplier, and see the biggest round multipliers.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Free Bets</h6>
                    <ul class="list-unstyled list-ul">
                        <li>You can check the status of Free Bets, from the Game Menu > Free Bets. Free Bets are awarded
                            by the operator, or by the Rain Feature.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Randomisation</h6>
                    <ul class="list-unstyled list-ul">
                        <li>The multiplier for each round is generated by a “Provably Fair” algorithm and is completely
                            transparent, and 100% fair.</li>
                        <li>You can check and modify the Provably Fair settings from the Game menu > Provably Fair
                            settings.</li>
                        <li>You can check the fairness of each round by pressing icon, opposite the results in the “My
                            Bets” or inside “Top” tabs.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Return to Player</h6>
                    <ul class="list-unstyled list-ul">
                        <li>The overall theoretical return to player is 97%. This means that on average, for every 100
                            rounds, every 3 rounds end with the Lucky Plane flying away at the very beginning of the
                            round.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Other</h6>
                    <ul class="list-unstyled list-ul">
                        <li>If the internet connection is interrupted when the bet is active, the game will auto cash
                            out with the current multiplier, and the winning amount will be added to your balance.</li>
                        <li>In the event of a malfunction of the gaming hardware/software, all affected game bets and
                            payouts are rendered void and all affected bets are refunded.</li>
                    </ul>
                </div>
                <audio id="sound_Audio">
                    <source src="https://aviator.bhishmadhakal.com.np/plane-crash.mp3" type="audio/mpeg">
                </audio>
                <audio id="background_Audio">
                    <source src="https://aviator.bhishmadhakal.com.np/background.mp3" type="audio/mpeg">
                </audio>
                <audio id="fly_plane_audio">
                    <source src="https://aviator.bhishmadhakal.com.np/game-start.mp3" type="audio/mpeg">
                </audio>
                <audio id="cash_out_audio">
                    <source src="https://aviator.bhishmadhakal.com.np/cashout.mp3" type="audio/mpeg">
                </audio>
                <audio id="cash_out_audio_2">
                    <source src="https://aviator.bhishmadhakal.com.np/cashout_2.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </div>
    <!--====== Game Rules Modal End ======-->

    <!--====== Hinal (End) ======-->

    <footer>
        <div class="footer-top">
            <a href="dashboard" class="footer-logo"><img src="https://aviator.bhishmadhakal.com.np/images/logo.png"
                    class="logo1"></a>
        </div>
        <div class="footer-top">
            <div class="footer-column footer-column_center social-icons">
                <div class="darkblue-bg">
                    <div class="footer-icon_monocolor">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 20" class="Icon_icon__2Th0s">
                            <path
                                d="M10.603 10H6.687v9.8H2.174V10H0V6.794h2.175V4.712C2.174 1.882 3.485.2 7.06.2h4.12v3.469H7.814c-.999-.002-1.122.484-1.122 1.389l-.006 1.736H11.2z">
                            </path>
                        </svg>
                    </div>
                    <div class="footer-icon_monocolor ms-4">
                        <svg viewBox="0 -31 512 512" xmlns="http://www.w3.org/2000/svg" class="Icon_icon__2Th0s">
                            <path
                                d="M123.195 260.738l63.68 159.188 82.902-82.903L411.918 450 512 0 0 213.266zm242.5-131.629L208.98 272.051l-19.52 73.566-36.058-90.164zm0 0">
                            </path>
                        </svg>
                    </div>
                    <div class="footer-icon_monocolor ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66 60" class="Icon_icon__2Th0s">
                            <path fill="#1183d3"
                                d="M63 14.87a7.885 7.885 0 00-5.56-5.56C52.54 8 32.88 8 32.88 8S13.23 8 8.32 9.31c-2.7.72-4.83 2.85-5.56 5.56C1.45 19.77 1.45 30 1.45 30s0 10.23 1.31 15.13c.72 2.7 2.85 4.83 5.56 5.56C13.23 52 32.88 52 32.88 52s19.66 0 24.56-1.31c2.7-.72 4.83-2.85 5.56-5.56C64.31 40.23 64.31 30 64.31 30s0-10.23-1.31-15.13z">
                            </path>
                            <path fill="#04386e" d="M26.6 39.43L42.93 30 26.6 20.57z"></path>
                        </svg>
                    </div>
                    <div class="footer-icon_monocolor ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 169 169" class="Icon_icon__2Th0s">
                            <path
                                d="M122.406 0H46.654C20.929 0 0 20.93 0 46.655v75.752c0 25.726 20.929 46.655 46.654 46.655h75.752c25.727 0 46.656-20.93 46.656-46.655V46.655C169.063 20.93 148.133 0 122.406 0zm31.657 122.407c0 17.455-14.201 31.655-31.656 31.655H46.654C29.2 154.063 15 139.862 15 122.407V46.655C15 29.201 29.2 15 46.654 15h75.752c17.455 0 31.656 14.201 31.656 31.655v75.752z">
                            </path>
                            <path
                                d="M84.531 40.97c-24.021 0-43.563 19.542-43.563 43.563 0 24.02 19.542 43.561 43.563 43.561s43.563-19.541 43.563-43.561c0-24.021-19.542-43.563-43.563-43.563zm0 72.123c-15.749 0-28.563-12.812-28.563-28.561 0-15.75 12.813-28.563 28.563-28.563s28.563 12.813 28.563 28.563c0 15.749-12.814 28.561-28.563 28.561zm45.39-84.842c-2.89 0-5.729 1.17-7.77 3.22a11.053 11.053 0 00-3.23 7.78c0 2.891 1.18 5.73 3.23 7.78 2.04 2.04 4.88 3.22 7.77 3.22 2.9 0 5.73-1.18 7.78-3.22 2.05-2.05 3.22-4.89 3.22-7.78 0-2.9-1.17-5.74-3.22-7.78-2.04-2.05-4.88-3.22-7.78-3.22z">
                            </path>
                        </svg>
                    </div>
                    <div class="footer-icon_monocolor ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="Icon_icon__2Th0s">
                            <path
                                d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-top justify-content-center">
            <div class="footer-column d-flex justify-content-center">
                <nav class="ftr-nav">
                    <a href="#">About us</a>
                    <a href="#">The rules</a>
                    <a href="#">Contacts</a>
                    <!--<a href="#">Mobile version</a>-->
                    <a href="#">Affiliate program</a>
                    <a href="#">FAQ</a>
                </nav>
            </div>
        </div>
        <div class="footer-middle">
            <div class="footer-top footer-highlight providers">
                <div class="footer-column footer-column_center">
                    <div class="providers-icons d-flex justify-content-between align-items-center">
                        <div class="footer-icon mastercard">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 155.58"
                                class="Icon_icon__2Th0s">
                                <path
                                    d="M195.93 153.396v.405h.373c.082 0 .153-.02.204-.051.047-.032.075-.087.075-.153s-.028-.118-.075-.15a.358.358 0 00-.204-.05zm.376-.283c.193 0 .342.044.448.13s.158.204.158.354c0 .125-.04.228-.126.31a.613.613 0 01-.358.15l.495.57h-.385l-.46-.567h-.149v.566h-.322v-1.513zm-.098 2.036c.177 0 .342-.036.491-.102a1.252 1.252 0 00.77-1.171c0-.177-.035-.342-.098-.495-.066-.154-.157-.291-.27-.405s-.248-.205-.402-.271c-.149-.063-.314-.095-.49-.095s-.347.032-.5.095c-.157.066-.295.157-.408.27s-.205.252-.268.406c-.067.153-.098.318-.098.495s.031.342.098.495c.063.157.154.29.268.405s.251.204.408.27c.153.067.322.103.5.103m0-2.904c.231 0 .443.043.648.13a1.645 1.645 0 01.88.868c.086.196.13.409.13.633s-.044.436-.13.632-.204.37-.354.519a1.785 1.785 0 01-.526.35c-.205.086-.417.13-.649.13a1.704 1.704 0 01-1.187-.48c-.149-.15-.267-.322-.353-.519s-.13-.408-.13-.632.043-.437.13-.633a1.6 1.6 0 01.354-.519c.149-.15.326-.267.53-.35.204-.086.42-.13.656-.13m-153.102-5.827c0-2.884 1.89-5.254 4.979-5.254 2.951 0 4.943 2.268 4.943 5.254s-1.992 5.254-4.943 5.254c-3.089 0-4.979-2.37-4.979-5.254m13.286 0v-8.205h-3.568v1.992c-1.132-1.477-2.849-2.404-5.183-2.404-4.602 0-8.21 3.607-8.21 8.617 0 5.014 3.608 8.618 8.21 8.618 2.334 0 4.051-.927 5.183-2.405v1.992h3.568zm120.577 0c0-2.884 1.89-5.254 4.979-5.254 2.955 0 4.943 2.268 4.943 5.254s-1.988 5.254-4.943 5.254c-3.089 0-4.98-2.37-4.98-5.254m13.29 0v-14.795h-3.571v8.582c-1.132-1.477-2.85-2.404-5.183-2.404-4.602 0-8.21 3.607-8.21 8.617 0 5.014 3.608 8.618 8.21 8.618 2.334 0 4.051-.927 5.183-2.405v1.992h3.572zm-89.575-5.423c2.299 0 3.776 1.443 4.154 3.981H96.32c.381-2.37 1.82-3.98 4.362-3.98m.07-3.195c-4.81 0-8.173 3.5-8.173 8.617 0 5.219 3.501 8.618 8.413 8.618 2.472 0 4.736-.617 6.728-2.299l-1.749-2.645c-1.375 1.097-3.128 1.718-4.774 1.718-2.3 0-4.394-1.065-4.908-4.02h12.185c.036-.444.071-.892.071-1.372-.035-5.116-3.195-8.617-7.792-8.617m43.084 8.617c0-2.884 1.89-5.254 4.979-5.254 2.951 0 4.943 2.268 4.943 5.254s-1.992 5.254-4.943 5.254c-3.089 0-4.979-2.37-4.979-5.254m13.286 0v-8.205h-3.568v1.992c-1.136-1.477-2.849-2.404-5.183-2.404-4.602 0-8.21 3.607-8.21 8.617 0 5.014 3.608 8.618 8.21 8.618 2.334 0 4.047-.927 5.183-2.405v1.992h3.568zm-33.437 0c0 4.98 3.466 8.618 8.755 8.618 2.472 0 4.118-.55 5.903-1.957l-1.714-2.884c-1.34.962-2.747 1.477-4.295 1.477-2.849-.035-4.943-2.094-4.943-5.254s2.094-5.218 4.943-5.254c1.548 0 2.955.515 4.295 1.478l1.714-2.884c-1.785-1.407-3.431-1.957-5.903-1.957-5.289 0-8.755 3.638-8.755 8.617m46.004-8.617c-2.059 0-3.399.962-4.326 2.404v-1.992h-3.537v16.41h3.572v-9.199c0-2.715 1.167-4.224 3.501-4.224.723 0 1.478.102 2.232.412l1.1-3.363c-.79-.31-1.819-.448-2.542-.448m-95.65 1.717c-1.718-1.132-4.084-1.717-6.693-1.717-4.158 0-6.834 1.992-6.834 5.253 0 2.677 1.993 4.327 5.663 4.842l1.686.24c1.957.275 2.88.79 2.88 1.717 0 1.269-1.304 1.992-3.74 1.992-2.473 0-4.257-.79-5.46-1.717l-1.68 2.778c1.956 1.442 4.428 2.13 7.104 2.13 4.739 0 7.486-2.232 7.486-5.356 0-2.885-2.162-4.394-5.734-4.908l-1.681-.244c-1.545-.204-2.783-.51-2.783-1.611 0-1.203 1.167-1.922 3.124-1.922 2.095 0 4.123.79 5.117 1.407zm46.039-1.717c-2.06 0-3.4.962-4.323 2.404v-1.992h-3.537v16.41h3.568v-9.199c0-2.715 1.168-4.224 3.502-4.224.723 0 1.477.102 2.232.412l1.1-3.363c-.79-.31-1.82-.448-2.542-.448m-30.451.412h-5.836v-4.979h-3.607v4.98h-3.328v3.26h3.328v7.487c0 3.807 1.478 6.075 5.698 6.075 1.548 0 3.332-.48 4.464-1.27l-1.03-3.057c-1.064.617-2.232.928-3.159.928-1.784 0-2.366-1.1-2.366-2.747v-7.415h5.836zm-53.353 16.41v-10.3c0-3.878-2.471-6.487-6.456-6.522-2.094-.036-4.256.617-5.769 2.92-1.131-1.82-2.915-2.92-5.423-2.92-1.752 0-3.465.514-4.805 2.436v-2.024H10.25v16.41h3.603v-9.097c0-2.849 1.58-4.362 4.02-4.362 2.37 0 3.568 1.545 3.568 4.327v9.132h3.608v-9.097c0-2.849 1.646-4.362 4.016-4.362 2.436 0 3.603 1.545 3.603 4.327v9.132z"
                                    fill="#fff"></path>
                                <path
                                    d="M198.13 100.048V97.65h-.625l-.723 1.646-.72-1.646h-.628v2.397h.444V98.24l.676 1.56h.46l.676-1.564v1.812zm-3.965 0v-1.989h.801v-.404h-2.043v.404h.802v1.989z"
                                    fill="#f79410"></path>
                                <path d="M127.082 110.359H73.004V13.171h54.078z" fill="#ff5f00"></path>
                                <path
                                    d="M76.469 61.757c0-19.715 9.23-37.276 23.605-48.593A61.538 61.538 0 0061.878-.052C27.745-.052.077 27.621.077 61.758s27.668 61.808 61.801 61.808a61.538 61.538 0 0038.196-13.215C85.699 99.034 76.469 81.472 76.469 61.757"
                                    fill="#eb001b"></path>
                                <path
                                    d="M200.016 61.757c0 34.137-27.668 61.81-61.801 61.81a61.557 61.557 0 01-38.2-13.216c14.378-11.317 23.61-28.879 23.61-48.594s-9.232-37.276-23.61-48.593a61.557 61.557 0 0138.2-13.216c34.133 0 61.801 27.673 61.801 61.81"
                                    fill="#f79e1b"></path>
                            </svg>
                        </div>
                        <div class="footer-icon mastercard">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 27" class="Icon_icon__2Th0s">
                                <path fill="#FFF"
                                    d="M59.532 1.627l-5.335 24.992h-6.459l5.336-24.992h6.458zM86.715 17.8l3.426-9.379 1.966 9.38h-5.392zm7.245 8.818h5.953L94.69 1.627h-5.504c-1.235 0-2.302.73-2.752 1.853l-9.716 23.139h6.796l1.348-3.707h8.312l.786 3.707zm-16.905-8.144c.056-6.57-9.098-6.964-9.042-9.884 0-.899.899-1.854 2.752-2.078.899-.113 3.482-.225 6.346 1.123l1.124-5.28c-1.573-.561-3.539-1.123-6.066-1.123-6.402 0-10.895 3.37-10.895 8.256-.057 3.595 3.2 5.617 5.672 6.796 2.527 1.236 3.37 2.022 3.37 3.089 0 1.685-2.022 2.415-3.875 2.471-3.258.056-5.111-.898-6.628-1.572l-1.18 5.503c1.517.674 4.325 1.292 7.19 1.348 6.795-.112 11.232-3.482 11.232-8.649M50.322 1.627L39.876 26.619h-6.852L27.857 6.68c-.337-1.235-.562-1.685-1.517-2.19-1.572-.843-4.1-1.629-6.346-2.134l.168-.73H31.17c1.404 0 2.64.954 2.977 2.527l2.696 14.434 6.74-17.018h6.739">
                                </path>
                            </svg>
                        </div>
                        <div class="footer-icon mastercard">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 27" class="Icon_icon__2Th0s">
                                <circle fill="#EE0005" transform="translate(-32)" cx="55.4" cy="13.5"
                                    r="11"></circle>
                                <circle fill="#0098E2" transform="translate(-32)" cx="69.1" cy="13.5"
                                    r="11"></circle>
                                <path fill="#6C69BF"
                                    d="M26.1 13.5c0 3.5 1.6 6.6 4.2 8.6 2.5-2 4.2-5.1 4.2-8.6s-1.6-6.6-4.2-8.6c-2.6 2-4.2 5.1-4.2 8.6z">
                                </path>
                            </svg>
                        </div>
                        <div class="footer-icon mastercard">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 27" class="Icon_icon__2Th0s">
                                <path fill="#FFF"
                                    d="M101.8.2c2 0 3.9.5 5.6 1.3.3.1.5.3.8.4l-1.2 1-1.8-1.8-3 2.7-1.8-1.9-5.6 5 3.6 3.9-1.3 1.2 3.5 3.9-1.4 1.2 5 5.5 3-2.7 2.6 2.9c-.5.4-1.1.8-1.7 1.1-1.9 1-4 1.6-6.3 1.6-7.1 0-12.8-5.7-12.8-12.7C89 5.9 94.8.2 101.8.2zm-2.3 11.9l3.1-2.7 2.7 3-3.1 2.7-2.7-3zm2.2 5.3l3-2.7 2.8 3-3.1 2.7-2.7-3zM97.3 7l3.1-2.7 2.7 3L100 10l-2.7-3zm5.6-1.5l2.3-2 2.1 2.3-2.3 2-2.1-2.3zm4.1 9.3l2.3-2 2.1 2.3-2.3 2-2.1-2.3zm2 4.6l2.3-2 2.1 2.3-2.3 2.1-2.1-2.4zm.9-10.5l1.5-1.4 1.4 1.5-1.5 1.4-1.4-1.5zM108 4.5l1.5-1.4 1.4 1.5-1.6 1.4-1.3-1.5zm3.9 8.9l1.5-1.4 1.4 1.5-1.5 1.4-1.4-1.5zm-6.9-3.3l2.3-2 2.1 2.3-2.3 2-2.1-2.3zM10.9 9.009h-.2l-2.1 8.2H6.8l-2.7-11.7H6l1.8 8.7h.1l2.2-8.7h1.4l2.3 8.7h.1l1.7-8.7h1.9l-2.6 11.7h-1.8zm9 3.191h3.8c-.1-1.7-.9-2.4-1.8-2.4-1.1 0-1.9.8-2 2.4m5 3.1v1.3c-.7.4-1.7.8-2.9.8-2.8 0-3.9-1.7-3.9-4.3 0-2.5 1.3-4.3 3.7-4.3 2.1 0 3.3 1.3 3.3 4v.6h-5.4c0 2 .8 2.9 2.5 2.9 1-.1 1.8-.4 2.7-1m4.1.7c.5.2 1.1.3 1.5.3 1.2 0 2.1-.8 2.1-3.4 0-2.1-.8-2.8-1.9-2.8-.7 0-1.1.2-1.8.5L29 16zm0-6.6c.5-.3 1.3-.6 2.2-.6 2 0 3.1 1.4 3.1 4.1 0 3.1-1.5 4.6-3.9 4.6-.9 0-2.2-.3-3.2-.8V5.1l1.8-.4v4.7zm12.8 5.3h.1l3.5-9.2h2v11.7h-1.8V8.7h-.1l-3.4 8.5h-1l-3.4-8.3h-.1v8.3h-1.5V5.5h2zM54.7 13c0-2.2-.9-3.2-2-3.2s-2 .9-2 3.2c0 2.3.9 3.2 2 3.2s2-.9 2-3.2m-5.8 0c0-2.9 1.6-4.3 3.7-4.3 2.2 0 3.7 1.4 3.7 4.3 0 2.8-1.5 4.3-3.7 4.3s-3.7-1.5-3.7-4.3m8.8-3.1c.7-.4 2.3-1.2 4.2-1.2 2 0 2.7.8 2.7 2.5v6h-1.7v-5.6c0-1.3-.6-1.5-1.5-1.5-.7 0-1.5.3-2 .6v6.5h-1.7V9.9zm10.5 2.3H72c-.1-1.7-.9-2.4-1.8-2.4-1 0-1.8.8-2 2.4m5.1 3.1v1.3c-.7.4-1.7.8-2.9.8-2.8 0-3.9-1.7-3.9-4.3 0-2.5 1.3-4.3 3.7-4.3 2.1 0 3.3 1.3 3.3 4v.6h-5.4c0 2 .8 2.9 2.5 2.9 1-.1 1.8-.4 2.7-1m7.1-6.6h1.8l-3 8.3c-.8 2.3-1.8 3.5-3.7 3.5v-1.4c1.1 0 1.8-.9 2.2-2.1l-3.2-8.3h1.8l2.1 6.1h.1l1.9-6.1z">
                                </path>
                                <path fill="#C0DAEC"
                                    d="M21.9 24.8v-.7c.6.3 1.2.5 1.7.5s.8-.1 1.1-.3c.2-.2.4-.4.4-.7 0-.3-.1-.5-.3-.6-.2-.1-.6-.3-1.1-.5-.2-.1-.3-.1-.4-.1-.1 0-.2-.1-.3-.1-.2-.1-.3-.1-.3-.1s-.1-.1-.2-.1c-.1-.1-.2-.1-.2-.2s-.1-.1-.2-.2-.1-.2-.1-.2c0-.1 0-.2-.1-.3v-.3c0-.5.2-.8.5-1.1.3-.3.8-.4 1.4-.4.5 0 1.1.1 1.6.3v.8c-.5-.3-1-.4-1.6-.4-.4 0-.6.1-.8.2-.2.2-.3.4-.3.6 0 .3.1.5.3.6.2.1.5.3 1 .5.8.3 1.3.6 1.6.8.3.2.4.6.4 1.1 0 .5-.2.9-.6 1.2-.4.3-1 .5-1.7.5-.7-.4-1.3-.5-1.8-.8zm8.3.3h-.8l-.1-.5c-.5.4-.9.6-1.4.6-.4 0-.7-.1-.9-.3-.2-.2-.3-.5-.3-.8 0-.2 0-.3.1-.5s.2-.3.3-.5c.1-.1.4-.3.7-.4.3-.1.6-.1 1-.1h.5v-.2c0-.4-.1-.6-.2-.8-.1-.1-.4-.2-.7-.2-.4 0-.9.2-1.4.5v-.7c.6-.3 1.2-.4 1.7-.4s.9.1 1.1.3c.2.2.3.6.3 1l.1 3zm-.9-1.9h-.4c-.9 0-1.3.3-1.3.8 0 .2.1.3.2.4.1.1.3.1.4.1.2 0 .4-.1.7-.2.2-.1.4-.2.5-.4l-.1-.7zm2.2 3.6v-5.3c.2-.2.5-.3.8-.4.3-.1.6-.2 1-.2 1.1 0 1.7.7 1.7 2.1 0 .7-.1 1.3-.4 1.6-.3.4-.7.6-1.3.6-.4 0-.7-.1-1-.3v1.9h-.8zm.9-5.1v2.5c.1.1.2.2.4.2.2.1.3.1.4.1.3 0 .5-.1.7-.4.2-.2.3-.7.3-1.3 0-.5-.1-.9-.3-1.1-.2-.2-.4-.3-.7-.3-.3.1-.6.2-.8.3zm4.6-.8v4.2h-.8v-4l.8-.2zm-1-1.2c0-.1.1-.3.2-.4.1-.1.2-.2.4-.2.1 0 .3.1.4.2.1.1.2.2.2.4 0 .1-.1.3-.2.4-.1.1-.2.2-.4.2-.1 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4zm4.2 4.9c.4 0 .8-.1 1.3-.4v.6c-.4.3-.9.4-1.4.4-.7 0-1.2-.2-1.5-.6-.3-.4-.5-.9-.5-1.6 0-.7.2-1.2.5-1.6.3-.4.8-.6 1.4-.6.5 0 .9.2 1.2.5.3.3.4.8.4 1.5v.3h-2.7c0 .5.1.9.3 1.1.2.3.5.4 1 .4zm-.3-3.2c-.3 0-.5.1-.6.3-.2.2-.3.5-.3.9h1.9c0-.4-.1-.7-.3-.9-.2-.2-.5-.3-.7-.3zm2.8 3.7v-3.6c.7-.4 1.4-.6 2.1-.6.5 0 .8.1 1 .3.2.2.3.5.3.9v3h-.8v-2.8c0-.3-.1-.5-.2-.6-.1-.1-.3-.2-.5-.2-.3 0-.7.1-1 .3v3.3h-.9zm5.5-4.1h1.3l-.2.6h-1.1v2.2c0 .6.2.8.7.8.2 0 .4 0 .5-.1v.5c-.3.1-.6.1-.9.1-.4 0-.7-.1-.9-.4-.2-.2-.3-.5-.3-.9v-3.4l.8-.6.1 1.2zm3-.1v4.2h-.8v-4l.8-.2zm-1-1.2c0-.1.1-.3.2-.4.1-.1.2-.2.4-.2.1 0 .3.1.4.2.1.1.2.2.2.4 0 .1-.1.3-.2.4-.1.1-.2.2-.4.2-.1 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4zm6.8 1.5v.7c-.4-.3-.8-.4-1.2-.4-.2 0-.4 0-.5.1-.1.1-.2.2-.2.4s.1.3.2.4c.1.1.4.2.7.3.2.1.3.1.4.1.1 0 .2.1.4.2.1.1.3.2.3.2.1.1.1.2.2.3.1.1.1.3.1.4 0 .4-.2.7-.5.9-.3.2-.7.3-1.2.3-.6 0-1-.1-1.4-.4v-.6c.5.3.9.4 1.3.4.6 0 .9-.2.9-.6 0-.1 0-.1-.1-.2 0-.1-.1-.1-.1-.2 0 0-.1-.1-.2-.1-.1-.1-.2-.1-.3-.1-.1 0-.2-.1-.3-.1-.2-.1-.4-.2-.5-.2-.1-.1-.3-.1-.4-.2l-.3-.3c-.1-.1-.1-.3-.1-.5s.1-.4.2-.6c.1-.2.3-.3.4-.4.2-.1.3-.1.5-.1h.4c.4-.1.8.1 1.3.3zm4.5 3.9h-.8l-.1-.5c-.5.4-.9.6-1.4.6-.4 0-.7-.1-.9-.3-.2-.2-.3-.5-.3-.8 0-.2 0-.3.1-.5s.2-.3.3-.5c.1-.1.4-.3.7-.4.3-.1.6-.1 1-.1h.5v-.2c0-.4-.1-.6-.2-.8-.1-.1-.4-.2-.7-.2-.4 0-.9.2-1.4.5v-.7c.6-.3 1.2-.4 1.7-.4.6 0 .9.1 1.1.3.2.2.3.6.3 1l.1 3zm-.9-1.9h-.4c-.9 0-1.3.3-1.3.8 0 .2.1.3.2.4.1.1.3.1.4.1.2 0 .4-.1.7-.2.2-.1.4-.2.5-.4l-.1-.7zm3-2.2h1.3l-.2.6h-1.1v2.2c0 .6.2.8.7.8.2 0 .4 0 .5-.1v.5c-.3.1-.6.1-.9.1-.4 0-.7-.1-.9-.4-.2-.2-.3-.5-.3-.9v-3.4l.8-.6.1 1.2z">
                                </path>
                            </svg>
                        </div>
                        <div class="footer-icon mastercard">
                            <img class="Inco_icon_2Th0s"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/UPI-Logo-vector.svg/1280px-UPI-Logo-vector.svg.png"
                                style="width:60px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-column footer-column_left antillephone">
                <div class="footer__antillephone-license d-flex align-items-start">
                    <div class="antialis-inner ">
                        <a class="d-flex align-items-start">
                            <img src="https://aviator.bhishmadhakal.com.np/images/copyright.png" class="w-100">

                        </a>
                    </div>
                    <p class="ftr-txt">Copyright © 2022-2023 . All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
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
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.js') }}"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>


    <!--====== Country Selection js ======-->
    <script src="{{ asset('assets/js/niceCountryInput.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ccpicker.js') }}" type="text/javascript"></script>

    <!--====== Animation Selection js ======-->
    <script src='{{ asset('assets/js/anime.min.js') }}'></script>

    <!--====== Owl Carousel js ======-->
    <script src='{{ asset('assets/js/owl.carousel.min.js') }}'></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!--====== Validate js ======-->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

    <!--====== Toastr js ======-->
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

    <!--====== Datatable js ======-->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{ asset('assets/js/avatar.js') }}"></script>
    <script src="{{ asset('assets/js/canvas.js') }}"></script>
    <script src="{{ asset('assets/js/aviatorold.js') }}?v="></script>
    <script src="{{ asset('assets/js/aviatorbyapp.js') }}?v="></script>
    <script>
        var hash_id = '{{ csrf_token() }}';
        var currency_id = '₹';
        var currency_symbol = '₹';
        var wallet_balance = '{{ auth()->user()->balance }}';
        var profile_image = '1';
        var member_id = '{{ auth()->user()->id }}';
        var min_bet_amount = parseFloat('10');
        var max_bet_amount = parseFloat('5000');
        var current_game_data = '1';
    </script>
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
