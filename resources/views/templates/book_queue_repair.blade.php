@extends('carcare')

@section('content')

<script> 
 
$(document).ready(function(){
  var i = 0;
    $("#clean_car").click(function(){
        if(i == 0){
                 $(".checkbox-inline").removeClass("hide");
                 i = 1;
        }
        if(i == 1){

                (".checkbox-inline").addClass("hide");
                i = 0;
        }
       
    });
   
    $('#phonenumber').on('click',function(){
        var data = $('#phoneno').val();
        $.ajax({
                type: 'GET',
                url: '{{ url('search/phone') }}',
                data: { phonenumber : data },
                dataType: 'json',
                success: function(result) {
                    var $plateno = $('#plateno');
                    $plateno.empty();
                    $('#plate').empty();
                    for(var i = 0; i < result.data.user.car.length; i++){
                        $plateno.append("<option id='#plate' value="+ result.data.user.car[i].id +">"+ result.data.user.car[i].plateno +"</option>")
                    }
                    $('#customer_name').val(result.data.name);
                    $('#user_id').val(result.data.user.id);
                }
        });
    });

});
</script>
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
                    <i class='fa fa-home fa-1x'></i>  <a href="{{url('test')}}">Dashboard</a>
                </li>
                        <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Queue service
                        </li>
            </ol>

    <br><br>
    <form action="bookqueue/insert" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="License_plate" class="control-label col-md-3">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                <div class="col-md-3">
                    <div class="input-group">
                            <input type="text" name="phoneno" id="phoneno" value="" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button" id="phonenumber"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                    </div>
                </div>
        </div>
        <input type="hidden" name="user_id" id="user_id" value="">

        <div class="form-group">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <label for="order" class="control-label col-md-3">ทะเบียนรถ <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                            <select name="plateno" id="plateno" class="form-control">
                                <option id="plate" value="" selected="selected"></option>
                            </select>
                    </div>
        </div>

        <div class="form-group">
            <label for="name" class="control-label col-md-3">ชื่อลูกค้า <span class="text-danger" >*</span></label>
                <div class="col-md-3">
                    <input type="text" name="customer_name" id="customer_name" class="form-control" disabled>
                </div>
        </div>

        <div class="form-group">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <label for="order" class="control-label col-md-3">รถ <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        @foreach($service as $s)
                            <input type="checkbox" name="service[]" id="service" value="{{$s->id}}"> {{$s->service_detail}} <br>
                        @endforeach
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
<!--         <form role="form" action="insertdata" method="post"  class="form-horizontal">
            <div class="form-group">
                <label for="License_plate" class="control-label col-md-3">ทะเบียนรถ <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class='fa fa-automobile fa-1x'></i></span>
                                <input type="text" name="License_plate" id="License_plate" value="" class="form-control">
                        </div>
                    </div>
            </div>
            
            <div class="form-group">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 
                    <label for="order" class="control-label col-md-3">ยี่ห้อรถยนต์ <span class="text-danger">*</span></label>
                        <div class="col-md-3">
                            <input type="text" name="order" id="order" value="" class="form-control">
                        </div>
            </div>  -->

            <!-- <div class="form-group">
                <label for="list" class="control-label col-md-3">รายการที่ใช้บริการ<span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <div class="form-group">
                                        
                               <br><label class="checkbox-inline">
                            
                                        <br><br><form action="PageCheckbox2.php" method="post" name="form1" >
                                        @foreach($service as $s)
                                            <br><input type="checkbox" name="{{$s->id}}" value="{{$s->detail}}">ล้างสีดูดฝุ่น
                                        @endforeach
                                        <strong><i class="fa fa-edit"></i>ประเภทล้างรถ</strong>
                                                <br><label class="checkbox-inline hide">
                                                <input type="checkbox" name="ckbox1" value="ล้างอัดฉีด">ล้างอัดฉีด
                                                <br><input type="checkbox" name="ckbox2" value="ล้างสีดูดฝุ่น">ล้างสีดูดฝุ่น
                                                <br><input type="checkbox" name="ckbox3" value="ล้างเคลือบสี">ล้างเคลือบสี
                                                <br><input type="checkbox" name="ckbox4" value="ล้างเคลือบสี+ขัดสี">ล้างเคลือบสี+ขัดสี
                                                <br><input type="checkbox" name="ckbox5" value="ล้างเคลือบสี+เคลือบเงา">ล้างเคลือบสี+เคลือบเงา
                                                <br><input type="checkbox" name="ckbox6" value="ล้างห้องเครื่อง">ล้างห้องเครื่อง
                                    </label>                                 
                        </div>
                    </div>
            </div>
 
            <div class="form-group">
                <label for="name" class="control-label col-md-3">รหัสลูกค้า <span class="text-danger" >*</span></label>
                    <div class="col-md-3">
                        <input type="text" name="name1" id="name1" value="" class="form-control" placeholder="เบอร์โทรศัพท์">
                    </div>
            </div>

            <div class="form-group">
                <label for="name" class="control-label col-md-3">ชื่อลูกค้า <span class="text-danger" >*</span></label>
                    <div class="col-md-3">
                        <input type="text" name="na" id="na" value="" class="form-control" placeholder="">
                    </div>
            </div>

            <div class="form-group">
                <label for="date_time" class="control-label col-md-3">วันและเวลาที่ใช้บริการ <span class="text-danger">*</span></label>
                    <div class="col-md-3">
                        <input type="date" name="day" id="day" class="form-control" value="" required="required" title="">
                            <br><input type="time" name="time" id="time" class="form-control" value="" required="required" title="">
                       
                    </div>
            </div> -->

           <!--  <br><div class="form-group">
                    <label for="comment" class="control-label col-md-3">แสดงความคิดเห็น<span class="text-danger">*</span></label>
                        <div class="col-md-3">
                            <input type="text" name="comment" id="comment" value="" class="form-control">
                        </div>
                </div>

            <hr>
                <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                        <input type="hidden" name="donthackme_please" value="645e78cc03f0ec6abb99faf6e0ecfaf0"/>
                            <button href="{{url('queue')}}" type="submit" class="btn btn-danger">บันทึก</button> 
                             <a href="{{url('queue')}}"  class="btn btn-danger">บันทึก</a>
                        </div>
                    </div> -->
                </div>
        </form>  
@endsection