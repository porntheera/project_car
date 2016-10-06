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

<h3 class="page-title no-top" style="color:#808080"><strong>ข้อมูลส่วนตัว</strong></h3>
<div class="row">
	<div class="col-md-3">

                             <br><div class="text-center">
                                <img src="/project/profilePicture/5635512141.jpg" class="bordered" width="150" height="150"><br><br>
                                    <a href="/project/profile/updateProfile" class="btn btn-success btn-sm">Edit
                                        Profile</a>
                            </div>
     <div class="col-sm-12">
                          
		<br><br><div class="row">
            	<label class="col-sm-3">Name: </label>
            		<div class="col-sm-9">
              			{{ Auth::user()->Detail->name }} <br/>        
              		</div>
        	</div>


		<div class="row">
            	<label class="col-sm-3">Tel: </label>
            		<div class="col-sm-9">
              			{{ Auth::user()->Detail->tel }} 
              		</div>
        	</div>

        <div class="row">
            	<label class="col-sm-3">Email: </label>
            		<div class="col-sm-9">
              			{{ Auth::user()->email }}  
              		</div>
        	</div>

        <div class="row">
            	<label class="col-sm-3">Status: </label>
            		<div class="col-sm-9">
              			{{ Auth::user()->type }} 
              		</div>
        	</div>

        <div class="row">
            	<label class="col-sm-3">Address: </label>
            		<div class="col-sm-9">
              			{{ Auth::user()->Detail->address }} 
              		</div>
        	</div>

       <!--  <div class="row">
            	<label class="col-sm-3">Photo: </label>
            		<div class="col-sm-9">
              			{{ Auth::user()->Detail->photo }}
              		</div>
        	</div> -->

	</div></div>
        	
    <div class="col-md-9">
		<div class="text-right">
			<a href="{{url('editpassword')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> เปลี่ยนรหัสผ่าน</a>
			<a href="{{url('editprofile')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</a>
		</div>
	</div>
</div>


@endsection