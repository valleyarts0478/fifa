@extends('layouts.app')

@section('content')

<h1>チーム一覧</h1>

    @if (count($teams) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>チーム</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->t_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection