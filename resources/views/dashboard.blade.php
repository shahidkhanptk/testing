{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Facebook</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assetso/images/fav-icon.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/line-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/line-awesome-font-awesome.min.css') }}">
<link href="{{asset ('assetso/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/lib/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/lib/slick/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('assetso/css/responsive.css') }}">
<link rel="icon" type="image/x-icon" href="{{ asset('assetso/images/m-fav.png') }}">

</head>
<body>
<div class="wrapper">
<header>
<div class="container">
<div class="header-data">
<div class="logo">
<a href="index.html" title=""><img src="{{asset ('assetso/images/fb-icon.png') }}" alt="logo Image"></a>
</div>
<div class="search-bar">
<form>
<input type="text" name="search" placeholder="Search Facebook...">
{{-- <button type="submit"><i class="la la-search"></i></button> --}}
</form>
</div>
<nav>
<ul>
<li>
<a href="index.html" title="">
<span><img src="{{asset ('assetso/images/svg/house-door.svg') }}" alt=""  title="Home"></span>

</a>
</li>
<li>
<a href="companies.html" title="">
<span><img src="{{asset ('assetso/images/svg/flag.svg') }}" alt=""  title="Flag"></span>
</a>
{{-- <ul>
<li><a href="companies.html" title="">Companies</a></li>
<li><a href="company-profile.html" title="">Company Profile</a></li>
</ul> --}}
</li>
<li>
<a href="projects.html" title="">
<span><img src="{{asset ('assetso/images/svg/camera-reels.svg') }}" alt=""  title="videos"></span>
</a>
</li>
<li>
<a href="profiles.html" title="">
<span><img src="{{asset ('assetso/images/svg/person-circle.svg') }}" alt=""  title="Groups"></span>
</a>
{{-- <ul>
<li><a href="user-profile.html" title="">User Profile</a></li>
<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
</ul> --}}
</li>
<li>
<a href="jobs.html" title="">
<span><img src="{{asset ('assetso/images/svg/controller.svg') }}" alt=""  title="Game"></span>
</a>
</li>
</ul>
</nav>
<div class="menu-btn">
    <a href="#" title=""><i class="fa fa-bars"></i></a>
    </div>
    <div class="user-account">
    <div class="user-info">
        <div class="suggestion-usd">
            <ul>
                <li>
                        <img style="margin-left: -2px;" src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
                </li>
                <li>
                    <div class="sgt-text">
                            <h4 style="margin-left: -15px;">{{ $user->name }}</h4>            
                        </div>            
                        <a href="{{ route('chatify') }}">
                        <img 
                        style="width: 30px; height:30px; margin-left:7px; padding: 4px;
                        background-color: #d9dadd;
                        border-radius: 100px;" src="{{asset ('assetso/images/svg/list.svg') }}" alt=""  title="Menu">
            </a>    
            </li>
            <li>
                <a href="" title="" class="not-box-openm">
                   </a>
                <div class="notification-box msg" id="message">
                <div class="nt-title">
                <h4>Setting</h4>
                <a href="#" title="">Clear all</a>
                </div>
                <div class="nott-list">
                    <div class="view-all-nots">
                <a href="#" title="">View All Messsages</a>
                </div>
                </div>
                </div>
                </li>
                <li>
                    <a href="" title="" class="not-box-openm">
                        <img style="width: 30px; height:30px; margin-left:7px; padding: 4px;
                        background-color: #d9dadd;
                        border-radius: 100px;"  src="{{asset ('assetso/images/svg/messenger.svg') }}" alt=""  title="Messenger">                   
                    </a>
                    <div class="notification-box msg" id="message">
                    <div class="nt-title">
                        <a href="#" title="" style="float: left;">Chats</a>
                    <a href="#" title="" style="float: right;">
                        <i class="bi bi-three-dots" style="margin-right:20px; "></i>
                        <i class="bi bi-arrows-fullscreen" style="margin-right:20px;"></i>
                        <i class="bi bi-camera-video" style="margin-right:20px;"></i>
                        <i class="bi bi-chat-heart" style="margin-right:10px;"></i>
                    </a>
                    </div>
                    <div class="nott-list">
                    <div class="notfication-details">

                        @yield('chatcontent')
                       
                    </div>
                    </div>
                    </div>
                    </li>                    
                <li>
                    <img style="width: 30px; height:30px; margin-left:7px; padding: 4px;
                    background-color: #d9dadd;
                    border-radius: 100px;"  src="{{asset ('assetso/images/svg/bell-slash.svg') }}" alt=""  title="Notification">
        
            </li>
            <li>
                    <img style="width: 30px; height:30px; margin-left:7px; padding: 4px;
                    background-color: #d9dadd;
                    border-radius: 100px;"  src="{{asset ('assetso/images/svg/caret-down-fill.svg') }}" alt=""  title="See more">                               
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>   
                </a>
    </li>

    
        </ul>

    </div>
    </div>
    </div>
</div>
</div>
</header>
<main>
<div class="main-section">
<div class="container">
<div class="main-section-data">
<div class="row">
<div class="col-lg-3 col-md-4 pd-left-none no-pd">
<div class="main-left-sidebar no-margin">
<div class="suggestions full-width">

<div class="suggestions-list">
<div class="suggestion-usd">
<img src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
<div class="sgt-text">
<h4>{{ $user->name }}</h4>
</div>
<span>
    {{-- <i class="la la-plus"></i> --}}
</span>
</div>
<div class="suggestion-usd">
    <img src="{{asset ('assetso/images/friends-blue.jfif') }}" alt="">
    <div class="sgt-text">
    <h4>Friends</h4>
    </div>
    <span>
    </span>
    </div>
    <div class="suggestion-usd">
        <img src="{{asset ('assetso/images/memories.png') }}" alt="">
        <div class="sgt-text">
        <h4>Memories</h4>
        </div>
        <span>
        </span>
        </div>
        <div class="suggestion-usd">
            <img src="{{asset ('assetso/images/friends-blue.jfif') }}" alt="">
            <div class="sgt-text">
            <h4>Groups</h4>
            </div>
            <span>
            </span>
            </div>
            <div class="suggestion-usd">
                <img src="{{asset ('assetso/images/marketplace.jpg') }}" alt="">
                <div class="sgt-text">
                <h4>Marketplace</h4>
                </div>
                <span>
                </span>
                </div>
                <div class="suggestion-usd">
                    <img src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
                    <div class="sgt-text">
                    <h4>Watch</h4>
                    </div>
                    <span>
                    </span>
                    </div>
                    <div class="suggestion-usd">
                        <img src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
                        <div class="sgt-text">
                        <h4>See more</h4>
                        </div>

<div class="sd-title">

</div>
                        </div>
                        <div class="suggestions-list">
                            <div class="sd-title">
                                <h4>Your shortcuts</h4>
                                    <a href=""><i class="">Edit</i></a>
                            <div class="suggestion-usd">
                            <img src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
                            <div class="sgt-text">
                            <h4>Life of Students</h4>
                            </div>
                            <span>
                                {{-- <i class="la la-plus"></i> --}}
                            </span>
                            </div>
                            <div class="suggestion-usd">
                                <img src="{{asset ('assetso/images/friends-blue.jfif') }}" alt="">
                                <div class="sgt-text">
                                <h4>Gap Shap Corner</h4>
                                </div>
                                <span>
                                </span>
                                </div>
                        </div>
</div>
</div>                     
</div>
</div>

</div>
<div class="col-lg-6 col-md-8 no-pd">
<div class="main-ws-sec">
    {{-- <div class="top-profiles">
        <div class="profiles-slider">
        <div class="user-profy">
        <img src="{{asset ('assetso/images/resources/s1.jpeg') }}" alt="">   
    </div>
        <div class="user-profy">
        <img src="{{asset ('assetso/images/resources/s1.jpeg') }}" alt="">
        </div>
        <div class="user-profy">
            <img src="{{asset ('assetso/images/resources/s1.jpeg') }}" alt="">
            </div>
            <div class="user-profy">
                <img src="{{asset ('assetso/images/resources/s1.jpeg') }}" alt="">
                </div>
            
        <div class="user-profy">
            <img src="{{asset ('assetso/images/resources/s1.jpeg') }}" alt="">
            </div>
            <div class="user-profy">
                <img src="{{asset ('assetso/images/resources/s1.jpeg') }}" alt="">
                </div>
                <div class="user-profy">
                    <img src="{{asset ('assetso/images/resources/s1.jpeg') }}" alt="">
                    </div>
        </div>
        </div> --}}
   
              
    <div class="post-topbar">
        <form action="{{ asset('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="user-picy">
<img src="{{asset ('assetso/images/resources/user-pic.png') }}" alt="">
</div>
<div class="post-st">
<ul>
<li>
    <form action="">
    @csrf    
    <input type="text" placeholder="What's on your mind, {{ $user->name }}" ></li>
    </form>
</ul>
<hr>
<ul>    
    <li>
        <div class="post_topbar">
            <div class="ed-opts">
            <a href="#" title="" class="ed-opts-open">
                <img src="{{asset ('assetso/images/live.png') }}" alt="">
                <label for="">Live Video</label>
            </a>
            <ul class="ed-options">
            <li>
                <a href="#" title="">Live Video</a>
            </li>
            </ul>
            </div>
            </div>
        </li> 
        <li>
            <div class="post_topbar">
                <div class="ed-opts">         
                <a href="#" title="" class="ed-opts-open">
                    <img  src="{{asset ('assetso/images/photos.jpg') }}" alt="">
                    <label for="">Photo/Video</label>
                </a>
                <ul class="ed-options">
                    <h1 style="text-align:center; font-size: 20px; font-weight:600;">Create Post</h1>
                    <hr>
                    <li>
                    <div class="usy-dt">
                        <img src="{{asset ('assetso/images/resources/us-pic.png') }}" alt="">
                        <div class="usy-name">
                        <h3>{{ $user->name }}</h3>
                        <span><img src="{{asset ('assetso/images/clock.png') }}" alt="">Friends</span>
                        </div>
                        </div>
                </li>
                <li>    <input style="width: auto; border-style:none;" type="text" name="text" id="" placeholder="What's on your mind, Shahid?"></li>
                <li>
                    <div style="width: 100%;   border-style: solid;">
                        <a onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"><img  src="{{asset ('assetso/images/media1.png') }}" alt=""></a>
                        <input type="file" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])" name="image" class="form-control">
                    </div>
                </li>
                <li>Add to your Post</li>
                <li style="align-content:center;">
                    <a style="margin-left:40px;"  href=""><img  src="{{asset ('assetso/images/photos.jpg') }}" alt=""></a> 
                    <a href=""><img  src="{{asset ('assetso/images/location-red.jpg') }}" alt=""></a> 
                    <a href=""><img  src="{{asset ('assetso/images/mice.jpg') }}" alt=""></a>  
                    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <img  src="{{asset ('assetso/images/smley.png') }}" alt="">
                    </a>
                </li>
                </li>
            <button style="width: 100%; background-color: rgb(60, 60, 244); padding:12px; border-radius:10px;" >Post</button>        
            </ul>
                </div>
                </div>
            </li>  
            <li>
                <div class="post_topbar">
                    <div class="ed-opts">
                    <a href="#" title="" class="ed-opts-open">
                        <img src="{{asset ('assetso/images/feelings.jpg') }}" alt="">
                        <label for="">Feeling/Activity</label>
                    <ul class="ed-options">                            
                                <h1 style="font-size: 20px; text-align:left; margin-bottom:20px;">How are you feeling?</h1>
                                    <li>
                                <button style="border-style:none; cursor:pointer; float:left;" class="btn btn-primary active" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                  Feelings
                                    </button>
                                <button style="border-style:none; cursor:pointer; float:right;" class="btn btn-primary" data-toggle="collapse" data-target="#mycollapseExample" aria-expanded="false" aria-controls="collapseExample">
                                  Activities
                                </button>
                            </li>
                              <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <div class="" style="height: auto;">
                                        <ul class="">
                                            @foreach ($feelings as $feeling)                     
                                          <li class="list-group-item col-12"><img style="margin-right: 7px;" src="{{asset ('assetso/images/feelings.jpg') }}" alt=""><a href=""><h3 name="feeling_activity" value="feeling_activity">{{ $feeling->feeling }}</h3></a></li>                     
                                            @endforeach
                                        </ul>
                                      </div>
                                </div>
                              </div>
                              <div class="collapse" id="mycollapseExample">
                                <div class="card card-body">
                                    <div class="col-12 container" style="height: auto;">
                                        <ul class="list-unstyled row">
                                            @foreach ($activities as $activity)
                                            <li class="list-group-item col-12"><img style="margin-right: 7px;" src="{{asset ('assetso/images/feelings.jpg') }}" alt=""><a href=""><h3 style="margin-top:4px;" name="feeling_activity">{{ $activity->activity}}</h3></a></li>                                                
                                            @endforeach
                                        </ul>
                                      </div>
                                </div>
                              </div>
                </ul>          
                    </div>
                    </div>
                </li>  
    </ul>
