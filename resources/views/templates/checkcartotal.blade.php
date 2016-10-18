@extends('carcare')

@section('content')

<div class="row">
<div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Check car</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('test')}}"> Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-automobile fa-1x"></i> Check car
                            </li>
                            </div>
    </div>

<div class="row">
                    <div class="col-lg-12">

                        <form role="form">
                            <div class="alert alert-info">
                                <h4 style="color:#330099"><strong>ตรวจสอบสถานะรถ</strong></h4> ไว้สำหรับลูกค้าที่ต้องการจะตรวจสอบรถของตัวเองว่าให้บริการถึงไหนแล้ว
                            </div>                       
                        </div></form>    
                    </div>

<div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped"><center>
                                <thead>
                                    <tr class="info">
                                    
                                        <th>ทะเบียน</th>
                                        <th>สถานะ</th>
                                        <th>แสดงความคิดเห็น</th>
                                        <th>อัพเดท</th>
                                      
                                    </tr></center>
                                </thead>
                               <tbody>
                                <tr>
                                       <tr>
                                        <td>ชช1563</td>
                                        <td>ยังไม่ได้ใช้บริการ</td>
                                        <td>กำลังรอคิว</td>
                                       <td><a href="{{url('checkcar')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> แก้ไข</a></td>
                                        
                                        
                                    </tr> 
                                    <tr>        
                                        <tr>
                                        <td>กอ670</td>
                                        <td>กำลังใช้บริการ</td>
                                        <td>อีก 20 นาทีถึงใช้บริการเสร็จ</td>
                                        <td><a href="{{url('checkcar')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> แก้ไข</a>
</td>
                                        
                                    </tr> 
                                    <tr>
                                       <tr>
                                        <td>สน8000</td>
                                        <td>ใช้บริการเสร็จแล้ว</td>
                                        <td>สามารถรับรถของท่านได้เลย</td>
                                        <td><a href="{{url('checkcar')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> แก้ไข</a></td>
                                        
                                        </tr> 
                                    </tr> </tbody>
                            </table>  
                        </div>
                    
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
      
     	</div>
</div>
    </div>
                      



@endsection