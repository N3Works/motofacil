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
            <div class="row">
                <div class="col-md-6 container text-center footerText">
                    <a class="blink middle-vertical-align" href="{{ url('solicitar?proposta=consignado') }}">Empréstimo pessoal </a>
                </div>
                <div class="col-md-6 container text-center footerText"style="border-left: 2px solid lightseagreen;">
                    <a class="blink middle-vertical-align" href="{{ url('solicitar?proposta=aposentados') }}">{!! app('AppConfig')->getParam('RODAPE_TEXTO_PROJETO') !!}</a>
                </div>

            </div>

        </footer>

        @include('layoutWebPage.footer')

    </body>

</html>
