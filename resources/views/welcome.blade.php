<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Permutas Servidor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
           /* body {
                font-family: 'Nunito';
            }
            */
        </style>
    </head>
    <body class="style_body">
        <nav class="navbar style_navbar">
            <!-- menu -->
        </nav>
        <!-- apresentacao -->
        <div class="container" style="text-align: center">
            <div style="margin-top: 2rem;">
                <img src="{{asset('imagens/logo_permuta_servidor_grande.png')}}" style="width:340px">
            </div>
            <div class="row" style="margin-top: 5rem;">
                <div class="col-md-4" style="text-align:center; margin-bottom:2rem;">
                    <img src="{{asset('imagens/logo_mapa.png')}}" style="width:240px">
                </div>
                <div class="col-md-7" style="text-align: left; font-size:20px">
                    <p style="margin-bottom: 2rem;"><span style="color:#82DCFF; font-weight: bold;">Permutas</span> é um aplicativo desenvolvido no curso de Ciência da Computação da <span style="color:#82DCFF; font-weight: bold;">Universidade Federal do Agreste de Pernambuco UFAPE</span> com parceria com a <span style="color:#82DCFF; font-weight: bold;">Universidade Federal Rural de Pernambuco UFRPE.</span></p>
                    <p>O objetivo do <span style="color:#82DCFF; font-weight: bold;">Permutas</span> é facilitar a identificação de possíveis servidores públicos interessados em realizar permuta entre pares da mesma instituição pelo Brasil.</p>
                </div>
            </div>
        <!--x apresentacao x-->

        <!-- aplicativo -->
        <div class="row" style="margin-top: 5rem;display: flex; flex-wrap: wrap; justify-content: center;">
            <div class="col-md-7" style="text-align:left; margin-bottom:2rem;font-size:20px">
                <p style="font-size: 45px; font-weight: bold; font-family:Arial, Helvetica, sans-serif">Aplicativo</p>
                <p style="margin-bottom: 2rem;">O aplicativo está disponível apenas para os servidores públicos federais. Estes, através do seu CPF podem fazer o cadastro na plataforma. Esse cadastro será validado pelo próprio portal da transparência, retornando nome, cargo, função e orgão do servidor.</p>
                <img src="{{asset('imagens/logo_portal_da_transparencia.png')}}" style="width:200px">
            </div>
            <div class="col-md-4" style="margin-top: -5rem;">
                <img src="{{asset('imagens/logo_cel_aplicativo.png')}}" style="width:340px">
            </div>
        </div>
        <!--x aplicativo x-->

        <!-- localizar -->
        <!--x localizar x-->

        <!-- interesse -->
        <div class="row style_localizar_tela_tipo1" style="margin-top: 5rem; margin-top:-2rem;">
            <div class="col-md-4" style="margin-top: -8rem;">
                <img src="{{asset('imagens/logo_cel_interesse.png')}}" style="width:340px">
            </div>
            <div class="col-md-7" style="text-align:left; margin-bottom:2rem;font-size:20px">
                <p style="font-size: 45px; font-weight: bold; font-family:Arial, Helvetica, sans-serif">Interesse</p>
                <p style="margin-bottom: 2rem;">Em seguida, os servidores podem realizar buscas para encontrar outros possíveis interessados em permutar o lugar de trabalho. Essas buscas podem ser por cidades, estados, regiões e também por raio de distância de cidades.</p>
            </div>
        </div>
        <div class="row style_localizar_tela_tipo2" style="margin-top: 5rem; margin-top:-2rem;">
            <div class="col-md-7" style="text-align:left; margin-bottom:2rem;font-size:20px">
                <p style="font-size: 45px; font-weight: bold; font-family:Arial, Helvetica, sans-serif">Interesse</p>
                <p style="margin-bottom: 2rem;">Em seguida, os servidores podem realizar buscas para encontrar outros possíveis interessados em permutar o lugar de trabalho. Essas buscas podem ser por cidades, estados, regiões e também por raio de distância de cidades.</p>
            </div>
            <div class="col-md-4" style="margin-top: -3rem;">
                <img src="{{asset('imagens/logo_cel_interesse.png')}}" style="width:340px">
            </div>
        </div>
        <!--x interesse x-->

        <!-- aviso -->
        <div class="row" style="margin-top: 2rem; margin-bottom:4rem;">
            <div class="col-md-12 style_aviso" style="text-align:left; margin-bottom:2rem;font-size:20px">
                <p style="margin-bottom: 2rem; text-align:center">É importante ressaltar que o sistema não fornece qualquer garantia que as
                    permutas combinadas serão efetivadas, isso dependerá dos orgãos
                    responsáveis, dos seus colegiados e legislações internas. O objetivo é aproximar os interessados.
                </p>
            </div>
        </div>
        <!--x aviso x-->

        <!-- carrossel -->
        <div class=" btn-group">
            <div style="margin-bottom: 5rem;">
                <img src="{{asset('imagens/logo_inss.png')}}" style="margin: 5px;">

                <img src="{{asset('imagens/logo_receita_federal.png')}}" style="margin: 5px;">

                <img src="{{asset('imagens/logo_banco_Central.png')}}" style="margin: 5px;">

                <img src="{{asset('imagens/logo_caixa.png')}}" style="margin: 5px;">

                <img src="{{asset('imagens/logo_bb.png')}}" style="margin: 5px;">

                <img src="{{asset('imagens/logo_correios.png')}}" style="margin: 5px;">
            </div>
        </div>

        <!--x carrossel x-->

        </div>

        <!-- rodapé -->
        <div style="background-color:#2D2D39; display: flex; flex-wrap: wrap; justify-content: center;padding-bottom:5rem">
            <div class="row" style="margin-top:5rem;text-align:center">
                <div class="col-md-12" style="margin-bottom: 2rem;">
                    <img src="{{asset('imagens/logo_permuta_servidor_grande.png')}}" style="width:340px">
                </div>
                <hr class="col-md-12" size = 7 style="background-color:#fff">
                <div class="col-md-4">
                    <div class="row" style="text-align:center; margin-bottom:2rem;">
                        <div class="col-12">Desenvolvido por:</div>
                        <img src="{{asset('imagens/logo_bcc.png')}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row" style="text-align:center; margin-bottom:2rem;">
                        <div class="col-12">Apoio:</div>
                        <img src="{{asset('imagens/logo_ufape.png')}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row" style="text-align:center">
                        <div class="col-12" style="margin-bottom: 2rem;">Redes sociais</div>
                        <img src="{{asset('imagens/logo_facebook.png')}}" style="margin: 10px;">
                        <img src="{{asset('imagens/logo_instagram.png')}}" style="margin: 10px;">
                        <img src="{{asset('imagens/logo_twitter.png')}}" style="margin: 10px;">
                    </div>
                </div>
            </div>
        </div>
        <!--x rodapé x-->

    </body>
</html>
