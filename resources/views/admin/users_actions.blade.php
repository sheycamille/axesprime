<!-- Top Up Modal -->
<div id="topupModal{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align:center;">Credit/Debit User account.</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form style="padding: 3px;" role="form" method="post" action="{{ route('topup') }}">
                    <input style="padding: 10px;" class="form-control" value="{{ $user->id }}" type="text"
                        disabled><br />
                    <select required class="form-control" name="account_id" id="account_id" required>
                        <option value="" disabled selected>Choose Acount</option>
                        @foreach ($user->accounts() as $account)
                        <option value="{{ $account->id }}">{{ $account->login }} |
                            {{ $account->server }}
                        </option>
                        @endforeach
                    </select>
                    <br>

                    <h5 class="">Amount</h5>
                    <input style="padding: 10px;" class="form-control" placeholder="Enter amount" type="text"
                        name="amount" required>
                    <br>

                    <h5 class="">Select credit to add, debit to subtract.</h5>
                    <select class="form-control" name="t_type" required>
                        <option value="">Select type</option>
                        <option value="Credit">Credit</option>
                        <option value="Debit">Debit</option>
                    </select>
                    <br><br>

                    <h5 class="">Select where to Credit/Debit</h5>
                    <select class="form-control" name="type" required>
                        <option value="">Select Column</option>
                        <option value="Balance">Balance</option>
                        <option value="Bonus">Bonus</option>
                    </select>
                    <br><br>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Topup Modal -->


<!-- send a single user email Modal-->
<div id="sendmailtooneuserModal{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Email Message</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>This message will be sent to {{ $user->name }} {{ $user->l_name }} </p>
                <form style="padding:3px;" role="form" method="post" action="{{ route('sendmailtooneuser') }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <textarea placeholder="Type your message here" class="form-control" name="message" row="3"
                        placeholder="Type your message here" required></textarea><br />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Send">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- /Trading History Modal -->

<div id="TradingModal{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Add Trading History for {{ $user->name }}
                    {{ $user->l_name }} </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="{{ route('addhistory') }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <h5 class="">Amount</h5>
                    <input type="number" name="amount" class="form-control">
                    <div class="form-group">
                        <h5 class="">Type</h5>
                        <select class="form-control" name="type">
                            <option value="">Select type</option>
                            <option value="Bonus">Bonus</option>
                            {{-- <option value="ROI">ROI</option> --}}
                        </select>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Add History">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /send a single user email Modal -->


<!-- Edit user Modal -->
<div id="edituser{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Edit user details.</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form style="padding:3px;" role="form" method="post" action="{{ route('edituser') }}">
                    <input style="padding:5px;" class="form-control" value="{{ $user->name }}" type="text"
                        disabled><br />
                    <h5 class="">Fullname</h5>
                    <input style="padding:5px;" class="form-control" value="{{ $user->name }}" type="text" name="name"
                        required><br />
                    <h5 class="">Email</h5>
                    <input style="padding:5px;" class="form-control" value="{{ $user->email }}" type="text" name="email"
                        required><br />
                    <h5 class="">Phone Number</h5>
                    <input style="padding:5px;" class="form-control" value="{{ $user->phone }}" type="text" name="phone"
                        required><br />
                    <h5 class="">Referral link</h5>
                    <input style="padding:5px;" class="form-control" value="{{ $user->ref_link }}" type="text"
                        name="ref_link" required><br />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="submit" class="btn btn-primary" value="Update user">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit user Modal -->


<!-- Reset user password Modal -->
<div id="resetpswdModal{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Reset Password</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p class="">Are you sure you want to reset password for {{ $user->name }}
                    {{ $user->l_name }} to <span class="text-primary font-weight-bolder">user01236</span></p>
                <a class="btn btn-primary" href="{{ url('admin/dashboard/resetpswd') }}/{{ $user->id }}">Reset
                    Now</a>
            </div>
        </div>
    </div>
</div>
<!-- /Reset user password Modal -->


<!-- Switch useraccount Modal -->
<div id="switchuserModal{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">You are about to login as
                    {{ $user->name }}.</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <a class="btn btn-primary" target="_bank"
                    href="{{ url('admin/dashboard/switchuser') }}/{{ $user->id }}">Proceed</a>
            </div>
        </div>
    </div>
</div>
<!-- /Switch user account Modal -->


<!-- Clear account Modal -->
<div id="clearacctModal{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Clear Account</strong></h4>
                <button type="button" class="close " data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>You are clearing account for {{ $user->name }} {{ $user->l_name }} to $0.00</p>
                <a class="btn btn-primary" href="{{ url('admin/dashboard/clearacct') }}/{{ $user->id }}">Proceed</a>
            </div>
        </div>
    </div>
</div>
<!-- /Clear account Modal -->


<!-- Delete user Modal -->
<div id="deleteModal{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete User</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body p-3">
                <p class="">Are you sure you want to delete {{ $user->name }}
                    {{ $user->l_name }}</p>
                <a class="btn btn-danger" href="{{ url('admin/dashboard/delsystemuser') }}/{{ $user->id }}">Yes i'm
                    sure</a>
            </div>
        </div>
    </div>
</div>
<!-- /Delete user Modal -->


<!-- Live MT5 Account Mg't  Modal -->
<div id="liveaccounts{{ $user->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">MT5 Accounts</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="accountstable table table-hover">
                    <div class="row">
                        <div class="cell">ID</div>
                        <div class="cell">Number</div>
                        <div class="cell">Balance</div>
                        <div class="cell">First Deposit</div>
                        <div class="cell">Action</div>
                    </div>
                    @foreach ($user->accounts() as $acc)
                    <div class="row">
                        <div class="cell" scope="row">{{ $acc->id }}</div>
                        <div class="cell">{{ $acc->login }}</div>
                        <div class="cell">{{ $acc->balance }}</div>
                        <div class="cell">
                            <a href="{{ route('dellaccounts', $acc->id) }}" class="m-1 btn btn-danger btn-xs">Delete
                                Account</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Live MT5 Account Mg't  Modal -->
