@extends('carcare')

@section('content')

<div class="row">
    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Contact</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}"> Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-automobile fa-1x"></i> Contact
                            </li>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <form role="form">

                            <div class="form-group">
                            <h3 style="color:#808080"><strong>ติดต่อสื่อสารกับลูกค้า</strong></h3>
                            </div>
                        </div>
                    </form>
                </div>
               

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
 
<br><div class="row">
                    <div class="col-lg-11">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="info">
                                        <th>ลำดับ</th>
                                        <th>ทะเบียนรถ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>รายละเอียด</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>กอ670</td>
                                        <td>ลูกน้ำ</td>
                                        <td>123456789</td>
                                        <th>ฝากรถเดือนเท่าไหร่</th>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ชช1563</td>
                                        <td>พรธีรา</td>
                                        <td>123456789</td>
                                        <th>ล้างรถราคาเท่าไหร่</th>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>123456789</td>
                                        <th>test</th>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>123456789</td>
                                        <th>test</th>
                                    </tr>
                                    
                                </tbody>
                            </center></table>  
                        </div>
                    </div> 
                </div>

            </div>
            <!-- Contact Details Column -->
             <div class="col-md-4">
                <h3>รายละเอียดการติดต่อ</h3>
                <p>
                    5 ซ.1 ถ.ปาดังเบซาร์<br>ต.ปาดังเบซาร์ อ.สะเดา จ.สงขลา 902ภ0<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 081-5991349</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">Looknum@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

 

 <br><br><br><br><br><br><center><ul class="pagination">
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