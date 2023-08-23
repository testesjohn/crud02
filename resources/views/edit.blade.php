@extends('layout.layout')
@section('title', 'Edit')
@section('content')
    <form action="{{route('teacher.update', $teacher->id)}}" method="post">
        @method('put')
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{$teacher->name}}">
        </div>
        <div>
            <label>Materia:</label>
            <select name="materia">
                <option value="portugues" {{$teacher->materia == 'portugues'? 'selected':''}}>Português</option>
                <option value="matematica" {{$teacher->materia == 'matematica'? 'selected':''}}>Matemática</option>
            </select>
        </div>
        <div>
            <label>Escola:</label>
            <input type="text" name="escola" value="{{$teacher->escola}}">
        </div>
        <button type="submit">Edit</button>
    </form>
@endsection
