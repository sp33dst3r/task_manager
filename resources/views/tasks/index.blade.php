@extends('layouts.app')

@section('title', 'Task List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    @forelse ($tasks as $task)
        <li>{{ $task->name }}</li>
    @empty
        <p>No tasks</p>
    @endforelse
@endsection