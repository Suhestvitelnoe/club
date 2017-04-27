<?php
namespace App\Http\Controllers\Cabinet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;



use App\Event;
use Auth;

class EventController extends Controller
{
   public function getEvents(){
	   $all=Event::find('id');
	  return view ("events.events")->with('all',$all);
   }
   public function getIndex(){
	   $events=Event::all();
	   return view ("events.index")->with('events',$events);
   }
   public function getShow($id){
	   $event=Event::find($id);
	   return view ("events.show")->with('event',$event);
   }
}
