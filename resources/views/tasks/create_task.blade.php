@extends('layouts.app')

@section('title', 'Create Task')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <form action="/tasks/create" method="POST" >
        @csrf
        <div>
            <label for="name">Task name</label>
            <div>
                <input id="name" type="text" name="name"  />
            </div>
        </div>
        <div>
            <div>
                <button type="submit">
                    Save
                </button>
            </div>
        </div>
    </form>
@endsection