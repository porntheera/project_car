<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Service;
use App\ServiceTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bookqueue;
use App\Car;
use App\Providenew;
use App\UserDetail;

use Carbon\Carbon;
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
        $data = Providenew::orderBy('id', 'asc')->get();
        return view('templates.test',compact('data'));
    }
    public function book_queue_deposit(){
        $service = Service::where('service_name','รับ-ฝากรถ')->get();
        return view('templates.book_queue_deposit',compact('service'));
    }
    public function book_queue_wash(){
        $service = Service::where('service_name','ล้างรถ')->get();
        return view('templates.book_queue_wash',compact('service'));
    }
    public function book_queue_repair(){
        $service = Service::where('service_name',':ซ่อมรถ')->get();
        return view('templates.book_queue_wash',compact('service'));
    }
    public function book_queue_wash_insert(Request $request){
         $bookqueue = new Bookqueue;
         $bookqueue->user_id = $request->get('user_id');
         $bookqueue->car_id = $request->get('plateno');
         $bookqueue->service_time = $this->ConvertDate($request->get('day'),$request->get('time'));
         $bookqueue->comment =  $request->get('comment');
         $bookqueue->save();
         if(count($request->get('service'))){
            foreach ($request->get('service') as $key => $service) {
                $servicetable = new ServiceTable;
                $servicetable->bookqueue_id = $bookqueue->id;
                $servicetable->service_id = $service;
                $servicetable->save();
            }
            $bookqueue->Service()->attach($request->get('service'));
         }
        // $services = Input::get('services');
        // $bookqueue->save();
        // $bookqueue->services()->attach($services);
        // return redirect::to('templates.queue');



        // $car = new Car;
        // $car->plateno = Input::get('plateno');
        // $car->brand = Input::get('plateno');
        // $car->user_id = Auth::id();
        // $car->save();
         return Redirect('/queue');
    }
   
    public function book_queue_wash_save($id){
        // $service_table = ServiceTable::find($id);
        // // $service_table->bookqueue_id = Auth::bookqueue()->id;
        // // $service_table->service_id = Auth::service()->id
        // $service_table->save();
        // $service_table->users()->sync($users);
        // $service_table->cars()->sync($cars);
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
        $depos_list = ServiceTable::where('service_id',1)    // daily
                                    ->orWhere('service_id',2) // monthy
                                    ->get();
        $washarray_list  = ServiceTable::where('service_id',3)
                                        ->orWhere('service_id',4)
                                        ->orWhere('service_id',5)
                                        ->orWhere('service_id',6)
                                        ->orWhere('service_id',7)
                                        ->get();
        $fix_list = ServiceTable::where('service_id',8)
                                        ->orWhere('service_id',8)
                                        ->get();
        return view('templates.list_service',compact('washarray_list','depos_list','fix_list'));
    }

    public function searchPhone(Request $request){
        $phone = $request->get('phonenumber');
        $userdetail = UserDetail::where('tel',$phone)->get();
        if(!count($userdetail)){
            return response()->json(null); 
        }
        $user = $userdetail[0];
        $userdetail[0]->User->Car;
        return response()->json(['data'=> $user]);
    }

    public function plate_search() {
        $input = Input::get('plateno');
        $data = Car::where('plateno',$input)->get();

        $service = ServiceTable::all();
        $datas = array();

        foreach($service as $s) {
            if($s->Bookqueue->Car->plateno == $input) {
                array_push($datas, $s->Service);
                echo $s->Service->service_name;
            }
                
        }
        return view('templates.resume',compact('data','datas'));
    }

    public function News() {
        $comment = Input::get('comment');
        $new = new Providenew;
        $new->comment = $comment;
        $new->save();
        return redirect('test');
    }

    private function ConvertDate($date,$time){
        $split = explode(':',$time);
        if(count($split) != 2){
            $split = array();
            $split[0] = 0;
            $split[1] = 0;
        }
        $end_time = Carbon::parse($date)
            ->startOfDay()
            ->addHours($split[0])
            ->addMinutes($split[1])
            ->toDateTimeString();
        return $end_time;
    }
}
