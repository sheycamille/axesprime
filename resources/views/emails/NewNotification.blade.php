@component('mail::message')
    # Greetings!

    {!! $demo->message !!}


    @if (isset($demo->link))
        @php echo("\r If you can click on the link or button above, copy and paste this link below into a browser. \r \n") @endphp

        {!! $demo->link !!}

    @endif


    @php echo("\r We are here to serve you. Have a great day! \r\n") @endphp


    @php echo("\r Kind regards") @endphp,
    {{ "\r " . $demo->sender }}, @php echo("Your #1 Multi-Asset Broker.\r\n") @endphp.

@endcomponent
