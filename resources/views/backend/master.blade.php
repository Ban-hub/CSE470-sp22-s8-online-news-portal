<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | NEWS TIME</title>
	<link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('public/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('public/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{url('public/css/menu.css')}}">
	<link rel="stylesheet" href="{{url('public/css/adminstyle.css')}}">	
    <script type="text/javascript" src="{{url('public/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/js/app.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/js/script.js')}}"></script>
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="{{url('admin')}}" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-posts')}}"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="{{url('add-post')}}"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="{{url('view-category')}}"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-pages')}}"><i class="fa fa-eye"></i>All Pages</a></li>
              <li><a href="{{url('add-page')}}"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-image"></i> <span>Advertisements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('all-advs')}}"><i class="fa fa-eye"></i>All Advertisements</a></li>
            <li><a href="{{url('add-adv')}}"><i class="fa fa-plus-circle"></i>Add Advertisements</a></li>
          </ul>
      </li>
        <li class="treeview">
            <a href="{{url('messages')}}">
              <i class="fa fa-envelope"></i> <span>Messages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{url('settings')}}">
              <i class="fa fa-gear"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-user-plus"></i> <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Users</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Users</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>Active User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-edit"></i>Edit Profile</a></li>
              <li><a href="login.html"><i class="fa fa-power-off"></i>Log Out</a></li>
            </ul>
        </li>		
	</ul>
</div>

<!-- Header and Sidemenu -->

@yield('content')

<!-- Footer -->

<footer>
	<div class="col-sm-6">
		BRACU | CSE &copy; || SPRING - 2022 || Avinandan Banerjee
	</div>
</footer>

</body>
</html>