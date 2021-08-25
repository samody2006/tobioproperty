<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="/dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-product-hunt"></i>
                        <span>Product</span>
                    </a>
                    <ul class="sub">
						<li><a href="/dashboard/house">House</a></li>
						<li><a href="/dashboard/land">Land</a></li>
                        <li><a href="#">Apartment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/dashboard/blog">
                        <i class="fa fa-newspaper-o"></i>
                        <span>Articles </span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-picture-o"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Pictures</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Users </span>
                    </a>
                </li>

                <li>
                <a href="{{ route('logout') }}">
                        <i class="fa fa-user"></i>
                        <span>Log Out</span>
                </a>
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>