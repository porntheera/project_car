@extends('carcare')

@section('content')
<!-- Page Heading -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Dashboard</small>
                        </h1>
                    
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
</div>
<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                       <i class='fa fa-cab fa-5x'></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        
                                        <div>Service</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class='fa fa-book fa-5x'></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>List Service</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bus fa-5x"></i>       
                                </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Check Car</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class='fa fa-phone fa-5x'></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Contact</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            </div>
                        </div>
 </div>


                  <br><div class="page-header">
                    <h3 style="color:#808080"><strong>แจ้งข่าวสาร</strong></h3>
                    
                </div>
                
                    <div class="col-sm-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Service</h4>
                                <p class="list-group-item-text">จะมีบริการทั้งหมด 3 อย่าง รับ-ฝากรถ, ล้างรถ และซ่อมรถ</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Queue service</h4>
                                <p class="list-group-item-text">ดูลำดับคิวรถของลูกค้าที่จะเข้ามาใช้บริการ</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">List service</h4>
                                <p class="list-group-item-text">รายการที่ใช้บริการทั้งหมดของลูกค้า</p>
                            </a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
               
                <div class="row">
                    <div class="col-sm-7">                        
                            <div class="well">
                    <p>
                        ระบบคาร์แคร์ยังไม่เปิดใช้บริการ ช่วงในช่วงปริบปรุงเว็บไซร์ จะใช้บริการได้อีก 1/1/2560 
                        ขออภัยในความไม่สะดวก </p>
                            </div>
                    </div>
                   <div class="row">
                        <div class="col-md-7 col-md-offset-4">
                            <div class="text-right">
                            <p><a href="{{url('apprize')}}" class="btn btn-primary">อัพเดท</a></p>
                            <p><button class="w3-btn w3-pink">Pink</button></p>
                            </div>
                        </div>
                    </div>
                </div>


@endsection