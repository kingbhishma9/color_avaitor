



<div data-v-c74f4bba="" id="div_my_history" data-v-f31474c6="" class="History__C display">
    <div id="my_history" class="" style="width:100%"></div>
</div>




<style>
    #design {
        margin-top: 10px;
        padding: 20px;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
    }






    .MyGameRecordList__C-item[data-v-373b3197] {
        height: 1.81333rem;
        padding: .37333rem 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .MyGameRecordList__C-item-l-green[data-v-373b3197],
    .MyGameRecordList__C-item-l-1[data-v-373b3197],
    .MyGameRecordList__C-item-l-3[data-v-373b3197],
    .MyGameRecordList__C-item-l-7[data-v-373b3197],
    .MyGameRecordList__C-item-l-9[data-v-373b3197] {
        background-color: #5cba47;
    }

    .MyGameRecordList__C-item-l[data-v-373b3197] {
        height: .96rem;
        width: .96rem;
        line-height: .96rem;
        text-align: center;
        border-radius: .26667rem;
        color: #fff;
        font-size: .64rem;
        -webkit-margin-end: .29333rem;
        margin-inline-end: .29333rem;
        -webkit-box-flex: 0;
        -webkit-flex: none;
        flex: none;
    }

    .MyGameRecordList__C-item-m[data-v-373b3197] {
        -webkit-box-flex: 0;
        -webkit-flex: none;
        flex: none;
    }

    .MyGameRecordList__C-item-m-top[data-v-373b3197] {
        height: .45333rem;
        line-height: .45333rem;
        font-size: .37333rem;
        color: #414141;
        margin-bottom: .24rem;
    }

    .MyGameRecordList__C-item-m-bottom[data-v-373b3197] {
        font-size: .29333rem;
        color: #888;
    }

    .MyGameRecordList__C-item-r.success[data-v-373b3197] {
        color: #47ba7c;
    }

    .MyGameRecordList__C-item-r.success div[data-v-373b3197] {
        color: #47ba7c;
        border-color: #47ba7c;
    }

    .MyGameRecordList__C-item-r span[data-v-373b3197] {
        word-wrap: break-word;
        word-break: break-all;
    }
</style>




<script>
$(document).ready(function() {
    var selectedId = "{{ auth()->user()->username }}";

    $.ajax({
        url: "{{ route('getBeting') }}",
        type: "GET",
        data: {
            'username': selectedId
        },
        success: function(response) {
            if (response && Array.isArray(response)) {
                response.forEach(function(item) {
                    var recordHtml = `
                        <div data-v-373b3197="" class="MyGameRecordList__C-item">
                            <div data-v-373b3197="" class="MyGameRecordList__C-item-l MyGameRecordList__C-item-l-green"></div>
                            <div data-v-373b3197="" class="MyGameRecordList__C-item-m">
                                <div data-v-373b3197="" class="MyGameRecordList__C-item-m-top">${item.number}</div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-item-m-bottom">${item.created_at}</div>
                            </div>
                            <div data-v-373b3197="" class="MyGameRecordList__C-detail">
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-text">Details</div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Order number
                                    <div data-v-373b3197="">
                                        WG2024052522204237339365c
                                        <img data-v-373b3197="" src="{{ asset('assets/png/copy.png') }}">
                                    </div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Period <div data-v-373b3197="">20240525040135</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Purchase amount <div data-v-373b3197="">₹1.00</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Quantity <div data-v-373b3197="">1</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Amount after tax <div data-v-373b3197="" class="red">₹0.98</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Tax <div data-v-373b3197="">₹0.02</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Result <div data-v-373b3197="">
                                    <div data-v-373b3197="" class="MyGameRecordList__C-inlineB">4</div>
                                    <div data-v-373b3197="" class="MyGameRecordList__C-inlineB redColor">Red</div>
                                    <div data-v-373b3197="" class="MyGameRecordList__C-inlineB small">Small</div>
                                </div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Select <div data-v-373b3197="">Red</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Status <div data-v-373b3197="" class="green">
                                    Succeed</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Win/lose <div data-v-373b3197="" class="green">+₹1.96</div>
                                </div>
                                <div data-v-373b3197="" class="MyGameRecordList__C-detail-line">Order time <div data-v-373b3197="">2024-05-25 22:20:42</div>
                                </div>
                            </div>
                    `;

                    if (item.res === 'success') {
                        recordHtml += `
                            <div data-v-373b3197="" class="MyGameRecordList__C-item-r success">
                                <div data-v-373b3197="" class="success">${item.res}</div>
                                <span data-v-373b3197="">${item.amount}</span>
                            </div>
                        `;
                    } else if (item.res === 'fail') {
                        recordHtml += `
                            <div data-v-373b3197="" class="MyGameRecordList__C-item-r">
                                <div data-v-373b3197="" class="">Failed</div>
                                <span data-v-373b3197="">-${item.amount}</span>
                            </div>
                        `;
                    }

                    recordHtml += `</div>`;

                    $('#my_history').append(recordHtml);
                });

                $('.MyGameRecordList__C-item').on('click', function() {
                    $(this).toggleClass('expanded');
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


