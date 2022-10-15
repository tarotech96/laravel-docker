<div class="page-wrapper chiller-theme toggled">
    {{-- <span id="show-sidebar" class="btn btn-sm btn-dark">
        <i class="fa-sharp fa-solid fa-arrow-right"></i>
    </span> --}}
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="/admin">株式会社 Taro Nguyen</a>
                {{-- <span id="close-sidebar">
                    <i class="fa-sharp fa-solid fa-arrow-left"></i>
                </span> --}}
            </div>

            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-home"></i>
                            <span>ダッシュボード</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users') }}">
                            <i class="fa fa-user"></i>
                            <span>ユーザー一覧</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span>Components</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li>
                                    <a href="#">Panels</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
                                <li>
                                    <a href="#">Icons</a>
                                </li>
                                <li>
                                    <a href="#">Forms</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
    </nav>
    <!-- page-content" -->
</div>