</div>
</form>
    </div>


    @foreach ($posts as $post) 
<div class="posts-section">
    <div class="post-bar">
<div class="post_topbar">
<div class="usy-dt">
<img src="{{asset ('assetso/images/resources/us-pic.png') }}" alt="">
<div class="usy-name">
<h3>{{ $post->user->name }}</h3>
<span><img src="{{asset ('assetso/images/clock.png') }}" alt="">3 min ago</span>
</div>
</div>
<div class="ed-opts">
<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
<ul class="ed-options">
<li><a href="#" title="">Edit Post</a></li>
<li><a href="#" title="">Unsaved</a></li>
<li><a href="#" title="">Unbid</a></li>
<li><a href="#" title="">Close</a></li>
<li><a href="#" title="">Hide</a></li>
</ul>
</div>
</div>
<div class="job_descp">
<p>{{ $post->text }}</p>

<img src="{{asset('storage/'.$post->photo_video)}}" alt="">
<div class="job-status-bar">
    <ul class="like-com">
    <li>
    <a href="#"><i class=""></i> Like 25</a>
    <img src="{{asset ('assetso/images/liked-img.png') }}" alt="">
    </li>
    </ul>
    <a href="#"><i class=""></i> 15 Comments</a>
    </div>
</div>

<div class="job-status-bar">
<ul class="like-com">
<li>
<a href="#"><i class="fas fa-heart"></i> Like</a>

