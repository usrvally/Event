<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use Illuminate\Http\Request;
use App\Models\Event;
use MercurySeries\Flashy\Flashy;

class EventsContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::simplePaginate(10);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event= new Event;
        return view('events.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        Event::create(['title' => $request->title, 'description' => $request->description]);
        
    //    flash('Evenement creer avec succes !');
        Flashy::message('Evenement creer avec succes !');

       return redirect() -> route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event =Event::findOrFail($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request,Event $event)
    {
        $event->update(['title' => $request->title, 'description' => $request->description]);
  
        flashy(sprintf("Evenement '%s' modifie avec succes", $event->title));
       
        return redirect() -> route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        flashy(sprintf("Evenement '%s' supprime avec succes", $event->title));
        return redirect()->route('home');
    }
}
