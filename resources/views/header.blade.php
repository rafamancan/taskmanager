<nav class="navbar navbar-default">
    <div class="navbar-header">
        <p class="navbar-brand">Taskmanager</p>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        @if(!Request::is('/'))
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Tasks <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/tasks">New task</a></li>
                        <li><a href="#">Dashboard</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Username <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="text-right"><a href="#">Edit profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-right"><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        @endif
    </div>
</nav>
