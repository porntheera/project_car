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
                    <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}">Dashboard</a>
                </li>
                        <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Dashboard
                        </li>
            </ol>
	
			<br><br><form role="form" action="insertdata" method="post"  class="form-horizontal">
            <div class="form-group">
                <label for="License_plate" class="control-label col-md-3">แจ้งข่าวสาร <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class='fa fa-automobile fa-1x'></i></span>
                                
                                <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
            </div>
            </form> 


			<br><div class="row">
                        <div class="col-md-5 col-md-offset-4">
                            <div class="text-right">
                            <p><a href="{{url('test')}}" class="btn btn-sm btn-info">อัพเดท</a></p>
                            </div>
                        </div>
                    </div>



@endsection