@extends('layouts.app')
@section('content')
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
    <div data-v-909e1547="" class="redeem-container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
        <div data-v-909e1547="" class="redeem-container-header">
            <div data-v-4c21fa9e="" data-v-909e1547="" class="navbar">
                <div data-v-4c21fa9e="" class="navbar-fixed wc"
                    style="background: linear-gradient(90deg, rgb(249, 90, 90) 0%, rgb(255, 153, 142) 100%);">
                    <div data-v-4c21fa9e="" class="navbar__content">
                        <div data-v-4c21fa9e="" onclick="window.location.href='{{ route('account') }}';"
                            class="navbar__content-left">
                            <img src="{{asset('assets/png/back.png')}}"width="24" height="24" />
                        </div>

                        <div data-v-4c21fa9e="" class="navbar__content-center">
                            <div data-v-4c21fa9e="" class="navbar__content-title">Gift</div>
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-right"></div>
                    </div>
                </div>
            </div>
            <div data-v-909e1547="" class="redeem-container-header-belly">
                <img data-v-909e1547="" src="{{ asset('assets/png/gift-0e49be1a.png') }}">
            </div>
        </div>
        <div data-v-909e1547="" class="redeem-container-content">
            <div data-v-909e1547="" class="redeem-container-receive">
                <p data-v-909e1547="">Hi</p>
                <p data-v-909e1547="">We have a gift for you</p>
                <h4 data-v-909e1547="">Please enter the gift code below</h4>

                <form action="{{ route('recive_gift') }}" method="POST">
                    @csrf
                    <input data-v-909e1547="" name="gift_code" required type="number">
                    <input data-v-909e1547="" value="{{ auth()->user()->username }}" name="username" hidden type="number">


                    <button data-v-909e1547="" type="submit">Receive</button>
                </form>
            </div>

            </span>
            <div data-v-909e1547="" class="redeem-container-record">
                <div data-v-909e1547="" class="redeem-container-record-title">
                    <img data-v-909e1547="" src="{{ asset('assets/png/history.png') }}">
                    <span data-v-909e1547="">History</span>
                </div>
                <div data-v-909e1547="" class="redeem-container-record-itemsBox">
                    <div data-v-b43bdd3f="" data-v-909e1547="" class="infiniteScroll"
                        id="refreshe03adf377a7749a290b67f0bc8394ba0">
                        <div data-v-b43bdd3f="" class="infiniteScroll__loading">
                            <br>
                            @foreach ($GiftRecord as $data)
                                <div data-v-785ec202="" class="lotterySlotItem">
                                    <span data-v-785ec202="" >{{$data->amount}}</span>
                                    <h4 data-v-785ec202="">{{$data->created_at}}</h4>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
