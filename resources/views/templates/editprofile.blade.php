@extends('carcare')

@section('content')

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                    <small><li class="active"><small>Profile</small></li></small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

<h3 class="page-title no-top" style="color:#808080"><strong>แก้ไขข้อมูลส่วนตัว</strong></h3>

<div class="row">
    <div class="col-md-6 col-md-offset-6">
<div class="text-right">
<a href="{{url('editpassword')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> เปลี่ยนรหัสผ่าน</a>
<a href="{{url('editprofile')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</a>

</div>
</div>
</div>



<form method="post">
<div>
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">ชื่อจริง:</h4></div>
<input type="text" class="form-control" value="" name="fristname" id="fristname">
</div>

<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">นามสกุล:</h4></div>
<input type="text" class="form-control" value="" name="lastname" id="lastname">
</div>

<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">เบอร์โทรศัพท์:</h4></div>
<input type="text"  class="form-control" name="phonenumber" id="phonenumber">
</div>

<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">อีเมล:</h4></div>
<input type="text"  class="form-control" name="email" id="email">
</div>

<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">สถานะ:</h4></div>
<select name="bank" id="bank" class="form-control">
<option value="">สถานะ</option>
<option value="1" selected="selected">ผู้ดูแลระบบ</option>
<option value="2">ลูกค้า</option>
</select>

<br>
 <div class="form-group">
                <div align=Left><br><h4 style="color:Grey  ;">เลือกรูปภาพ:</h4></div>
                    <input type="file">
                        </div>

</div
<input type="hidden" name="donthackme_please" value="0b36ff7234903efc7aeb125ca308f4d2"/>
<br><button type="button"  class="btn btn-sm btn-warning" > Edit </button>


</div>
</div>
</div>
</form>  



@endsection