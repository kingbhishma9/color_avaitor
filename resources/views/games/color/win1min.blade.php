@extends('games.color.layouts.app')

@section('content')
    <div data-v-c0d1aac6="" class="TimeLeft__C">
        <div data-v-c0d1aac6="" class="TimeLeft__C-rule" id="readrule">How to play</div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-name">Win Go 1Min</div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-num" id="colorNumber">


        </div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-id" style="font-size:0.52667rem;">
            <span id="period">{{ renderGameId1() }}</span>
        </div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-text">Time remaining</div>
        <div data-v-c0d1aac6="" class="TimeLeft__C-time">
            <div data-v-c0d1aac6="">
                <span id="demo"></span>
            </div>
        </div>
    </div>
    <div data-v-43251c11="" data-v-f31474c6="" class="Betting__C" id="disable_button" voicetype="1" typeid="1">
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

        {{-- Hide from page-home css file line number 22455 --}}

        <div data-v-43251c11="" class="Betting__C-multiple" style="display: none">
            <div data-v-43251c11="" class="Betting__C-multiple-l">Random</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r active"> X1</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X5</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X10</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X20</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X50</div>
            <div data-v-43251c11="" class="Betting__C-multiple-r"> X100</div>
        </div>
        <div data-v-43251c11="" class="Betting__C-foot" style="display: none">
            <div data-v-43251c11="" class="Betting__C-foot-b">Big</div>
            <div data-v-43251c11="" class="Betting__C-foot-s">Small</div>
        </div>
    </div>
    <div data-v-4e271e20="" data-v-f31474c6="" class="RecordNav__C">
        <div data-v-4e271e20="" data-target="#div_game_history" class="active">Game history</div>
        <div data-v-4e271e20="" data-target="#chart" class="">Chart</div>
        <div data-v-4e271e20="" data-target="#div_my_history" class="">My history</div>
    </div>


    @include('games.color.includes.game')
    @include('games.color.includes.chart')
    @include('games.color.includes.history')

    <script>

        $(document).ready(function() {

            $('.display').hide();

            $(".RecordNav__C > div.active").each(function() {
                var target = $(this).data('target');
                $(target).show();
            });

            $(".RecordNav__C").delegate("div", "click", function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                $('.display').hide();

                var target = $(this).data('target');
                $(target).show();
            });

        });



        $(window).on("load", function() {
            setTimeout(
                function() {
                    $(".loader-wrapper").css("display", "none");
                }, 1200);

        });
        var triggerCalled = false;


        function func() {


            var countDownDate = Date.parse(new Date) / 1e3;
            var now = new Date().getTime();
            var distance = 60 - countDownDate % 60;
            var i = distance / 60,
                n = distance % 60,
                o = n / 10,
                s = n % 10;
            var minutes = Math.floor(i);
            var seconds = ('0' + Math.floor(n)).slice(-2);
            document.getElementById("demo").innerHTML = "   <span><span >0" + Math.floor(minutes) + "</span>:<span >" +
                seconds + "</span></span>";

            var diff = distance;


            if (diff < 5) {
                document.getElementById('disable_button').style.display = 'none';

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

            if (diff > 5) {
                document.getElementById('disable_button').style.display = '';
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
            if (diff == 60) {
                $('#colorNumber').empty();
                $('#game_histroy').DataTable().ajax.reload();
                $('#chartdata').DataTable().ajax.reload();

            }
            if (diff == 58) {

                $('#colorNumber').empty();
                $('#chartdata').DataTable().ajax.reload();
                $('#game_histroy').DataTable().ajax.reload();
            }
    if (diff < 3) {
        triggerAjaxCall();
    }




            if (diff == 57) {
                $.ajax({
                    url: "{{ route('showResult') }}",
                    method: 'GET',
                    data: {
                        url: '{{ Route::currentRouteName() }}'
                    },
                    success: function(response) {
                        if (response.id != null) {
                            document.getElementById("winningtippopup").style.display = "";
                            document.getElementById("result_number").innerHTML = response.number;
                            document.getElementById("resultDetails").innerHTML = 'Period:Win 1 minute ' +
                                response.period;
                            if (response.res == 'fail') {
                                document.getElementById("resultMessage").innerHTML = "Sorry";
                                document.getElementById("result").innerHTML = "Lose";
                                document.getElementById("backgroundImage").classList.add("isL");

                                if (response.color == 'R') {
                                    document.getElementById("result_color").classList.add("typered");
                                }
                                if (response.color == 'G') {
                                    document.getElementById("result_color").classList.add("typegreen");
                                }
                                if (response.color == 'GV') {
                                    document.getElementById("result_color").classList.add("typegv");
                                }
                                if (response.color == 'RV') {
                                    document.getElementById("result_color").classList.add("typerv");
                                }
                            }
                            if (response.res == 'success') {
                                document.getElementById("result").innerHTML = "You Won";
                                document.getElementById("backgroundImage").classList.add("isW");
                                document.getElementById("resultMessage").innerHTML = "Congratulations";
                                document.getElementById("bonus").innerHTML = "₹"+response.am;

                                if (response.color == 'R') {
                                    document.getElementById("result_color").classList.add("typered");
                                }
                                if (response.color == 'G') {
                                    document.getElementById("result_color").classList.add("typegreen");
                                }
                                if (response.color == 'GV') {
                                    document.getElementById("result_color").classList.add("typegv");
                                }
                                if (response.color == 'RV') {
                                    document.getElementById("result_color").classList.add("typerv");
                                }
                            }
                        } else {
                            document.getElementById("winningtippopup").style.display = "none";
                        }

                    },
                    error: function(error) {

                    }
                });

            }

        }


        function triggerAjaxCall() {
            $.ajax({
                url: "{{ route('show.gameId1min') }}",
                method: 'GET',
                success: function(response) {
                    setTimeout(function(){
                    $('#period').text(response.id);

                    },6000)
                    console.log("triggerAjaxCall success:", response);
                },
                error: function(error) {
                    console.error("An error occurred:", error);
                }
            });
        }

        func();



        function getAllIndices(data) {
            data.forEach(element => {
                var className = "n" + element.num;
                var newSpan = $('<div data-v-c0d1aac6=""></div>').addClass(className);
                $('#colorNumber').append(newSpan);

            });

        }


        //game history
        $(document).ready(function() {

            $('#game_histroy').DataTable({
                searching: false,
                paging: true,
                info: false,
                ordering: false,
                dom: 'rtip',
                ajax: {
                    url: "{{ route('win1') }}",
                    dataSrc: function(response) {
                        if (response && Array.isArray(response)) {
                            const sliceData = response.slice(0, 5);
                            getAllIndices(sliceData);
                            return response;
                        } else {
                            toastr.error("No data found or invalid response. Please try again.");
                            return [];
                        }
                    },
                    error: function(xhr, error, thrown) {
                        toastr.error("No data found or invalid response. Please try again.");
                    }
                },
                columns: [{
                        data: 'period'
                    },
                    {
                        data: 'ans'
                    },
                    {
                        data: 'num'
                    },
                    {
                        data: 'clo',
                        render: function(data, type, row, meta) {
                            if (data === 'R') {
                                return `
                                <div style="margin: auto; background-color: rgb(255, 0, 0); border-radius: 20px; height: 20px; width: 20px;">
                                </div>`;
                            } else if (data === 'G') {
                                return `<div style="margin: auto;  background-color:rgb(0, 255, 0);  border-radius: 20px 20px 20px 20px; height: 20px; width: 20px; ">
                                </div>`;

                            } else if (data === 'RV') {
                                return `<div style="margin: auto;  background-image:linear-gradient(to right, rgb(255, 0, 0) 50%, rgb(143, 0, 255) 50%);  border-radius: 20px 20px 20px 20px; height: 20px; width: 20px; ">
                                </div>`;

                            } else if (data === 'GV') {
                                return `<div style="margin: auto;  background-image:linear-gradient(to right, rgb(0, 255, 0) 50%, rgb(143, 0, 255) 50%);  border-radius: 20px 20px 20px 20px; height: 20px; width: 20px; ">
                                </div>`;
                            } else {
                                return '';
                            }
                        }
                    }
                ],
            });


        });

        //chart
        $(document).ready(function() {

            $('#chartdata').DataTable({
                searching: false,
                paging: true,
                info: false,
                ordering: false,
                dom: 'rtip',
                ajax: {
                    url: "{{ route('win1') }}",
                    dataSrc: function(response) {
                        if (response && Array.isArray(response)) {
                            return response;
                        } else {
                            toastr.error("No data found or invalid response. Please try again.");
                            return [];
                        }
                    },
                    error: function(xhr, error, thrown) {
                        toastr.error("No data found or invalid response. Please try again.");
                    }
                },
                columns: [{
                        data: 'period'
                    },


                    {
                        data: 'num',
                        render: function(data, type, row, meta) {
                            if (data === '1') {
                                return `
                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action1">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>
                                        `;
                            } else if (data === '2') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action2">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>
                                `;

                            } else if (data === '3') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action3">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>

                                `;

                            } else if (data === '4') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action4">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>

                                `;
                            } else if (data === '5') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action5">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>

                                `;
                            } else if (data === '6') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action6">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>

                                `;
                            } else if (data === '7') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action7">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>

                                `;
                            } else if (data === '8') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action8">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>

                                `;
                            } else if (data === '9') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action9">9</div>
                                    </div>
                                </div>

                                `;
                            } else if (data === '0') {
                                return `

                                <div data-v-54016b1c="" class="van-col van-col--16">
                                    <div data-v-54016b1c="" class="Trend__C-body2-Num">
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item action0">0</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item ">1</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">2</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">3</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">4</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">5</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">6</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">7</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">8</div>
                                        <div data-v-54016b1c="" class="Trend__C-body2-Num-item">9</div>
                                    </div>
                                </div>

                                `;
                            } else {
                                return '';
                            }
                        }
                    }
                ],
            });


        });
    </script>


    <script>
        $(document).ready(function() {

            $.ajax({
                url: "{{ route('getBeting') }}",
                type: "GET",
                success: function(response) {
                    if (response && Array.isArray(response)) {
                        response.forEach(function(item, i) {
                            var recordHtml = `
                            <div data-v-373b3197="" class="MyGameRecordList__C-item" id="design">
                            <div data-v-373b3197="" class="MyGameRecordList__C-item-l MyGameRecordList__C-item-l-green"></div>
                            <div data-v-373b3197="" class="MyGameRecordList__C-item-m">
                                <div data-v-373b3197="" class="MyGameRecordList__C-item-m-top">${item.period}</div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-item-m-bottom">`
                            const date = new Date(item.created_at);
                            const formatter = new Intl.DateTimeFormat('en-US', {
                                day: '2-digit',
                                month: '2-digit',
                                year: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit'
                            });
                            const formattedDate = formatter.format(date);
                            00
                            recordHtml += `${formattedDate}</div></div>`;
                            if (item.res === 'success') {
                                recordHtml += `
                                <div data-v-373b3197="" class="MyGameRecordList__C-item-r success">
                                    <div data-v-373b3197="" class="success">${item.res}</div>
                                    <span data-v-373b3197="">+₹${item.am}</span>
                                    </div>
                                    `;
                            } else if (item.res === 'fail') {
                                recordHtml += `
                                    <div data-v-373b3197="" class="MyGameRecordList__C-item-r">
                                        <div data-v-373b3197="" class="">Failed</div>
                                        <span data-v-373b3197="">-₹`;
                                            var upamount = parseFloat(item.amount) + parseFloat(item.tax);
                                            recordHtml += `${upamount}</span>
                                        </div>
                                        `;
                            }
                            recordHtml +=
                                `</diV>
                                    <div data-v-373b3197="" class="MyGameRecordList__C-detail" id="designs" >
                                        <div data-v-373b3197="" class="MyGameRecordList__C-detail-text">Details</div>
                                        <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Period <div data-v-373b3197="">${item.period}</div>
                                        </div>
                                        <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Purchase amount <div data-v-373b3197="">₹`;
                            var amount = parseFloat(item.amount) + parseFloat(item.tax);
                            recordHtml += `${amount}</div></div>
                                            <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Quantity <div data-v-373b3197="">${item.quantity}</div>
                                            </div>
                                            <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Amount after tax <div data-v-373b3197="" class="red">₹${item.amount}</div>
                                            </div>
                                            <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Tax <div data-v-373b3197="">₹${item.tax}</div>
                                            </div>
                                            <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Result <div data-v-373b3197="">
                                                <div data-v-373b3197="" class="MyGameRecordList__C-inlineB">${item.number}</div>
                                                <div data-v-373b3197="" class="MyGameRecordList__C-inlineB ">`;
                            if (item.color == 'G') {
                                var color = 'Green';
                            } else if (item.color == 'R') {
                                var color = 'Red';
                            } else if (item.color == 'RV') {
                                var color = 'Red Violet';
                            } else if (item.color == 'GV') {
                                var color = 'Green Violet';
                            } else {
                                var color = '';
                            }



                            recordHtml +=
                                ` ${color}  </div>
                                </div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Select <div data-v-373b3197="">`;

                            if (item.ans == 'violet') {
                                var ans = "Violet";
                            } else if (item.ans == 'red') {
                                var ans = "Red";
                            } else if (item.ans == 'green') {
                                var ans = "Green";
                            } else {
                                var ans = item.ans;
                            }

                            recordHtml += ` ${ans}</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Status <div data-v-373b3197="" class="green">
                                    Succeed</div>
                                </div>`;


                            if (item.res == 'fail') {
                                var downamount = parseFloat(item.amount) + parseFloat(item.tax);
                                var win_loss = '-₹' + downamount;
                                recordHtml +=
                                    `<div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Win/lose <div data-v-373b3197="" class="red">`;
                            } else if (item.res == 'success') {
                                var win_loss = '+₹' + item.am;
                                recordHtml +=
                                    `<div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Win/lose <div data-v-373b3197="" class="green">`;
                            } else {
                                var win_loss = item.res;
                                recordHtml +=
                                    `<div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Win/lose <div data-v-373b3197="">`;
                            }

                            recordHtml += `${win_loss} </div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Order time <div data-v-373b3197="">${formattedDate}</div>
                                </div>
                            </div>

                    `;
                            var first = "design";
                            var second = "designs";
                            
                            $(first).click(function() {
                                $(second).toggle();
                            });
                            $('#my_history').append(recordHtml);
                        });


                    } else {
                        toastr.error("No data found or invalid response. Please try again.");
                    }
                },
                error: function(xhr, error, thrown) {
                    toastr.error("No data found or invalid response. Please try again.");
                }
            });

        });
    </script>
@endsection
