@extends('layouts.app')
@section('content')
    <div data-v-3cbb9e12="" class="withdraw__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
        <div data-v-4c21fa9e="" data-v-3cbb9e12="" class="navbar">
            <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                <div data-v-4c21fa9e="" class="navbar__content">
                    <div onclick="window.location.href='{{ route('account') }}'" data-v-4c21fa9e=""
                        class="navbar__content-left">
                        <img src="{{ asset('assets/png/back.png') }}"width="12" height="12" />

                    </div>
                    <div data-v-4c21fa9e="" class="navbar__content-center">
                        <div data-v-4c21fa9e="" class="navbar__content-title">Withdraw</div>
                    </div>

                </div>
            </div>
        </div>
        <div data-v-3cbb9e12="" class="withdraw__container-content">
            <div data-v-dabc66b0="" data-v-3cbb9e12="" class="balanceAssets">
                <div data-v-dabc66b0="" class="balanceAssets__header">
                    <div data-v-dabc66b0="" class="balanceAssets__header__left">
                        <img data-v-dabc66b0="" src="{{ asset('assets/png/wallet.png') }}">
                        Available balance
                    </div>
                </div>
                <div data-v-dabc66b0="" class="balanceAssets__main">
                    <p data-v-dabc66b0="">₹{{ auth()->user()->balance }}</p>
                    <img data-v-dabc66b0="" onclick="window.location.href=''" src="{{ asset('assets/png/refresh.png') }}">
                </div>
                <div data-v-dabc66b0="" class="balanceAssets__tip">
                    <img data-v-dabc66b0="" src="{{ asset('assets/png/chip.png') }}" alt="">
                </div>
            </div>
         

            @if (auth()->user()->account != null)
                <div data-v-3cbb9e12="" class="bankInfo">
                    <div data-v-3cbb9e12="" class="bankInfoItem">
                        <div data-v-3cbb9e12="">
                            <img data-v-3cbb9e12="" src="{{ asset('assets/png/fire.png') }}">
                            <span data-v-3cbb9e12=""></span>
                        </div>
                        <div data-v-3cbb9e12="">
                            <span data-v-3cbb9e12=""></span>
                            <span data-v-3cbb9e12="">{{ auth()->user()->bank_name }} {{substr (auth()->user()->account , -4)}} </span>
                        </div>
                        <img src="{{ asset('assets/png/forward.png') }}" width="12" height="12" />
                    </div>
                </div>
            @endif

            @if (auth()->user()->account == null)
                <div class="col-12" id="add">
                    <div data-v-fbdbcf8d="" onclick="window.location.href='{{ route('addBank') }}'" data-v-3cbb9e12=""
                        class="addWithdrawType">
                        <div data-v-fbdbcf8d="" class="addWithdrawType-top">
                            <img data-v-fbdbcf8d="" src="{{ asset('assets/png/add_bank.png') }}">
                            <span data-v-fbdbcf8d="">Add a bank account number</span>
                        </div>
                        <div data-v-fbdbcf8d="" class="addWithdrawType-text">Need to add beneficiary information to be able
                            to
                            withdraw money</div>
                    </div>

                </div>
            @endif


        </div>

        @if (auth()->user()->account != null)
            <form action="{{ route('withdrawalBlc') }}" method="POST">
                @csrf
                <div data-v-eee9adef="" class="explain" style="">
                    <div data-v-eee9adef="" class="input">
                        <div data-v-eee9adef="" class="place-div">₹</div>
                        <input data-v-eee9adef="" placeholder="Please enter the amount" autocomplete="off" type="tel"
                            maxlength="5" id="withdraw" name="withdraw" class="inp">
                    </div>
                    <div data-v-eee9adef="" class="input">
                        <div data-v-eee9adef="" class="place-div">
                            <img data-v-f1cfbd6f="" class="passwordInput__container-label__icon"
                                src="{{ asset('assets/png/forgetpassword-3dde2500.png') }}">
                        </div>
                        <input data-v-eee9adef="" placeholder="Please input account password" autocomplete="off"
                            name="password" type="password" class="inp">
                    </div>
                    <div data-v-eee9adef="" class="balance bank">
                        <div data-v-eee9adef="">
                            <span data-v-eee9adef="">Withdrawable balance <h6 data-v-eee9adef="" class="red">₹
                                    {{ auth()->user()->balance }}</h6>
                            </span>
                            <input data-v-eee9adef="" type="button" value="All" onclick="change_value()">
                        </div>
                        <div data-v-eee9adef="">
                            <span data-v-eee9adef="">Withdrawal amount received</span>
                            <div data-v-eee9adef="" class="rightD">
                                <span data-v-eee9adef="" class="yellow">₹<span id="famount"></span>.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-v-3cbb9e12="" class="recycleBtnD">
                    <button data-v-3cbb9e12="" type="submit" class="recycleBtn active">Withdraw</button>

                </div>
            </form>
        @endif

        <div data-v-699510fe="" data-v-3cbb9e12="" class="Recharge__container-intro">
            <p data-v-699510fe="">Need to bet <span data-v-470caa86="" class="red">₹ @if ($setting->min_withdrawal >= auth()->user()->balance)
                        {{ $setting->min_withdrawal - auth()->user()->balance }}.00
                    @else
                        0.00
                    @endif
                </span> to be able to
                withdraw</p>
            <p data-v-699510fe="">Withdraw time <span data-v-699510fe="" class="red">10:00-17:00 </span>Working Day
            </p>
            <p data-v-699510fe="">Withdraw fee is only
                <span data-v-699510fe="" class="red">₹
                    <span id="fee">{{ $setting->withdrawal_charge }}</span>.00</span>.
            </p>
            <p data-v-699510fe="">Inday Remaining Withdrawal Times<span data-v-699510fe="" class="red"> 3</span>
            </p>
            <p data-v-699510fe="">Withdrawal amount range <span data-v-699510fe="" class="red">₹
                    {{ $setting->min_withdrawal }} - ₹ {{ $setting->max_withdrawal }}</span></p>
        </div>

    </div>



    <script>
        function change_value() {
            $('#withdraw').val('{{ auth()->user()->balance }}');
        }

        $("#withdraw").on("change paste keyup select", function() {
            document.getElementById('famount').innerText = document.getElementById('withdraw').value;

        });
    </script>
@endsection
