<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="http://ixioxi.com/content/img/ixioxi-ico.png">
    <!-- Page Title  -->
    <title>IXIOXI.COM | Nous transformons les idées en technologies utilisatbles et accessibles à tous</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('demo/assets/css/dashlite.css?ver=3.0.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('demo/assets/css/theme.css?ver=3.0.0') }}">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            jQuery('#professionnel').change(function() {
                if ($(this).prop('checked')) {
                    $('.society').hide();
                }
            });

            jQuery('#entreprise').change(function() {
                if ($(this).prop('checked')) {
                    $('.society').show();
                }
            });
        });
    </script>
   
    <style>
        .disable {
            pointer-events: none;
            opacity: 0.3;
        }
    </style>
</head>
