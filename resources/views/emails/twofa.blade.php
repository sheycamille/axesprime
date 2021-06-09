@component('mail::message')
# Hello {{ $demo->receiver_name }},

This is a notification of a new return on investment (ROI) on your investment account.
<br>

<strong>2 Factor code: </strong> {{ $demo->receiver_plan }} <br>

Thanks,<br>
{{ $demo->sender }}.
@endcomponent
