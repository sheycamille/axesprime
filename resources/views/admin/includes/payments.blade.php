<div>
    <h2 class="text-{{ $text }}">Withdrawal Methods</h2>

    <a class="mb-3 btn btn-primary" href="#" data-toggle="modal" data-target="#wmethodModal"><i class="fa fa-plus"></i>
        Add new</a> <br>

    @foreach ($wmethods as $method)
        <div class="panel panel-default">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                        href="#method{{ $method->id }}">
                        {{ $method->name }} <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="method{{ $method->id }}" class="panel-collapse collapse">
                <div class="sign-u">
                    <br />
                    <a class="btn btn-{{ $text }} btn-sm" href="#" data-toggle="modal"
                        data-target="#wmethodModal{{ $method->id }}"><i class="fa fa-pencil"></i> Edit</a> &nbsp;
                    <a class="btn btn-danger btn-sm"
                        href="{{ url('admin/dashboard/deletewdmethod') }}/{{ $method->id }}"><i
                            class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>

        <!-- Edit Withdrawal method Modal -->
        <div id="wmethodModal{{ $method->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-{{ Auth('admin')->User()->dashboard_style }}">
                        <h4 class="modal-title text-{{ $text }} text-center">Edit withdrawal method</h4>
                        <button type="button" class="close text-{{ $text }}"
                            data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body bg-{{ Auth('admin')->User()->dashboard_style }}">
                        <form role="form" method="post" action="{{ route('updatewdmethod') }}">

                            <h5 class="text-{{ $text }}">Enter Method Name</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Enter method name" type="text" name="name" value="{{ $method->name }}"
                                required>
                            <h5 class="text-{{ $text }}">Enter Method Exchange Symbol</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Enter method exchange symbol" type="text" name="exchange_symbol"
                                value="{{ $method->exchange_symbol }}">
                            <h5 class="text-{{ $text }}">Enter Method Setting Key</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Enter method setting key" type="text" name="setting_key"
                                value="{{ $method->setting_key }}">
                            <h5 class="text-{{ $text }}">Minimum Amount $</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Minimum amount $" type="text" name="minimum"
                                value="{{ $method->minimum }}" required>
                            <h5 class="text-{{ $text }}">Maximum amount $</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Maximum amount $" type="text" name="maximum"
                                value="{{ $method->maximum }}" required>
                            <h5 class="text-{{ $text }}">Charges (Fixed amount $)</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Charges (Fixed amount $)" type="text" name="charges_fixed"
                                value="{{ $method->charges_fixed }}" required>
                            <h5 class="text-{{ $text }}">Charges (Percentage %)</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Charges (Percentage %)" type="text" name="charges_percentage"
                                value="{{ $method->charges_percentage }}" required>
                            <h5 class="text-{{ $text }}">Duration</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Payout duration" type="text" name="duration"
                                value="{{ $method->duration }}" required>
                            <h5 class="text-{{ $text }}">Method status</h5>
                            <select name="status"
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}">
                                <option>{{ $method->status }}</option>
                                <option value="enabled">Enable</option>
                                <option value="disabled">Disable</option>
                            </select><br />
                            <input type="hidden" name="type" value="withdrawal">
                            <input type="hidden" name="id" value="{{ $method->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="px-5 btn btn-primary btn-lg" value="Continue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /edit withdrawal method Modal -->
    @endforeach
    <br><br>
</div>
<br>


<div>
    <h2 class="text-{{ $text }}">Deposit Methods</h2>

    <a class="mb-3 btn btn-primary" href="#" data-toggle="modal" data-target="#dmethodModal"><i class="fa fa-plus"></i>
        Add new</a> <br>

    @foreach ($dmethods as $method)
        <div class="panel panel-default">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                        href="#method{{ $method->id }}">
                        {{ $method->name }} <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="method{{ $method->id }}" class="panel-collapse collapse">
                <div class="sign-u">
                    <br />
                    <a class="btn btn-{{ $text }} btn-sm" href="#" data-toggle="modal"
                        data-target="#dmethodModal{{ $method->id }}"><i class="fa fa-pencil"></i> Edit</a> &nbsp;
                    <a class="btn btn-danger btn-sm"
                        href="{{ url('admin/dashboard/deletewdmethod') }}/{{ $method->id }}"><i
                            class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>

        <!-- Edit Deposit method Modal -->
        <div id="dmethodModal{{ $method->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-{{ Auth('admin')->User()->dashboard_style }}">
                        <h4 class="modal-title text-{{ $text }} text-center">Edit deposit method</h4>
                        <button type="button" class="close text-{{ $text }}"
                            data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body bg-{{ Auth('admin')->User()->dashboard_style }}">
                        <form role="form" method="post" action="{{ route('updatewdmethod') }}">

                            <h5 class="text-{{ $text }}">Enter Method Name</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Enter method name" type="text" name="name" value="{{ $method->name }}"
                                required>
                            <h5 class="text-{{ $text }}">Enter Method Exchange Symbol</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Enter method exchange symbol" type="text" name="exchange_symbol"
                                value="{{ $method->exchange_symbol }}">
                            <h5 class="text-{{ $text }}">Enter Method Setting Key</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Enter method setting key" type="text" name="setting_key"
                                value="{{ $method->setting_key }}">
                            <h5 class="text-{{ $text }}">Minimum Amount $</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Minimum amount $" type="text" name="minimum"
                                value="{{ $method->minimum }}" required>
                            <h5 class="text-{{ $text }}">Maximum amount $</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Maximum amount $" type="text" name="maximum"
                                value="{{ $method->maximum }}" required>
                            <h5 class="text-{{ $text }}">Charges (Fixed amount $)</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Charges (Fixed amount $)" type="text" name="charges_fixed"
                                value="{{ $method->charges_fixed }}" required>
                            <h5 class="text-{{ $text }}">Charges (Percentage %)</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Charges (Percentage %)" type="text" name="charges_percentage"
                                value="{{ $method->charges_percentage }}" required>
                            <h5 class="text-{{ $text }}">Duration</h5>
                            <input
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                placeholder="Payout duration" type="text" name="duration"
                                value="{{ $method->duration }}" required>
                            <h5 class="text-{{ $text }}">Method status</h5>
                            <select name="status"
                                class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}">
                                <option>{{ $method->status }}</option>
                                <option value="enabled">Enable</option>
                                <option value="disabled">Disable</option>
                            </select><br />
                            <input type="hidden" name="type" value="deposit">
                            <input type="hidden" name="id" value="{{ $method->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="px-5 btn btn-primary btn-lg" value="Continue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /edit Deposit method Modal -->
    @endforeach
    <br>
    <br>
