@extends('carcare')

@section('content')

 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                    <small><li class="active"><small>Queue service</small></li></small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

<h3 class="page-title no-top" style="color:#808080"><strong>แจ้งการจองคิว</strong></h3>


<ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Queue service
                            </li>
                        </ol>

<br><br>
<form method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="form-group">
<label for="License_plate" class="control-label col-md-3">ทะเบียนรถ <span class="text-danger">*</span></label>
<div class="col-md-3">
<div class="input-group">
<span class="input-group-addon"><i class='fa fa-automobile fa-1x'></i></span>
<input type="text" name="License_plate" id="License_plate" value="" class="form-control">
</div>
</div>
</div></form>

<form action="insertname" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="form-group">
<input name="_token" value="<?php echo csrf_token(); ?>">
<label for="order" class="control-label col-md-3">ยี่ห้อรถยนต์ <span class="text-danger">*</span></label>
<div class="col-md-3">
<input type="text" name="order" id="order" value="" class="form-control">
</div>
</div> 
</form>



<div class="form-group">
<label for="list" class="control-label col-md-3">รายการที่ใช้บริการ<span class="text-danger">*</span></label>
<div class="col-md-3">
    <div class="form-group">
                                
                                <label class="checkbox-inline">
                                    <input type="checkbox"><strong>รับ-ฝากรถ</strong>
                                </label>

                               <br><br><input type="date" name="" id="input" class="form-control" value="" required="required" title="">

                               <br><input type="time" name="" id="input" class="form-control" value="" required="required" title="">

<label class="checkbox-inline">
                            <br><input type="checkbox"><strong>ล้างรถ</strong>

<br><br><form action="PageCheckbox2.php" method="post" name="form1" ><strong><i class="fa fa-edit"></i>
ประเภทล้างรถ</strong>
                    
                              <label class="checkbox-inline">
                                    <input type="checkbox">ล้างอัดฉีด
                                    <br><input type="checkbox">ล้างสีดูดฝุ่น
                                    <br><input type="checkbox">ล้างเคลือบสี
                                    <br><input type="checkbox">ล้างเคลือบสี+ขัดสี
                                    <br><input type="checkbox">ล้างเคลือบสี+เคลือบเงา
                                    <br><input type="checkbox">ล้างห้องเครื่อง
                                </label>
                                </label>
 <br><br><label class="checkbox-inline">
                                    <input type="checkbox"><strong>ซ่อมรถ</strong>
                                </label>
 
<div class="form-group">
    <div class="col-md-12">
        <br>
                                <textarea class="form-control" rows="3"></textarea>
                            </div></div>

                                  
</div>

</div>
</div>
 

<div class="row">
                    <div class="col-lg-6">

                        <form role="form">
  
</div>
</div></form>
    


<div class="form-group">
<label for="name" class="control-label col-md-3">รหัสลูกค้า <span class="text-danger" >*</span></label>
<div class="col-md-3">
<input type="text" name="name" id="name" value="" class="form-control" placeholder="เบอร์โทรศัพท์">
</div>
</div>


<div class="form-group">
<label for="date_time" class="control-label col-md-3">วันและเวลาที่ใช้บริการ <span class="text-danger">*</span></label>
<div class="col-md-3">
<input type="text" name="date_time" id="date_time" value="" class="form-control">
</div>
</div

<br><div class="form-group">
<label for="comment" class="control-label col-md-3">แสดงความคิดเห็น<span class="text-danger">*</span></label>
<div class="col-md-3">
<input type="text" name="comment" id="comment" value="" class="form-control">
</div>
</div



<br>
<hr>
<div class="row">
<div class="col-md-4 col-md-offset-3">
<input type="hidden" name="donthackme_please" value="645e78cc03f0ec6abb99faf6e0ecfaf0"/>

<button href="{{url('queue')}}" type="submit" class="btn btn-danger">บันทึก</button></div>
</div>
</form>  
</div>
</div>


@endsection  