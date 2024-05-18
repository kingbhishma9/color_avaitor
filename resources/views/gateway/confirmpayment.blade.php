<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <meta http-equiv="expires" content="1">
    <meta name="google" value="notranslate">
    <meta name="msapplication-TileColor" content="#0093ff">
    <meta name="theme-color" content="#0093ff">
    <meta name="msapplication-navbutton-color" content="#0093ff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0093ff">
    <meta name="description" content="Make money with Fairwin">
    <link rel="shortcut icon" href="fevicon.png" type="image/x-icon">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Fairwin">
    <meta name="twitter:site" content="Fairwin">
    <meta name="twitter:description" content="Make money with Fairwin">
    <meta name="twitter:image" content="logo.jpg">
    <meta property="og:title" content="Fairwin">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Fairwin">
    <meta property="og:url" content="">
    <meta name="msapplication-TileImage" content="logo.jpg">
    <meta property="og:image" content="logo.jpg">
    <meta property="og:description" content="Make money with Fairwin">
    <meta property="url" content="">
    <meta property="type" content="website">
    <meta property="title" content="Fairwin">
    <meta property="description" content="Make money with Fairwin">
    <meta property="image" content="logo.jpg">
    <meta itemprop="image" content="logo.jpg">




    <link rel="stylesheet" href="https://fiewin.bhishmadhakal.com.np/payment/bootstrap.min.css">
    <link rel="stylesheet" href="https://fiewin.bhishmadhakal.com.np/payment/light.css?23.2.21.6">
    <link rel="stylesheet" href="https://fiewin.bhishmadhakal.com.np/payment/dropzone.css?23.2.21.6">


    <script type='text/javascript'>
        function chooseFile() {
            document.getElementById("fileInput").click();
        }

        function submit() {
            document.getElementById("ssupload").submit();
        }

        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('uimg').style.display = "";
                document.getElementById('upifrm').style.display = "none";
                var output = document.getElementById('payss');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap');
    </style>
    <title>98 Club</title>
    <style id="aby-style"></style>
</head>

<body>
    <section class="">
        <div class="row mcas">
            <div class="col-md-6 col-lg-4 main">
                <div class="row" id="warea">
                    <div class="col-12 m-record">
                        <div class="row nav-top auto xtl tf-14">
                            <div class="col-6 ddavc"><span class="nav-back wt"
                                    onclick="window.location.href='{{ route('recharge') }}'"></span><span
                                    class="tfw-5 tf-18">Recharge</span></div>
                            <div class="col-6 xtr">₹ <span class="tf-28 tfw-5" id="rmt"
                                    onclick="copyAMT()">100</span>
                            </div>
                            <div class="col-7 pt-3 xtl">
                                <div class="lnhn30">Transaction Id: <span id="trid">64979426</span></div>
                                <div class="lnhn30">Payment mode: <span class="xic" id="pmod">PhonePe</span>
                                </div>
                                <div class="lnhn30">VPA: <span id="upid">@upi</span></div>
                            </div>
                            <div class="col-5 xtr pt-3" onclick="paybqr()">
                                <div id="qrcode"
                                    title="upi://pay?pa=@upi&amp;pn=Fairwin&amp;tn=recharge&amp;&amp;am=100&amp;cu=INR">
                                    <img src="winshotqrcode.jpg" style=" width: -webkit-fill-available;">
                                </div>
                            </div>
                            <div class="col-12 xtr tf-18 pb-3 dflx jusfcr">
                                <span class="paynqr mr-2" onclick="copyamount()">Copy Amt</span>
                                <span class="paynqr mr-2" id="cu" onclick="copyUPI()">Copy UPI</span>
                                <span class="paynqr"
                                    id="pnnb"onclick="window.location.href='phonepe://pay?pa=colourwinpay@upi&amp;pn=Fairwin&amp;tn=recharge&amp;&amp;am=100&amp;cu=INR'">Open
                                    App</span>
                            </div>
                        </div>
                        <div class="row mt-4" id="rcpro">
                            <div class="col-2 xtc pa-0"><img class="dhkm"
                                    src="{{ asset('assets/svg/tick_p.svg') }}" height="40"></div>
                            <div class="col-10 xtl tfw-6 tf-18 tfcdb pl-0">If you have paid, please upload a screenshot
                            </div>
                            <div class="col-2 xtc pa-0">
                                <div class="lhsu bg" id="ln1"></div>
                            </div>
                            <div class="col-10 mt-3 gsbgi" id="upimg">
                                <div class="pt-2 pb-2" id="uimg" style="display:none"><img class="bodr6"
                                        id="payss" src=""></div>
                                <div class="pt-2 pb-2" id="upifrm" onclick="chooseFile();">
                                    <form class="dropzone dz-clickable zooani" id="ssupload" method="POST"
                                        action="" enctype="multipart/form-data">
                                        <div class="dz-message">
                                            <div style="height:0px;overflow:hidden">
                                                <input type="hidden" value="true" name="upload">
                                                <input id="fileInput" type="file" name="uploadfile"
                                                    value="" onchange="preview_image(event)">
                                            </div>
                                            <div class="dropdocs"><span class="add"></span><br>Upload</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-2 mt-3 xtc pa-0"><img id="rcagnt" class="dhkm"
                                    src="{{ asset('assets/svg/tick_p.svg') }}" height="40">
                            </div>
                            <div class="col-10 mt-4 xtl tfw-6 tf-18 tfcdb pl-0">Submit to complete Recharge</div>
                            <div class="col-2 xtc pa-0">
                                <div class="lhsu" id="ln2"></div>
                            </div>
                            <div class="col-10 pl-0 xtc">
                                <div class="mb-3 xtl ddavc" id="spuvt"><span class="comp"></span><span
                                        class="">Rest assured! Our recharge agents processing</span></div>
                            </div>
                            <div class="col-2 xtc pa-0"><img id="rccmp" class="dhkm"
                                    src="{{ asset('assets/png/tick_inac.png') }}" height="40">
                            </div>
                            <div class="col-10 mt-2 xtl tfw-6 tf-18 tfcdb pl-0">Submit</div>
                        </div>
                        <div class="row mt-2 mb-4" id="ccomod">
                            <div class="col-6 pr-1">
                                <div class="mt-3 btn-con rc" id="canod"
                                    onclick="window.location.href='/#/recharge'">Cancel</div>
                            </div>
                            <div class="col-6 pl-1">
                                <div class="mt-3 btn-con rc" onclick="submit()">Submit</div>
                            </div>
                        </div>
                    </div>
                    <div id="dtaod">

                    </div>
                </div>
                <div class="row" id="odrea"></div>
                <div class="row" id="footer"></div>
                <div class="row" id="opffp"></div>
                <div class="row" id="anof">

                </div>
                <div class="row" id="dta_ref"></div>
            </div>
        </div>
    </section>
    <input type="file" class="dz-hidden-input" accept=".png,.PNG,.jpg,.jpeg,.JPG,.JPEG"
        style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><input
        type="file" class="dz-hidden-input" accept=".png,.PNG,.jpg,.jpeg,.JPG,.JPEG"
        style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
</body>

</html>