</div>


<div>
    <form method="post" action="{{ route('updatesettings') }}" enctype="multipart/form-data">
        <!-- Payment info and methods -->
        <h3 class="text-{{ $text }}">Deposit Methods Config</h3>

        {{-- Bank1 Settings --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bank">
                        Bank Deposit <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="bank" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Bank name :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="bank_name"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('bank_name') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Bank Address:</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="bank_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('bank_address') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Swift Code:</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="swift_code"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('swift_code') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Account name :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="account_name"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('account_name') }}">
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Account number :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="account_number"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('account_number') }}">
                    </div>
                </div>
            </div>
        </div><br>

        {{-- Bank2 Settings --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bank2">
                        Bank 2 Deposit <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="bank2" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Bank2 name :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="bank2_name"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('bank2_name') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Bank2 Address:</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="bank2_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('bank2_address') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Swift2 Code:</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="swift2_code"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('swift2_code') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Account2 name :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="account2_name"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('account2_name') }}">
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Account2 number :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="account2_number"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('account2_number') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- Bitcoin Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#btc">
                        Bitcoin <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="btc" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">BTC address :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="btc_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('btc_address') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- Bitcoin Cash Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bch">
                        Bitcoin Cash<i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="bch" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">BCH address :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="bch_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('bch_address') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- Ethereum Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#eth">
                        Ethereum <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="eth" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">ETH address :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="eth_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('eth_address') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- LiteCoin Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ltc">
                        Litecoin <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="ltc" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">LTC address :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="ltc_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('ltc_address') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- XRP Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#xrp">
                        XRP <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="xrp" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">XRP address :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="xrp_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('xrp_address') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- USDT Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#usdt">
                        USDT <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="usdt" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">USDT address :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="usdt_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('usdt_address') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- BNB Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bnb">
                        BNB <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="bnb" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">BNB address :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="bnb_address"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('bnb_address') }}">
                    </div>
                </div>
            </div>
        </div><br>


        {{-- PayPal Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <!-- Panel Heading Starts -->
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#pp">
                        PayPal <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="pp" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Paypal client ID :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="pp_ci"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('pp_ci') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Paypal client secret :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="pp_cs"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('pp_cs') }}">
                    </div>
                </div>
            </div>
        </div>
        <br>

        {{-- Interac Settings --}}
        <div class="panel panel-default" style="border:0px solid #fff;">
            <div class="panel-heading">
                <h4 class="panel-title text-{{ $text }}">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#interac">
                        Interac <i class="fa fa-arrow-down"></i> </a>
                </h4>
            </div>

            <div id="interac" class="panel-collapse collapse">
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Interac name :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="interac_name"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('interac_name') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Interac Email :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="interac_email"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('interac_email') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Interac Phone :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="interac_phone"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('interac_phone') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Interac Message :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="interac_message"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('interac_message') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Interac Queston :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="interac_question"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('interac_question') }}">
                    </div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4 class="text-{{ $text }}">Interac Answer :</h4>
                    </div>
                    <div class="sign-up2">
                        <input type="text" name="interac_answer"
                            class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                            value="{{ \App\Models\Setting::getValue('interac_answer') }}">
                    </div>
                </div>
            </div>
            <br>

            <div class="sign-up1">
                <h3 class="text-{{ $text }}"> Minimum Deposit/Withdrawal Amount:</h3>
            </div>
            <div class="form-group">
                <input name="min_dw"
                    class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                    value="{{ \App\Models\Setting::getValue('min_dw') }}" />
            </div> <br>

        </div>

        <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"><br />
        <br><br>
    </form>

</div>
