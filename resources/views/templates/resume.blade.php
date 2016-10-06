@extends('carcare')

@section('content')

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Customer Profile</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}">Dashboard</a>
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
                                <img src="/project/profilePicture/5635512141.jpg" class="bordered" width="150" height="150"><br><br>
                                    <a href="/project/profile/updateProfile" class="btn btn-success btn-sm">Edit
                                        Profile</a>
                            </div>
                         </div>
                         <div class="col-sm-7">
        <div class="col-sm-7">
        <div class="row">
            <label class="col-sm-3">Name: </label>

            <div class="col-sm-9">
                นางสาวพรธีรา คำพิมพ์            </div>
        </div>

    
        <div class="row">
            <label class="col-sm-3">Tel: </label>

            <div class="col-sm-9">
                0815991349            </div>
        </div>
         <div class="row">
            <label class="col-sm-3">Email: </label>

            <div class="col-sm-9">
                <a href="mailto:looknum_pooh@hotmail.com">looknum_pooh@hotmail.com</a>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3">Adress: </label>

            <div class="col-sm-9">
                หอสวนทิพย์            
            </div>
        </div>

        <div class="row">
            <label class="col-sm-3">Car: </label>

            <div class="col-sm-9">
                <p>toyota สีดำ</p>            </div>
        </div>

        <div class="row">
            <label class="col-sm-3">Plateno: </label>

            <div class="col-sm-9">
                กอ670            
            </div>
        </div>

                    <div class="row">
                <label class="col-sm-3">List Service: </label>

                <div class="col-sm-9">
                    ฝากรถ รายเดือนสิงหาคม
                    <br>ล้างรถ ล้างสีดูดฝุ่น 1/6/2559<br> </div>
            </div>
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