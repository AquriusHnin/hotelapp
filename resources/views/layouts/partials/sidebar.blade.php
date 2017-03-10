<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user.png')}}" class="img-circle" alt="User Image" width="45px" height="45px" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

           
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            


             {{-- Roomtypes --}}
            <li  class="active"  class="treeview" >
                <a href="#">
                    <i class="fa fa-bed"></i> <span>RoomTypes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li @if (Request::is('backend/roomtype')) class="active" @endif><a href="{{ url('backend/roomtype') }}"><i class="fa fa-dot-circle-o"></i> All RoomType</a></li>
                    <li @if (Request::is('backend/roomtype/create')) class="active" @endif><a href="{{ url('backend/roomtype/create') }}"><i class="fa fa-dot-circle-o"></i> Add RoomType</a></li>
                </ul>
            </li>

                {{-- Accounts --}}

            <li  class="active"  class="treeview" >
                <a href="#">
                    <i class="fa fa-users"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li @if (Request::is('backend/account')) class="active" @endif><a href="{{ url('backend/account') }}"><i class="fa fa-dot-circle-o"></i> All User</a></li>
                    <li @if (Request::is('backend/roomtype/create')) class="active" @endif><a href="{{ url('backend/account/create') }}"><i class="fa fa-dot-circle-o"></i> Add User</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
