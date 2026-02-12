@extends('layouts.app')

@section('title', 'The list of task')

@section('content')
    <div>
        @forelse($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['id' => $task->id])  }}">{{$task->title}}</a>
            </div>
        @empty
            <div>There are no task</div>
        @endforelse
    </div>
@endsection
