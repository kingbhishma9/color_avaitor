@extends('layouts.app')

@section('content')
    <section class="container-fluid">
        <div class="row mcas">
            <div class="col-md-6 col-lg-4 main">
                <div class="row" id="warea">
                    <div class="col-12 m-record" id="moreRcd">
                        <div data-v-4c21fa9e="" data-v-c32a0642="" class="navbar">
                            <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                                <div data-v-4c21fa9e="" class="navbar__content">
                                    <div data-v-4c21fa9e="" onclick="window.location.href='{{ route('account') }}';"
                                        class="navbar__content-left">
                                        <img src="{{asset('assets/png/back.png')}}" width="12" height="12"/>
                                    </div>

                                    <div data-v-4c21fa9e="" class="navbar__content-center">
                                        <div data-v-c32a0642="" class="title">Withdrawal history</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-0" id="dtaod">
                                @foreach ($withdrawalrecord as $item)
                                <div data-v-785ec202="" class="lotterySlotItem">
                                    <span data-v-785ec202="">{{ $item->amount }}</span>
                                    <h4 data-v-785ec202="" style="text-align: right">{{ $item->created_at }}</h4>

                                    <h5 data-v-785ec202="">{{ $item->orderid }}</h5>

                                    {{-- <span style="color: white; margin-top: 205px;">{{ $item->orderid }}</span> --}}


                                </div>
                            @endforeach
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
                background: url({{asset('assets/png/800px-UPI-Logo-vector.svg-1.png')}}) no-repeat center;
                background-size: contain;
                height: 18px;
                min-width: 28px;
                display: inline-flex;
                vertical-align: text-top;
            }

            .bggry {
                background: #598ff9;
            }

            .bggr {
                background: rgb(106, 190, 87);
            }

            .bgrd {
                background: #f95959;
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
    @endsection