</li>
</ul>
<a href="#"><i class="fas fa-comment-alt"></i>Comment</a>
</div>
</div>
</div>
@endforeach
<div class="top-profiles">
    <div class="pf-hd">
    <h3>Friend Request</h3>
    <i class="la la-ellipsis-v"></i>
    </div>
    <div class="profiles-slider">
        @foreach ($data as $data)
        <div class="user-profy">
        <img src="{{asset ('assetso/images/resources/pf-icon4.png') }}" alt="">
        <h3>{{ $data->name }}</h3>
        <ul>
        <li><a href="{{ route('change.status',['friendid'=> $data->id, 'statusid' => 2]) }}" title="" class="hire">Accepted</a></li>
        <li><a href="{{ route('change.status',['friendid'=> $data->id, 'statusid' => 3]) }}" title="" class="followw">Rejected</a></li>
        </ul>
        <a href="#" title="">View Profile</a>
        </div>
        @endforeach
    </div>
    </div>
<div class="top-profiles">
<div class="pf-hd">
<h3>Add Friends</h3>
<i class="la la-ellipsis-v"></i>
</div>
<div class="profiles-slider">
    @foreach ($all_users as $all_user)
    <div class="user-profy">
    <img src="{{asset ('assetso/images/resources/pf-icon4.png') }}" alt="">
    <h3>{{ $all_user->name }}</h3>
    <ul>
    <li><a href="{{ route('add.friend', $all_user->id) }}" title="" class="followw">Add</a></li>
    <li><a href="{{ route('status', $all_user->id) }}" title="" class="hire">Remove</a></li>
    </ul>
    <a href="#" title="">View Profile</a>
    </div>
    @endforeach
