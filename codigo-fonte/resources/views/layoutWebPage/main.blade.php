<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layoutWebPage.head')
    </head>

    <body id="page-top">

        @include('layoutWebPage.header')

        @yield('conteudo')

        <!-- Footer -->
        <footer>
            <div class="container text-center footerText">
                <p>{!! app('AppConfig')->getParam('RODAPE_TEXTO_PROJETO') !!}</p>
            </div>
        </footer>

        @include('layoutWebPage.footer')

    </body>

</html>