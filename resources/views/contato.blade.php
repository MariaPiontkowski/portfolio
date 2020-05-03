@extends('layout')

@section('page') Contato @endsection

@section('content')
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container bg-light">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Informações de Contato</h2>
                </div>
                <div class="w-100" id="retorno"></div>
                <div class="col-md-4">
                    <p><b>Endereço:</b> Blumenau - Santa Catarina, Brasil</p>
                </div>
{{--                <div class="col-md-3">--}}
{{--                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>--}}
{{--                </div>--}}
                <div class="col-md-4">
                    <p><b>Email:</b> <a href="mailto:maria.piontkowski@hotmail.com">maria.piontkowski@hotmail.com</a></p>
                </div>
                <div class="col-md-4">
                    <p><b>LinkedIn:</b> <a href="https://www.linkedin.com/in/maria-cec%C3%ADlia-piontkowski-alves-45213213b/" target="_blank">Maria Cecília Piontkowski Alves</a></p>
                </div>
            </div>
            @if (\Illuminate\Support\Facades\Session::has('sucesso'))
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{\Illuminate\Support\Facades\Session::get('sucesso')}}
                    </div>
                </div>
            @endif

            @error('email')
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{$message}}
                </div>
            </div>
            @enderror
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="{{route('envia.contato')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome *" name="nome" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail *" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telefone" name="telefone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" class="form-control" placeholder="Mensagem *" name="mensagem" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
                <div class="col-md-6" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227807.01372409848!2d-49.23918936906302!3d-26.856340930472335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df1e408b5c3095%3A0xacfb8520bc1a7644!2sBlumenau%2C%20SC!5e0!3m2!1spt-BR!2sbr!4v1588479805865!5m2!1spt-BR!2sbr" width="100%" height="440" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
