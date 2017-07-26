<!DOCTYPE html>
<html lang="en">
    @include('layouts.admin_partials.header')
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Giving Focus</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="{{URL::Asset('admin/images/user.png')}}" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Admin</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        @include('layouts.admin_partials.sidebar')


                    </div>
                </div>

                @include('layouts.admin_partials.navigation')

                @yield('content')

                @include('layouts.admin_partials.footer')

                </body>
                </html>
