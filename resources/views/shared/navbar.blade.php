<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/home">Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        More
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/meun">View Menu Items</a></li>
                        @if(auth()->user()->role == 'admin')
                            <li role="separator" class="divider"></li>
                            <li><a href="/user">Users Management</a></li>
                        @endif
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/event/create">
                        Add Event
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                </li>
                <li>
                    <a href="/menu/create">
                        Add Menu Items
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                </li>

            @if(auth()->user()->role == 'admin')
                    <li>
                        <a href="/user/create">
                            Add User
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>