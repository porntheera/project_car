@extends('carcare')

@section('content')
<div class="row">
<div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Check car</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}"> Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-automobile fa-1x"></i> Check car
                            </li>


    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="text-right">
                <div class='menusearch'>
                      <form action='/search' class='searchform' method='get'>
                        <input class='searchfield' id='q' name='q' onblur='if(this.value==&apos;&apos;)this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;' type='text' value=''/>
                        <input class='searchbutton' src='http://1.bp.blogspot.com/-N_4TWVUmXv4/UDdKJf5NwCI/AAAAAAAAIgY/AGrKXgwkrTo/s1600/tombolcari.gif' style='cursor:pointer;vertical-align:top' type='image' value='Go'/>
                      </form>
                    </div>
            </div>
        </div>
    </div>
                      

                       </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form">
                            <div class="alert alert-info">
                                <h4 style="color:#330099"><strong>ตรวจสอบสถานะรถ</strong></h4> ไว้สำหรับลูกค้าที่ต้องการจะตรวจสอบรถของตัวเองว่าให้บริการถึงไหนแล้ว
                            </div>                       
                        </div></form>



  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


 <br><br><br><br><br><br>
        <form role="form" action="insertdata" method="post"  class="form-horizontal">
            <div class="form-group">
                <label for="License_plate" class="control-label col-md-3">ทะเบียนรถ <span class="text-danger">*</span></label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class='fa fa-automobile fa-1x'></i></span>
                                <input type="text" name="License_plate" id="License_plate" value="" class="form-control">
                        </div>
                    </div>
            </div>

<br><div class="form-group">
                <label for="list" class="control-label col-md-3">สถานะรถ<span class="text-danger">*</span></label>
                    <div class="col-md-4">
                        <div class="form-group">
                                <label class="checkbox-inline">
                                    <br><input type="checkbox" name="chkbox_deposit" value="รับ-ฝากรถ"><strong>ยังไม่ได้ใช้บริการ</strong></br>
                                    
                                </label>
                                        
                               <br><label class="checkbox-inline">
                                    <br><input type="checkbox" name="chkbox_clean" value="ล้างรถ"><strong>กำลังใช้บริการ</strong>
                                        
                                </label>
                                    <br><br>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="chkbox_fix" value="ซ่อมรถ"><strong>ใช้บริการเสร็จแล้ว</strong>
                                        </label>                                     
                        </div>
                    </div>
            </div>

            <br><div class="form-group">
                    <label for="comment" class="control-label col-md-3">แสดงความคิดเห็น<span class="text-danger">*</span></label>
                        <div class="col-md-4">
                            <input type="text" name="comment" id="comment" value="" class="form-control">
                        </div>
                </div>

    </div>

    <hr>
        
                <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="text-right">
                <p><a href="{{url('checkcartotal')}}" class="btn btn-info">บันทึก</a></p>
            </div>
        </div>
    </div>
    	



  </div>
</div>

               
                <!-- /.row -->
@endsection