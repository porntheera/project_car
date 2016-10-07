@extends('carcare')

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <small><li class="active"><small>Queue service</small></li></small>
                    </h1>
                        
                </div>
            </div>

    <h3 class="page-title no-top" style="color:#808080"><strong>แจ้งการจองคิว</strong></h3>
            <ol class="breadcrumb">
            
                <li>
                    <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}">Dashboard</a>
                </li>
                        <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Queue service
                        </li>
            </ol>
            
    <br><br>
    <form action="bookqueue/insert" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="License_plate" class="control-label col-md-3">ทะเบียนรถ <span class="text-danger">*</span></label>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class='fa fa-automobile fa-1x'></i></span>
                            <input type="text" name="plateno" id="plateno" value="" class="form-control">
                    </div>
                </div>
        </div>
        <div class="form-group">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <label for="order" class="control-label col-md-3">ยี่ห้อรถยนต์ <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <input type="text" name="brand" id="brand" value="" class="form-control">
                    </div>
        </div>
        <div class="form-group">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <label for="order" class="control-label col-md-3">ล้างรถ <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        @foreach($service as $s)
                            <input type="checkbox" name="service" id="service" value="{{$s->id}}"> {{$s->service_detail}} <br>
                        @endforeach
                    </div>
        </div>
        <div class="form-group">
                <label for="name" class="control-label col-md-3">รหัสลูกค้า <span class="text-danger" >*</span></label>
                    <div class="col-md-3">
                        <input type="text" name="user" id="user" value="" class="form-control" placeholder="เบอร์โทรศัพท์">
                    </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-3">ชื่อลูกค้า <span class="text-danger" >*</span></label>
                <div class="col-md-3">
                    <input type="text" name="name" id="name" value="" class="form-control" placeholder="">
                </div>
        </div>
        <div class="form-group">
            <label for="date_time" class="control-label col-md-3">วันและเวลาที่ใช้บริการ <span class="text-danger">*</span></label>
                <div class="col-md-3">
                    <input type="date" name="day" id="day" class="form-control" value="" required="required" title="">
                    <br><input type="time" name="time" id="time" class="form-control" value="" required="required" title="">
                </div>
        </div>
        <div class="form-group">
            <label for="comment" class="control-label col-md-3">แสดงความคิดเห็น<span class="text-danger">*</span></label>
                <div class="col-md-3">
                    <input type="text" name="comment" id="comment" value="" class="form-control">
                </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <input type="hidden" name="donthackme_please" value="645e78cc03f0ec6abb99faf6e0ecfaf0"/>
                    <button type="submit" class="btn btn-danger">บันทึก</button> 
             </div>
        </div>         
    </form>


@endsection