<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(3);
        return view('pages.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'event_image' => 'mimetypes:video/mp4,image/jpeg,image/png,image/jpeg|nullable|max:99999',
        ]);

        if($request->hasFile('event_image')){
            $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('event_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('event_image')->storeAs('public/event_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = null;
        }
            


        $event = new Event;
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->user_id= auth()->user()->id;
        $event->event_image = $fileNameToStore;
        $event->save();

        return redirect('/')->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::find($id);
        return view('events.show')->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);

        //check for correct user
        if(auth()->user()->id !== $events->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        return view('events.edit')->with('events', $events);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        
        if($request->hasFile('event_image')){
            //get file name with extension
            $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
            //get just file name
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just exyension
            $extension = $request->file('event_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('event_image')->storeAs('public/event_images', $fileNameToStore);
        }
        //create post

        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        if($request->hasFile('event_image')){
            $event->event_image = $fileNameToStore;
        }
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/')->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::find($id);
        
        if(auth()->user()->id !== $events->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        if($events->event_image != 'noimage.jpg'){
            //delete image from update
            Storage::delete('public/event_image/'.$events->event_image);

        }
        $events->delete();
        return redirect('/')->with('success', 'Event Deleted');
    }
}
