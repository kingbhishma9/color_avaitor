@extends('layouts.app')

@section('content')
    <div id="app">
        <div data-v-4ab5abd9="" class="mian">
            <div data-v-c2022cca="" data-v-4ab5abd9=""
                style="background: linear-gradient(90deg,#f95959 0%,#ff9a8e 100%)!important;" class="navbar">
                <div data-v-c2022cca="" class="navbar-left"></div>
                <div data-v-c2022cca="" class="navbar-title"> My Team </div>
                <div data-v-c2022cca="" class="navbar-right">
                    <div data-v-4ab5abd9="" data-v-c2022cca="" class="c-row">
                        <img src="{{ asset('assets/png/back.png') }}" width="24" height="24"
                            onclick="window.location.href='{{ route('promotion') }}'" />
                    </div>
                </div>
            </div>
            <div data-v-4ab5abd9="" class="promotion">
                <div data-v-4ab5abd9="" class="tab">
                    <ul data-v-4ab5abd9="" class="c-row c-row-between">
                        <li data-v-4ab5abd9="" onclick="window.location.href='promotion#'">Data Overview</li>
                        <li data-v-4ab5abd9="" onclick="window.location.href='/myTeam?user=username'" class="action"
                            style="color:#f95959;">My Team</li>
                    </ul>
                </div>
                <div data-v-4ab5abd9="" class="box">
                    <div data-v-4ab5abd9="" class="tit c-row c-row-between">Direct Team()</div>
                </div>
                <div data-v-4ab5abd9="" class="hd van-row"></div>
                <div class="invnav">
                    <div data-v-4ab5abd9="" class="inavlist btn c-tc act" id="l1" onclick="l1()"
                        style="font-size:20px;">Level 1</div>
                    <div data-v-4ab5abd9="" class="inavlist btn c-tc act" id="l2"
                        style="background:#bbd2f0;font-size:20px;" onclick="l2()">Level 2</div>
                </div>

                <div class="row mr-0">
                    <div class="col-12 pa-0" id="dtaod">
                        <div id="level2" style="display:none;">
                            data row1
                        </div>f
                        <div id="level1" style="display:;">
                            data row
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-v-7692a079="" data-v-4ab5abd9="" class="Loading c-row c-row-middle-center" style="display: none;">
        <div data-v-7692a079="" class="van-loading van-loading--circular"><span data-v-7692a079=""
                class="van-loading__spinner van-loading__spinner--circular" style="color: rgb(242, 65, 59);"><svg
                    data-v-7692a079="" viewBox="25 25 50 50" class="van-loading__circular">
                    <circle data-v-7692a079="" cx="50" cy="50" r="20" fill="none"></circle>
                </svg></span></div>
    </div>
    </div>
    </div>
    <script>
        window.onload = function() {
            let cfg = JSON.parse(localStorage.getItem('clientCfg'));
            // console.log(cfg)
            if (cfg) {
                var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
                // var meta = document.querySelector("meta[name*='google-site-verification']") || document.createElement('meta');
                // meta.content = '是十四'
                link.type = 'image/x-icon';
                link.rel = 'shortcut icon';
                link.href = cfg.WebIco; //'http://47.56.7.183:5001/img/tatalogo.jpg';
                document.getElementsByTagName('head')[0].appendChild(link);
                // document.getElementsByTagName('head')[0].appendChild(meta);

                document.getElementsByTagName("title")[0].innerText = cfg.ProjectName;
            }
            document.addEventListener('touchstart', function(event) {
                if (event.touches.length > 1) {
                    event.preventDefault(); //阻止元素的默认行为
                }
            }, {
                capture: false,
                passive: false,
                once: false
            });
            // document.addEventListener('touchmove', function (event) {
            // 	event.preventDefault();  //阻止元素的默认行为
            // }, {
            // 	passive: false,
            // });
        }
    </script>
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            background-color: #FFF;
            padding: 0;
            margin: 0;
        }
    </style>
    <script src="js/chunk-vendors.d6090956.js"></script>
    <script src="js/app.90bf53ad.js"></script>


    <style>
        .nav-top,
        .stick {
            background: #0093ff;
        }

        .inavlist.act {
            background: #0093ff;
            color: #fff;
        }

        .van-toast {
            position: fixed;
            top: 50%;
            left: 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: content-box;
            width: 88px;
            max-width: 70%;
            min-height: 88px;
            padding: 16px;
            color: #fff;
            font-size: 14px;
            line-height: 20px;
            white-space: pre-wrap;
            text-align: center;
            word-wrap: break-word;
            background-color: rgba(50, 50, 51, .88);
            border-radius: 8px;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }

        .van-toast--html,
        .van-toast--text {
            width: -webkit-fit-content;
            width: fit-content;
            min-width: 96px;
            min-height: 0;
            padding: 8px 12px;
        }

        .mian .promotion .btn[data-v-4ab5abd9] {
            height: 0.96rem;
            line-height: .96rem;
            padding: 0 0.26667rem;
            min-width: 1.6rem;
            background-color: #f95959;
            color: #fff;
            border-radius: 1.13333rem;
            box-shadow: 0 0.10667rem 0.53333rem 0.05333rem rgba(255, 153, 0, .27);
        }

        .back,
        .nav-back {
            background: url(/icons/back.png) no-repeat center;
            background-size: contain;
            height: 40px;
            min-width: 22px;
            display: inline-flex;
            vertical-align: text-top;
            cursor: pointer;
        }

        .navbar[data-v-c2022cca] {
            width: 100%;
            max-width: 10.66667rem;
            top: 0;
            height: 1.33333rem;
            line-height: 0.33333rem;
            background-image: linear-gradient(90deg, #f90, #e57201);
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            color: #fff;
            z-index: 999;
        }
    </style>
    <script src="js/chunk-vendors.c557979e.js"></script>
    <script src="js/app.0c3fc000.js"></script>
    <script>
        mui.init({
            keyEventBind: {
                backbutton: true,
            }
        })
        var first = null;
        mui.back = function() {
            if (!first) {
                first = new Date().getTime();
                var route_name = window.location.hash;
                if (route_name.search('mine') != -1 || route_name.search('login') != -1) {
                    mui.toast("Press again to exit the app");
                    setTimeout(function() {
                        first = null;
                    }, 500);
                } else {
                    history.go(-1);
                    first = null;
                };


            } else {
                if (new Date().getTime() - first < 500) {
                    plus.runtime.quit();
                }
            }
        }
    </script>
@endsection
