@extends('layouts.app')
@section('content')


            <div data-v-909e1547="" class="redeem-container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
                <div data-v-909e1547="" class="redeem-container-header">
                    <div data-v-4c21fa9e="" data-v-909e1547="" class="navbar">
                        <div data-v-4c21fa9e="" class="navbar-fixed wc"
                            style="background: linear-gradient(90deg, rgb(249, 90, 90) 0%, rgb(255, 153, 142) 100%);">
                            <div data-v-4c21fa9e="" class="navbar__content">
                                <div data-v-4c21fa9e="" onclick="window.location.href='{{route('account')}}';"
                                    class="navbar__content-left"><i data-v-4c21fa9e=""
                                        class="van-badge__wrapper van-icon van-icon-arrow-left"></i>
                                </div>
                                <form action="" id="card" method="POST">
                                    <div data-v-4c21fa9e="" class="navbar__content-center">
                                        <div data-v-4c21fa9e="" class="navbar__content-title">Gift</div>
                                    </div>
                                    <div data-v-4c21fa9e="" class="navbar__content-right"></div>
                            </div>
                        </div>
                    </div>
                    <div data-v-909e1547="" class="redeem-container-header-belly"><img data-v-909e1547="" alt=""
                            class="" data-origin="https://91clubin.in/assets/png/gift-0e49be1a.png"
                            src="https://91clubin.in/assets/png/gift-0e49be1a.png"></div>
                </div>
                <div data-v-909e1547="" class="redeem-container-content">
                    <div data-v-909e1547="" class="redeem-container-receive">
                        <p data-v-909e1547="">Hi</p>
                        <p data-v-909e1547="">We have a gift for you</p>
                        <h4 data-v-909e1547="">Please enter the gift code below</h4><input data-v-909e1547=""
                            required="required" value="username" type="tel" maxlength="10" autocomplete="off"
                            id="mob" name="username" disabled="disabled" auto-complete="new-password"
                            autocomplete="off" placeholder="Please enter gift code"><button data-v-909e1547=""
                            onclick="sub()">Receive</button>
                    </div>
                    <form action="" id="card" method="POST">
                        <input placeholder="Enter Your Mobile Number" required="required" value="username"
                            type="text" maxlength="10" autocomplete="off" id="mob" name="username"
                            style="display: none;">
                        <input data-v-bd732668="redenvelopes_hb_get_it_now" type="submit" style="display: none;">
                        <div data-v-bd732668="redenvelopes_hb_get_it_now" style="display: none;">
                            </input></div>
                    </form></span>
                    <div data-v-909e1547="" class="redeem-container-record">
                        <div data-v-909e1547="" class="redeem-container-record-title"><img data-v-909e1547=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAaVBMVEUAAAD/cHL/cXL/cHL/cXL/cXH/cHL/cHH/cHD/cHL/cXL/cHL/cXL/cXH/cnP/cHP/cXL/cHD/cHD/cHL/cHD/cXL/////goP/7u7/ysr/pqf/uLj/l5f/env/2dn/r6//9vb/wcH/5eUilnS2AAAAFXRSTlMAvz+f3x+P3xDP769fTy9Pb49/YDB6ypmUAAABpklEQVRo3u3Y6XLCIBSG4QNhy2K0y2dsXVp7/xdZnfpPNj2ky5TnAnhDAswEqqrqH9BGiQUFrBQazQxYnEjyGnBiiUXirCGvHmfPBQKCvASC00tzg2kVcAk08GguAUAJs3C3PbjAWWbgSy9vHT4/cGFHyuEegPsCgKE0bXF/AFZnjM8IpAvaghFIF5wFN4DWRQIP4ATSX3oEN5DY2zYQ6P2BPhAQFLDAlUWHk8HCox1woiSyp9Djihg6oFnBa2WAbrTInYKGh5ByfETA46ilwLXOxd8Q39IbMGBJr1SBYnpvQKEY5Q2gnG7uAGqgBmqgBmrgGwP7KY4beHtfx20mVmC3TjqwAtt12sQJvGUE9pzA/n2dcuR95OmwifrY/vp9UAM18AcC0+u1XcHANn1Gz3JcHxDHP64RxT+uN6UC+40/8FoqgOn44rFDWjf3b2zrDbQoRvzMVcIToviXIQ7FOJr3NqQJ3uUXIilAFFtD805BU5Aps0bDnAKbohjNLihNjAJ3fH6h1ZTkDO5mHOV4VriLkJRrKZjDp+mlEQqZVGueHFVVFfIJpb+wnF2Z8I4AAAAASUVORK5CYII="><span
                                data-v-909e1547="">History</span></div>
                        <div data-v-909e1547="" class="redeem-container-record-itemsBox">
                            <div data-v-b43bdd3f="" data-v-909e1547="" class="infiniteScroll"
                                id="refreshe03adf377a7749a290b67f0bc8394ba0">
                                <div data-v-b43bdd3f="" class="infiniteScroll__loading">
                                    dataRow; 
                                    <div data-v-91f2fefc="" data-v-b43bdd3f="" class="empty__container empty">
                                        <div alt=""></div>
                                        <p data-v-91f2fefc="">No more data</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customer" id="customerId"
                style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;">
                <div class=""></div>
            </div>
       
        <foreignobject></foreignobject>
        <div class="col-12 mt-4 pa-0" id="pop"
            style="height:90px; position: fixed;padding-top: 150px;  left: 0;top: 0;width: 100%; height: 100%; display:none; ">
            <div class="btn-main act openair" style="height:237px;font-size:20px;">
                <br>
                <div>
                    <span
                        style="color:white;text-align:center;font-size:50px;position: fixed;left: 136px;padding-top:115px;top:130px; z-index:1;"></span>
                    <div>
                        <span style="color:white;position: fixed;font-size:15px;left: 79px;padding-top:100px; "></span>
                        <div class='col-12 xtr tfw-7 tf-20 tfcdb'>
                            <span class='tf-28' class="button button4"
                                onclick="window.location.href='/MY#';"></span>

                            <div data-v-39fe5c32="" id="pop" data-v-bd732668="" class="normal_notice_zz"
                                style="">
                                <div data-v-0e007999="" data-v-20ea4d57="" class="dialog active">
                                    <div data-v-0e007999="" class="dialog__container" role="dialog" tabindex="0">
                                        <div data-v-0e007999="" class="dialog__container-img">
                                            <img data-v-0e007999=""
                                                alt="" class=""
                                                data-origin="https://91clubin.in/assets/png/superjackpotHome-72bbeb43.png"
                                                src="https://91clubin.in/assets/png/superjackpotHome-72bbeb43.png"></div>
                                        <div data-v-0e007999="" class="dialog__container-title">
                                            <h1 data-v-0e007999="">Congratulations !</h1>
                                        </div>
                                        <div data-v-0e007999="" class="dialog__container-content">
                                            <div data-v-20ea4d57="" class="Laundry-Con">
                                                <div data-v-20ea4d57="" class="Laundry-Con_tip">You've Received
                                                    【₹new; .00】</div>
                                                <div data-v-20ea4d57="" class="Landty-Con-tips">Daily visit the gift page
                                                    to claim more reward</div>
                                            </div>
                                        </div>
                                        <div data-v-0e007999="" class="dialog__container-footer"><button
                                                onclick="sub()" data-v-0e007999="">OK</button></div>
                                    </div>
                                    <div data-v-0e007999="" class="dialog__outside"></div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .redeem-container-receive input[data-v-909e1547] {
                                width: 8.32667rem;
                                height: 1.06667rem;
                                background: #ebebeb;
                                border-radius: .8rem;
                                border: none;
                                font-size: .4rem;
                                color: #000;
                                padding: .29333rem .56rem;
                                margin-top: .34667rem;
                            }

                            .redeem-container-receive input[data-v-909e1547] {
                                width: 8.32667rem;
                                height: 1.06667rem;
                                background: #dedede;
                                border-radius: .8rem;
                                border: none;
                                font-size: .4rem;
                                color: #969696;
                                padding: .29333rem .56rem;
                                margin-top: .34667rem;
                            }

                            .redeem-container-receive button[data-v-909e1547] {
                                width: 8.3rem;
                                height: .93333rem;
                                line-height: .93333rem;
                                text-align: center;
                                background: -webkit-linear-gradient(top, #ff867a 0%, #f95959 100%);
                                background: linear-gradient(180deg, #ff867a 0%, #f95959 100%);
                                box-shadow: 0 .05333rem #e74141;
                                border-radius: 1.06667rem;
                                font-size: .4rem;
                                color: #fff;
                                text-shadow: 0 .05333rem .02667rem rgba(231, 65, 65, .5);
                                border: none;
                                margin-top: .74667rem;
                            }
                        </style>
                        <script src="js/chunk-vendors.c557979e.js"></script>
                        <script src="js/app.1a8f645d.js"></script>
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
                        <script>
                            function sub() {
                                document.getElementById('card').submit();
                                console.log("submit");
                            }
                        </script>
                        <script type="text/javascript" src="lifafa.js"></script>
   
@endsection
