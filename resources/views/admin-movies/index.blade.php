@extends('layout-admin')

@section('content')

<!-- Navigation Bar -->
<div class="header">
    <div class="header-left navbar-dark bg-dark">
        <a href="#" class="logo">
            <img src="images/logo2.png" width="50" height="70" alt="logo">
            <!-- Put this style in css -->
            <span class="logoclass" style="color:#cb2a16; text-decoration:none; "></span>
        </a>
        <a href="#" class="logo logo-small">
            <img src="images/logo2.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fe fe-bell"></i>
                <span class="badge badge-pill">3</span>
            </a>
            <!-- Notification -->
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-01.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">International Software
                                                Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
                                                XR</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details">
                                            <span class="noti-title">Lorem Ipsum</p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Notification Bell -->
                <div class="topnav-dropdown-footer">
                    <a href="#">View all Notifications</a>
                </div>
            </div>
        </li>
        <!-- User Profile -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Logo"></span> </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>Superuser</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="settings.html">Account Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </li>
    </ul>
    <div class="top-nav-search ">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>

<!--Sidebar -->
<div class="main-wrapper" style="text-decoration:none;">
    <!-- navbar-dark bg-dark -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active"> <a href="{{ route('dashboard') }}"><i class="fa-solid fa-gear"></i> <span>Homepage</span></a> </li>
                    <li class="list-divider"></li>
                    <li class="submenu"> <a href="#"><i class="fa-solid fa-video"></i> <span> Movies </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="all-booking.html"> All Booking </a></li>
                            <li><a href="edit-booking.html"> Edit Booking </a></li>
                            <li><a href="add-booking.html"> Add Booking </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fa-solid fa-clapperboard"></i> <span> Genre </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="all-customer.html"> All customers </a></li>
                            <li><a href="edit-customer.html"> Edit Customer </a></li>
                            <li><a href="add-customer.html"> Add Customer </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Cast </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="all-staff.html">All Cast </a></li>
                            <li><a href="edit-staff.html"> Edit Cast </a></li>
                            <li><a href="add-staff.html"> Add Cast </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fa-solid fa-tags"></i> <span> Tag </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="">Level 1 </a></li>
                            <li><a href="">Level 2 </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Main Content -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Movie Controller</h4> <a href="{{ route('movies.create') }}" class="btn btn-primary btn-rounded float-right veiwbutton">Add Movie</a> </div>

                </div>
            </div>
        </div>

        <!-- to here -->
        <div class="row">
            <div class="col-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table table-hover table-center mb-0">
                                    
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                <thead>
                                    <tr>
                    <!-- Movie ID -->   <!-- <th>MID</th> -->
                    <!-- Thumbnail -->  <th>Thumbnail</th>
                    <!-- Title -->      <th>Title</th>
                    <!-- Movie Url -->  <th>Movie Url</th>
                    <!-- Description --><th>Description</th>
                    <!-- Language -->   <th>Language</th>
                    <!-- Year -->       <th>Year</th>
                    <!-- Created at --> <th>Created at</th>
                    <!-- Updated at --> <th>Updated at</th>
                    <!-- Action -->     <th class="text-right">Status</th>
                    <!-- Actions --> <th>Actions</th>
                                    </tr>
                                </thead>

                                    @foreach ($movies as $movie)

                            <tbody>
                                <tr class="<i style></i>">
                <!-- Movie ID -->   <!-- <td>{{ ++$i }}</td> -->
                <!-- Thumbnail -->  <td>
                                        <h2 class="table-avatar">
                                        <a href="#" class="mr-2">
                                        <img class="pill" src="/images/thumbnails/{{ $movie->thumbnail }}" width="80px"><!--width="80px"-->
                                        </h2>
                                    </td>
                <!-- Title -->      <td>{{ $movie->title }}</td>
                <!-- Movie Url -->  <td>{{ $movie->movie_url }}</td>
                <!-- Description --><td>{{ $movie->description }}</td>
                <!-- Language -->   <td>{{ $movie->language }}</td>
                <!-- Year -->       <td>{{ $movie->year }}</td>
                <!-- Created at --> <td>{{ $movie->created_at->format('m/d/Y H:i') }}</td>
                <!-- Updated at --> <td>{{ $movie->updated_at->format('m/d/Y H:i') }}</td>
                                    
                <!-- Status -->     <td>
                                        <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                    </td>
                <!-- Action -->     <td class="text-right">
                                        <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"> 
                                            <!-- Edit -->
                                            <a class="dropdown-item" href="{{ route('show',$movie->id) }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
                                            @csrf
                                            <!-- Delete -->
                                            @method('DELETE')
                                            <a class="dropdown-item" href="{{ route('edit',$movie->id) }}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> 
                                            </div>
                                        </div>
                                    </td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- here -->

                
    

<!-- to here -->

    @endforeach

{!! $movies->links() !!}

@endsection