 <!DOCTYPE html>
 <html lang="en" translate="no" data-dpr="1" style="font-size: 38.32px;">

 <head>
     <meta charset="UTF-8">
     <link rel="icon" href="./ico.png">
     <meta name="google" content="notranslate">
     <meta name="robots" content="noindex,nofollow">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <link rel="manifest">
     <title>{{ config('app.name') }}</title>
     <link rel="stylesheet" href="{{ asset('assets/css/page-activity-871556fb.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/page-home-0d70abbb.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/index-08abe1f5.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/page-login-1f545390.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/page-main-8cf260fb.css') }}">


     <link rel="stylesheet" href="{{ asset('assets/css/modules-96f5a6e8.css') }}">

     <style type="text/css">
         @charset "UTF-8";

         body {
             background-color: #fff;
             font-size: 14px;
             color: #333;
         }

         .cu-bar {
             display: -webkit-box;
             display: -webkit-flex;
             display: flex;
             position: relative;
             -webkit-box-align: center;
             -webkit-align-items: center;
             align-items: center;
             min-height: 52px;
             -webkit-box-pack: justify;
             -webkit-justify-content: space-between;
             justify-content: space-between
         }

         .cu-bar .content {
             position: absolute;
             text-align: center;
             width: calc(100% - 178px);
             left: -5px;
             right: 0;
             bottom: -50px;
             top: 0;
             margin: auto;
             height: 31px;
             font-size: 16px;
             line-height: 31px;
             cursor: none;
             pointer-events: none;
             text-overflow: ellipsis;
             white-space: nowrap;
             overflow: hidden;
         }

         .cu-modal {
             position: fixed;
             top: 0;
             right: 0;
             bottom: 0;
             left: 0;
             z-index: 1110;
             opacity: 0;
             outline: 0;
             text-align: center;
             -ms-transform: scale(1.185);
             -webkit-transform: scale(1.185);
             transform: scale(1.185);
             -webkit-backface-visibility: hidden;
             backface-visibility: hidden;
             -webkit-perspective: 1048px;
             perspective: 1048px;
             background: rgba(0, 0, 0, .6);
             -webkit-transition: all .3s ease-in-out 0s;
             transition: all .3s ease-in-out 0s;
             pointer-events: none
         }

         .cu-modal::before {
             content: "\200B";
             display: inline-block;
             height: 100%;
             vertical-align: middle
         }

         .cu-modal.show {
             opacity: 1;
             -webkit-transition-duration: .3s;
             transition-duration: .3s;
             -ms-transform: scale(1);
             -webkit-transform: scale(1);
             transform: scale(1);
             overflow-x: hidden;
             overflow-y: auto;
             pointer-events: auto
         }

         .cu-dialog {
             position: relative;
             display: inline-block;
             vertical-align: middle;
             margin-left: auto;
             margin-right: auto;
             width: 356px;
             max-width: 100%;
             background-color: #f8f8f8;
             border-radius: 5px;
             overflow: hidden
         }
     </style>
 </head>

 <bodyz>
     <div id="app" data-v-app="">
         <div data-v-5b1caab5="" data-v-54ba8dd7="" class="userInfo__container setting-page-container"
             style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
             <div data-v-4c21fa9e="" data-v-5b1caab5="" class="navbar" style="">
                 <div data-v-4c21fa9e="" class="navbar-fixed wc"
                     style="background: linear-gradient(90deg, rgb(249, 90, 90) 0%, rgb(255, 153, 142) 100%);">
                     <div data-v-4c21fa9e="" class="navbar__content">
                         <div data-v-4c21fa9e="" onclick="window.location.href='{{ route('account') }}';"
                             class="navbar__content-left">
                             <img src="{{ asset('assets/png/back.png') }}"width="12" height="12" />
                         </div>
                         <div data-v-4c21fa9e="" class="navbar__content-center">
                             <div data-v-4c21fa9e="" class="navbar__content-title">Settings Center</div>
                         </div>
                         <div data-v-4c21fa9e="" class="navbar__content-right"></div>
                     </div>
                 </div>
             </div>

             <div data-v-5b1caab5="" class="userInfo__container-setting-center" style="">
                 <div data-v-5b1caab5="" class="userInfo__container-setting-center-header">
                     <div data-v-5b1caab5="" class="userInfo__container-content__avatar">
                         <img data-v-5b1caab5="" src="{{ auth()->user()->img }}">
                     </div>

                 </div>
                 <div data-v-5b1caab5="" class="userInfo__container-setting-center-content ar-1px-b">
                     <h5 data-v-5b1caab5="">Nickname</h5>
                     <div data-v-5b1caab5="" onclick="mud()">
                         <span data-v-5b1caab5="">{{ auth()->user()->name ?? 'Change NickName' }}</span>
                         <img src="{{ asset('assets/png/forward.png') }}"width="12" height="12" />
                     </div>
                 </div>
                 <div data-v-5b1caab5="" class="userInfo__container-setting-center-content">
                     <h5 data-v-5b1caab5="">UID</h5>
                     <div data-v-5b1caab5="">
                         <span data-v-5b1caab5="">{{ auth()->user()->usercode }}</span>
                     </div>
                 </div>
             </div>
             <div data-v-cb2d8429="" data-v-5b1caab5="" class="info-dialog"></div>
             <div data-v-5b1caab5="" class="info-dialog"></div>
         </div>
         <div data-v-54ba8dd7="" class="content setting-wrapper" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
             <div data-v-54ba8dd7="" class="setting-items-wrapper">
                 <div data-v-54ba8dd7="" class="content-sub_title">
                     <div data-v-54ba8dd7="">Security information</div>
                 </div>
                 <div data-v-54ba8dd7="" class="phone_container">
                     <div data-v-54ba8dd7="" class="phone_container-item">
                         <div data-v-54ba8dd7="" class="phone_container-item-left">
                             <img data-v-54ba8dd7="" src="https://91clubin.in/assets/png/editPswIcon-91edaf22.png">
                             <span data-v-54ba8dd7="">Registration IP</span>
                         </div>
                         <div data-v-54ba8dd7="" class="phone_container-item-right">
                             <span data-v-54ba8dd7=""
                                 style="color: #717171; font-size: 15px;">{{ auth()->user()->ip }}</span>
                             <i data-v-54ba8dd7=""></i>
                         </div>
                     </div>
                 </div>
                 <div data-v-54ba8dd7="" class="setting_container">
                     <div data-v-54ba8dd7="" class="phone_container-item setting_container_item">
                         <div data-v-54ba8dd7="" class="phone_container-item-left">
                             <img data-v-54ba8dd7="" src="https://91clubin.in/assets/png/EmailIcon-4cb8279d.png">
                             <span data-v-54ba8dd7="">Wallet Funds</span>
                         </div>
                         <div data-v-54ba8dd7="" class="phone_container-item-right">
                             <div data-v-54ba8dd7="" class="emailright">
                                 <div data-v-54ba8dd7="" style="color: #717171;font-size: 15px;">₹
                                     {{ auth()->user()->balance }}</div>
                             </div>
                             <i data-v-54ba8dd7=""></i>
                         </div>
                     </div>

                     <div data-v-54ba8dd7="" class="setting_container_item ar-1px-b">
                         <div data-v-54ba8dd7="">
                             <img data-v-54ba8dd7="" src="https://91clubin.in/assets/png/versionUpdate-8bb131c1.png">
                             <span data-v-54ba8dd7="">Updated version</span>
                         </div>
                         <div data-v-54ba8dd7="">
                             <h5 data-v-54ba8dd7="" style="color: #717171; font-size: 15px;">{{ $setting->version }}
                             </h5>
                             <i data-v-54ba8dd7=""></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div data-v-54ba8dd7="" onclick="shown()" class="delAllRq"
             style="display: ; --36a344b0: 'Roboto', 'Inter', sans-serif;">Delete Account Permanently</div>


         <uni-view data-v-3ff3c467="" id="notice" class="cu-modal ">
             <uni-view data-v-3ff3c467="" class="cu-dialog" style="width: 335px;">
                 <uni-view data-v-3ff3c467="" class="text-left">
                     <uni-view data-v-3ff3c467="" class="cu-bar bg-white justify-end">
                         <uni-view data-v-3ff3c467="" class="content"
                             style="font-weight: bold; font-size: 1.5em;background: #f7f8ff00!important;">Whether to
                             delete account</uni-view>
                     </uni-view>
                     <uni-view data-v-3ff3c467="">
                         <uni-text data-v-3ff3c467="" class="notice-content padding-xl block"
                             style="font-size: 1.2em;">
                             <span>After deleting the data cannot be recovered, please do it
                                 carefully, Are you sure that you want to delete your account, Term & Conditions
                                 Apply!</span>
                         </uni-text>
                     </uni-view>
                     <uni-view data-v-3ff3c467="" class="cu-bar bg-white justify-end">
                         <uni-view data-v-3ff3c467="" class="action">
                             <div data-v-8a55a30e="" class="dialog__container-footer">
                                 <div style="width: 3.66667rem; height: 1.06667rem; -webkit-box-flex: 0; -webkit-flex: none; flex: none; border-radius: 0.53333rem; line-height: 1.06667rem; background-image: -webkit-linear-gradient(top,#ff867a 0%,#f95959 100%); background-image: linear-gradient(180deg,#ff867a 0%,#f95959 100%); box-shadow: 0 0.05333rem #e74141; color: #fff; text-shadow: 0 .05333rem .02667rem 0 rgba(231,65,65,.5019607843); font-size: .42667rem; font-weight: 700; text-align: center;"
                                     data-v-54ba8dd7="" class="dialogBtn" onclick="window.location.href='';">Confirm
                                     delete</div>
                                 <div data-v-54ba8dd7="" onclick="hide()" class="dialogBtn"
                                     style="width: 3.66667rem; height: 1.06667rem; -webkit-box-flex: 0; -webkit-flex: none; flex: none; border-radius: 0.53333rem; line-height: 1.06667rem; color: #fff; font-size: .42667rem; text-align: center;border: 0.01333rem solid #f95959; color: #f95959; background: #fff; text-shadow: none; box-shadow: none; font-weight: 400;">
                                     Cancel</div>
                             </div>
                         </uni-view>
                     </uni-view>
                 </uni-view>
             </uni-view>
         </uni-view>
     </div>


     <uni-view data-v-3ff3c467="" id=nickname class="cu-modal">
         <div data-v-cb2d8429="" data-v-5b1caab5="" class="info-dialog">
             <div class="van-overlay" style="z-index: 2003;"></div>
             <div role="dialog" tabindex="0" class="van-popup van-popup--center van-dialog"
                 style="z-index: 2003;">
                 <div class="van-dialog__content">
                     <div data-v-cb2d8429="">
                         <div data-v-cb2d8429="" class="info-dialog-header">
                             <span data-v-cb2d8429="" class="info-dialog-header-left"></span>
                             <h5 data-v-cb2d8429="">Change Nickname</h5>
                             <span data-v-cb2d8429="" class="info-dialog-header-right"></span>
                         </div>
                         <form action="{{ route('change_name') }}" method="post" id="nick">
                             @csrf
                             <div data-v-cb2d8429="" class="info-dialog-content">
                                 <div data-v-5b1caab5="" class="info-dialog-content-title">
                                     <img data-v-5b1caab5="" class=""
                                         data-origin="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAATlBMVEX6WloAAAD/Wlr8W1v7Wlr9Wlr7Wlr7W1v8WVn6WVn6Wlr7W1v7W1v7Wlr6W1v7Wlr6Wlr5WVn9W1v+XFz7W1v6Wlr6WVn6W1v6Wlr6W1vWf9HtAAAAGXRSTlNmAApfWSV57DsaTNnHjPWCsnAyLLyeU+OocLkjWQAAAltJREFUaN7tmtuOqzAMRT25QbgFSqHN///o0ZmHjqYmdlKnUqvpekViwXYUEgf4ejIfQVWBb3cNoLvWo0s1BNbADWOrC3wHvzC+qkB1gGhVNYE6aTjipOoILLp9SSmgKHysUEKBaoGELwVw4bPo08MCb4CDLwVQQzObTjECPny+FGWCVUMhZiUEXPiSUgAdvjwnwEMTEBIF0OHLcwJZOvzsAWhaSzKe+ybGqT+PQKJtSmDJ2/fxRrMBiT0WKOL5XR9/MTgg0OpQYIj7N/GOhjTsRwJL37/MsCIB+QJNPOCyUCFhgYckczxkBgKPBC0TEGaiXqFFgg5SbDGWv8KOBBpS9ClBTxUBCSBJTEJllC8IaUGoIhjTgvE9BOHZgqVWkcuH6QXqCOaUYKskWKaEwAkF/GRXS7Bc4gENCASCDw4lEHwypQJww91E6kAmwGxNvNFvAAIBsfCa0MJLICD4CD6CFxY4F0a3PEcQrkNz+5IN11BXEOYJTXaDEwnw5gnTB5EAb54wg5MLrlMkaDap4BwZZplgiCyDQEA8P2/I2YDMMYtr3gZkx+MnZhIA0yFBSxWgPKQ2Yxs75QomehubLELMBhDmCwvWrP195iLSYgEu8/nxGhiincMv2/lVpFZ5DamQFdIUiICYlpobLuzjzwvfUvtBGRDTKbKtaYUKvbKN2RYEnIjGLFKI0sECeU7Gl7T3TXn4r3VAUXrE4h86JLJGEP6PgCLvmEu97kEdMXvw4fMCvhTa1jruJcIXCJhSdKrukbu5D//dfhr4j287DaD3798e3vLHjT8q+AeHD4VjUdTPmQAAAABJRU5ErkJggg=="
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAATlBMVEX6WloAAAD/Wlr8W1v7Wlr9Wlr7Wlr7W1v8WVn6WVn6Wlr7W1v7W1v7Wlr6W1v7Wlr6Wlr5WVn9W1v+XFz7W1v6Wlr6WVn6W1v6Wlr6W1vWf9HtAAAAGXRSTlNmAApfWSV57DsaTNnHjPWCsnAyLLyeU+OocLkjWQAAAltJREFUaN7tmtuOqzAMRT25QbgFSqHN///o0ZmHjqYmdlKnUqvpekViwXYUEgf4ejIfQVWBb3cNoLvWo0s1BNbADWOrC3wHvzC+qkB1gGhVNYE6aTjipOoILLp9SSmgKHysUEKBaoGELwVw4bPo08MCb4CDLwVQQzObTjECPny+FGWCVUMhZiUEXPiSUgAdvjwnwEMTEBIF0OHLcwJZOvzsAWhaSzKe+ybGqT+PQKJtSmDJ2/fxRrMBiT0WKOL5XR9/MTgg0OpQYIj7N/GOhjTsRwJL37/MsCIB+QJNPOCyUCFhgYckczxkBgKPBC0TEGaiXqFFgg5SbDGWv8KOBBpS9ClBTxUBCSBJTEJllC8IaUGoIhjTgvE9BOHZgqVWkcuH6QXqCOaUYKskWKaEwAkF/GRXS7Bc4gENCASCDw4lEHwypQJww91E6kAmwGxNvNFvAAIBsfCa0MJLICD4CD6CFxY4F0a3PEcQrkNz+5IN11BXEOYJTXaDEwnw5gnTB5EAb54wg5MLrlMkaDap4BwZZplgiCyDQEA8P2/I2YDMMYtr3gZkx+MnZhIA0yFBSxWgPKQ2Yxs75QomehubLELMBhDmCwvWrP195iLSYgEu8/nxGhiincMv2/lVpFZ5DamQFdIUiICYlpobLuzjzwvfUvtBGRDTKbKtaYUKvbKN2RYEnIjGLFKI0sECeU7Gl7T3TXn4r3VAUXrE4h86JLJGEP6PgCLvmEu97kEdMXvw4fMCvhTa1jruJcIXCJhSdKrukbu5D//dfhr4j287DaD3798e3vLHjT8q+AeHD4VjUdTPmQAAAABJRU5ErkJggg==">
                                     <span data-v-5b1caab5=""></span>
                                 </div>
                                 <input value="{{ auth()->user()->name ?? '' }}"
                                     style="width: 8.13333rem; height: 1.17333rem; background: #f2f2f2;z border-radius: 0.8rem; border: none; padding-left: 0.6rem; color: #a6a6a6;"
                                     data-v-5b1caab5="" maxlength="30" name="name" type="text"
                                     placeholder="Please enter Nickname">
                                 <h4 data-v-5b1caab5=""
                                     style="font-size: .32rem;color: #ff7172;padding-top: 0.29333rem;">Please do not
                                     enter a Nickname with more than 30 characters</h4>
                             </div>

                             <div data-v-cb2d8429="" class="info-dialog-footer">
                                 <img data-v-cb2d8429="" onclick="cancel()" class=""
                                     data-origin="https://91clubin.in/assets/png/close-00101b6c.png"
                                     src="https://91clubin.in/assets/png/close-00101b6c.png">
                             </div>
                     </div>
                 </div>
                 <div class="van-hairline--top van-dialog__footer">
                     <button type="submit"
                         class="van-button van-button--default van-button--large van-dialog__confirm">
                         <div class="van-button__content">
                             <span class="van-button__text">Confirm</span>
                         </div>
                     </button>
                 </div>
                 </form>
             </div>
         </div>

     </uni-view>


     <script>
         function mud() {
             document.getElementById("nickname").className = "cu-modal show";
         }

         function cancel() {
             document.getElementById("nickname").className = "cu-modal";
         }

         function frm() {
             document.getElementById("nick").submit();
         }

         function shown() {
             document.getElementById("notice").className = "cu-modal show";
         }

         function hide() {
             document.getElementById("notice").className = "cu-modal";
         }

         function log() {
             document.getElementById("log").className = "cu-modal show";
         }

         function logclose() {
             document.getElementById("log").className = "cu-modal";
         }

         function ok() {
             window.location.href = '/logout';
         }
     </script>

     </body>

 </html>
