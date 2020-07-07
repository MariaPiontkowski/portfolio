@extends('layout')

@push('style')

@endpush

@section('page') Portfólio @endsection

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Confira abaixo alguns dos meus projetos</h2>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="https://www.customit.com.br/" target="_blank" class="image" style="background-image: url('{{asset('img/customit.jpg')}}'); " data-scrollax=" properties: { translateY: '-20%'}">
                    </a>
                    <div class="text">
                        <h4 class="subheading">WEB SITE - Desenvolvimento de Softwares</h4>
                        <h2 class="heading"><a href="https://www.customit.com.br/" target="_blank">Custom IT Sistemas</a></h2>
{{--                        <p>Web Site desenvolvido para um empresa de software.</p>--}}
                        <p><a href="https://www.customit.com.br/" target="_blank" class="btn btn-primary px-4">Ver Web Site</a></p>
                    </div>
                </div>
                <div class="col-md-12 block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="https://alimentos.bio.br/index.html" target="_blank" class="image image-2 order-2" style="background-image: url('{{asset('img/vct.jpg')}}'); " data-scrollax=" properties: { translateY: '-20%'}">
                    </a>
                    <div class="text order-1">
                        <h4 class="subheading">WEB SITE - Conservação de Alimentos</h4>
                        <h2 class="heading"><a href="https://alimentos.bio.br/index.html">VCT Alimentos</a></h2>
                        {{--                        <p>Web Site desenvolvido para um empresa de software.</p>--}}
                        <p><a href="https://alimentos.bio.br/index.html" class="btn btn-primary px-4">Ver Web Site</a></p>
                    </div>
                </div>
                <div class="col-md-12 block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="http://rasmonitoramento.com/" target="_blank" class="image" style="background-image: url('{{asset('img/ras.jpg')}}'); " data-scrollax=" properties: { translateY: '-20%'}">
                    </a>
                    <div class="text">
                        <h4 class="subheading">WEB SITE - Monitoramento de veículos</h4>
                        <h2 class="heading"><a href="http://rasmonitoramento.com/">Ras Monitoramento</a></h2>
                        {{--                        <p>Web Site desenvolvido para um empresa de software.</p>--}}
                        <p><a href="http://rasmonitoramento.com/" class="btn btn-primary px-4">Ver Web Site</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
