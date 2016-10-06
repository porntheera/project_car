@extends('carcare')

@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Queue service</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Queue service
                            </li>
 
            <div class="text-right">
                <div class='menusearch'>
                      <form action='/search' class='searchform' method='get'>
                        <input class='searchfield' id='q' name='q' onblur='if(this.value==&apos;&apos;)this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;' type='text' value=''/>
                        <input class='searchbutton' src='http://1.bp.blogspot.com/-N_4TWVUmXv4/UDdKJf5NwCI/AAAAAAAAIgY/AGrKXgwkrTo/s1600/tombolcari.gif' style='cursor:pointer;vertical-align:top' type='image' value='Go'/>
                      </form>
                    </div>
            </div>
      
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                          <div class="form-group">
                                <h3 style="color:#808080"><strong>คิวที่ใช้บริการ</strong></h3>
                            </div>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">รับ-ฝากรถ</a></li>
    <li><a data-toggle="tab" href="#menu1">ล้างรถ</a></li>
    <li><a data-toggle="tab" href="#menu2">ซ่อมรถ</a></li>
    
    

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br><h3 style="color:#8B7D7B"><strong>รับ-ฝากรถ</strong></h3>
                        <div class="row">
                            <div class="col-md-7 col-md-offset-5">
                                <div class="text-right">
                                    <p><a href="{{url('book_queue')}}" class="btn btn-success">จองคิว</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    
                                    <tr class="danger">
                                        <th>ลำดับ</th>
                                        <th>ทะเบียน</th>
                                        <th>รุ่น</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>Booking Date</th> 
                                        <th>Check in</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($depos as $index => $books)
                                    <!-- if($books->wash == "1") -->

                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{ $books->Bookqueue->Car->plateno }}</td>
                                        <td>{{ $books->Bookqueue->Car->brand}}</td>
                                        <td>{{ $books->Service->service_name }} {{ $books->Service->service_detail }}</td>
                                        <td>{{ $books->Bookqueue->User->Detail->name }}</td>
                                        <td>{{ $books->Bookqueue->User->Detail->tel}}</td>
                                        <td>{{ $books->Bookqueue->created_at}}</td>
                                        <td>{{$books->Bookqueue->service_time}}</td>
                                    </tr> 
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    <div id="menu1" class="tab-pane fade">
        <br><h3 style="color:#8B7D7B"><strong>ล้างรถ</strong></h3>
                        <div class="row">
                            <div class="col-md-7 col-md-offset-5">
                                <div class="text-right">
                                    <p><a href="{{url('book_queue_wash')}}" class="btn btn-success">จองคิว</a></p>
                                </div>
                            </div>
                        </div>        
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="warning">
                                        <th>ลำดับ</th>
                                        <th>ทะเบียน</th>
                                        <th>รุ่น</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>Booking Date</th> 
                                        <th>Check in</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach ($washarray as $index => $books)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{ $books->Bookqueue->Car->plateno }}</td>
                                        <td>{{ $books->Bookqueue->Car->brand}}</td>
                                        <td>{{ $books->Service->service_name }} {{ $books->Service->service_detail }}</td>
                                        <td>{{ $books->Bookqueue->User->Detail->name }}</td>
                                        <td>{{ $books->Bookqueue->User->Detail->tel}}</td>
                                        <td>{{ $books->Bookqueue->created_at}}</td>
                                        <td>{{$books->Bookqueue->service_time}}</td>
                                    </tr> 
                                     @endforeach </tbody>
                            </table>
                        </div>
      </div>
    <div id="menu2" class="tab-pane fade">
     <br><h3 style="color:#8B7D7B"><strong>ซ่อมรถ</strong></h3>
                        <div class="row">
                            <div class="col-md-7 col-md-offset-5">
                                <div class="text-right">
                                    <p><a href="{{url('book_queue')}}" class="btn btn-success">จองคิว</a></p>
                                </div>
                            </div>
                        </div>    
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="info">
                                        <th>ลำดับ</th>
                                        <th>ทะเบียน</th>
                                        <th>รุ่น</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>Booking Date</th>
                                        <th>Check in</th>
                                    </tr>
                                </thead>
                               @foreach ($fix as $index => $books)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{ $books->Bookqueue->Car->plateno }}</td>
                                        <td>{{ $books->Bookqueue->Car->brand}}</td>
                                        <td>{{ $books->Bookqueue->comment }}</td>
                                        <td>{{ $books->Bookqueue->User->Detail->name }}</td>
                                        <td>{{ $books->Bookqueue->User->Detail->tel}}</td>
                                        <td>{{ $books->Bookqueue->created_at}}</td>
                                        <td>{{$books->Bookqueue->service_time}}</td>
                                    </tr> 
                                     @endforeach </tbody>
                            </table>
                        </div>
     </div>
  </div>
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
 
 
   

@endsection