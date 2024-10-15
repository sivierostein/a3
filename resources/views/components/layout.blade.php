<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <title>Busca por Antigos Alunos da Escola de Minas</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <noscript>
        <link rel="stylesheet" href="{{asset('css/noscript.css')}}" />
    </noscript>

</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            {{ $slot }}
        </header>

        <!-- Footer -->
        <footer id="footer">
            <p>Powered by</p>
            <img src="images/A3EM-total.RGB.png" width="250" height="177" alt="" />
            <p class="copyright">&copy; <a href="https://a3em.org.br">a3em.org.br</a>.</p>
        </footer>

    </div>

    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

    <script src="js/browser.min.js"></script>
    <script src="js/breakpoints.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>

</body>

</html>