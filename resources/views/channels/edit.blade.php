@extends('layouts.app')

@section('content')
    <h1>Edit Channel</h1>
    <form method="post" action="{{ route('channels.update', $channel) }}">
        @csrf
        @method('put')
        <input type="text" name="ChannelName" value="{{ $channel->ChannelName }}">
        <!-- Add other form fields here -->
        <button type="submit">Update</button>
    </form>
@endsection
