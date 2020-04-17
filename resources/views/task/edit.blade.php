
@extends('layouts.app')

@section('content')

<form action="{{route('update.task')}}" method="post">
    <div id="myDIV" class="header">
        <h2>Edit task</h2>
        <input type="text" name="editTask" value="{{$task->body}}">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $task->id }}">
        <button type="submit" class="addBtn">Edit</button>
    </div>
</form>
@endsection
