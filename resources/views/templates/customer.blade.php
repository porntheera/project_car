@extends('carcare')

@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Customer Profile</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('test')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Customer Profile
                            </li>
                        </ol>
                    </div>
                </div>

   
    <center>
        <br><img src="dfdfdf/img/logo.gif" alt="Computer man" style="width:400px;height:200px;">
        <h1><FONT COLOR=#0099FF><strong>Customer Profile</strong></FONT></h1>
        <br>
        <div class='menusearch' style="width:400px;height:200px;">
            <form action="{{url('/platesearch')}}" class="form-inline" method="POST" role="form">
                <div class="form-group">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <input type="text" class="form-control" id="plateno" name="plateno" placeholder="ป้ายทะเบียนรถ">
                    <button type="submit" class="btn btn-info">ค้นหา</button>
                </div>
                
            </form>
        </div>
    </center>



@endsection