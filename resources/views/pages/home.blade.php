@extends('layouts.app')

@section('content')

    <style>
        .navbar__content-left img[data-v-94f8731b] {
            height: 90%;
        }
    </style>
    <div id="app" data-v-app="">
        <div data-v-94f8731b="" class="content" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-4c21fa9e="" data-v-94f8731b="" class="navbar">
                <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                    <div data-v-4c21fa9e="" class="navbar__content">
                        <div data-v-4c21fa9e="" class="navbar__content-left">
                            <img data-v-94f8731b=""
                                onclick="window.location.href='/';" src="{{ asset('assets/img/logo/favicon.png') }}"
                                alt=""></div>
                        <div data-v-4c21fa9e="" class="navbar__content-center">
                            <div data-v-4c21fa9e="" class="navbar__content-title"></div>
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-right">
                            <div data-v-94f8731b="" class="content__right">
                                <div data-v-94f8731b="" class="message">
                                    <svg data-v-94f8731b=""
                                        onclick="window.location.href='mailto:sahoosoumyaranjan798@gmail.com';"
                                        width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M34 41H14C8 41 4 38 4 31V17C4 10 8 7 14 7H34C40 7 44 10 44 17V31C44 38 40 41 34 41Z"
                                            fill="#F95959"></path>
                                        <path
                                            d="M23.9981 25.744C22.3181 25.744 20.6181 25.224 19.3181 24.164L13.0581 19.164C12.767 18.9112 12.5848 18.5558 12.5493 18.1719C12.5139 17.788 12.628 17.4053 12.8679 17.1035C13.1078 16.8017 13.4549 16.6042 13.8369 16.5521C14.2189 16.5 14.6062 16.5974 14.9181 16.824L21.1781 21.824C22.6981 23.044 25.2781 23.044 26.7981 21.824L33.0581 16.824C33.6981 16.304 34.6581 16.404 35.1581 17.064C35.6781 17.704 35.5781 18.664 34.9181 19.164L28.6581 24.164C27.3781 25.224 25.6781 25.744 23.9981 25.744Z"
                                            fill="#F95959"></path>
                                    </svg>
                                    <div data-v-d6fe61e8="" data-v-94f8731b="" class="point point-flicker point"
                                        style="display: ;"></div>
                                </div>
                                <svg data-v-94f8731b="" onclick="window.location.href='/won.apk';"
                                    class="svg-icon icon-down down down" style="color: rgb(251, 87, 85);">
                                    <use xlink:href="#icon-down"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-f1a9c278="" data-v-94f8731b=""
                class="swiper swiper-initialized swiper-horizontal swiper-pointer-events my-swipe"
                style="border-radius:0.26667rem;">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="{{ asset('assets/img/banners/Banner1.png') }}" style="width:100%;height:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('assets/img/banners/Banner2.png') }}" style="width:100%;height:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('assets/img/banners/Banner3.png') }}" style="width:100%;height:100%">
                    </div>

                </div>
                <br>

                <div style="text-align:center;display:none;">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <style>
                        * {
                            box-sizing: border-box;
                        }

                        body {
                            font-family: Verdana, sans-serif;
                        }

                        .mySlides {
                            display: none;
                        }

                        img {
                            vertical-align: middle;
                        }

                        /* Slideshow container */
                        .slideshow-container {
                            max-width: 1000px;
                            position: relative;
                            margin: auto;
                        }

                        /* Caption text */
                        .text {
                            color: #f2f2f2;
                            font-size: 15px;
                            padding: 8px 12px;
                            position: absolute;
                            bottom: 8px;
                            width: 100%;
                            text-align: center;
                        }

                        /* Number text (1/3 etc) */
                        .numbertext {
                            color: #f2f2f2;
                            font-size: 12px;
                            padding: 8px 12px;
                            position: absolute;
                            top: 0;
                        }

                        /* The dots/bullets/indicators */
                        .dot {
                            height: 15px;
                            width: 15px;
                            margin: 0 2px;
                            background-color: #bbb;
                            border-radius: 50%;
                            display: inline-block;
                            transition: background-color 0.6s ease;
                        }

                        .activedot {
                            background-color: #717171;
                        }

                        /* Fading animation */
                        .fade {
                            animation-name: fade;
                            animation-duration: 1.5s;
                        }

                        @keyframes fade {
                            from {
                                opacity: .4
                            }

                            to {
                                opacity: 1
                            }
                        }

                        /* On smaller screens, decrease text size */
                        @media only screen and (max-width: 300px) {
                            .text {
                                font-size: 11px
                            }
                        }
                    </style>
                    <script>
                        let slideIndex = 0;
                        showSlides();

                        function showSlides() {
                            let i;
                            let slides = document.getElementsByClassName("mySlides");
                            let dots = document.getElementsByClassName("dot");
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slideIndex++;
                            if (slideIndex > slides.length) {
                                slideIndex = 1
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                            setTimeout(showSlides, 2000); // Change image every 2 seconds
                        }
                    </script>
                </div>
            </div>
            <div data-v-b4633b52="" data-v-94f8731b="" class="noticeBar__container">
                <svg data-v-b4633b52=""
                    width="32" height="32" viewBox="0 0 32 32" fill="none"
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
                    <div data-v-b4633b52="" class="noticeBar__container-body-text" style="font-weight:500;">{{$Setting->welcome_node ?? ''}}</div>
                </div>
                <button data-v-b4633b52="">
                    <svg data-v-b4633b52="" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    </svg> Detail</button>
            </div>
            <div data-v-6c5117cd="" data-v-94f8731b="" class="gameList">
                <div data-v-6c5117cd="" role="tablist" class="van-sidebar mySideBar">
                    <div data-v-6c5117cd="" role="tab" class="van-sidebar-item"
                        tabindex="0" aria-selected="true" id="gameType-lottery">
                        <div class="van-badge__wrapper van-sidebar-item__text">
                            <div data-v-6c5117cd="" class="">
                                <div data-v-6c5117cd=""
                                    style="background-image: url(&quot;https://ossimg.91admin123admin.com/91club/gamecategory/gamecategory_20230714010214yxxq.png&quot;);">
                                </div> Lottery
                            </div>
                        </div>
                    </div>
                    <div data-v-6c5117cd="" role="tab" onclick="window.location.href='{{route('crash')}}';"
                    class="van-sidebar-item" tabindex="0"
                        aria-selected="false" id="gameType-flash">
                        <div class="van-badge__wrapper van-sidebar-item__text">
                            <div data-v-6c5117cd="" class="">
                                <div data-v-6c5117cd=""
                                    style="background-image: url(&quot;https://ossimg.91admin123admin.com/91club/gamecategory/gamecategory_20230714010207qmfa.png&quot;);">
                                </div> Mini games
                            </div>
                        </div>
                    </div>
                    <div data-v-6c5117cd="" role="tab" class="van-sidebar-item" tabindex="0"
                        aria-selected="false" id="gameType-popular">
                        <div class="van-badge__wrapper van-sidebar-item__text">
                            <div data-v-6c5117cd="" class="">
                                <div data-v-6c5117cd=""
                                    style="background-image: url(&quot;https://ossimg.91admin123admin.com/91club/gamecategory/gamecategory_20230714010159ynyu.png&quot;);">
                                </div> Popular
                            </div>
                        </div>
                    </div>
                    <div data-v-6c5117cd="" role="tab" class="van-sidebar-item" tabindex="0"
                        aria-selected="false" id="gameType-slot">
                        <div class="van-badge__wrapper van-sidebar-item__text">
                            <div data-v-6c5117cd="" class="">
                                <div data-v-6c5117cd=""
                                    style="background-image: url(&quot;https://ossimg.91admin123admin.com/91club/gamecategory/gamecategory_20230714010153317n.png&quot;);">
                                </div> Slots
                            </div>
                        </div>
                    </div>
                    <div data-v-6c5117cd="" role="tab" class="van-sidebar-item" tabindex="0"
                        aria-selected="false" id="gameType-fish">
                        <div class="van-badge__wrapper van-sidebar-item__text">
                            <div data-v-6c5117cd="" class="">
                                <div data-v-6c5117cd=""
                                    style="background-image: url(&quot;https://ossimg.91admin123admin.com/91club/gamecategory/gamecategory_20230714010147x2cr.png&quot;);">
                                </div> Fishing
                            </div>
                        </div>
                    </div>
                    <div data-v-6c5117cd="" role="tab" class="van-sidebar-item" tabindex="0"
                        aria-selected="false" id="gameType-video">
                        <div class="van-badge__wrapper van-sidebar-item__text">
                            <div data-v-6c5117cd="" class="">
                                <div data-v-6c5117cd=""
                                    style="background-image: url(&quot;https://ossimg.91admin123admin.com/91club/gamecategory/gamecategory_20230714010141v76m.png&quot;);">
                                </div> Casino
                            </div>
                        </div>
                    </div>
                    <div data-v-6c5117cd="" role="tab" class="van-sidebar-item" tabindex="0"
                        aria-selected="false" id="gameType-sport">
                        <div class="van-badge__wrapper van-sidebar-item__text">
                            <div data-v-6c5117cd="" class="">
                                <div data-v-6c5117cd=""
                                    style="background-image: url(&quot;https://ossimg.91admin123admin.com/91club/gamecategory/gamecategory_20230714010123ddo4.png&quot;);">
                                </div> Sports
                            </div>
                        </div>
                    </div>
                </div>
                <div data-v-906ddf09="" data-v-6c5117cd="" class="gameListGrid__container" style="">

                    <div data-v-785ec202="" data-v-906ddf09="" class="lottery_container">
                        <div data-v-785ec202="" onclick="window.location.href='{{route('win')}}';" class="lotterySlotItem">
                            <img data-v-785ec202="" class=""
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_202307140102511fow.png"
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_202307140102511fow.png"><span
                                data-v-785ec202="">Win Go</span>
                            <h4 data-v-785ec202="">
                                <div data-v-785ec202="">Guess Number</div>
                                <div data-v-785ec202="">Green/Red/Purple to win</div>
                            </h4>
                        </div>
                        <div data-v-785ec202="" onclick="window.location.href='{{route('win')}}/';" class="lotterySlotItem">
                            <img data-v-785ec202="" class=""
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_20230714010246lyuc.png"
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_20230714010246lyuc.png"><span
                                data-v-785ec202="">Trx Win</span>
                            <h4 data-v-785ec202="">
                                <div data-v-785ec202="">Guess Number</div>
                                <div data-v-785ec202="">Green/Red/Purple to win</div>
                            </h4>
                        </div>
                        <div data-v-785ec202="" onclick="window.location.href='{{route('win')}}';" class="lotterySlotItem">
                            <img data-v-785ec202="" class=""
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_20230714010227swu2.png"
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_20230714010227swu2.png"><span
                                data-v-785ec202="">K3</span>
                            <h4 data-v-785ec202="">
                                <div data-v-785ec202="">Guess Number</div>
                                <div data-v-785ec202="">Big/Small/Odd/Even</div>
                            </h4>
                        </div>
                        <div data-v-785ec202="" onclick="window.location.href='{{route('win')}}';" class="lotterySlotItem">
                            <img data-v-785ec202="" class=""
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_2023071401023322dy.png"
                                src="https://ossimg.91admin123admin.com/91club/lotterycategory/lotterycategory_2023071401023322dy.png"><span
                                data-v-785ec202="">5D</span>
                            <h4 data-v-785ec202="">
                                <div data-v-785ec202="">Guess Number</div>
                                <div data-v-785ec202="">Big/Small/Odd/Even</div>
                            </h4>
                        </div>
                    </div><button onclick="window.location.href='{{route('win')}}';" data-v-906ddf09=""
                        class="look_all"><img data-v-906ddf09=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAIVBMVEUAAAD5Wlr3WFj6WVn6WFj5V1f6WVn5WVn5WVn4V1f5WVnpXZn/AAAACnRSTlMA72C/v1DP329wWe0twgAAAKNJREFUOMtjoA/gMFwFAkkgdrMUiLlMASyhtQoCGhgYmKDMFWCJLCivgIGBDcpcDpZYBQULGBi4YOwRLlEF5SQwMLBDmcvAErOgPGBYc0KZi8ASTI4g9kIjEFsFHB/CCgyDF7AaIpwbjHAuIvkEIJLPUrCEF5RnwMDAAmUuBktIQXkCDAyMUObCgY9BGkvg9Dn+sIpCJB9WbMnHFCn5BDDQBQAAbjlnhYlIhpEAAAAASUVORK5CYII="
                            alt=""> View All</button>
                </div>
            </div>
            <div data-v-f477932f="" data-v-94f8731b="" class="luckyWinners__container">
                <h1 data-v-f477932f="">Winning information</h1>
                <div data-v-f477932f="" class="luckyWinners__container-wrapper">
                    <div data-v-f477932f="" style="position: relative;">
                        <div data-v-f477932f="" class="luckyWinners__container-wrapper__item">
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-img"><img
                                    data-v-f477932f="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="ar-lazyload" src="https://91clubin.in/assets/png/1-a6662edb.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-info">
                                <h1 data-v-f477932f="">Mem***<?php echo rand(100, 999); ?></h1>
                            </div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winType"><img
                                    data-v-f477932f="" class="ar-lazyload"
                                    src="https://91clubin.in/assets/png/WinGo-35d04760.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winAmount">
                                <h1 data-v-f477932f="">Receive ₹<?php echo rand(100, 999); ?>.00</h1><span
                                    data-v-f477932f="">Winning amount</span>
                            </div>
                        </div>
                        <div data-v-f477932f="" class="luckyWinners__container-wrapper__item">
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-img"><img
                                    data-v-f477932f="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="ar-lazyload" src="https://91clubin.in/assets/png/1-a6662edb.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-info">
                                <h1 data-v-f477932f="">Mem***<?php echo rand(100, 999); ?></h1>
                            </div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winType"><img
                                    data-v-f477932f="" class="ar-lazyload"
                                    src="https://91clubin.in/assets/png/WinGo-35d04760.png">
                            </div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winAmount">
                                <h1 data-v-f477932f="">Receive ₹<?php echo rand(100, 9999); ?>.00</h1><span
                                    data-v-f477932f="">Winning amount</span>
                            </div>
                        </div>
                        <div data-v-f477932f="" class="luckyWinners__container-wrapper__item">
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-img"><img
                                    data-v-f477932f="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="ar-lazyload" src="https://91clubin.in/assets/png/1-a6662edb.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-info">
                                <h1 data-v-f477932f="">Mem***<?php echo rand(100, 999); ?></h1>
                            </div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winType"><img
                                    data-v-f477932f="" class="ar-lazyload"
                                    src="https://91clubin.in/assets/png/WinGo-35d04760.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winAmount">
                                <h1 data-v-f477932f="">Receive ₹<?php echo rand(10, 9999); ?>.00</h1><span
                                    data-v-f477932f="">Winning amount</span>
                            </div>
                        </div>
                        <div data-v-f477932f="" class="luckyWinners__container-wrapper__item">
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-img"><img
                                    data-v-f477932f="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="ar-lazyload" src="https://91clubin.in/assets/png/1-a6662edb.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-info">
                                <h1 data-v-f477932f="">Mem***<?php echo rand(100, 999); ?></h1>
                            </div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winType"><img
                                    data-v-f477932f="" class="ar-lazyload"
                                    src="https://91clubin.in/assets/png/WinGo-35d04760.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winAmount">
                                <h1 data-v-f477932f="">Receive ₹<?php echo rand(10, 999); ?>.00</h1><span
                                    data-v-f477932f="">Winning amount</span>
                            </div>
                        </div>
                        <div data-v-f477932f="" class="luckyWinners__container-wrapper__item">
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-img"><img
                                    data-v-f477932f="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="ar-lazyload" src="https://91clubin.in/assets/png/1-a6662edb.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-info">
                                <h1 data-v-f477932f="">Mem***<?php echo rand(100, 999); ?></h1>
                            </div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winType"><img
                                    data-v-f477932f="" class="ar-lazyload"
                                    src="https://91clubin.in/assets/png/WinGo-35d04760.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winAmount">
                                <h1 data-v-f477932f="">Receive ₹<?php echo rand(100, 9999); ?>.00</h1><span
                                    data-v-f477932f="">Winning amount</span>
                            </div>
                        </div>
                        <div data-v-f477932f="" class="luckyWinners__container-wrapper__item">
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-img"><img
                                    data-v-f477932f="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="ar-lazyload" src="https://91clubin.in/assets/png/2-58c8a9bc.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-info">
                                <h1 data-v-f477932f="">Mem***<?php echo rand(100, 999); ?></h1>
                            </div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winType"><img
                                    data-v-f477932f="" class="ar-lazyload"
                                    src="https://91clubin.in/assets/png/WinGo-35d04760.png"></div>
                            <div data-v-f477932f="" class="luckyWinners__container-wrapper__item-winAmount">
                                <h1 data-v-f477932f="">Receive ₹<?php echo rand(10, 999); ?>.00</h1><span
                                    data-v-f477932f="">Winning amount</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-643c1a0c="" data-v-94f8731b="" class="dailyProfitRank">
                <h1 data-v-643c1a0c="">Today's earnings chart</h1>
                <div data-v-643c1a0c="" class="dailyProfitRank__content">
                    <div data-v-643c1a0c="" class="dailyProfitRank__content-topThree">
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-topThree__item"
                            style="order: 2; top: -45px;">
                            <div data-v-643c1a0c=""
                                style="background: url(&quot;https://91clubin.in/assets/png/border1-3b6518ec.png&quot;) center center / 100% 100% no-repeat;">
                                <img data-v-643c1a0c="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="" src="https://91clubin.in/assets/png/1-a6662edb.png"
                                    src="https://91clubin.in/assets/png/1-a6662edb.png">
                            </div>
                            <div data-v-643c1a0c=""><img data-v-643c1a0c="" class=""
                                    src="https://91clubin.in/assets/png/crown1-3912fd85.png"
                                    src="https://91clubin.in/assets/png/crown1-3912fd85.png"><img data-v-643c1a0c=""
                                    class="" src="https://91clubin.in/assets/png/place1-fe39c3f3.png"
                                    src="https://91clubin.in/assets/png/place1-fe39c3f3.png"></div><span
                                data-v-643c1a0c="">Mem***<?php echo rand(100, 999); ?></span><span
                                data-v-643c1a0c="">₹<?php echo rand(1, 9); ?>,<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span>
                        </div>
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-topThree__item"
                            style="order: 1; top: -30px;">
                            <div data-v-643c1a0c=""
                                style="background: url(&quot;https://91clubin.in/assets/png/border2-7a806be7.png&quot;) center center / 100% 100% no-repeat;">
                                <img data-v-643c1a0c="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="" src="https://91clubin.in/assets/png/1-a6662edb.png">
                            </div>
                            <div data-v-643c1a0c=""><img data-v-643c1a0c="" class=""
                                    src="https://91clubin.in/assets/png/crown2-c8aced52.png"
                                    src="https://91clubin.in/assets/png/crown2-c8aced52.png"><img data-v-643c1a0c=""
                                    class="" src="https://91clubin.in/assets/png/place2-8189be28.png"
                                    src="https://91clubin.in/assets/png/place2-8189be28.png"></div><span
                                data-v-643c1a0c="">Mem***<?php echo rand(100, 999); ?></span><span
                                data-v-643c1a0c="">₹<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span>
                        </div>
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-topThree__item"
                            style="order: 3; top: -30px;">
                            <div data-v-643c1a0c=""
                                style="background: url(&quot;https://91clubin.in/assets/png/border3-cfec4a7d.png&quot;) center center / 100% 100% no-repeat;">
                                <img data-v-643c1a0c="" data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png"
                                    class="" src="https://91clubin.in/assets/png/1-a6662edb.png">
                            </div>
                            <div data-v-643c1a0c=""><img data-v-643c1a0c="" class=""
                                    src="https://91clubin.in/assets/png/crown3-2ca02146.png"
                                    src="https://91clubin.in/assets/png/crown3-2ca02146.png"><img data-v-643c1a0c=""
                                    class="" src="https://91clubin.in/assets/png/place3-d9b0be38.png"
                                    src="https://91clubin.in/assets/png/place3-d9b0be38.png"></div><span
                                data-v-643c1a0c="">Mem***<?php echo rand(100, 999); ?></span><span
                                data-v-643c1a0c="">₹<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span>
                        </div>
                    </div>
                    <div data-v-643c1a0c="" class="dailyProfitRank__content-list">
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-list__item"><span data-v-643c1a0c=""
                                class="left-rank">4</span><img data-v-643c1a0c=""
                                data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png" class=""
                                src="https://91clubin.in/assets/png/1-a6662edb.png"
                                src="https://91clubin.in/assets/png/1-a6662edb.png"><span data-v-643c1a0c=""
                                class="middle-name">Mem***<?php echo rand(100, 999); ?></span><span data-v-643c1a0c=""
                                class="right-box">₹<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span></div>
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-list__item"><span data-v-643c1a0c=""
                                class="left-rank">5</span><img data-v-643c1a0c=""
                                data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png" class=""
                                src="https://91clubin.in/assets/png/1-a6662edb.png"
                                src="https://91clubin.in/assets/png/1-a6662edb.png"><span data-v-643c1a0c=""
                                class="middle-name">Mem***<?php echo rand(100, 999); ?></span><span data-v-643c1a0c=""
                                class="right-box">₹<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span></div>
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-list__item"><span data-v-643c1a0c=""
                                class="left-rank">6</span><img data-v-643c1a0c=""
                                data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png" class=""
                                src="https://91clubin.in/assets/png/1-a6662edb.png"
                                src="https://91clubin.in/assets/png/1-a6662edb.png"><span data-v-643c1a0c=""
                                class="middle-name">Mem***<?php echo rand(100, 999); ?></span><span data-v-643c1a0c=""
                                class="right-box">₹<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span></div>
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-list__item"><span data-v-643c1a0c=""
                                class="left-rank">7</span><img data-v-643c1a0c=""
                                data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png" class=""
                                src="https://91clubin.in/assets/png/1-a6662edb.png"
                                src="https://91clubin.in/assets/png/1-a6662edb.png"><span data-v-643c1a0c=""
                                class="middle-name">Mem***<?php echo rand(100, 999); ?></span><span data-v-643c1a0c=""
                                class="right-box">₹<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span></div>
                        <div data-v-643c1a0c="" class="dailyProfitRank__content-list__item"><span data-v-643c1a0c=""
                                class="left-rank">8</span><img data-v-643c1a0c=""
                                data-img="https://91clubin.in/assets/png/avatar-ea3b8ee9.png" class=""
                                src="https://91clubin.in/assets/png/1-a6662edb.png"><span data-v-643c1a0c=""
                                class="middle-name">Mem***<?php echo rand(100, 999); ?></span>
                            <span data-v-643c1a0c=""
                                class="right-box">₹<?php echo rand(100, 999); ?>,<?php echo rand(100, 999); ?>.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-8a2fbe28="" data-v-94f8731b="" class=""></div>
            <div data-v-0e007999="" data-v-94f8731b="" class="dialog inactive">
                <div data-v-0e007999="" class="dialog__container" role="dialog" tabindex="0">
                    <div data-v-0e007999="" class="dialog__container-img"><img data-v-0e007999="" alt=""
                            class="" src="https://91clubin.in/assets/png/superjackpotHome-72bbeb43.png"
                            src="https://91clubin.in/assets/png/superjackpotHome-72bbeb43.png"></div>
                    <div data-v-0e007999="" class="dialog__container-title">
                        <h1 data-v-0e007999="">Congratulation</h1>
                    </div>
                    <div data-v-0e007999="" class="dialog__container-content">
                        <div data-v-94f8731b="" class="Laundry-Con">
                            <div data-v-94f8731b="" class="Laundry-Con_tip">Get 【Super Jackpot】!</div>
                            <div data-v-94f8731b="" class="Landty-Con-tips">Visit the [Super Jackpot] page to claim your
                                reward</div>
                        </div>
                    </div>
                    <div data-v-0e007999="" class="dialog__container-footer"><button
                            data-v-0e007999="">OK</button></div>
                </div>
                <div data-v-0e007999="" class="dialog__outside"></div>
            </div>
        </div>




    </div>
    <foreignobject></foreignobject>
@endsection
