@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>Listar de Alunos</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Request::is('*/editar'))
                    <form action="{{ url('alunos/update') }}/{{$alunos->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email"  >Nome:</label>
                            <input name="nome" type="nome" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="Nome" value="{{ $alunos->nome }}">
                            @if ($errors->has('nome'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input name="email" type="text" class="form-control  @error('email') is-invalid @enderror" id="email"  placeholder="Email" value="{{ $alunos->email }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input name="cpf" type="text" class="form-control  @error('cpf') is-invalid @enderror" id="cpf" placeholder="CPF" value="{{ $alunos->cpf }}">
                            @if ($errors->has('cpf'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        <a href="{{ url('/alunos') }}" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
                    </form>

                    @else

                    <form action="{{ url('alunos/adicionar')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="email">Nome:</label>
                          <input name="nome" type="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" placeholder="Ex: Didi Moco sonrisal" value="{{old('nome')}}">
                            @if ($errors->has('nome'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email"  placeholder="Ex: didi@moco.com" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input name="cpf" type="text" class="form-control  @error('cpf') is-invalid @enderror" id="cpf" placeholder="ex: 01273476158(somente numero)" value="{{old('cpf')}}">
                            @if ($errors->has('cpf'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ url('/alunos') }}" class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
                    </form>

                    @endif

                </div>
            </div>
        </div>
    </div>
    <div id="root" class="justify-content-center" style="text-align: center;line-height: 100px;background-color:#D8D8D8"></div>
</div>
@endsection
