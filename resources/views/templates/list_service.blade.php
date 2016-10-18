@extends('carcare')

@section('content')
<div class="row">
    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>List service</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('test')}}"> Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-automobile fa-1x"></i> List service
                            </li>


    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="text-right">
                <div class='menusearch'>
                      <form action='/search' class='searchform' method='get'>
                        <input class='searchfield' id='q' name='q' onblur='if(this.value==&apos;&apos;)this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;' type='text' value=''/>
                        <input class='searchbutton' src='http://1.bp.blogspot.com/-N_4TWVUmXv4/UDdKJf5NwCI/AAAAAAAAIgY/AGrKXgwkrTo/s1600/tombolcari.gif' style='cursor:pointer;vertical-align:top' type='image' value='Go'/>
                      </form>
                    </div>
            </div>
        </div>
    </div>
                      

                       </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form">

                            <div class="form-group">
                                <h3 style="color:#808080"><strong>รายการใช้บริการ</strong></h3>
                            </div>
                        </div></form>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">รับ-ฝากรถ</a></li>
    <li><a data-toggle="tab" href="#menu1">ล้างรถ</a></li>
    <li><a data-toggle="tab" href="#menu2">ซ่อมรถ</a></li>
  </ul>

      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <div class="col-lg-11">
              <br> <h4 style="color:#111111"><strong>รับ-ฝากรถ</strong></h4>
                      <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="danger">
                                        <th>ทะเบียน</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                        <th>check-out</th>
                                         <th>สถานะ</th>
                                    </tr>
                                </thead>
                               <tbody>
                                   @foreach($depos_list as $s)
                                   <tr>
                                       <td>{{$s->Bookqueue->Car->plateno}}</td>
                                       <td>{{$s->Service->service_name}} {{$s->Service->service_detail}}</td>
                                       <td>{{$s->Bookqueue->User->Detail->name}}</td>
                                       <td>{{$s->Bookqueue->User->Detail->tel}}</td>
                                       <td>{{$s->Bookqueue->created_at}}</td>
                                       <td>{{$s->Bookqueue->updated_at}}</td>
                                       <td>{{$s->Bookqueue->User->type}}</td>
                                   </tr> 
                                   @endforeach
                               </tbody>
                            </table>
                        </div>
             </div>
        </div>
      <div id="menu1" class="tab-pane fade">    
          <div class="col-lg-11">
              <br><h4 style="color:#111111"><strong>ล้างรถ</strong></h4>
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="warning">
                                        <th>ทะเบียน</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                        <th>check-out</th>
                                         <th>สถานะ</th>
                                    </tr>
                                </thead>
                               <tbody>
                                @foreach($washarray_list as $s)
                                <tr>
                                       <td>{{$s->Bookqueue->Car->plateno}}</td>
                                       <td>{{$s->Service->service_name}} {{$s->Service->service_detail}}</td>
                                       <td>{{$s->Bookqueue->User->Detail->name}}</td>
                                       <td>{{$s->Bookqueue->User->Detail->tel}}</td>
                                       <td>{{$s->Bookqueue->created_at}}</td>
                                       <td>{{$s->Bookqueue->updated_at}}</td>
                                       <td>{{$s->Bookqueue->User->type}}</td>
                                   </tr> 
                                @endforeach
                               </tbody>
                            </table>
                        </div>
            </div>
        </div>

    <div id="menu2" class="tab-pane fade">
           <div class="col-lg-11">
                    <br><h4 style="color:#111111"><strong>ซ่อมรถ</strong></h4>
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="info">
                                       <th>ทะเบียน</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                        <th>check-out</th>
                                         <th>สถานะ</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach($fix_list as $s)
                                    <tr>
                                       <td>{{$s->Bookqueue->Car->plateno}}</td>
                                       <td>{{$s->Service->service_name}} {{$s->Service->service_detail}}</td>
                                       <td>{{$s->Bookqueue->User->Detail->name}}</td>
                                       <td>{{$s->Bookqueue->User->Detail->tel}}</td>
                                       <td>{{$s->Bookqueue->created_at}}</td>
                                       <td>{{$s->Bookqueue->updated_at}}</td>
                                       <td>{{$s->Bookqueue->User->type}}</td>
                                   </tr> 
                                @endforeach
                                </tbody>
                            </table>
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

                </div>
                <!-- /.row -->

@endsection