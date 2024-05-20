@extends('layouts.app')

@section('content')
    <div id="app" data-v-app="">
        <div data-v-4c21fa9e="" data-v-1159d77b="" class="navbar" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                <div data-v-4c21fa9e="" class="navbar__content">
                    <div data-v-4c21fa9e="" class="navbar__content-left"></div>
                    <div data-v-4c21fa9e="" class="navbar__content-center">
                        <div data-v-4c21fa9e="" class="navbar__content-title">Agency</div>
                    </div>
                    <div data-v-4c21fa9e="" onclick="window.location.href='/bonusrecord#/'" class="navbar__content-right">
                        <img data-v-1159d77b=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEX/WmYAAAD/WWf/Wmf/WmX/WGj/WGj/WWf/WGX/WWf/WGf/Wmf/W2b/V2X/W2n/WWj/WWX/WGf/WGf/WWP/XmX/U2z/WGj/XGb/W2j/WWf/Wmb/V2f/Wmb/WWdvLvmAAAAAHXRSTlNmALKfM0Ag32BZUS5GJl85H79wTSYNgBlM7++QgAa8nloAAAEfSURBVEjHzdNZcoMwEEXRfhEIJATYBIIzsP9tJnawGiQKNUm5yvf7HWYIB/sb0OcprKj2AO+592EHTFudgJZuWVcLwSvdM7UQcNlRQG3ipgsADS3TDPINUAIjrSoZoIv2X9fj0LqKAd6CfQegpyDHIBAfFsDYhMB4wII/i5riVgDK7zWAjJIAxQzmfQLwo1LR84lBXy/eRhcdPwZEGYNSBCg7CuiZgQVaGajm/2D+cdSLT22B+VWfNTDc9tMitQFGQH8qi58uImBwLyeSXBLZAdd0Q3ER+C3XuroQiQD3eMA3zKkUUFOQ+i8wskuyHjgS5TyoZKD2AI1kb8DgJDsBA7TpfYYlQJbat1gD9GZv3mgw8MTZ7bVx1QAGsp4ZfAM0fzA9owuXkgAAAABJRU5ErkJggg=="
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div data-v-ab64ca5b="" data-v-1159d77b="" class="container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-ab64ca5b="" class="amount">₹ {{ auth()->user()->bonus }}</div>
            <div data-v-ab64ca5b="" class="amount_txt">Yesterday's total commission</div>
            <div data-v-ab64ca5b="" class="tip">6 level commission income is available</div>
            <div data-v-ab64ca5b="" class="info_content">
                <div data-v-ab64ca5b="" class="info">
                    <div data-v-ab64ca5b="" class="head">Direct subordinates</div>
                    <div data-v-ab64ca5b="" class="line1">
                        <div data-v-ab64ca5b="">{{ $lvl2Count }}</div> Number Of Direct Subordinates
                    </div>
                    <div data-v-ab64ca5b="" class="line2">
                        <div data-v-ab64ca5b="">₹ {{ $lvl1sum }}</div> Total Commission Received
                    </div>

                </div>
                <div data-v-ab64ca5b="" class="info">
                    <div data-v-ab64ca5b="" class="head u2">Team subordinates</div>
                    <div data-v-ab64ca5b="" class="line1">
                        <div data-v-ab64ca5b="">{{ $lvl2Count }}</div> Total Number Of Teams
                    </div>
                    <div data-v-ab64ca5b="" class="line2">
                        <div data-v-ab64ca5b="" onclick="apply()" id="u_com">₹ {{ $lvl2sum }}</div>Total Commission
                        Received
                    </div>

                </div>
            </div>
        </div>
        <div data-v-1159d77b="" class="content" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-1159d77b="" class="shareBtnContainer">
                <div class="col-12 mt-2" id="mylink" style="display:none;">
                    {{ url('/') }}/register?r_code={{ auth()->user()->usercode }}</div><button
                    onclick="copyToClipboard()" data-v-1159d77b="" class="shareBtn">COPY INVITATION LINK</button>
            </div>
            <div data-v-1159d77b="" class="promote__cell">
                <div data-v-1159d77b="" class="promote__cell-item" onclick="RefCodeCopy()">
                    <div data-v-1159d77b="" class="label">
                        <img data-v-1159d77b=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAZlBMVEUAAAD6Wlr6WVn5WFj5WVn7WVn/Vlb6Wlr7W1v3Wlr5WVn6WFj8W1v5WVn5WVn4WVn6Wlr6Wlr4Wlr3WFj/VVX4WFj6WVn6Wlr6WVn5WVn5WVn5WVn6WVn4WVn5WFj6W1v/UVH5WVkYbn5UAAAAIXRSTlMAZrKf7XkNn3lA4L5MYM+BWTMmIAaWU/XPxqmOcHA5qRZw9CxiAAABJklEQVRIx+3T3XKCMBCG4SzkpyTyIyit2tru/d9kT6xdCJF8dXrgjO8xz+xOSNSze9r157GjRN2m6m2S2qqmtaoE31JW26WNN5TZZhdhYVd1emd8c0tQdoIrDFfoYFktz6wnsB7dWna+/Z+M5kvaUNQocEdRga8dKKoTmOKOv9hR3G1MrrjkCMWyx8FGs0gbCAeeVEDYTbGDMLlCdHqU00bwe3ltbyjR5COBPYsOi9w0LPIC8yRtlp+3LInZx1hzLmYXX5p8/PoxHwxgLqLBAJ6N1gCejz4yhvmzffmpYBTL/hF71GqBGxQ3ApcoLgSuUVwLbDWIB/X3vUslG+DBshaxrZoV8u2bmmdDtrWCgZuf1GJDuU5DpVJ9jfvgU843ZW3Vszv6BlTHjeSB3A++AAAAAElFTkSuQmCC"
                            alt="">
                        <div class="col-12 mt-2" id="mycode" style="display:none;">{{ auth()->user()->usercode }}</div>
                        <span data-v-1159d77b="">Copy invitation code</span>
                    </div>
                    <div data-v-1159d77b="" class="arrow"><span data-v-1159d77b="">{{ auth()->user()->usercode }}</span>
                        <img data-v-1159d77b=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII="
                            alt="">
                    </div>
                </div>
                <div data-v-1159d77b="" onclick="window.location.href='/myTeam'" class="promote__cell-item">
                    <div data-v-1159d77b="" class="label">
                        <img data-v-1159d77b=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAbFBMVEX/WmYAAAD/WWj/T2T/W2X/W2f/WWb/WWf/WGf/WGb/WGb/WWb/WWb/WWf/WGX/WGf/WWb/XGX/VGr/WWf/WGf/WWf/WWb/Wmr/WWf/WWf/WWf/WWf/Wmf/XGb/WWj/Wmf/VYD/WWf/WmX/WWcSNvN4AAAAI3RSTlNmAIwMeXlwYLyW44Ev2U5A7yYQ7LCfVx+/OPXfsxnGqAbPR17xxycAAAHhSURBVEjHzdfbkuIgFAVQJkTQkPvNRG27p/f//+PEdAEnhKpAz4v7jVBL2Z6irLA//5F3xHk/tJsHaiqD8R1QdC2Bug3EFYCBPpgAhGIBQNIHNVCHHrsHkNOfAEAfit0vKgGIY8xfmQE8OMkFQMlfIdiVpWSvfAL4ZCQZAMHWVNyPm4Wu+QsgoRhAZhaND3NtWQfcqE0APM1Kcg+u9K4CUBC71hjscvbgUW8OAB7ErjWUXco9/jCbZ7dy5tTY45nijjmY1hDXHR7N5ulZXDZYFUVKlpcdbllwzpWL83CcSRePwVbAxZwF5wLl4CaiMhIHlxGVMWzxF4uojH6Lm5jKmLb4O6Yy7lsszaFOnohtZYrppVA3+PKglZdYTK9yAX9SWhloKR6PsKCVgavB9Cqr7ujYGZbkBM/MJvVEOJVRETxGTXmJtJiz8JxdnEfgbMXK4jJE0cpIDOZ2SyWepLvKGAw2l+Lkn1OXupXRG/xtP9afs1sZk8b2KicH2FTGXeMrPZQvRepWRq1xFT3lJRrL6CkvaX/wR4QV0LkuOOrUdBz5Dx5/UxnlilsWkcJgueL8V5UhonFisVpxE1uZHvtLhuMO7qjy6EHR+zyHNr4ZS/7omvJYiuSpZT3Jt327eWv8D31pUMh1MCbLAAAAAElFTkSuQmCC"
                            alt="">
                        <span data-v-1159d77b="">Team report</span>
                    </div>
                    <div data-v-1159d77b="" class="arrow">
                        <img data-v-1159d77b=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII="
                            alt="">
                    </div>
                </div>


                <div data-v-1159d77b="" onclick="window.location.href='/keFuMenu#';" class="promote__cell-item"
                    style="display:;">
                    <div data-v-1159d77b="" class="label">
                        <img data-v-1159d77b="" src="{{ asset('assets/png/server-b7c71127.png') }}" alt="">
                        <span data-v-1159d77b="">Agent line customer service</span>
                    </div>
                    <div data-v-1159d77b="" class="arrow">
                        <img data-v-1159d77b=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAgMAAAAqbBEUAAAADFBMVEUAAABmZmZkZGRmZmZ0zVwQAAAAA3RSTlMA3yDHuD3GAAAANUlEQVQoz2MYhIC1AYnDnoDE4byBxGEqQ9Y0F1mTOk01YXAQyjANQBiNsJRGWtgTUANxMAIAk88RuZxQh1MAAAAASUVORK5CYII="
                            alt="">
                    </div>
                </div>
            </div>
            <div data-v-1159d77b="" class="commission">
                <div data-v-1159d77b="" class="commission__title"><i data-v-1159d77b=""
                        class="van-badge__wrapper van-icon">
                        <img class="van-icon__image"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAABHVBMVEUAAAD8jKX9q779nbL8iqH/+Pv/j5/+wM7/j5f+kaf/jaH7jaX/jp3/v8P+6O3/6e7/3uX/jJj+usX+jqb8jaX9hZv/vcT/i6j9i5z8iqT//P3/9ff/f4z/bn3/jZr+mKj+iZn7iqj/v8//ZHH/vsP/9ff/d4P/fYf+8fT/v8X/sLX+c4H/sLf+dYT/wsb/wMX/mqD/lJ3/j5n/dYf/eYX/oan9hp//w8j/w8b/pq7/e4P/t7//t7//////ZHH/c3//ipT/vcP/pq7/anb/Y3D/bHn/f4r/Xmz/aHX/eoX/YG7/XWr/Wmj/fYj/ZXL/e4b/n6j/trz/sbf/qbD/kZr/jJb/eIP/cX3/rLP/hY//Z3T/oqr/l6D/lZ7/k5ydcTwhAAAAPXRSTlMAZnlwQOyfjJ8yXyYK38bFsp+BWFB5YCwfF/Xiw72yhIFGEPXv4+Pf2c/Pxr+zr5+fn5+fgH9wb29fX0AgTxUa5QAAAbFJREFUSMftlNd6gjAYhkG0bq1719G99y5iCxEEGe7Z3v9llCdiBUILPfDM9yzJ9z7hJ8mPbVgnoUw1EcARAslqMGSVz8CwNYkMmvfjf+I354O4DTmTkLQTkqaCkYDNFll7oRzIOi4ZstM4fFkJbtMq4fUSpqmt5mh0ZxRc2y4tHiFVotoork5DAdCU2yDsk3kcih4S4lls4iGPNEEaFQ2CmoGJCKkRhbpqakIdNLMWAkH+QBgEmqHlgIXgXQleRKj8U2j57D4JFZwXLdIMZxQKixWcWP5WFxzlyQIqaAcXxyGuxcER2kg7OJnjuVbM+dWIDSUoOL98FKMTgvZCEfCsWoPzB3QwFVhO9jl+ohXAt1lavlkKOTvhtC6ognjt9M2d19l2mweTK12jSfwefygxal6QqMa9vnMEE+UUGk6lbku7rKDmeSB+PmN63npfTQpMpboehuFZVhAElgHDwczUAc+UgUgBToKKwZKm9EhuKCeYkdfurD8Rh5QFQ3HSV7ppzES8M1bm/UEDYdCfK71OHENIhzvdce8DoTfudvaeMAtq6Yvj8DtCOHz5WMM2rJFvSI53OT9GTq0AAAAASUVORK5CYII="></i><span
                        data-v-1159d77b="">Commission data</span>
                </div>
                <div data-v-1159d77b="" class="commission__body">
                    <div data-v-1159d77b=""><span data-v-1159d77b="">₹ 0</span>
                        <span data-v-1159d77b="">This Week</span>
                    </div><span data-v-1159d77b=""></span>
                    <div data-v-1159d77b=""><span data-v-1159d77b="">₹ {{ $totalCommission }}</span>
                        <span data-v-1159d77b="">Total commission</span>
                    </div>
                </div>
                <div data-v-1159d77b="" class="commission__body">
                    <div data-v-1159d77b=""><span data-v-1159d77b="">₹ {{ $lvl1sum }}</span>
                        <span data-v-1159d77b="">direct subordinate</span>
                    </div>
                    <span data-v-1159d77b=""></span>
                    <div data-v-1159d77b="">
                        <span data-v-1159d77b="">₹ {{ $lvl1sum }}</span>
                        <span data-v-1159d77b="">Total number of subordinates in the team</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="snackbar" class="van-toast van-toast--middle van-toast--text" style="z-index: 2009;display:none ">
            <div class="van-toast__text"></div>
        </div>
        <style>
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
                border-radius: 0px;
                -webkit-transform: translate3d(-50%, -50%, 0);
                transform: translate3d(-50%, -50%, 0);
            }

            .van-toast--html,
            .van-toast--text {
                width: -webkit-fit-content;
                width: fit-content;
                min-width: 96px;
                min-height: 0;
                padding: 10px 30px;
            }
        </style>
        <script>
            function copyToClipboard(text) {
                var inputc = document.body.appendChild(document.createElement("input"));
                inputc.value = document.getElementById("mylink").innerHTML;
                inputc.focus();
                inputc.select();
                document.execCommand('copy');
                inputc.parentNode.removeChild(inputc);
                document.getElementById("snackbar").innerHTML = "Registration Link Copied Success !";
                document.getElementById("snackbar").style.display = "";
                setTimeout(function() {
                    document.getElementById("snackbar").style.display = "none";
                }, 3000);
            }

            function RefCodeCopy(text) {
                var inputc = document.body.appendChild(document.createElement("input"));
                inputc.value = document.getElementById("mycode").innerHTML;
                inputc.focus();
                inputc.select();
                document.execCommand('copy');
                inputc.parentNode.removeChild(inputc);
                document.getElementById("snackbar").innerHTML = "Refer Code Copied Successfully !";
                document.getElementById("snackbar").style.display = "";
                setTimeout(function() {
                    document.getElementById("snackbar").style.display = "none";
                }, 3000);
            }
        </script>
    @endsection
