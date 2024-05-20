@extends('layouts.app')

@section('content')
    <div id="app" data-v-app="">
        <div data-v-c1c74264="" class="jackpot-rule" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-4c21fa9e="" data-v-c1c74264="" class="navbar" onclick="window.location.href='{{ route('account') }}'">
                <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                    <div data-v-4c21fa9e="" class="navbar__content">
                        <div data-v-4c21fa9e="" class="navbar__content-left">


                            <img src="{{ asset('assets/png/back.png') }}"width="24" height="24" />
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-center">
                            <div data-v-4c21fa9e="" class="navbar__content-title">Rule</div>
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-right"></div>
                    </div>
                </div>
            </div>

            <div data-v-c1c74264="" class="rule-content">
                <div data-v-c1c74264="" class="rule-content-top">
                    <img src="{{ asset('assets/svg/giftbox.svg') }}" width="150" height="150" />
                    <div data-v-c1c74264="" class="rule-content-top-right">
                        <h3 data-v-c1c74264="">Super Jackpot</h3>
                        <p data-v-c1c74264="">When you win the Super Jackpot in the game, you can get additional platform
                            bonuses, and the bonuses will be distributed to you according to the multiple of the winning
                            prize
                        </p>
                    </div>
                </div>
                <div data-v-c1c74264="" class="rule-content-tip">
                    <svg data-v-c1c74264="" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <path data-v-c1c74264=""
                            d="M35.2336 29.5075L21.1223 5.06815C19.3963 2.08015 16.5755 2.08015 14.8499 5.06815L0.738497 29.5075C-0.987066 32.4986 0.424628 34.9385 3.87335 34.9385H32.0986C35.5475 34.9385 36.9577 32.4984 35.2336 29.5075ZM16.0479 12.0026C16.555 11.4543 17.1997 11.1801 17.9859 11.1801C18.7726 11.1801 19.4167 11.4514 19.9243 11.9916C20.4286 12.533 20.6807 13.2101 20.6807 14.0242C20.6807 14.7247 19.628 19.8758 19.2769 23.6232H16.7414C16.4335 19.8758 15.2912 14.7247 15.2912 14.0242C15.2913 13.2224 15.5438 12.5481 16.0479 12.0026ZM19.8888 29.8216C19.3554 30.341 18.7207 30.5999 17.9861 30.5999C17.2516 30.5999 16.6168 30.341 16.0835 29.8216C15.5517 29.3033 15.2873 28.6756 15.2873 27.9383C15.2873 27.2049 15.5517 26.5704 16.0835 26.0386C16.6168 25.5066 17.2516 25.2406 17.9861 25.2406C18.7207 25.2406 19.3554 25.5066 19.8888 26.0386C20.4203 26.5704 20.6852 27.2049 20.6852 27.9383C20.6852 28.6756 20.4203 29.3033 19.8888 29.8216Z"
                            fill="white"></path>
                    </svg>
                    <p data-v-c1c74264="">Warning: Please claim all bonuses before the event ends, after the event ends, you
                        will lose the chance to get the bonus</p>
                </div>
            </div>
            <div data-v-c1c74264="" class="jackpot-rule-wrap">
                <div data-v-c1c74264="" class="title">
                    <svg data-v-c1c74264="" xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <path data-v-c1c74264=""
                            d="M30.9497 20.3955C36.0101 20.3955 39.4337 22.2327 39.5897 24.6699L39.5945 24.8451V35.9739C39.5357 38.4795 36.1085 40.3683 30.9497 40.3683C25.9001 40.3683 22.4777 38.5275 22.3205 36.0939L22.3145 35.9199V24.8439C22.3145 22.3239 25.7777 20.3955 30.9497 20.3955ZM25.1177 33.7587V35.9187C25.1177 36.5307 27.7061 37.5807 30.9497 37.5807C34.0889 37.5807 36.6233 36.5955 36.7793 35.9799L36.7865 35.9199V33.7623L36.6365 33.8343C35.2841 34.4343 33.5225 34.7763 31.4369 34.8219L30.9497 34.8267C28.6877 34.8267 26.7581 34.4751 25.2809 33.8331L25.1177 33.7587ZM25.1177 28.2063V30.3783C25.1177 30.9927 27.7037 32.0427 30.9497 32.0427C34.0901 32.0463 36.6233 31.0587 36.7793 30.4383L36.7865 30.3783V28.2075L36.6281 28.2831C35.2601 28.8831 33.4961 29.2287 31.4321 29.2743L30.9497 29.2803C28.6913 29.2803 26.7617 28.9263 25.2821 28.2819L25.1177 28.2063ZM30.9497 23.1783C27.7073 23.1783 25.1177 24.2319 25.1177 24.8451C25.1177 25.4559 27.7061 26.5059 30.9497 26.5059C34.1969 26.5059 36.7865 25.4583 36.7865 24.8451C36.7865 24.2295 34.1993 23.1783 30.9497 23.1783Z">
                        </path>
                        <path data-v-c1c74264=""
                            d="M21.0698 7.50098C27.8307 7.50098 33.5211 9.85058 33.7299 13.4458L33.7346 13.651V17.8714C33.7346 18.6418 33.1059 19.2658 32.3307 19.2658C31.6082 19.2658 31.0106 18.7222 30.935 18.0238L30.9266 17.8714V17.6218L30.7994 17.6962C28.6311 18.9082 25.4403 19.6522 22.085 19.777L21.5547 19.7914L21.0698 19.7962C17.4927 19.7962 14.0307 19.0918 11.6858 17.8402L11.3582 17.6578L11.2466 17.5906V22.2526C11.2466 23.6146 14.6906 25.231 19.3106 25.5562L19.6778 25.579L20.0402 25.5958C20.5394 25.615 20.9907 25.897 21.2234 26.3362C21.4574 26.7766 21.437 27.3082 21.1694 27.7282C20.9018 28.1482 20.4303 28.3942 19.931 28.375C16.8182 28.2586 13.859 27.5974 11.7387 26.521L11.3738 26.3266L11.2274 26.2426V30.9022C11.2274 32.2642 14.6726 33.8806 19.2927 34.2058L19.6598 34.2286L20.0222 34.2454C20.5214 34.267 20.9714 34.5514 21.203 34.9918C21.4346 35.4322 21.4118 35.9638 21.143 36.3826C21.0099 36.5887 20.8251 36.7564 20.6069 36.8688C20.3888 36.9812 20.145 37.0345 19.8999 37.0234C13.5555 36.7294 8.60785 34.4686 8.41225 31.0954L8.40625 30.8878V13.651C8.40625 9.93338 14.1734 7.50098 21.0698 7.50098ZM21.0698 10.2898C15.5703 10.2898 11.2094 12.085 11.2094 13.6414C11.2094 15.1978 15.587 17.0026 21.0698 17.0026C26.5562 17.0026 30.9266 15.205 30.9266 13.651C30.9266 12.091 26.567 10.2898 21.0698 10.2898Z">
                        </path>
                    </svg> Bonus</div>
                <div data-v-c1c74264="" class="table-container">
                    <div data-v-c1c74264="" class="table-title">
                        <div data-v-c1c74264="">Winning rate</div>
                        <div data-v-c1c74264="">Bet amount</div>
                        <div data-v-c1c74264="">Bonus</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">20X-34X</div>
                        <div data-v-c1c74264="">₹5-₹20</div>
                        <div data-v-c1c74264="">₹5.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">20X-34X</div>
                        <div data-v-c1c74264="">₹21-₹50</div>
                        <div data-v-c1c74264="">₹10.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">20X-34X</div>
                        <div data-v-c1c74264="">₹51-₹100</div>
                        <div data-v-c1c74264="">₹30.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">20X-34X</div>
                        <div data-v-c1c74264="">₹110-₹200</div>
                        <div data-v-c1c74264="">₹50.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">20X-34X</div>
                        <div data-v-c1c74264="">₹200-₹99,999,999</div>
                        <div data-v-c1c74264="">₹100.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">35X-49X</div>
                        <div data-v-c1c74264="">₹5-₹20</div>
                        <div data-v-c1c74264="">₹10.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">35X-49X</div>
                        <div data-v-c1c74264="">₹21-₹50</div>
                        <div data-v-c1c74264="">₹20.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">35X-49X</div>
                        <div data-v-c1c74264="">₹51-₹100</div>
                        <div data-v-c1c74264="">₹50.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">35X-49X</div>
                        <div data-v-c1c74264="">₹110-₹200</div>
                        <div data-v-c1c74264="">₹100.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">35X-49X</div>
                        <div data-v-c1c74264="">₹200-₹99,999,999</div>
                        <div data-v-c1c74264="">₹200.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">50X-999999X</div>
                        <div data-v-c1c74264="">₹5-₹20</div>
                        <div data-v-c1c74264="">₹50.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">50X-999999X</div>
                        <div data-v-c1c74264="">₹21-₹50</div>
                        <div data-v-c1c74264="">₹100.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">50X-999999X</div>
                        <div data-v-c1c74264="">₹51-₹100</div>
                        <div data-v-c1c74264="">₹300.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">50X-999999X</div>
                        <div data-v-c1c74264="">₹110-₹200</div>
                        <div data-v-c1c74264="">₹500.00</div>
                    </div>
                    <div data-v-c1c74264="" class="table-content">
                        <div data-v-c1c74264="">50X-999999X</div>
                        <div data-v-c1c74264="">₹200-₹99,999,999</div>
                        <div data-v-c1c74264="">₹1,000.00</div>
                    </div>
                </div>
                <div data-v-c1c74264="" class="jackpot-rule-owener"><svg data-v-c1c74264=""
                        xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24"
                        fill="none">
                        <path data-v-c1c74264=""
                            d="M20 10.2679C21.3333 11.0378 21.3333 12.9623 20 13.7321L3.5 23.2583C2.16666 24.0281 0.499999 23.0659 0.499999 21.5263L0.5 2.47372C0.5 0.934117 2.16667 -0.0281317 3.5 0.741669L20 10.2679Z">
                        </path>
                    </svg> All event interpretation rights belong to the platform. If you have any questions, please contact
                    customer service now</div>
                <div data-v-c1c74264="" onclick="window.location.href='/keFuMenu#/'" class="jackpot-rule-custom"><svg
                        xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                        fill="none" data-v-c1c74264="">
                        <g filter="url(#filter0_d_1816_27498)" data-v-c1c74264="">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.60868 36.9871C5.32131 33.3788 3.32142 28.615 3.32142 23.3918C3.32142 12.1276 12.6179 2.99609 24.0856 2.99609C35.5534 2.99609 44.8499 12.1276 44.8499 23.3918C44.8499 31.3565 40.2004 38.252 33.4234 41.6097C29.277 43.7714 24.5467 44.9961 19.5253 44.9961C13.3726 44.9961 7.6569 43.1575 2.91699 40.0092C2.91699 40.0092 6.09557 39.6625 8.60786 36.9879L8.60868 36.9871ZM33.8397 33.4859C39.2117 28.1141 39.2117 19.4046 33.8397 14.0327C31.3487 11.5418 28.1401 10.2067 24.8794 10.026C24.781 7.57955 26.0979 5.92657 26.1043 5.91851L26.103 5.91877L26.104 5.91747C22.3564 6.64141 18.7778 8.45446 15.8759 11.3564C13.6504 13.5818 12.0658 16.2053 11.1211 18.9975C11.2594 18.6313 11.4136 18.2697 11.5837 17.9139C11.3879 18.4132 11.211 18.9234 11.051 19.4454C9.47775 24.2213 10.5882 29.6877 14.3864 33.4859C19.7584 38.8579 28.4679 38.8579 33.8397 33.4859Z"
                                fill="white" data-v-c1c74264=""></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.1299 22.3454V25.1926C17.1299 26.3288 18.0509 27.2498 19.1872 27.2498C20.3234 27.2498 21.2443 26.3288 21.2443 25.1926V22.3454C21.2443 21.2094 20.3234 20.2881 19.1872 20.2881C18.0509 20.2881 17.1299 21.2094 17.1299 22.3454Z"
                                fill="white" data-v-c1c74264=""></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.3125 22.3454V25.1926C27.3125 26.3288 28.2336 27.2498 29.3697 27.2498C30.5059 27.2498 31.427 26.3288 31.427 25.1926V22.3454C31.427 21.2094 30.5059 20.2881 29.3697 20.2881C28.2336 20.2881 27.3125 21.2094 27.3125 22.3454Z"
                                fill="white" data-v-c1c74264=""></path>
                        </g>
                        <defs data-v-c1c74264="">
                            <filter id="filter0_d_1816_27498" x="1.91699" y="2.99609" width="43.9326" height="45"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB" data-v-c1c74264="">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" data-v-c1c74264=""></feFlood>
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"
                                    data-v-c1c74264="">
                                </feColorMatrix>
                                <feOffset dy="2" data-v-c1c74264=""></feOffset>
                                <feGaussianBlur stdDeviation="0.5" data-v-c1c74264=""></feGaussianBlur>
                                <feComposite in2="hardAlpha" operator="out" data-v-c1c74264=""></feComposite>
                                <feColorMatrix type="matrix"
                                    values="0 0 0 0 0.878431 0 0 0 0 0.282353 0 0 0 0 0.27451 0 0 0 1 0"
                                    data-v-c1c74264="">
                                </feColorMatrix>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1816_27498"
                                    data-v-c1c74264=""></feBlend>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1816_27498"
                                    result="shape" data-v-c1c74264=""></feBlend>
                            </filter>
                        </defs>
                    </svg> Contact customer service</div>
            </div>
        </div>
        <div class="customer" id="customerId"
            style="--36a344b0: 'Roboto', 'Inter', sans-serif; --17a7a9f6: bahnschrift;">
            <img class="" data-origin="https://91clubin.in/assets/png/icon_sevice-9f0c8455.png"
                src="https://91clubin.in/assets/png/icon_sevice-9f0c8455.png" style="display:none;">
        </div>
    </div>
    <foreignobject></foreignobject>
@endsection
