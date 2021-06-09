<?php
if (Auth::check() && Auth::user()->dashboard_style == "light") {
	$text = "dark";
	$bg = "light";
} else {
	$text = "light";
	$bg = "dark";
}
?>

<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title); ?> | <?php echo e(\App\Models\Setting::getValue('site_name')); ?></title>
    <link rel="icon" href="<?php echo e(asset('storage/photos/'.\App\Models\Setting::getValue('favicon'))); ?>" type="image/png" />

    <?php $__env->startSection('styles'); ?>
    <!-- Fonts and icons -->
    <script src="<?php echo e(asset('dash/js/plugin/webfont/webfont.min.js')); ?>"></script>
    <!-- Sweet Alert -->
    <script src="<?php echo e(asset('dash/js/plugin/sweetalert/sweetalert.min.js')); ?> "></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('dash/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dash/css/fonts.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dash/css/atlantis.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dash/css/customs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dash/css/atlantis.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dash/css/style.css')); ?>">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>

    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldSection(); ?>

</head>
<body data-background-color="dark">
    <div id="app">
        <!--PayPal-->
        <script>
            // Add your client ID and secret
            var PAYPAL_CLIENT = '<?php echo e(\App\Models\Setting::getValue('
            pp_ci ')); ?>';
            var PAYPAL_SECRET = '<?php echo e(\App\Models\Setting::getValue('
            pp_cs ')); ?>';

            // Point your server to the PayPal API
            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';

        </script>

        <script src="https://www.paypal.com/sdk/js?client-id=<?php echo e(\App\Models\Setting::getValue('pp_ci')); ?>">
        </script>

        <!--/PayPal-->

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        {<?php echo \App\Models\Setting::getValue('tawk_to'); ?>}
        </script>
        <!--End of Tawk.to Script-->
        <div class="wrapper">
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="footer bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                <div class="container-fluid">
                    <div class="text-center row copyright text-align-center">
                        <p>All Rights Reserved &copy; <?php echo e(\App\Models\Setting::getValue('site_name')); ?> <?php echo date("Y")?></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('dash/js/core/jquery.3.2.1.min.js')); ?> "></script>
    <script src="<?php echo e(asset('dash/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash/js/core/bootstrap.min.js')); ?> "></script>
    <script src="<?php echo e(asset('dash/js/customs.js')); ?>"></script>

    <!-- jQuery UI -->
    <script src="<?php echo e(asset('dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo e(asset('dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?> "></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo e(asset('dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?> "></script>

    <!-- Sweet Alert -->
    <script src="<?php echo e(asset('dash/js/plugin/sweetalert/sweetalert.min.js')); ?> "></script>
    <!-- Bootstrap Notify -->
    <script src="<?php echo e(asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?> "></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
                , layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        (function() {
            var gtConstEvalStartTime = new Date();

            function d(b) {
                var a = document.getElementsByTagName("head")[0];
                a || (a = document.body.parentNode.appendChild(document.createElement("head")));
                a.appendChild(b)
            }

            function _loadJs(b) {
                var a = document.createElement("script");
                a.type = "text/javascript";
                a.charset = "UTF-8";
                a.src = b;
                d(a)
            }

            function _loadCss(b) {
                var a = document.createElement("link");
                a.type = "text/css";
                a.rel = "stylesheet";
                a.charset = "UTF-8";
                a.href = b;
                d(a)
            }

            function _isNS(b) {
                b = b.split(".");
                for (var a = window, c = 0; c < b.length; ++c)
                    if (!(a = a[b[c]])) return !1;
                return !0
            }

            function _setupNS(b) {
                b = b.split(".");
                for (var a = window, c = 0; c < b.length; ++c) a.hasOwnProperty ? a.hasOwnProperty(b[c]) ? a = a[b[c]] : a = a[b[c]] = {} : a = a[b[c]] || (a[b[c]] = {});
                return a
            }
            window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function() {
                document.readyState = "complete"
            }, !1);
            if (_isNS('google.translate.Element')) {
                return
            }(function() {
                var c = _setupNS('google.translate._const');
                c._cest = gtConstEvalStartTime;
                gtConstEvalStartTime = undefined;
                c._cl = 'en';
                c._cuc = 'googleTranslateElementInit';
                c._cac = '';
                c._cam = '';
                c._ctkk = eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');
                var h = 'translate.googleapis.com';
                var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
                var b = s + h;
                c._pah = h;
                c._pas = s;
                c._pbi = b + '/translate_static/img/te_bk.gif';
                c._pci = b + '/translate_static/img/te_ctrl3.gif';
                c._pli = b + '/translate_static/img/loading.gif';
                c._plla = h + '/translate_a/l';
                c._pmi = b + '/translate_static/img/mini_google.png';
                c._ps = b + '/translate_static/css/translateelement.css';
                c._puh = 'translate.google.com';
                _loadCss(c._ps);
                _loadJs(b + '/translate_static/js/element/main.js');
            })();
        })();

    </script>
    <!-- Atlantis JS -->
    <script src="<?php echo e(asset('dash/js/atlantis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dash/js/atlantis.js')); ?>"></script>
    <script type="text/javascript">
        var badWords = [
            '<!--Start of Tawk.to Script-->'
            , '<script type="text/javascript">'
            , '<!--End of Tawk.to Script-->'
        ];
        $(':input').on('blur', function() {
            var value = $(this).val();
            $.each(badWords, function(idx, word) {
                value = value.replace(word, '');
            });
            $(this).val(value);
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#ShipTable').DataTable({
                order: [
                    [0, 'desc']
                ]
                , dom: 'Bfrtip'
                , buttons: [
                    'copy', 'csv', 'print', 'excel', 'pdf'
                ]
            });


            $(".dataTables_length select").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
            $(".dataTables_filter input").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
        });

    </script>
    <script>
        $(document).ready(function() {
            $('.UserTable').DataTable({
                order: [
                    [0, 'desc']
                ]
            });
            $(".dataTables_length select").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
            $(".dataTables_filter input").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
        });

    </script>
    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/layouts/app.blade.php ENDPATH**/ ?>