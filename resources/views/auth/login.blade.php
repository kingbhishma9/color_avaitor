@extends('layouts.app')

@section('content')
    <div data-v-b34be079="" class="login__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
        <div data-v-4c21fa9e="" data-v-b34be079="" class="navbar">
            <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                <div data-v-4c21fa9e="" class="navbar__content">
                    <div data-v-4c21fa9e="" onclick="window.location.href='/';" class="navbar__content-left">
                        <img  src="{{asset('assets/png/back.png')}}" width="12" height="12" />
                    </div>
                    <div data-v-4c21fa9e="" class="navbar__content-center">
                        <div data-v-4c21fa9e="" class="headLogo"
                            style="background-image: url({{ asset('assets/img/logo/Wlogo.png') }});">
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-title"></div>
                    </div>
                    <div data-v-4c21fa9e="" class="navbar__content-right"></div>
                </div>
            </div>
        </div>
        <div data-v-b34be079="" class="login__container-heading">
            <h1 data-v-b34be079="" class="login__container-heading__title">Log in</h1>

            <div data-v-b34be079="" class="login__container-heading__subTitle">
                <div data-v-b34be079="">Please log in with your phone number or email</div>
                <div data-v-b34be079="">If you forget your password, please contact customer service</div>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div data-v-b34be079="" class="login_container-tab">
                <div data-v-b34be079="" class="tab active">
                    <div data-v-b34be079="" class="phonebg phoneactive"></div>
                    <div data-v-b34be079="" class="font30 phonefont30active">Log in with phone</div>
                </div>
                <div data-v-b34be079="" class="tab " style="display:none;">
                    <div data-v-b34be079="" class="emialbg"></div>
                    <div data-v-b34be079="" class="font30">Email Login</div>
                </div>
            </div>
            <div data-v-b34be079="" class="login__container-form">
                <div data-v-b34be079="" class="tab-content activecontent">
                    <div data-v-ca3ffb94="" data-v-b34be079="" class="signIn__container">
                        <div data-v-5f6a9e3a="" data-v-ca3ffb94="" class="phoneInput__container">
                            <div data-v-5f6a9e3a="" class="phoneInput__container-label">
                                <img data-v-5f6a9e3a=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAM1BMVEUAAAD/cXH/cXH/cXL/cHL/cHL/cHD/cXH/cHL/cXH/cXH/c3P/cXL/cHD/eXn/cnL/cXLCBnslAAAAEHRSTlMAmXO/YJ9ATo9/Vh7fMBOvdmI8dQAAAHdJREFUSMft0UkOgCAQRNEGZB70/qd1o9F0hMKVmPCXpN6GpqGLQVYKhR6yopFFeyyKAEUGAgKBAYmAnGCCCf4EXmcXkGFAbSD1KVD6aO0D+nrVXUDertMFkjmzaZRf6gIOAcdARiASy7f3nggLvudFpyq5TCO3A483HtOoE/1VAAAAAElFTkSuQmCC"
                                    class="phoneInput__container-label__icon"><span data-v-5f6a9e3a="">Phone number</span>
                            </div>
                            <div data-v-5f6a9e3a="" class="phoneInput__container-input">
                                <div data-v-ada8d273="" data-v-5f6a9e3a="" class="dropdown">
                                    <div data-v-ada8d273="" class="dropdown__value">
                                        <span data-v-ada8d273="">+91</span>
                                        <img src="{{asset('assets/png/down.png')}}" width="12" height="12"/>
                                    </div>
                                    <div data-v-ada8d273="" class="dropdown__list">
                                        <div data-v-ada8d273="" class="dropdown__list-item active">
                                            <span data-v-ada8d273="">+91</span> India (भारत)
                                        </div>
                                    </div>
                                </div>

                                <input id="email" type="number" data-v-5f6a9e3a="" name="username" required
                                    autocomplete="number">

                            </div>
                        </div>
                        <div data-v-f1cfbd6f="" data-v-ca3ffb94="" class="passwordInput__container">
                            <div data-v-f1cfbd6f="" class="passwordInput__container-label">
                                <img data-v-f1cfbd6f="" class="passwordInput__container-label__icon"
                                    data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII="
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAWlBMVEUAAAD/cXH/cHD/cnL/cXL/cXL/cXL/cXH/cnL/cnL/cXH/cHD/cXL/cXL/cnL/cnL/cXP/cnL/cHH/cXH/cnL/Zmb/cXP/cHH/cHD/cXH/cHD/cnL/dHT/cXJ2Y/zhAAAAHXRSTlMAmR8mj+/ffzlMExCvoYZfb0NAz2kKv7+Gc1ZyVs4lXHAAAAE4SURBVEjH3ZRbloMgEEQtBCUiiK8k6rD/bU7CzDEJCMJv6hPqnqKhm+I7Va6TogDUspYJ9p7iTYqf2JvF+qiqN/VH1k3UrwBs/N/T8O0ZMkeADriXH/XcgSlS7sPfOJkUKGMBXpF9LILi7q3NFHQOn2g6jCUBgAP9wcMAPABcDuvjwCULKMPAmgt02YCUPfHE5TEw0JGZgNgoB8dOruZEFfnwV8ZkEa1J0O0twCTpVUedBtQ74FXMqNbSq6vdgdHZoeIwuNoBFoh2CLYD/m30y8L9swaAwbYh8PN4/iRAFA2s5kIkAbZBAdu6iQkzrJrEhMHOnp2CzgHCt8Sn7jlLVQDIfge3CaTtZEGd5THS3beaXlm4l7RJkt4BkQaQzImTxUsid6YLIs/8rXA/Gt2GPiZWtZoUX6Rf0glhk/KUKW0AAAAASUVORK5CYII=">
                                <span data-v-f1cfbd6f="">Password</span>
                            </div>
                            <div data-v-f1cfbd6f="" class="passwordInput__container-input">

                                <input data-v-f1cfbd6f="" id="password" type="password" name="password" required
                                    autocomplete="current-password">

                                <img data-v-f1cfbd6f=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAP1BMVEUAAADExMTExMTDw8PExMTFxcXFxcXExMS/v7/FxcXFxcXExMTExMTDw8PExMTFxcXFxcXExMTPz8+/v7/ExMTkagEbAAAAFHRSTlMAIO/ff29fvxDfMD/PoI+fr1AQMBwdwB4AAAFQSURBVDjL5ZJbkoQgDEXDI4iAqN3sf61DIEFHqmvmv/OhEE5ycwvgm0Il+z9uLQU/HJ0OrTvD4IqdoZdbdOHQh+sczphlSmKlvZu4uPZG2bkqfnDRzFlKL/FKuM9cig+/OoLCmcs8Au7ZqUDcG4IW00OGE2Fh040D/G1baeFO8mDo07gmpdUAa5djVGQPgej3OFtuwqZX7U3o1C0RmjevL+/rWLZqVzqnyV0bc70atgVJInPUaR/ip5TkATrmIBYBd3Gq6pGSVWpc18mPY9jYGKk0jgeP0nCjPxtDTgpnZXDkjGy0kgv3AK+4FG6opMmQXJVwob8wK0/jgCu8qWS+c/oU7hJumUqyrl2MOdDLzd85maVs/p6iQScOMnG1HcYXANlBwsriH9zWua2NZ4zmR8l+Jy6Ycotk/czJfQU8kqmRdgwwhU9y7X+F3yx8VfwAZv4b1F/KTEQAAAAASUVORK5CYII="
                                    class="eye">
                            </div>
                        </div>
                        <div data-v-ca3ffb94="" class="signIn__container-button">
                            <button type="submit" data-v-ca3ffb94="" class="active">Log in</button>
        </form>
        <br>
        <a data-v-12121="" onclick="window.location.href='{{ route('register') }}';" class="adata">Register</a>

    </div>
    <div data-v-ca3ffb94="" class="signIn_footer">



        <div data-v-ca3ffb94="" onclick="window.location.href='/forgot#';" class="forgetcon">

            <div data-v-ca3ffb94="" class="forgetbg"></div>

            <div data-v-ca3ffb94="" class="font24">Forgot password</div>
        </div>


        <div data-v-ca3ffb94="" onclick="window.location.href='/keFuMenu#';" class="customcon">
            <div data-v-ca3ffb94="" class="custombg"></div>
            <div data-v-ca3ffb94="" class="font24">Customer Service</div>
        </div>
    </div>
 
@endsection
