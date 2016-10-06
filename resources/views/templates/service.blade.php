@extends('carcare')

@section('content')

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Service</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Service
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Car Care System</h2>
                        <h4>Car Care System On Android Application (ระบบคาร์แคร์ผ่านแอพแอนดรอยด์) 
                            เป็นโปรแกรมควบคุมระบบคาร์แคร์ไว้ใช้สำหรับแอดมิน ที่เอาไว้บริหารการจัดการในเรื่องของธุรกิจคาร์แคร์ ซึ่งโปรแกรม สามารถรองรับธุรกิจคาร์แคร์ได้หลากหลายรูปแบบไม่ว่าจะเป็นในเรื่องของการให้บริการ รับ-ฝากรถ ล้างรถ ซ่อมรถ ซึ่งระบบคาร์แคร์จะควบคุมทุกอย่างที่ลูกค้าต้องการใช้บริการ.<h4>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i><strong> ล้างรถ</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="text-left">
                                <strong>- ล้างอีดฉีด</strong>
                                <br><strong>- ล้างสีดูดฝุ่น</strong>  
                                <br><strong>- ล้างเคลือบสี</strong>
                                <br><strong>- ล้างเคลือบสี+ขัดสี</strong>
                                <br><strong>- ล้างเคลือบสี+เคลือบเงา</strong>
                                <br><strong>- ล้างห้องเครื่อง</strong>
                                <strong>- รายเดือน</strong>
                                <br><strong>- รายวัน</strong>                            
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i><strong> รับ-ฝากรถ</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="text-left">
                                <strong>- รายเดือน</strong>
                                <br><strong>- รายวัน</strong>   
                            </div>
                            </div>
                        </div>
                    </div>

                   


                    <div class="col-lg-4 text-center">
                       <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i><strong> ซ่อมรถ</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="text-left">
                                <strong>- ซ่อมทุกรายการ</strong>
                            </div>
                        </div>
                    </div>
                </div>
@endsection