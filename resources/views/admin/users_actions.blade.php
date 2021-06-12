	<!-- Top Up Modal -->
    <div id="topupModal{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                    <h4 class="modal-title" style="text-align:center;">Credit/Debit User account.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                        <form style="padding:3px;" role="form" method="post" action="{{route('topup')}}">
                        <input style="padding:5px;" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" value="{{$user->name}}" type="text" disabled><br/>
                            <input style="padding:5px;" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="Enter amount" type="text" name="amount" required><br/>
                            <div class="form-group">
                                <h5 class="text-{{$text}}">Select where to Credit/Debit</h5>
                                <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="type" required>
                                <option value="">Select Column</option>
                                <option value="Bonus">Bonus</option>
                                <option value="Profit">Profit</option>
                                <option value="Ref_Bonus">Ref_Bonus</option>
                                <option value="Deposit">Deposit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h5 class="text-{{$text}}">Select credit to add, debit to subtract.</h5>
                                <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="t_type" required>
                                <option value="">Select type</option>
                                <option value="Credit">Credit</option>
                                <option value="Debit">Debit</option>
                                </select>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                        <input type="submit" class="btn btn-{{$text}}" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit for a plan Modal -->


    <!-- send a single user email Modal-->
    <div id="sendmailtooneuserModal{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                    <h4 class="modal-title text-{{$text}}">Send Email Message</h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                    <p>This message will be sent to {{$user->name}} {{$user->l_name}} </p>
                    <form style="padding:3px;" role="form" method="post" action="{{route('sendmailtooneuser')}}">
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <textarea placeholder="Type your message here" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="message" row="3" placeholder="Type your message here" required></textarea><br/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-{{$text}}" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->

    <div id="TradingModal{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">

                    <h4 class="modal-title text-{{$text}}">Add Trading History for {{$user->name}} {{$user->l_name}} </h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                        <form role="form" method="post" action="{{route('addhistory')}}">
                        <input type="hidden" name="user_id" value="{{$user->id}}">

                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Investment Plans</h5>

                            <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="plan">
                            <option value="">Select Plan</option>
                            @foreach($pl as $plns)
                            <option value="{{$plns->name}}">{{$plns->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <h5 class=" text-{{$text}}">Amount</h5>
                        <input type="number" name="amount" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
                        <div class="form-group">
                            <h5 class=" text-{{$text}}">Type</h5>
                            <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="type">
                            <option value="">Select type</option>
                            <option value="Bonus">Bonus</option>
                            <option value="ROI">ROI</option>
                            </select>
                        </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-{{$text}}" value="Add History">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /send a single user email Modal -->

<!-- Edit user Modal -->
    <div id="edituser{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">

                    <h4 class="modal-title text-{{$text}}">Edit user details.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                    <form style="padding:3px;" role="form" method="post" action="{{route('edituser')}}">
                        <input style="padding:5px;" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" value="{{$user->name}}" type="text" disabled><br/>
                        <h5 class=" text-{{$text}}">Fullname</h5>
                        <input style="padding:5px;" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" value="{{$user->name}}" type="text" name="name" required><br/>
                        <h5 class=" text-{{$text}}">Email</h5>
                        <input style="padding:5px;" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" value="{{$user->email}}" type="text" name="email" required><br/>
                        <h5 class=" text-{{$text}}">Phone Number</h5>
                        <input style="padding:5px;" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" value="{{$user->phone}}" type="text" name="phone" required><br/>
                        <h5 class=" text-{{$text}}">Referral link</h5>
                        <input style="padding:5px;" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" value="{{$user->ref_link}}" type="text" name="ref_link" required><br/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <input type="submit" class="btn btn-{{$text}}" value="Update user">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit user Modal -->

    <!-- Reset user password Modal -->
    <div id="resetpswdModal{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                    <h4 class="modal-title text-{{$text}}">Reset Password</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                    <p class="text-{{$text}}">Are you sure you want to reset password for {{$user->name}} {{$user->l_name}} to <span class="text-primary font-weight-bolder">user01236</span></p>
                    <a class="btn btn-{{$text}}" href="{{ url('admin/dashboard/resetpswd') }}/{{$user->id}}">Reset Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Reset user password Modal -->

    <!-- Switch useraccount Modal -->
    <div id="switchuserModal{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                    <h4 class="modal-title text-{{$text}}">You are about to login as {{$user->name}}.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                    <a class="btn btn-{{$text}}" href="{{ url('admin/dashboard/switchuser') }}/{{$user->id}}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Switch user account Modal -->

    <!-- Clear account Modal -->
    <div id="clearacctModal{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                    <h4 class="modal-title text-{{$text}}">Clear Account</strong></h4>
                    <button type="button" class="close  text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                    <p>You are clearing account for {{$user->name}} {{$user->l_name}} to $0.00</p>
                    <a class="btn btn-{{$text}}" href="{{ url('admin/dashboard/clearacct') }}/{{$user->id}}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Clear account Modal -->

    <!-- Delete user Modal -->
    <div id="deleteModal{{$user->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">

                    <h4 class="modal-title text-{{$text}}">Delete User</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}} p-3">
                    <p class="text-{{$text}}">Are you sure you want to delete {{$user->name}} {{$user->l_name}}</p>
                    <a class="btn btn-danger" href="{{ url('admin/dashboard/delsystemuser') }}/{{$user->id}}">Yes i'm sure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete user Modal -->
