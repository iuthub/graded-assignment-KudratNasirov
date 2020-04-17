@extends('layouts.app')

@section('content')
<div >
    <div >
        <div >
            <div >

                @include('task.create')

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($tasks)>0)
                        <ul>
                            @foreach($tasks  as $task)
                                <li>
                                    <div class="task">
                                        {{$task->body}}
                                    </div>
                                    <div class="action">
                                        <a href="{{route('edit.task',['id'=>$task->id])}}"><i class="fa fa-edit"></i>Edit</a>
                                    </div>
                                    <div class="action">
                                        <a href="{{route('delete.task',['id'=>$task->id])}}"><i class="fa fa-trash-alt"></i>Delete</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        @else
                            <p class="sorry-message">You have no tasks Please create Task</p>
                        @endif

            </div>
        </div>
    </div>
</div>
@endsection
