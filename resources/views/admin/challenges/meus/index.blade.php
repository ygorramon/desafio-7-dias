@extends('adminlte::page')

@section('title', 'Desafios disponiveis')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('challenge.availables') }}" class="active">Desafios Diponíveis</a></li>
</ol>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <form action="#" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" placeholder="Filtrar:" class="form-control" value="{{ $filters['filter'] ?? '' }}">
            <button type="submit" class="btn btn-dark">Filtrar</button>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome da Mãe</th>
                    <th>Nome do Bebê</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($challenges as $challenge)
                <tr>
                    <td>{{ $challenge->client->name }}</td>
                    <td>{{ $challenge->client->nameBaby }}</td>
                    <td> {{ $challenge->status }}</td>
                    <td>

                        <a href="{{route('challenge.meus.show', $challenge->id)}}" class="btn btn-warning">VER</a>
                        <a href="{{route('challenge.meus.responder', $challenge->id)}}" class="btn btn-warning">Responder</a>
                        <a href="{{route('challenge.meus.chat', $challenge->id)}}" class="btn btn-warning">Chat</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        @if (isset($filters))
        {!! $challenges->appends($filters)->links() !!}
        @else
        {!! $challenges->links() !!}
        @endif
    </div>
</div>
@stop