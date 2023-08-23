@extends('layout.layout')
@section('title', 'Create')
@section('content')
    <form action="{{route('teacher.store')}}" method="post">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Materia:</label>
            <select name="materia">
                <option value="portugues">Português</option>
                <option value="matematica">Matemática</option>
            </select>
        </div>
        <div>
            <label>Escola:</label>
            <input type="text" name="escola">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
