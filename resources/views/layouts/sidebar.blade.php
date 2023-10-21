<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Jangkrik</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">krik</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->segment(1) == 'home' ? 'active' : '' }}">
                <a class="nav-link" href="><i class="fas fa-fire"></i> <span>Dashboard </span></a>
            <li class="dropdown">

            <li class="menu-header">Jangkrik</li>
            <li class="dropdown {{ request()->segment(1) === 'data-jangkrik' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-bug"></i></i>
                    <span>Data Jangkrik</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('p4m.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('p4m.index') }}">P4M</a>
                    </li>
                    <li class="{{ request()->routeIs('quaryd.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('quaryd.index') }}">Quary D</a>
                    </li>
                    <li class="{{ request()->routeIs('gunungputri.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('gunungputri.index') }}">Gunung Putri</a>
                    </li>
                    <li class="{{ request()->routeIs('nambo.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('nambo.index') }}">Nambo</a>
                    </li>
                </ul>
            </li>
            <ul class="sidebar-menu">
                <li class="menu-header">Lainnya</li>

                <li class="{{ request()->segment(1) == 'akun' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('akun.index') }}"><i class="fas fa-user"></i></i> <span>Akun</span></a>
                </li>
                <li class="dropdown">
    </aside>
</div>
