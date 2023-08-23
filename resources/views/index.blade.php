@extends('layout.layout')
@section('title', 'Index')
@section('content')
    <h1>Home</h1>

    @if($teachers -> count() > 0)

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Matéria</th>
                <th>Escola</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->materia}}</td>
                    <td>{{$teacher->escola}}</td>
                    <td>
                        <a href="{{route('teacher.edit', $teacher->id)}}">Edit</a>

                        <form action="{{route('teacher.destroy', $teacher->id)}}" name="destroy">
                        @csrf

                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <h3>No teachers, <a href="{{route('teacher.create')}}">create now</a></h3>
    @endif
@endsection
