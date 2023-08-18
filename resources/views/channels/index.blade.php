
@extends('layouts.app')

@section('content')
    <h1>Channels</h1>
    <ul>
        @foreach ($channels as $channel)
            <li>{{ $channel->ChannelName }}</li>
        @endforeach
    </ul>
@endsection
