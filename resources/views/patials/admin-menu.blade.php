<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="active-menu" href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ url('admin/category')}}"><i class="fa fa-desktop"></i> Category</a>
            </li>
            <li>
                <a href="{{url('admin/product')}}"><i class="fa fa-desktop"></i> Product</a>
            </li>
            <li>
                <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Image</a>
            </li>

            <li>
                <a href="table.html"><i class="fa fa-table"></i> Oder</a>
            </li>
            <li>
                <a href="{{ url('admin/new') }}"><i class="fa fa-edit"></i> News </a>
            </li>
            <li>
                <a href="{{ url('admin/reque') }}"><i class="fa fa-edit"></i> Request </a>
            </li>
        </ul>
    </div>

</nav>