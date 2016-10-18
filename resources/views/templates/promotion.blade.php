@extends('carcare')

@section('content')

<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Promotion</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('test')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Promotion
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="page-header">
            <div class="alert alert-warning">
                    <h4 style="color:#FF6666"><strong>โปรโมชั่นพิเศษ!</strong></h4> รถคันไหนใช้บริการล้างรถครบ 3 ครั้งภายในหนึ่งเดือน
                    รับสิทธิพิเศษทันที!! ใช้บริการล้างรถฟรีหนึ่งครั้ง
                </div></div>
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ตารางจัดโปรโมชั่น
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="success">
                                            <th>ลำดับ</th>
                                            <th>ทะเบียน</th>
                                            <th>จำนวนใช้บริการ</th>
                                            <th>อนุมัติ</th>
                                            <th>สถานะ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="info">
                                            <td>1</td>
                                            <td>กอ670</td>
                                            <td>4</td>
                                            <td><label><input type="checkbox" value=""></label></td>                                
                                            <td>ลูกค้า</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>2</td>
                                            <td>ชช1563</td>
                                            <td>3</td>
                                            <td><label><input type="checkbox" value=""></label></td>                                            
                                            <td>ลูกค้า</td>
                                        </tr>
                                        <tr class="danger">  
                                            <td>3</td>
                                            <td>ณอ455</td>
                                            <td>1</td>
                                            <td><label><input type="checkbox" value=""></label></td>                                           
                                            <td>ลูกค้า</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
<center><ul class="pagination">
        <li>
            <a href="javascript;"><strong>1</strong></a>
        </li>
        <li>
            <a href="/statement/index/20?" data-ci-pagination-page="2">2</a>
        </li>
        <li>
            <a href="/statement/index/40?" data-ci-pagination-page="3">3</a>
        </li>
        <li>
            <a href="/statement/index/20?" data-ci-pagination-page="2" rel="next">&gt;</a>
        </li>
        <li>
            <a href="/statement/index/420?" data-ci-pagination-page="10">หน้าสุดท้าย</a>
        </li>
    </ul> </center> 

@endsection