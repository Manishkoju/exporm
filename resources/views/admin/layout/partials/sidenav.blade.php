   <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('/') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-share"></i>UserCapability</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-comments-smiley"></i><a href="{{route('capability.create')}}">List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-share"></i>Company</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-comments-smiley"></i><a href="{{route('company.create')}}">Add</a></li>
                            <li><i class="menu-icon ti-comments-smiley"></i><a href="{{route('company.index')}}">List</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Country</h3>
                    <li>
                        <a href="{{route('country.create')}}"> <i class="menu-icon ti-user"></i>Country List</a>
                    </li>  
                </ul>
    </div>
