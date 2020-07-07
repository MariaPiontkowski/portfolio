@extends('layout')

@section('page') Sobre @endsection

@section('content')
    <div class="bg-light">
        <section class="ftco-section-featured ftco-section-featured-2 ftco-animate">
            <div class="container-fluid" data-scrollax-parent="true">
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="h1">Desenvolvedora <strong class="px-3">WEB</strong> com {{date('Y') - 2014}} anos de experiência em desenvolvimento de softwares e websites customizados.</h2>
                        <p><a href="{{route('contato')}}" class="btn btn-primary mt-3 py-3 px-5">Entre em contato</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

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

    <div class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Tecnologias</h2>
{{--                    <p>Confira os recursos técnicos que possuo experiência.</p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://www.php.net/" class="block-20" style="background-image: url('{{asset('img/php.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
{{--                            <div class="meta mb-3">--}}
{{--                                <div>Linguagem</div>--}}
{{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://www.php.net/">PHP</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://laravel.com/" class="block-20" style="background-image: url('{{asset('img/laravel.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://laravel.com/">Laravel</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://framework.zend.com/" class="block-20" style="background-image: url('{{asset('img/zend.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://framework.zend.com/">Zend Framework</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://dotnet.microsoft.com/apps/aspnet" class="block-20" style="background-image: url('{{asset('img/asp.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://dotnet.microsoft.com/apps/aspnet">ASP.NET</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <div class="block-20" style="background-image: url('{{asset('img/html.jpg')}}')">
                        </div>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center">HTML</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <div class="block-20" style="background-image: url('{{asset('img/css.jpg')}}')">
                        </div>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center">CSS</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <div class="block-20" style="background-image: url('{{asset('img/js.jpg')}}')">
                        </div>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center">JavaScript</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://getbootstrap.com.br/" class="block-20" style="background-image: url('{{asset('img/bootstrap.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://materializecss.com/">Bootstrap</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://materializecss.com/" class="block-20" style="background-image: url('{{asset('img/materialize.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="">Materialize</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://jquery.com/" class="block-20" style="background-image: url('{{asset('img/jquery.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://jquery.com/">jQuery</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://www.mongodb.com/" class="block-20" style="background-image: url('{{asset('img/mongo.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://www.mongodb.com/">MongoDB</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://www.mysql.com/" class="block-20" style="background-image: url('{{asset('img/mysql.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://www.mysql.com/">MySQL</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://www.postgresql.org/" class="block-20" style="background-image: url('{{asset('img/postgres.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://www.postgresql.org/">PostgreSQL</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <div class="block-20" style="background-image: url('{{asset('img/layout.jpg')}}')">
                        </div>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center">Layout Responsivo</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjZhabx6ZbpAhVRCZEKHVA7BpMYABAAGgJjZQ&ohost=www.google.com&cid=CAESQOD2awDRE5XyRk5ozjIQS2fgA4jJWFkwWgkk-gv1Pco7Z7tpkW3OD2tS8Z-QL4x-bkHJ2tQnktZ7u4SMh8Ogeg0&sig=AOD64_0VUncnntYEx7sAtFzxh3XWmrNNKA&q=&ved=2ahUKEwiOmJ7x6ZbpAhXeGbkGHdlEB2cQ0Qx6BAghEAE&adurl=" class="block-20" style="background-image: url('{{asset('img/photoshop.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjZhabx6ZbpAhVRCZEKHVA7BpMYABAAGgJjZQ&ohost=www.google.com&cid=CAESQOD2awDRE5XyRk5ozjIQS2fgA4jJWFkwWgkk-gv1Pco7Z7tpkW3OD2tS8Z-QL4x-bkHJ2tQnktZ7u4SMh8Ogeg0&sig=AOD64_0VUncnntYEx7sAtFzxh3XWmrNNKA&q=&ved=2ahUKEwiOmJ7x6ZbpAhXeGbkGHdlEB2cQ0Qx6BAghEAE&adurl=">Photoshop</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://git-scm.com/" class="block-20" style="background-image: url('{{asset('img/git.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://git-scm.com/">GIT</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry">
                        <a href="https://bitbucket.org/" class="block-20" style="background-image: url('{{asset('img/bitbucket.jpg')}}')">
                        </a>
                        <div class="text p-4 d-block">
                            {{--                            <div class="meta mb-3">--}}
                            {{--                                <div>Linguagem</div>--}}
                            {{--                            </div>--}}
                            <h3 class="heading text-center"><a target="_blank" href="https://bitbucket.org/">Bitbucket</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
