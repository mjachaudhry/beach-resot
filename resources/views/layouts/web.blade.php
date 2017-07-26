<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') Joupana Beach</title>

        <!-- Bootstrap -->
        <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <link href="{{URL::Asset('web/css/bootstrap-3.3.4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::Asset('web/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::Asset('web/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <style>
            <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i');
            
        </style>



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>

    <body>
    
        @include('layouts.web_partials.navigation')

        @yield('content')
        <div class="container-fluid footer-bg"> 
            <footer>
                <div class="container">
                    <div class="row footer-section" style=" margin-bottom:60px;">
                        <div class="col-md-6 col-sm-6">
                            <h3>{{ $about_data->title }}</h3>
                            <p>{{ substr($about_data->description, 0, 460) }}</p>
                            <a href="{{URL::to('/aboutus')}}">
                                <button type="button" class="btn btn-default">Read More</button>
                            </a>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <h3>Quick Link</h3>
                            <ul class="footer-ul pull-left">
                                <li><a href="{{URL::to('/')}}"> Home</a></li>
                                <li><a href="{{URL::to('/aboutus')}}"> About</a></li>
                                <li><a href="{{URL::to('/thebeach')}}"> the Beach</a></li>
                                <li><a href="{{URL::to('/gallery')}}"> Gallery</a></li>
                            </ul>
                            <ul class="footer-ul" style="margin-left:110px;">
                                <li><a href="{{URL::to('/events')}}"> Events</a></li>
                                <li><a href="#"> Pages</a></li>
                                <li><a href="{{URL::to('/blogs')}}"> Blog</a></li>
                                <li><a href="{{URL::to('/contactus')}}"> Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            
                            <h3>Contact Us</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-envelope" style="margin-right:15px; color:#fff;"></i>
                                    {{ $about_data->email }}
                                </p>
                                <p><i class="fa fa-phone" style="margin-right:15px;color:#fff;"></i>
                                    {{ $about_data->phone }}
                                </p>
                                <p><i class="fa fa-location-arrow" style="margin-right:15px; color:#fff;"></i>
                                    {{ $about_data->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>        
            </footer>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="col-xs-12">
                    <p>© 2017 Joupana Beach. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{URL::Asset('web/js/jquery-1.11.2.min.js')}}"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed --> 
        <script src="{{URL::Asset('web/js/bootstrap-3.3.4.js')}}" type="text/javascript"></script>
        <script src="{{URL::Asset('web/js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#carousel1').find('.item').first().addClass('active');
            });
            $(".form_datetime").datetimepicker({
                format: "dd MM yyyy - hh:ii",
                autoclose: true,
                todayBtn: true,
                pickerPosition: "bottom-left"
            });
        </script>      

    </body>
</html>