</div>
</div>

<div class="process-comm">
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
    
</div>
</div>
<div class="col-lg-3 d-sm-block pd-right-none no-pd">

    <div class="widget widget-jobs">
    <div class="sd-title">
    <h3>Sponsored</h3>

</div>
</div>
<div class="widget widget-jobs">
    <div class="sd-title">
    <h3>Birthdays</h3>
    <i class="la la-ellipsis-v"></i>
    <div class="jobs-list">
    <div class="job-info">
    <div class="job-details">
        <img src="{{asset ('assetso/images/gift.jfif') }}" alt="">
    <h3>Ali Khan and 3 other birthday today.</h3>
</div>

</div>
    </div>
    </div>
    </div>
<div class="widget widget-jobs">
<div class="sd-title">
    <ul>
        <li>
            <h3 for="">Contacts</h3>
        </li>
        <li>
                <a href="index.html" title="">
                    <span ><img src="{{asset ('assetso/images/svg/search.svg') }}" alt=""></span>
                    </a>
                </li> 
                <li>       
                    <a href="index.html" title="">
                    <span><img src="{{asset ('assetso/images/svg/camera-video.svg') }}" alt=""></span>
                    </a>
        </li>
    </ul>    
<i class="la la-ellipsis-v"></i>
<div class="suggestions-list">
    @foreach ($accepted_data as $accepted_data)
    <div class="suggestion-usd">
    <img src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
    <div class="sgt-text">
    <h4>{{ $accepted_data->name}}</h4>
    </div>
    <span><img src="{{ asset('assetso/images/dot.png') }}" alt=""></span>
    </div>
    @endforeach
    @foreach ($new_accepted_data as $new_accepted_data)
    <div class="suggestion-usd">
    <img src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
    <div class="sgt-text">
    <h4>{{ $new_accepted_data->name}}</h4>
    </div>
    <span><img src="{{ asset('assetso/images/dot.png') }}" alt=""></span>
    </div>
    @endforeach
