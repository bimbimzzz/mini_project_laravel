<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li>
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">User</a>
                </ul>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('companies.index') }}">List Company</a>
                </ul>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('employee.index') }}">List Employee</a>
                </ul>
            </li>
        </ul>
    </aside>
</div>
