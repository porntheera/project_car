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

<h3 class="page-title no-top" style="color:#808080"><strong>แก้ไขรหัสผ่าน</strong></h3>

<div class="row">
    <div class="col-md-6 col-md-offset-6">
<div class="text-right">
<a href="{{url('editpassword')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> เปลี่ยนรหัสผ่าน</a>
<a href="{{url('editprofile')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</a>

</div>
</div>
</div>

  

<br>
<form method="post">
<div>
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">รหัสผ่านเดิม</h4></div>
<input type="password" class="form-control" value="" name="old_password" id="old_password">
</div>

<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">รหัสผ่านใหม่</h4></div>
<input type="password" class="form-control" value="" name="new_password" id="new_password">
</div>

<div class="form-group">
<div align=Left><br><h4 style="color:Grey  ;">รหัสผ่านใหม่อีกครั้ง</h4></div>
<input type="password"  class="form-control" name="retype_new_password" id="retype_new_password">
</div>
<input type="hidden" name="donthackme_please" value="0b36ff7234903efc7aeb125ca308f4d2"/>

<br><button type="button" class="btn btn-sm btn-warning"> Edit </button>
</div>
</div>
</div>
</form>  

@endsection