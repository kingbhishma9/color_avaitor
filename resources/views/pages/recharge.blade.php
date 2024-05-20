@extends('layouts.app')

@section('content')
    <div data-v-c32a0642="" class="Recharge__box" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
        <div data-v-c32a0642="" class="Recharge__container">
            <div data-v-4c21fa9e="" data-v-c32a0642="" class="navbar">
                <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                    <div data-v-4c21fa9e="" class="navbar__content">
                        <div data-v-4c21fa9e="" onclick="window.location.href='{{ route('account') }}'"
                            class="navbar__content-left">
                            <img src="{{ asset('assets/png/back.png') }}"width="12" height="12" />
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-center">
                            <div data-v-4c21fa9e="" class="navbar__content-title">Deposit</div>
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-right" style="display:none;">
                            <div data-v-c32a0642="" class="title">Deposit history</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-d42c1f7a="" data-v-c32a0642="" class="balanceAssets">
                <div data-v-d42c1f7a="" class="balanceAssets__header">
                    <div data-v-d42c1f7a="" class="balanceAssets__header__left"><img data-v-d42c1f7a=""
                            src="{{ asset('assets/png/wallet.png') }}">
                        Balance</div>
                </div>
                <div data-v-d42c1f7a="" class="balanceAssets__main">
                    <p data-v-d42c1f7a="">₹{{ auth()->user()->deposit }} </p>
                    <img data-v-d42c1f7a="" onclick="window.location.href=''" src="{{ asset('assets/png/refresh.png') }}">
                </div>
                <div data-v-d42c1f7a="" class="balanceAssets__tip"><img data-v-d42c1f7a=""
                        src="{{ asset('assets/png/chip.png') }}" alt=""></div>
            </div>
            <div data-v-5aaf3cbf="" data-v-c32a0642="">
                <div data-v-5aaf3cbf="" class="Recharge__container-tabcard">

                    <div data-v-5aaf3cbf="" onclick="window.location.href='/bankpay#';"
                        class="Recharge__container-tabcard__items active">
                        <div data-v-5aaf3cbf="" class="centers">
                            <div data-v-5aaf3cbf="" class="Recharge__container-tabcard__top"><img data-v-5aaf3cbf=""
                                    class="img" src="{{ asset('assets/png/upi.png') }}" alt=""></div>
                            <div data-v-5aaf3cbf="" class="Recharge__container-tabcard__bot">UPI-Transfer </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-37666d52="">
                <div data-v-37666d52="" class="recharge">
                    <div data-v-a6dc3363="" data-v-c32a0642="" class="Recharge__content">
                        <div data-v-a6dc3363="" class="Recharge__content-paymoney boxStyle">
                            <div data-v-a6dc3363="" class="Recharge__content-paymoney__title">
                                <img data-v-a6dc3363=""
                                    src="{{asset('assets/png/depositamt.png')}}"
                                    alt="">
                                <p data-v-a6dc3363="">Deposit amount</p>
                            </div>
                            <div data-v-a6dc3363="" class="Recharge__content-paymoney__money-list">
                                <div data-v-a6dc3363="" id="500" class="Recharge__content-paymoney__money-list__item">
                                    <span data-v-a6dc3363="">₹</span>
                                    1K
                                </div>
                                <div data-v-a6dc3363="" id="1000" class="Recharge__content-paymoney__money-list__item">
                                    <span data-v-a6dc3363="">₹</span>
                                    3K
                                </div>
                                <div data-v-a6dc3363="" id="2000" class="Recharge__content-paymoney__money-list__item">
                                    <span data-v-a6dc3363="">₹</span>
                                    5K
                                </div>
                                <div data-v-a6dc3363="" id="5000" class="Recharge__content-paymoney__money-list__item">
                                    <span data-v-a6dc3363="">₹</span>
                                    10K
                                </div>
                                <div data-v-a6dc3363="" id="10000" class="Recharge__content-paymoney__money-list__item">
                                    <span data-v-a6dc3363="">₹</span>
                                    30K
                                </div>
                                <div id="20000" data-v-a6dc3363=""
                                    class="Recharge__content-paymoney__money-list__item"><span data-v-a6dc3363="">₹</span>
                                    50K</div>
                            </div>
                            <div data-v-a6dc3363="" class="Recharge__content-paymoney__money-input">
                                <div data-v-a6dc3363="" class="place-div">₹</div>
                                <div data-v-a6dc3363="" class="van-cell van-field amount-input"
                                    modelmodifiers="[object Object]">
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <input type="tel" maxlength="5" autocomplete="off" id="amount"
                                                class="van-field__control" placeholder="Please enter the amount">
                                        </div>
                                    </div>
                                </div>
                                <div data-v-a6dc3363="" class="place-right" style="display:none;">
                                    <img data-v-a6dc3363=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAPFBMVEUAAABoaGhoaGhmZmZnZ2dmZmZmZmZwcHBmZmZnZ2doaGhnZ2dmZmZmZmZmZmZpaWlmZmZgYGBnZ2dmZmbTzN1eAAAAE3RSTlMAXyDvv3DfEK+fQN+AUM8wkBDPjWztQAAAAuRJREFUaN7tWduu4yAM5H4LNO3p///rbkO1PNhh4BBVWql+aomZwWMSLhZf+9rHTMkcjXPPv6adCbnsF4J7G/STmA5SXYNunqdmljlS1M++RbUCb5og5i6LOsD8nuzd6HUKFf4pYZmU7tasUdj3GLfsz6fW9qbI88M378Gnvl95+zk1P/wKDy3VKLSdwb/XPnLMW26TMvkadvDDesapDurGh4wlvakhfHfMncmkqW001f4Y/w/rieO+YZXCge/FtD0OBoPcMsCHDHeQLISPGWxXSI3yizOte90dcIAMup+GDELEZrsI6vj0iiULPQ0iTgBO9Euk0AlAikWTL5R0HoBYNnOWZ8VRF+1Kd7z0eToLIXLMjqhG9NBcCPEkADJaTfJC9N4EE4L2rPPGtTYG/iGVcGPfBVOBMAN+lN9iU4UUgBmkfrweeOpeWTEQFs8wGoXWhqFoI/0iBWa67AIwDOKLvc1e0oQZaAM1TRJaWgowA8XHUzK31RQwtD9gZ5i5HGOG9hN5RxJTEgMMGJ9X3LVJBBgAfnttHUm7FyMMLD4mePUSyCTGp3i0ATNI8b8STEpEZpFaSTL9YGtAsDRNdzKLDFn7ll60RF60CPrgTwVdED77sZPLn2uguLp+wdk/sGR+dNG3V29bJNgszW+86CaOsmYAM0FtWN0caS0UBDO42sodrhLxxdt3zQ5KDR5AND6AbJ0DCD76lE3z+O154XAUOL2tmDs9bKfrjrGqc0r3a/iqBtC5yghrBJEGQK8yFsyC+01zxXXOhhycWkgAGqAFV4fowhJLfAcMED8jNwMYAH4YvDq8/fJi9scvXBIvXUivX47PXEg/wmRlxtcOZjxzuZZNRgsU+nC//6LE4tJoLYxKilNdwy4QvvpxemKZqlCnfX12TzB8UJkZLNQFMHxIUUuNNu3+aFVFtlIjqoVhir7pmJYr1b1yr/XXVMP5gjVBX7G95GDcweOciVkq8bWvfcr+APQTXgFY+Cs5AAAAAElFTkSuQmCC"
                                        alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div data-v-c32a0642="" onclick="window.location.href='{{ route('payment') }}'"
                        class="Recharge__container-rechageBtn rechage_active">
                        Deposit</div>
                    <div data-v-9875b8ec="" data-v-c32a0642="" class="Recharge__container-intro">
                        <div data-v-9875b8ec="" class="Recharge__container-intro__title"><img data-v-9875b8ec=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAP1BMVEUAAAD/cXL/cXL/cXL/cHD/cXL/cHP/cXP/cXT/cnP/cnL/c3P/cHj/cXP/cnL/cHj/cnL/cnL/cHL/cHD/cXJEdSoUAAAAFHRSTlMA799fIJBQv0Cfn1Agz3AQr4BwMGQ0OlkAAADtSURBVGje7dm5jgIxEIThPjz3sOxR7/+siwhABIzssSpAqj9z9EnuxHKbUupN83BxtBRpDWWgObfq9glnsto2BxXYgD4g/XAeu/cCcTyPQC9wfF0JMhBkYAYZGNjAxAacDUCAAAECBAgQIECAAAECBAgQ8BFAkAHPNsDXsVhbTcD31cyIwK8ZFfgxLrAaGShkYDUyMLKBv8cpHZVFNgCnfmn9FOCoLioBB1BOLEI8K4ELe8gDgIEJzAD8SgQsACxMIHHriwjY9BQ4QHHcWnYaYCPuLVshATY6urPDSpCAZ9lJRM26d/KeN5JS6qV/A1tBf8qroqkAAAAASUVORK5CYII="
                                alt="">
                            <p data-v-9875b8ec="">Recharge instructions</p>
                        </div>
                        <div data-v-9875b8ec="" class="Recharge__container-intro__lists">
                            <div data-v-9875b8ec="" class="item">
                                <p data-v-9875b8ec="">If the transfer time is up, please fill out the deposit form again.
                                </p>
                                <p data-v-9875b8ec="">The transfer amount must match the order you created, otherwise the
                                    money cannot be credited successfully.</p>
                                <p data-v-9875b8ec="">If you transfer the wrong amount, our company will not be responsible
                                    for the lost amount!</p>
                                <p data-v-9875b8ec="">Note: do not cancel the deposit order after the money has been
                                    transferred.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var fivehundred = document.getElementById("500");
            var thousand = document.getElementById("1000");
            var twothousand = document.getElementById("2000");
            var fivethousand = document.getElementById("5000");
            var tenthousand = document.getElementById("10000");
            var twentythousand = document.getElementById("20000");

            fivehundred.onclick = function() {
                document.getElementById("amount").value = "1000";
            }
            thousand.onclick = function() {
                document.getElementById("amount").value = "3000";
            }
            twothousand.onclick = function() {
                document.getElementById("amount").value = "5000";
            }
            fivethousand.onclick = function() {
                document.getElementById("amount").value = "10000";
            }
            tenthousand.onclick = function() {
                document.getElementById("amount").value = "30000";
            }
            twentythousand.onclick = function() {
                document.getElementById("amount").value = "50000";
            }
        </script>

        <style>
            /* The container */
            .container {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Hide the browser's default radio button */
            .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
            }

            /* Create a custom radio button */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 50%;
            }

            /* On mouse-over, add a grey background color */
            .container:hover input~.checkmark {
                background-color: #ccc;
            }

            /* When the radio button is checked, add a blue background */
            .container input:checked~.checkmark {
                background-color: #2196F3;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .container input:checked~.checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .container .checkmark:after {
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }

            .mian .selectBox .recharge-btn[data-v-37666d52] {
                width: 70%;
                height: 1.06667rem;
                font-size: .4rem;
                margin: 0 auto;
                border: 0.02667rem solid #02a0da;
                color: #fff;
                background-color: #02a0da;
                box-shadow: 0 0 0.21333rem 0.02667rem rgba(2, 160, 218, .72);
            }
        </style>
    </div>
@endsection