</div>
</div>
</div>

<div class="widget suggestions full-width">
<div class="sd-title">
<h3>Group conversations</h3>
<i class="la la-ellipsis-v"></i>

<div class="suggestions-list">
<div class="suggestion-usd">
<img src="{{asset ('assetso/images/resources/s6.png') }}" alt="">
<div class="sgt-text">
<h4></h4>
<span>PHP Developer</span>
</div>
<span><i class="la la-plus"></i></span>
</div>
{{-- <div class="view-more">
<a href="#" title="">View More</a>
</div> --}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<div class="post-popup pst-pj">
<div class="post-project">
<h3>Post a project</h3>
<div class="post-project-fields">
<form>
<div class="row">
<div class="col-lg-12">
<input type="text" name="title" placeholder="Title">
</div>
<div class="col-lg-12">
<div class="inp-field">
<select>
<option>Category</option>
<option>Category 1</option>
<option>Category 2</option>
<option>Category 3</option>
</select>
</div>
</div>
<div class="col-lg-12">
<input type="text" name="skills" placeholder="Skills">
</div>
<div class="col-lg-12">
<div class="price-sec">
<div class="price-br">
<input type="text" name="price1" placeholder="Price">
<i class="la la-dollar"></i>
</div>
<span>To</span>
<div class="price-br">
<input type="text" name="price1" placeholder="Price">
<i class="la la-dollar"></i>
</div>
</div>
</div>
<div class="col-lg-12">
<textarea name="description" placeholder="Description"></textarea>
</div>
<div class="col-lg-12">
<ul>
<li><button class="active" type="submit" value="post">Post</button></li>
<li><a href="#" title="">Cancel</a></li>
</ul>
</div>
</div>
</form>
</div>
<a href="#" title=""><i class="la la-times-circle-o"></i></a>
</div>
</div>
<div class="post-popup job_post">
<div class="post-project">
<h3>Post a job</h3>
<div class="post-project-fields">
<form>
<div class="row">
<div class="col-lg-12">
<input type="text" name="title" placeholder="Title">
</div>
<div class="col-lg-12">
<div class="inp-field">
<select>
<option>Category</option>
<option>Category 1</option>
<option>Category 2</option>
<option>Category 3</option>
</select>
</div>
</div>
<div class="col-lg-12">
<input type="text" name="skills" placeholder="Skills">
</div>
<div class="col-lg-6">
<div class="price-br">
<input type="text" name="price1" placeholder="Price">
<i class="la la-dollar"></i>
</div>
</div>
<div class="col-lg-6">
<div class="inp-field">
<select>
<option>Full Time</option>
<option>Half time</option>
</select>
</div>
</div>
<div class="col-lg-12">
<textarea name="description" placeholder="Description"></textarea>
</div>
<div class="col-lg-12">
<ul>
<li><button class="active" type="submit" value="post">Post</button></li>
<li><a href="#" title="">Cancel</a></li>
</ul>
</div>
</div>
</form>
</div>
<a href="#" title=""><i class="la la-times-circle-o"></i></a>
</div>
</div>
<div class="chatbox-list">
<div class="chatbox">
<div class="chat-mg bx">
<a href="#" title=""><img src="{{asset ('assetso/images/new-message.png') }}" alt=""></a>
<span>2</span>
</div>
<div class="conversation-box">
<div class="con-title">
<h3>Messages</h3>
<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
</div>
<div class="chat-list">
<div class="conv-list active">
</div>
</div>
</div>
</div>
</div>
</div>

<div>    
</div>

<script type="text/javascript" src="{{asset ('assetso/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('assetso/js/popper.js') }}"></script>
<script type="text/javascript" src="{{asset ('assetso/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('assetso/js/jquery.mCustomScrollbar.js') }}"></script>
<script type="text/javascript" src="{{asset ('assetso/lib/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('assetso/js/scrollbar.js') }}"></script>
<script type="text/javascript" src="{{asset ('assetso/js/script.js') }}"></script>
</body>
</html>