<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Service;
use App\ServiceTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bookqueue;
use App\Car;

class CCController extends Controller
{
    public function index(){
    	return view('admin.index');
    }
    public function home(){
    	return view('home');
    }
    public function profile(){
    	return view('templates.profile');
    }
     public function service(){
        return view('templates.service');
    }
    public function test(){
        return view('templates.test');
    }
    public function book_queue_wash(){
        $service = Service::where('service_name','ล้างรถ')->get();
        return view('templates.book_queue_wash',compact('service'));
    }
    public function book_queue_wash_insert(){
        $bookqueue = new Bookqueue;
        $bookqueue->user_id = Auth::user()->id;
        $bookqueue->car_id = Auth::car()->id;
        $bookqueue->comment = Request::get('comment');
        $bookqueue->save();
        return Redirect::to('templates.queue');

        // $car = new Car;
        // $car->plateno = Input::get('plateno');
        // $car->brand = Input::get('plateno');
        // $car->user_id = Auth::id();
        // $car->save();
        // return view('templates.queue');
    }
    public function book_queue_wash_save($id){
        $bookqueue = Bookqueue::find($id);
        $bookqueue->car_id = Auth::car()->id;
        $bookqueue->user_id = Auth::user()->id;
        $bookqueue->comment = Request::get('comment');
        $bookqueue->save();
        return Redirect::to('templates.queue');
    }



















    public function checkcar(){
        return view('templates.checkcar');
    }
    public function contact(){
        return view('templates.contact');
    }
    public function customer(){
        return view('templates.customer');
    }
    public function editpassword(){
        return view('templates.editpassword');
    }
    public function editprofile(){
        return view('templates.editprofile');
    }
    public function resume(){
        return view('templates.resume');
    }
    public function promotion(){
        return view('templates.promotion');
    }
    public function checkcartotal(){
        return view('templates.checkcartotal');
    }
    public function apprize(){
        return view('templates.apprize');
    }
    public function queue(){
    	$wash = ServiceTable::all();
    	$washarray = array();
    	$depos = array();
    	$fix = array();

    	foreach ($wash as $key => $w) {
    		if($w->Service->service_name == 'ล้างรถ')
    			array_push($washarray, $w);
    		else if($w->Service->service_name == 'รับ-ฝากรถ')
    			array_push($depos, $w);
    		else if($w->Service->service_name == 'ซ่อมรถ')
    			array_push($fix, $w);
    	}

    	return view('templates.queue',compact('washarray','depos','fix'));
    }
    
    public function list_service()
    {
        $depos_list = ServiceTable::where('service_id',1)
                                    ->orWhere('service_id',3)
                                    ->orWhere('service_id',10)
                                    ->get();
        $washarray_list  = ServiceTable::where('service_id',2)
                                        ->orWhere('service_id',4)
                                        ->orWhere('service_id',5)
                                        ->orWhere('service_id',9)
                                        ->get();
        $fix_list = ServiceTable::where('service_id',6)
                                        ->orWhere('service_id',7)
                                        ->orWhere('service_id',8)
                                        ->get();
        return view('templates.list_service',compact('washarray_list','depos_list','fix_list'));
    }




















}
