@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Listar de Alunos</h1>
                    <a class="btn btn-success" href="{{ url('alunos/novo')}}">Novo aluno</a>
                    <a class="btn btn-success" href="{{ url('alunos/agenda')}}">Agenda do Professor</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>CPF</th>
                                        <th col-md-2>Acoes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $alunos as $value )
                                    <tr>
                                        <td>{{ $value->nome  }}</td>
                                        <td>{{ $value->email}}</td>
                                        <td>{{ $value->cpf}}</td>
                                        <td>
                                            <a href="alunos/{{$value->id}}/editar" class="btn btn-primary btn-sm">Editar</a>
                                        </td>
                                        <td>
                                             <form action="alunos/delete/{{ $value->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger">Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="root" class="justify-content-center" style="text-align: center;line-height: 100px;background-color:#D8D8D8"></div>
</div>
@endsection
