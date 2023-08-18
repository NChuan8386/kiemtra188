@extends('layouts.app')

@section('content')
    <h1>Create Channel</h1>
    <form method="post" action="{{ route('channels.store') }}">
        @csrf
        <input type="text" name="ChannelName" placeholder="Channel Name">
        <!-- Add other form fields here -->
        <button type="submit">Create</button>
    </form>
@endsection
