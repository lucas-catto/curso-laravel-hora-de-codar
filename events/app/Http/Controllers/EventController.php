<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search)
        {
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        }
        else {
            $events = Event::all();
        }

        return view('welcome', compact('events', 'search'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;

        // Espelhando as propriedades do Request para o Objeto de Event
        $event->title       = $request->title;
        $event->date        = $request->date;
        $event->city        = $request->city;
        $event->private     = $request->private;
        $event->description = $request->description;
        $event->items       = $request->items;

        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
            $request_image = $request->image;

            $extension = $request_image->extension();

            $image_name = md5($request_image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            // path, name
            $request_image->move(public_path('/assets/img/events/'), $image_name);

            $event->image = $image_name;
        }

        $event->save();

        return redirect('/')->with('message', 'Evento criado com Sucesso!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', compact('event'));
    }
}
