@extends('games.color.layouts.app')

@section('content')
    <div data-v-c0d1aac6="" class="TimeLeft__C">
        <div data-v-c0d1aac6="" class="TimeLeft__C-rule" id="readrule">How to play</div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-name">Win Go 5Min</div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-num">
            @foreach ($last5 as $item)
                <div data-v-c0d1aac6="" class="n{{ $item->num }}"></div>
            @endforeach
        </div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-id" style="font-size:0.52667rem;">
            <span id="period">{{ renderGameId5() }}</span>
        </div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-text">Time remaining</div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-time">
            <div data-v-c0d1aac6="">
                <span id="demo"></span>
            </div>
        </div>
    </div>
    <div data-v-43251c11="" data-v-f31474c6="" class="Betting__C" voicetype="1" typeid="1">
        <div data-v-43251c11="" class="Betting__C-head">
            <div data-v-43251c11="" class="Betting__C-head-g" id="sapregreen" onclick="green()">Green</div>
            <div data-v-43251c11="" class="Betting__C-head-p" id="saprevoilet" onclick="vio()">Violet</div>
            <div data-v-43251c11="" class="Betting__C-head-r" id="sapreredbutton" onclick="red()">Red</div>
        </div>
        <div data-v-43251c11="" class="Betting__C-numC">
            <div data-num="0" id="saprenum0" onclick="saprenum0()" data-v-43251c11="" class="Betting__C-numC-item0"></div>
            <div data-v-43251c11="" data-num="1" id="saprenum1" onclick="saprenum1()" class="Betting__C-numC-item1"></div>
            <div data-num="2" id="saprenum2" onclick="saprenum2()" data-v-43251c11="" class="Betting__C-numC-item2"></div>
            <div data-v-43251c11="" data-num="3" id="saprenum3" onclick="saprenum3()" class="Betting__C-numC-item3"></div>
            <div data-num="4" id="saprenum4" onclick="saprenum4()" data-v-43251c11="" class="Betting__C-numC-item4"></div>
            <div data-v-43251c11="" data-num="5" id="saprenum5" onclick="saprenum5()" class="Betting__C-numC-item5"></div>
            <div data-num="6" id="saprenum6" onclick="saprenum6()" data-v-43251c11="" class="Betting__C-numC-item6"></div>
            <div data-v-43251c11="" data-num="7" id="saprenum7" onclick="saprenum7()" class="Betting__C-numC-item7"></div>
            <div data-num="8" id="saprenum8" onclick="saprenum8()" data-v-43251c11="" class="Betting__C-numC-item8"></div>
            <div data-v-43251c11="" data-num="9" id="saprenum9" onclick="saprenum9()" class="Betting__C-numC-item9"></div>
        </div>
        <div data-v-43251c11="" class="Betting__C-multiple">
            <div data-v-43251c11="" class="Betting__C-multiple-l">Random</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r active"> X1</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X5</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X10</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X20</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X50</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X100</div>
        </div>
        <div data-v-43251c11="" class="Betting__C-foot">
            <div data-v-43251c11="" class="Betting__C-foot-b">Big</div>
            <div data-v-43251c11="" class="Betting__C-foot-s">Small</div>
        </div>
    </div>
    <div data-v-4e271e20="" data-v-f31474c6="" class="RecordNav__C">
        <div data-v-4e271e20="" class="active">Game history</div>
        <div data-v-4e271e20="" class="">Chart</div>
        <div data-v-4e271e20="" class="">My history</div>
    </div>
    <div data-v-c74f4bba="" data-v-f31474c6="" class="GameRecord__C">
        <table id="tableID" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Period</th>
                    <th>Prize</th>
                    <th>Number</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($game_record as $item)
                    <tr>
                        <td>{{ $item->period }}</td>
                        <td>{{ $item->ans }}</td>
                        <td>{{ $item->num }}</td>
                        <td>
                            @if ($item->clo == 'R')
                                <div
                                    style=" margin: auto; background-color:rgb(255, 0, 0);  border-radius: 20px 20px 20px 20px; height: 15px; width: 15px; ">
                                </div>
                            @elseif($item->clo == 'G')
                                <div
                                    style="margin: auto;  background-color:rgb(0, 255, 0);  border-radius: 20px 20px 20px 20px; height: 15px; width: 15px; ">
                                </div>
                            @elseif($item->clo == 'GV')
                                <div
                                    style="margin: auto;  background-color:rgb(0, 255, 0);  border-radius: 20px 20px 20px 20px; height: 15px; width: 15px; display: inline-block; *display: inline;  ">
                                </div>
                                <div
                                    style="margin: auto;  background-color:rgb(143, 0, 255);  border-radius: 20px 20px 20px 20px; height: 15px; width: 15px; display: inline-block; *display: inline;  ">
                                </div>
                            @elseif($item->clo == 'RV')
                                <div
                                    style="margin: auto;  background-color:rgb(255, 0, 0);  border-radius: 20px 20px 20px 20px; height: 15px; width: 15px; display: inline-block; *display: inline;  ">
                                </div>
                                <div
                                    style="margin: auto;  background-color:rgb(143, 0, 255);  border-radius: 20px 20px 20px 20px; height: 15px; width: 15px; display: inline-block; *display: inline;  ">
                                </div>
                            @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script>
        $(window).on("load", function() {
            setTimeout(
                function() {
                    $(".loader-wrapper").css("display", "none");
                }, 1200);

        });


        function func() {


            var countDownDate = Date.parse(new Date) / 1e3;
            var now = new Date().getTime();
            var distance = 300 - countDownDate % 300;
            var i = distance / 60,
                n = distance % 60,
                o = n / 10,
                s = n % 10;
            var minutes = Math.floor(i);
            var seconds = ('0' + Math.floor(n)).slice(-2);
            document.getElementById("demo").innerHTML = "   <span><span >0" + Math.floor(minutes) + "</span>:<span >" +
                seconds + "</span></span>";

            var diff = distance;

            if (diff < 2 || diff < 3) {
                setTimeout(function() {

                    triggerAjaxCall()
                }, 1000);

            }
            if (diff < 30) {
                document.getElementById("saprered").className = "cu-modal";
                document.getElementById("sapregreenbox").className = "cu-modal";
                document.getElementById("sapreviobox").className = "cu-modal";
                document.getElementById("sapre0box").className = "cu-modal";
                document.getElementById("sapre1box").className = "cu-modal";
                document.getElementById("sapre2box").className = "cu-modal";
                document.getElementById("sapre3box").className = "cu-modal";
                document.getElementById("sapre4box").className = "cu-modal";
                document.getElementById("sapre5box").className = "cu-modal";
                document.getElementById("sapre6box").className = "cu-modal";
                document.getElementById("sapre7box").className = "cu-modal";
                document.getElementById("sapre8box").className = "cu-modal";
                document.getElementById("sapre9box").className = "cu-modal";
                document.getElementById("sapregreen").setAttribute("disabled", "true");
                document.getElementById("saprevoilet").setAttribute("disabled", "true");
                document.getElementById("sapreredbutton").setAttribute("disabled", "true");
                document.getElementById("saprenum0").setAttribute("disabled", "true");
                document.getElementById("saprenum1").setAttribute("disabled", "true");
                document.getElementById("saprenum2").setAttribute("disabled", "true");
                document.getElementById("saprenum3").setAttribute("disabled", "true");
                document.getElementById("saprenum4").setAttribute("disabled", "true");
                document.getElementById("saprenum5").setAttribute("disabled", "true");
                document.getElementById("saprenum6").setAttribute("disabled", "true");
                document.getElementById("saprenum7").setAttribute("disabled", "true");
                document.getElementById("saprenum8").setAttribute("disabled", "true");
                document.getElementById("saprenum9").setAttribute("disabled", "true");
            }

            if (diff > 30) {
                document.getElementById("sapregreen").removeAttribute('disabled');
                document.getElementById("saprevoilet").removeAttribute('disabled');
                document.getElementById("sapreredbutton").removeAttribute('disabled');
                document.getElementById("saprenum0").removeAttribute('disabled');
                document.getElementById("saprenum1").removeAttribute('disabled');
                document.getElementById("saprenum2").removeAttribute('disabled');
                document.getElementById("saprenum3").removeAttribute('disabled');
                document.getElementById("saprenum4").removeAttribute('disabled');
                document.getElementById("saprenum5").removeAttribute('disabled');
                document.getElementById("saprenum6").removeAttribute('disabled');
                document.getElementById("saprenum7").removeAttribute('disabled');
                document.getElementById("saprenum8").removeAttribute('disabled');
                document.getElementById("saprenum9").removeAttribute('disabled');
            }
            if (diff == 298) {

                // $("#sapremybet").load('saprerec.php?srpage=1');
                // get result

            }
            if (diff == 300) {


                // $("#sapremybet").load('saprerec.php?srpage=1');
                // get rsult
            }


        }

        function triggerAjaxCall() {
            $.ajax({
                url: "{{ route('get.gameId5min') }}",
                method: 'GET',
                success: function(response) {
                    console.log("AJAX response:", response);
                    $('#period').text(response.id);
                },
                error: function(error) {
                    console.error("AJAX error:", error);
                }
            });
        }

        func();
        var interval = setInterval(func, 1000);
        var sapremodal = document.getElementById("sapregreenbox");
        var saprespan = document.getElementById("sapreclose");
        var saprespan3 = document.getElementById("sapreclose3");
        var saprespan1 = document.getElementById("sapreclose1");
        saprespan3.onclick = function() {
            document.getElementById("saprered").className = "cu-modal";
        }
        saprespan1.onclick = function() {
            document.getElementById("sapreviobox").className = "cu-modal";
        }

        saprespan.onclick = function() {
            sapremodal.className = "cu-modal";
        }

        document.getElementById("readrule").onclick = function() {
            document.getElementById("rule").className = "cu-modal show";
        }
        document.getElementById("ruleclose").onclick = function() {
            document.getElementById("rule").className = "cu-modal";
        }
    </script>




@endsection
