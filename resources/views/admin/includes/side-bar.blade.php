<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background: linear-gradient(to right, #222134, #003C51);">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index.get') }}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.get') }}">
                <span class="icon-bg"><i class="mdi mdi-account menu-icon"></i></span>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.queries.get') }}">
                <span class="icon-bg"><i class="mdi mdi-message menu-icon"></i></span>
                <span class="menu-title">Queries</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-account-group menu-icon"></i></span>
                <span class="menu-title">Talents</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.models.get') }}">Models Data</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.create-job.get') }}">
                <span class="icon-bg"><i class="mdi mdi-message menu-icon"></i></span>
                <span class="menu-title">Create Job</span>
            </a>
        </li>
    </ul>
</nav>
