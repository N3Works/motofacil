<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layoutWebPage.head')
    </head>

    <body id="page-top">

        @include('layoutWebPage.header')

        <header class="masthead"></header>

        @yield('conteudo')

        <!-- Footer -->
        <footer>
            <div class="container text-center footerText ">
                <a class="blink middle-vertical-align" href="{{ url('solicitar?proposta=aposentados') }}">{!! app('AppConfig')->getParam('RODAPE_TEXTO_PROJETO') !!}</a>
            </div>
        </footer>

        @include('layoutWebPage.footer')

    </body>

</html>
