<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" />
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="/" class="logo">
                        <span>
                            <img src="{{asset('assets/images/logo_dark.png')}}" alt="" height="50" width="150">
                        </span>
{{--                <i>--}}
{{--                    <img src="{{asset('assets/images/logo.png')}}" alt="" height="24">--}}
{{--                </i>--}}
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/admin"><i class="fa fa-list"></i>
                        <span class="badge badge-pill badge-success float-right">1</span><span>Dashboard</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fa-users"></i><span>Recommendations</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.recommend.index')}}">All Recommendation</a></li>
                        <li><a href="{{route('admin.recommend.create')}}">Create new Recommendation</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);"><i class="fa fa-code"></i><span>Technologies</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.techno.index')}}">All Technologies</a></li>
                        <li><a href="{{route('admin.techno.create')}}">Create new Technology</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fa fa-laptop"></i><span>Projects</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.project.index')}}">All Projects</a></li>
                        <li><a href="{{route('admin.project.create')}}">Create new Project</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fa-id-card"></i><span>Contacts</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.contact.index')}}">All Contacts</a></li>
                        <li><a href="{{route('admin.contact.create')}}">Create new Contact</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fa-id-card"></i><span>Experience</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.experience.index')}}">All Experience</a></li>
                        <li><a href="{{route('admin.experience.create')}}">Create new Experience</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fa-id-card"></i><span>Education</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.education.index')}}">All Educations</a></li>
                        <li><a href="{{route('admin.education.create')}}">Create new Education</a></li>
                    </ul>
                </li>

{{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="has-arrow"><i class="fas fa-clipboard-list"></i><span>Orders</span></a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="{{route('order.index')}}">All Orders</a></li>--}}
{{--                        <li><a href="{{route('order.create')}}">Create new Order</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
