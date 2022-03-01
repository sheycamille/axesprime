<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block; margin:auto;">
            @if (trim($slot) === 'Laravel')
            <img src="{{ asset('front/img/axepro-group-logo.png') }}" class="logo" alt="AxePro Group Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>
