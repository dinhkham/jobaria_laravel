<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="/admin" class="waves-effect">
                        <i class="remixicon-dashboard-line"></i>
                        <span> Dashboards </span>
                    </a>

                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="remixicon-stack-line"></i>
                        <span>Menu </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ url('admin/menus/add') }}">Thêm danh mục</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/menus/list') }}">Danh sách danh mục</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="remixicon-stack-line"></i>
                        <span> Product </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ url('admin/products/add') }}">Add product</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/products/list') }}">List product</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="/admin/setting" class="waves-effect">
                        <i class="remixicon-layout-line"></i>
                        <span> Setting </span>
                    </a>

                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
