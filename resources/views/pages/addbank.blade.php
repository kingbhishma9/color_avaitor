@extends('layouts.app')

@section('content')
   
        <div data-v-ae83d79e="" class="addBankCard__container" style="--36a344b0: 'Roboto', 'Inter', sans-serif;">
            <div data-v-4c21fa9e="" data-v-ae83d79e="" class="navbar">
                <div data-v-4c21fa9e="" class="navbar-fixed" style="background: rgb(247, 248, 255);">
                    <div data-v-4c21fa9e="" class="navbar__content">
                        <div onclick="window.location.href='withdrawal'" data-v-4c21fa9e="" class="navbar__content-left">
                            <img src="{{asset('assets/png/back.png')}}"width="12" height="12" />
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-center">
                            <div data-v-4c21fa9e="" class="navbar__content-title">Add a bank account number</div>
                        </div>
                        <div data-v-4c21fa9e="" class="navbar__content-right"></div>
                    </div>
                </div>
            </div>
            <form action="{{route('saveBank')}}" method="post">
                @csrf
                <div data-v-ae83d79e="" class="addBankCard__container-content">
                    <div data-v-ae83d79e="" class="addBankCard__container-content-top">
                        <img data-v-ae83d79e="" src="{{ asset('assets/png/info.png') }}">
                        <span data-v-ae83d79e="">To ensure the safety of your funds, please bind your bank account</span>
                    </div>
                    <div data-v-ae83d79e="" class="addBankCard__container-content-item">
                        <div data-v-ae83d79e="" class="label">
                            <img data-v-ae83d79e="" src="{{ asset('assets/png/bank.png') }}" class="icon"> Choose a bank
                        </div>
                        <input data-v-ae83d79e="" type="text" required name="bank_name" placeholder="Please select a bank"
                            maxlength="50" list="browsers" id="browser">
                        <datalist id="browsers">
                            <option value="Bank of Baroda">
                            <option value="Bank of India">
                            <option value="Bank of Maharashtra">
                            <option value="Canara Bank">
                            <option value="Central Bank of India">
                            <option value="Indian Bank">
                            <option value="Indian Overseas Bank">
                            <option value="Punjab & Sind Bank">
                            <option value="Punjab National Bank">
                            <option value="State Bank of India">
                            <option value="UCO Bank">
                            <option value="Union Bank of India">
                            <option value="Axis Bank Ltd.">
                            <option value="Bandhan Bank Ltd.">
                            <option value="CSB Bank Ltd.">
                            <option value="City Union Bank Ltd.">
                            <option value="DCB Bank Ltd.">
                            <option value="Dhanlaxmi Bank Ltd.">
                            <option value="Federal Bank Ltd.">
                            <option value="HDFC Bank Ltd">
                            <option value="ICICI Bank Ltd.">
                            <option value="Induslnd Bank Ltd">
                            <option value="IDFC First Bank Ltd.">
                            <option value="Jammu & Kashmir Bank Ltd.">
                            <option value="Karnataka Bank Ltd.">
                            <option value="Karur Vysya Bank Ltd.">
                            <option value="Kotak Mahindra Bank Ltd">
                            <option value="Nainital Bank Ltd.">
                            <option value="RBL Bank Ltd.">
                            <option value="South Indian Bank Ltd.">
                            <option value="Tamilnad Mercantile Bank Ltd.">
                            <option value="YES Bank Ltd.">
                            <option value="IDBI Bank Ltd.">
                            <option value="Au Small Finance Bank Limited">
                            <option value="Capital Small Finance Bank Limited">
                            <option value="Equitas Small Finance Bank Limited">
                            <option value="Suryoday Small Finance Bank Limited">
                            <option value="Ujjivan Small Finance Bank Limited">
                            <option value="Utkarsh Small Finance Bank Limited">
                            <option value="Fincare Small Finance Bank Limited">
                            <option value="Jana Small Finance Bank Limited">
                            <option value="North East Small Finance Bank Limited">
                            <option value="Shivalik Small Finance Bank Limited">
                            <option value="Unity Small Finance Bank Limited">
                            <option value="India Post Payments Bank Limited">
                            <option value="Fino Payments Bank Limited">
                            <option value="Paytm Payments Bank Limited">
                            <option value="Airtel Payments Bank Limited">
                            <option value="Andhra Pragathi Grameena Bank">
                            <option value="Andhra Pradesh Grameena Vikas Bank">
                            <option value="Arunachal Pradesh Rural Bank">
                            <option value="Aryavart Bank">
                            <option value="Assam Gramin Vikash Bank">
                            <option value="Bangiya Gramin Vikas Bank">
                            <option value="Baroda Gujarat Gramin Bank">
                            <option value="Baroda Rajasthan Kshetriya Gramin Bank">
                            <option value="Baroda UP Bank">
                            <option value="Chaitanya Godavari Grameena Bank">
                            <option value="Chhattisgarh Rajya Gramin Bank">
                            <option value="Dakshin Bihar Gramin Bank">
                            <option value="Ellaquai Dehati Bank">
                            <option value="Himachal Pradesh Gramin Bank">
                            <option value="J&K Grameen Bank">
                            <option value="Jharkhand Rajya Gramin Bank">
                            <option value="Karnataka Gramin Bank">
                            <option value="Karnataka Vikas Grameena Bank">
                            <option value="Kerala Gramin Bank">
                            <option value="Madhya Pradesh Gramin Bank">
                            <option value="Madhyanchal Gramin Bank">
                            <option value="Maharashtra Gramin Bank">
                            <option value="Manipur Rural Bank">
                            <option value="Meghalaya Rural Bank">
                            <option value="Mizoram Rural Bank">
                            <option value="Nagaland Rural Bank">
                            <option value="Odisha Gramya Bank">
                            <option value="Paschim Banga Gramin Bank">
                            <option value="Prathama UP Gramin Bank">
                            <option value="Puduvai Bharathiar Grama Bank">
                            <option value="Punjab Gramin Bank">
                            <option value="Rajasthan Marudhara Gramin Bank">
                            <option value="Saptagiri Grameena Bank">
                            <option value="Sarva Haryana Gramin Bank">
                            <option value="Saurashtra Gramin Bank">
                            <option value="Tamil Nadu Grama Bank">
                            <option value="Telangana Grameena Bank">
                            <option value="Tripura Gramin Bank">
                            <option value="Utkal Grameen bank">
                            <option value="Uttar Bihar Gramin Bank">
                            <option value="Uttarakhand Gramin Bank">
                            <option value="Uttarbanga Kshetriya Gramin Bank">
                            <option value="Vidharbha Konkan Gramin Bank">
                            <option value="AB Bank Ltd.">
                            <option value="Abu Dhabi Commercial Bank Ltd.">
                            <option value="American Express Banking Corporation">
                            <option value="Australia and New Zealand Banking Group Ltd.">
                            <option value="Barclays Bank Plc.">
                            <option value="Bank of America">
                            <option value="Bank of Bahrain & Kuwait BSC">
                            <option value="Bank of Ceylon">
                            <option value="Bank of China">
                            <option value="Bank of Nova Scotia">
                            <option value="BNP Paribas">
                            <option value="Citibank N.A.">
                            <option value="Cooperatieve Rabobank U.A.">
                            <option value="Credit Agricole Corporate & Investment Bank">
                            <option value="Credit Suisse A.G">
                            <option value="CTBC Bank Co., Ltd.">
                            <option value="DBS Bank India Limited">
                            <option value="Deutsche Bank">
                            <option value="Doha Bank Q.P.S.C">
                            <option value="Emirates Bank NBD">
                            <option value="First Abu Dhabi Bank PJSC">
                            <option value="FirstRand Bank Ltd">
                            <option value="HSBC Ltd">
                            <option value="Industrial & Commercial Bank of China Ltd.">
                            <option value="Industrial Bank of Korea">
                            <option value="J.P. Morgan Chase Bank N.A.">
                            <option value="JSC VTB Bank">
                            <option value="KEB Hana Bank">
                            <option value="Kookmin Bank">
                            <option value="Krung Thai Bank Public Co. Ltd.">
                            <option value="Mashreq Bank PSC">
                            <option value="Mizuho& Bank Ltd.">
                            <option value="MUFG Bank, Ltd.">
                            <option value="NatWest Markets Plc">
                            <option value="PT Bank Maybank Indonesia TBK">
                            <option value="Qatar National Bank (Q.P.S.C.)">
                            <option value="Sberbank">
                            <option value="SBM Bank (India) Limited">
                            <option value="Shinhan Bank">
                            <option value="Societe Generale">
                            <option value="Sonali Bank Ltd.">
                            <option value="Standard Chartered Bank">
                            <option value="Sumitomo Mitsui Banking Corporation">
                            <option value="United Overseas Bank Ltd">
                            <option value="Woori Bank">
                        </datalist>
                    </div>
                    <div data-v-ae83d79e="" class="addBankCard__container-content-item">
                        <div data-v-ae83d79e="" class="label">
                            <img data-v-ae83d79e="" src="{{ asset('assets/png/profile_icon.png') }}" class="icon">
                            Full recipient's name
                        </div>
                        <input data-v-ae83d79e="" type="text" required name="full_name" autocomplete="off"
                            placeholder="Please enter the recipient's name" maxlength="50">
                    </div>
                    <div data-v-ae83d79e="" class="addBankCard__container-content-item">
                        <div data-v-ae83d79e="" class="label">
                            <img data-v-ae83d79e="" src="{{ asset('assets/png/red_card.png') }}" class="icon">
                            Bank account number
                        </div>
                        <input data-v-ae83d79e="" type="tel" required name="account"
                            placeholder="Please enter your bank account number" autocomplete="off" maxlength="30">
                    </div>
                    <div data-v-ae83d79e="" class="addBankCard__container-content-item">
                        <div data-v-ae83d79e="" class="label">
                            <img data-v-ae83d79e="" src="{{ asset('assets/png/phone.png') }}" class="icon">
                            UPI ID
                        </div>
                        <input data-v-ae83d79e="" required placeholder="Please enter your UPI ID" autocomplete="off"
                            type="text" name="upi" maxlength="120">
                    </div>
                    <div data-v-ae83d79e="" class="addBankCard__container-content-item">
                        <div data-v-ae83d79e="" class="label">
                            <img data-v-ae83d79e="" src="{{ asset('assets/png/key.png') }}" class="icon">
                            IFSC code
                        </div>
                        <input data-v-ae83d79e="" required autocomplete="off" placeholder="Please enterIFSC code" type="text"
                            name="ifsc" maxlength="20">
                    </div>
                    <div data-v-ae83d79e="" class="addBankCard__container-content-btn">
                        <button type="submit" data-v-ae83d79e="" class="active">Save</button>
            </form>
        </div>
    

    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            background-color: #fff;
            padding: 0;
            margin: 0;
        }
    </style>
@endsection
