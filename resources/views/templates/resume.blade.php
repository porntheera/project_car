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

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form">

                            <div class="form-group">
                                <h3 style="color:#808080"><strong>ประวัติลูกค้า</strong></h3>
                            </div>
                    </div></form>
                </div>

                <br><div class="row">
                        <div class="col-sm-5">
                             <div class="text-center">
                                @foreach($data as $s)
                                    <img src='{{$s->User->Detail->photo}}' class="bordered" width="200" height="200"><br><br>
                                @endforeach
                          </div>
                         </div>
                         <div class="col-sm-7">
        <div class="col-sm-7">
        @foreach($data as $s)    
        <div class="row">

            <label class="col-sm-3">Name: </label>

            <div class="col-sm-9">
                {{$s->User->Detail->name}}           </div>
        </div>

    
        <div class="row">
            <label class="col-sm-3">Tel: </label>

            <div class="col-sm-9">
                {{$s->User->Detail->tel}}           </div>
        </div>
         <div class="row">
            <label class="col-sm-3">Email: </label>

            <div class="col-sm-9">
                <a href="mailto:{{$s->User->email}}">{{$s->User->email}}</a>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3">Adress: </label>

            <div class="col-sm-9">
                {{$s->User->Detail->address}}            
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3">Car: </label>

            <div class="col-sm-9">
                <p>{{$s->brand}} {{$s->color}}</p>            </div>
        </div>

        <div class="row">
            <label class="col-sm-3">Plateno: </label>

            <div class="col-sm-9">
                {{$s->plateno}}            
            </div>
        </div>
        <br><br>
            <div class="panel panel-primary">
                <div class="panel-heading">List Service:</div>
                @foreach($datas as $d)
                    <div class="panel-body">
                        {{$d->service_name}} {{$d->service_detail}}
                    </div>
                @endforeach  
            </div>
        @endforeach
            </div>
</div>
</div>
    <hr>
    <!-- <footer>
                <div class="copyright pull-right">
            <p>Copyright &copy; 2014 - 2016 OHM-CoE</p>
        </div>
    </footer> -->
            </div>
            </div>
            </div>
        </div>

@endsection