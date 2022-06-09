<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if($search) {
            $events = Event::where([
                ['title', 'like', "%$search%"]
            ])->get();
        } else {
            $events = Event::all();
        }

        return view('home', [
            'events' => $events,
            'search' => $search
        ]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        // Image upload
        if($image = Event::moveFile($request)) {
            $event->image = $image;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) 
    {
        $event = Event::findOrFail($id);
        $eventOwner = User::where('id', $event->user_id)->first();

        return view('/events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function dashboard()
    {
        $user = auth()->user();
        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }

    public function edit($id)
    {
        $eventEdit = Event::findOrFail($id);
        return view('events.create', ['event' => $eventEdit]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        if($image = Event::moveFile($request)) {
            $data['image'] = $image;
        }

        Event::findOrFail($request->id)->update($data);
        
        return redirect('/dashboard')->with('msg', 'Evento atualizado com sucesso!');
    }

    public function joinEvent($id)
    {
        $user = auth()->user();
        $user->eventsAsParticipants()->attach($id);
        $event = Event::findOrFail($id);
        return redirect('/dashboard')->with('msg', 'Sua presença está confirmada no evento ' . $event->title);
    }
}
