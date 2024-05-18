@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <div class="row mcas">
            <div class="col-md-6 col-lg-4 main">
                <div class="row" id="warea">
                    <div class="col-12 m-record" id="moreRcd">
                        <div style="background: linear-gradient(180deg,#fe6868 0%,#ff8e8a 100%);" class="row nav-top">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2 xtl">
                                        <span class="nav-back wt" id="backF"
                                            onclick="window.location.href='{{route('account')}}';">
                                           
                                        </span></div>
                                    <div class="col-10 pl-0 xtl"><span class="tf-18 tfs-w" id="MoreRCT">Deposit
                                            Record</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-0" id="dtaod">
                                data row
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="odrea"></div>
                <div class="row" id="footer"></div>
                <div class="row" id="opffp"></div>
                <div class="row" id="anof"></div>
                <div class="row" id="dta_ref"></div>
            </div>
        </div>
        <style>
            .pt-2,
            .py-2 {
                padding-top: 0.5rem !important;
            }

            .pt-0,
            .py-0 {
                background-color: #f7f8ff;
            }
        </style>
        <style>
            G {
                color: #fff;
                font-size: 14px;
                background-color: #0093ff;
                height: 38px;
                line-height: 30px;
                border-radius: 6px;
                border: 2px solid #0093ff;
                transition: 1.3s;
                text-align: center;
                white-space: nowrap;
            }

            .upi.lar {
                height: 50px;
                min-width: 59px;
            }

            .upi {
                background: url(https://jimart.co.in/wp-content/uploads/2020/09/800px-UPI-Logo-vector.svg-1.png) no-repeat center;
                background-size: contain;
                height: 18px;
                min-width: 28px;
                display: inline-flex;
                vertical-align: text-top;
            }

            .bggry {
                background: #fff;
                color: #598ff9;
            }

            .bggr {
                background: #fff;
                color: #34be8a;
            }

            .bgrd {
                background: #fff;
                color: #f95959;
            }

            .back,
            .nav-back {
                background: url(/includes/icons/back.png) no-repeat center;
                background-size: contain;
                height: 45px;
                min-width: 25px;
                display: inline-flex;
                vertical-align: text-top;
                cursor: pointer;
            }
        </style>
        <script>
            function myFunction() {
                alert(
                    "We've received your complaint. We are currently working on a resolution to your issue, for more info you can contact our official customer care team via telegram for fastest support : SoumyaGamers");
            }
        </script>
    </section>
@endsection
