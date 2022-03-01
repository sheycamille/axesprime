<tr>
    <td align="center">
        <div style="width:100%;padding:250px auto;background-color:#ffffff;">
            <table role="presentation" width="100%">
                <tbody>
                    <tr>
                        <td style="padding:10px;text-align:center">
                            <h1
                                style="font-family:Helvetica,Arial,sans-serif;font-size:35px;line-height:28px;font-weight:500;margin:auto;margin-top:60px;margin-bottom:60px;text-align:center;">
                                Download Your Trading Platform</h1>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="font-size:0;text-align:center padding-bottom: 50px;">

                <div style="width:100%;max-width:300px;display:inline-block;vertical-align:top;height:100px">
                    <h2 style="text-align:center;">Metatrader 5</h2>
                    <a style="text-align:center;" href="<?php echo e(asset('downloads/axeprogroupmt5setup.exe')); ?>">
                        <img class="col-md-6" src="<?php echo e(asset('dash/images/windows.png')); ?>" alt="MT5" tilte="MT5"
                            height="80" />
                        <br>
                        <span>Download Now</span>
                    </a>
                </div>

                <div style="width:100%;max-width:300px;display:inline-block;vertical-align:top;height:100px">
                    <h2 style="text-align:center;">Android App</h2>
                    <a style="text-align:center;"
                        href="https://download.mql5.com/cdn/mobile/mt5/android?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live">
                        <img class="" src="<?php echo e(asset('dash/images/google_play_badge.png')); ?>"
                            alt="Andriod Download" tilte="Andriod Download" height="66" />
                        <br><br>
                        <span>Download Now</span>
                    </a>
                </div>

                <div style="width:100%;max-width:300px;display:inline-block;vertical-align:top;height:100px">
                    <h2 style="text-align:center;">iOS App</h2>
                    <a style="text-align:center;"
                        href="https://download.mql5.com/cdn/mobile/mt5/ios?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live"
                        target="_blank">
                        <img src="<?php echo e(asset('dash/images/app-store-en.png')); ?>" alt="iPhone Download"
                            tilte="iPhone Download" height="66" />
                        <br><br>
                        <span>Download Now</span>
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </td>
</tr>

<tr>
    <td>
        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td class="content-cell" align="center">
                    <?php echo e(Illuminate\Mail\Markdown::parse($slot)); ?>

                </td>
            </tr>
        </table>
    </td>
</tr>
<?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/vendor/mail/html/footer.blade.php ENDPATH**/ ?>