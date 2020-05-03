@extends('layout')

@section('overlay')
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">O <strong> melhor</strong> para o desenvolvimento <strong>web</strong></h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="{{route('contato')}}" class="btn btn-primary btn-outline-white px-5 py-3">Entre em contato</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="ftco-section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center heading-section ftco-animate">
                <p><h2 class="mb-4">Procurando por um desevolvedor WEB?</h2> </p>
                <p>Deseja uma solução personalizada para o seu negócio e está a procura de um profissional para atender seus objetivos?</p>
{{--                <p>É só descer mais um pouquinho.</p>--}}
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Olá, seja bem vindo :)</h2>
                    <p>Me chamo Maria e sou Web Designer e Desenvolvedora de Software há {{ date('Y') - 2014  }} anos.</p>
                    <p>Se quiser conhecer melhor o meu perfil, basta clicar <a class="text-white" href="{{route('sobre')}}"><b>aqui</b></a>.</p>
{{--                    <p>Atualmente redidindo em Blumenau (SC), presto serviços para fora e dentro da região.</p>--}}
                    <p></p>
                    <p>Você também pode conferir alguns projetos no meu <a class="text-white" href="{{route('portfolio')}}"><b>portfólio</b></a>.</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="{{route('contato')}}" class="btn btn-primary btn-outline-white px-5 py-3">Entre em contato</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Perfis Profissionais</h2>
                <p>Você também pode me conhecer através das plataformas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate offset-md-2">
                <div class="blog-entry">
                    <a href="https://www.linkedin.com/in/maria-cec%C3%ADlia-piontkowski-alves-45213213b/" class="block-20"
                       style="background-image: url('{{asset('img/linkedin.jpg')}}');background-size: 200px;    ">
                    </a>
                    <div class="text p-4 d-block text-center">
                        <h3 class="heading"><a href="https://www.linkedin.com/in/maria-cec%C3%ADlia-piontkowski-alves-45213213b/">LinkedIn</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-2 ftco-animate">
                <div class="blog-entry">
                    <a href="https://www.workana.com/freelancer/97ad1a27417874f91a3e3653b07d841c" class="block-20"
                       style="background-image: url('{{asset('img/workana.jpg')}}');" target="_blank">
                    </a>
                    <div class="text p-4 d-block text-center">
                        <h3 class="heading"><a href="https://www.workana.com/freelancer/97ad1a27417874f91a3e3653b07d841c">Workana</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
