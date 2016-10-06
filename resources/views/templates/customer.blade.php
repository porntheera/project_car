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

   
    <center>
        <br><img src="dfdfdf/img/logo.gif" alt="Computer man" style="width:400px;height:200px;">
        <h1 >
                              <FONT COLOR=#0099FF><strong>Customer Profile</strong></FONT>
        </h1>
   
    
                <div class='menusearch' style="width:400px;height:200px;">
                      <form action='/search' class='searchform' method='get'>
                        <br><input style="width:300px;height:30px;" class='searchfield' id='q' name='q' onblur='if(this.value==&apos;&apos;)this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;' placeholder="ป้ายทะเบียนรถ" type='text' value=''/>
                       <!--  <input class='searchbutton' src='http://1.bp.blogspot.com/-N_4TWVUmXv4/UDdKJf5NwCI/AAAAAAAAIgY/AGrKXgwkrTo/s1600/tombolcari.gif' style='cursor:pointer;vertical-align:top' type='image' value='Go'/> -->
                        <!-- <button type="submit" href="{{url('book_queue')}}" class="btn btn-info">ค้นหา</button>  -->
                        <a href="{{url('resume')}}" type="submit" class="btn btn-info">ค้นหา</a>                   
             
                      </form>
                    </div>
                   

           <!-- <div id="cse" style="width: 50%;">Loading</div>
                <script src="http://www.google.co.th/jsapi" type="text/javascript"></script>
                    <script type="text/javascript"> 
                        google.load('search', '1', {language : 'th'});
                            google.setOnLoadCallback(function() {
                                var customSearchOptions = {}; var customSearchControl = new google.search.CustomSearchControl(
                                    '017655984940057832621:iltv2kqaddm', customSearchOptions);
                                        customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                                            customSearchControl.draw('cse');
                                            }, true);
                    </script>
                        <link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" /> -->
             </center>



@endsection