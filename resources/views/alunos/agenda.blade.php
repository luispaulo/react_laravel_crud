@extends('layouts.app')

@section('content')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
      });
      calendar.render();
    });

  </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Agenda do Professor</h1>
                    <a class="btn btn-success" href="{{ url('alunos/novo')}}">Novo aluno</a>
                    <a class="btn btn-success" href="{{ url('alunos')}}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div id='calendar'></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="root" class="justify-content-center" style="text-align: center;line-height: 100px;background-color:#D8D8D8"></div>
</div>
@endsection
