@extends('layouts.app')

@section('content')
    <div id="app" data-v-app="">
        <div data-v-6ead776f="" class="customer-container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-6ead776f="" class="customer-container-header">
                <div data-v-4c21fa9e="" data-v-6ead776f="" class="navbar">
                    <div data-v-4c21fa9e="" class="navbar-fixed wc"
                        style="background: linear-gradient(90deg, rgb(249, 90, 90) 0%, rgb(255, 153, 142) 100%);">
                        <div data-v-4c21fa9e="" class="navbar__content">
                            <div data-v-4c21fa9e="" onclick="window.location.href='{{ route('account') }}';"
                                class="navbar__content-left">
                                <img src="{{ asset('assets/png/back.png') }}"width="12" height="12" />
                            </div>
                            <div data-v-4c21fa9e="" class="navbar__content-center">
                                <div data-v-4c21fa9e="" class="navbar__content-title">Customer Service</div>
                            </div>
                            <div data-v-4c21fa9e="" class="navbar__content-right"></div>
                        </div>
                    </div>
                </div>
                <div data-v-6ead776f="" class="customer-container-header-belly"><img data-v-6ead776f="" alt=""
                        class="" data-origin="https://91clubin.in/assets/png/customerBg-660c5552.png"
                        src="{{asset('assets/png/customerBg-660c5552.png')}}"></div>
            </div>
            <div data-v-e707ac33="" data-v-6ead776f="" class="content">
                <div data-v-e707ac33="">

                    <div data-v-e707ac33="" onclick="window.location.href='{{ $Setting->support_url }}'"
                        class="content-item">
                        <div data-v-e707ac33="" class="content-item-title">
                            <img data-v-e707ac33="" src="{{ asset('assets/png/telegram.png') }}">
                            <span data-v-e707ac33="">Telegram</span>
                        </div>
                        <img src="{{ asset('assets/png/forward.png') }}" width="12" height="12" />
                    </div>

                </div>
            </div>
        </div>
        <div class="customer" id="customerId" style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;">
        </div>
        <foreignobject></foreignobject>
    @endsection
