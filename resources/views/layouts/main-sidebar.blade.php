<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" >
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('sidebar_trans.Dashboard')}}</span></div>
                            <div class="pull-right"></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>

                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('sidebar_trans.school_stages')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('stages.index')}}">{{trans('sidebar_trans.List_of_grades')}}</a></li>

                        </ul>
                    </li>
                    <!-- End menu item Elements-->

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
