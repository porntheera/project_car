@extends('carcare')

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <small><li class="active"><small>Dashboard</small></li></small>
                    </h1>
                        
                </div>
            </div>
            <!-- /.row -->
    <h3 class="page-title no-top" style="color:#808080"><strong>แจ้งข่าวสาร</strong></h3>
            <ol class="breadcrumb">
                
                <li>
                    <i class='fa fa-home fa-1x'></i>  <a href="{{url('test')}}">Dashboard</a>
                </li>
                        <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Dashboard
                        </li>
            </ol>
	

            <div class="row">
                    <div class="col-lg-12">

                        <form role="form">
                            <div class="alert alert-info">
                                <h4 style="color:#330099"><strong>แจ้งข่าวสาร</strong></h4> ไว้สำหรับผู้ดูแลระบบแจ้งข่าวสารให้ลูกค้าได้ทราบข่าวสารทางคาร์แคร์
                            </div>                       
                        </div></form>
            <center>
                <br><img src="dfdfdf/img/logo.gif" alt="Computer man" style="width:400px;height:200px;">
            </center>


			<br><form role="form" action="{{url('newAction')}}" method="post"  class="form-horizontal">
            <div class="form-group">
                <label for="License_plate" class="control-label col-md-3">แจ้งข่าวสาร <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class='fa fa-automobile fa-1x'></i></span>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <textarea class="form-control" rows="3" name="comment" id="comment" required></textarea>
                        </div>
                        
                    </div>
            </div>



            <br><div class="row">
                        <div class="col-md-5 col-md-offset-4">
                            <div class="text-right">
                            <p><button type="submit" class="btn btn-primary">อัพเดต</button></p>
                            </div>
                        </div>
                    </div>
            </form> 

			



@endsection