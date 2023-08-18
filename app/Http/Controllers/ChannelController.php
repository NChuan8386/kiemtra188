<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Channel;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();
        return view('channels.index', compact('channels'));
    }

    public function create()
    {
        return view('channels.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ChannelName' => 'required',
            'Description' => 'required',
            'SubscribersCount' => 'required|integer',
            'URL' => 'required|url',
        ]);

        Channel::create($data);
        return redirect()->route('channels.index');
    }

    public function edit(Channel $channel)
    {
        return view('channels.edit', compact('channel'));
    }

    public function update(Request $request, Channel $channel)
    {
        $data = $request->validate([
            'ChannelName' => 'required',
            'Description' => 'required',
            'SubscribersCount' => 'required|integer',
            'URL' => 'required|url',
        ]);

        $channel->update($data);
        return redirect()->route('channels.index');
    }

    public function destroy(Channel $channel)
    {
        $channel->delete();
        return redirect()->route('channels.index');
    }
}




