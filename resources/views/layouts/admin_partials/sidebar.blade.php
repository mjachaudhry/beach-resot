<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3> @if(!empty(Auth::user()->name)) {{ Auth::user()->name  }} @endif</h3>
        <ul class="nav side-menu">
          
            <li><a><i class="fa fa-edit"></i> Projects <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admincon/projects/create') }}">Add</a></li>
                    <li><a href="{{ url('admincon/projects') }}">All</a></li>
                </ul>
            </li>
            
            
            <li @if (Request::is('admincon/services/*')) class="active" @endif>
                <a><i class="fa fa-edit"></i> Services <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" @if (Request::is('admincon/services/*')) style="display: block;" @endif>
                    <li><a href="{{ url('admincon/services/create') }}">Add</a></li>
                    <li><a href="{{ url('admincon/services') }}">All</a></li>
                </ul>
            </li>
            

        </ul>
    </div>

</div>
<!-- /sidebar menu -->