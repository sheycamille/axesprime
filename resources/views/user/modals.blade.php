<!-- Deposit Modal -->
<div id="depositModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-{{ $bg }}">
                <h4 class="modal-title text-{{ $text }}">Make new deposit</h4>
                <button type="button" class="close text-{{ $text }}" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-{{ $bg }}">
                <form style="padding:3px;" role="form" method="get" action="{{ route('selectpaymentmethod') }}">
                    <input style="padding:5px;" class="form-control text-{{ $text }} bg-{{ $bg }}"
                        placeholder="Enter amount here" type="number" name="amount"
                        min="{{ \App\Models\Setting::getValue('min_dw') }}" required>
                    <br />

                    <select required class="form-control bg-{{ $bg }} text-{{ $text }}"
                        name="account_id" id="account_id" required>
                        <option value="" disabled selected>Choose Acount</option>
                        @foreach (Auth::user()->accounts() as $account)
                            <option value="{{ $account->id }}">{{ $account->login }} | {{ $account->server }} |
                                USD {{ $account->balance }}
                            </option>
                        @endforeach
                    </select> <br>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-{{ $text }}" value="Continue">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /deposit Modal -->


<!-- Withdrawal Modal -->
<div id="withdrawalModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-{{ $bg }}">
                <h4 class="modal-title text-{{ $text }}">Payment will be sent to your recieving address.</h4>
                <button type="button" class="text-white close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">
                <form style="padding:3px;" role="form" method="post" action="{{ route('withdrawal') }}">
                    <input style="padding:5px;" class="form-control bg-{{ $bg }} text-{{ $text }}"
                        placeholder="Enter amount here" type="text" name="amount" required><br />

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-{{ $text }}" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Withdrawals Modal -->


<!-- New Demo Account modal -->
<div id="newDemoAccountModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-{{ $bg }}">
                <h4 class="modal-title text-{{ $text }}">Create a Demo Account</h4>
                <button type="button" class="close text-{{ $text }}" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-{{ $bg }}">
                <form role="form" method="post" action="{{ route('account.addmt5account') }}">
                    @csrf
                    <input class="form-control bg-{{ $bg }} text-{{ $text }}" value="demo"
                        type="hidden" name="type">

                    <h5 class="text-{{ $text }} ">Leverage*:</h5>
                    <select class="form-control bg-{{ $bg }} text-{{ $text }}" name="leverage"
                        class="leverage" required>
                        <option disabled>Select leverage</option>
                        <option value="500">1:500</option>
                        <option value="400">1:400</option>
                        <option value="300">1:300</option>
                        <option value="200">1:200</option>
                        <option value="100">1:100</option>
                    </select><br>
                    {{-- <h5 class="text-{{$text}} ">MT5 Password*:</h5>
                    <input style="padding:5px;" class="form-control bg-{{$bg}} text-{{$text}}" type="text" name="password" required><br />
                    <h5 class="text-{{$text}} ">Investor Password*:</h5>
                    <input style="padding:5px;" class="form-control bg-{{$bg}} text-{{$text}}" type="text" name="investor_password" required><br /> --}}
                    {{-- <h5 class="text-{{$text}} ">Currency*:</h5>
                    <input class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. usd" type="text" name="currency" required><br /> --}}
                    {{-- <h5 class="text-{{$text}} ">Initial Balance*:</h5>
                    <input class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. 100,000" type="text" name="balance" value="100000" required><br /> --}}
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<!-- New Live Modal modal -->
<div id="newLiveAccountModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-{{ $bg }}">
                <h4 class="modal-title text-{{ $text }}">Create a Live Account</h4>
                <button type="button" class="close text-{{ $text }}" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-{{ $bg }}">
                <form role="form" method="post" action="{{ route('account.addmt5account') }}">
                    @csrf
                    <input class="form-control bg-{{ $bg }} text-{{ $text }}" value="live"
                        type="hidden" name="type">

                    <h5 class="text-{{ $text }} ">Leverage*:</h5>
                    <select class="form-control bg-{{ $bg }} text-{{ $text }}" name="leverage"
                        class="leverage" required>
                        <option disabled>Select leverage</option>
                        <option value="500">1:500</option>
                        <option value="400">1:400</option>
                        <option value="300">1:300</option>
                        <option value="200">1:200</option>
                        <option value="100">1:100</option>
                    </select><br>
                    {{-- <h5 class="text-{{$text}} ">MT5 Password*:</h5>
                    <input style="padding:5px;" class="form-control bg-{{$bg}} text-{{$text}}" type="text" name="password" required><br />
                    <h5 class="text-{{$text}} ">Investor Password*:</h5>
                    <input style="padding:5px;" class="form-control bg-{{$bg}} text-{{$text}}" type="text" name="investor_password" required><br /> --}}
                    {{-- <h5 class="text-{{$text}} ">Currency*:</h5>
                    <input class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. usd" type="text" name="currency" required><br /> --}}
                    {{-- <h5 class="text-{{$text}} ">Initial Balance*:</h5>
                    <input class="form-control bg-{{$bg}} text-{{$text}}" Placeholder="E.g. 10,0000" type="text" name="balance" required><br /> --}}
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
