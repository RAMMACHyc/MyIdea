{{-- @extends("layouts.app")
@section("title", $post->title)
@section("content")

	<h1>{{ $post->title }}</h1>

	<img src="{{ asset('images/'.$post->image) }}" alt="Image de couverture" style="max-width: 300px;">

	<div>{{ $post->description }}</div>

	<p><a href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>

@endsection --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>Chirag social</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css" />
    <link rel="stylesheet" href="{{asset('./css/app.css')}}"/>
	
</head>

<body>
    <nav>
        <div class="container">
            <h2 class="logo">MyIdea</h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for creators, inspirations and projects" />
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-pic">
                    <img src="images/profile-8.jpg" alt="pic 1" />
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="left">
                <a class="profile">
                    <div class="profile-pic">
                        <img src="./images/profile-8.jpg">
                    </div>
                   
                </a>
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item ">
                        <span><i class="uil uil-compass"></i></span>
                        <h3>Explore</h3>
                    </a>
                   
                    <a class="menu-item" id="messages-notifications">
                        <i class="uil uil-envelope"><small class="notification-count">6</small></i></span>
                        <h3>Comments</h3>
                    </a>
                    <a class="menu-item ">
                        <span><i class="uil uil-bookmark"></i></span>
                        <h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item ">
                        <span><i class="uil uil-analytics"></i></span>
                        <h3>Analytics</h3>
                    </a>
                    <label class="btn btn-primary" for="create-post">Create Post</label>
                </div>
            </div>



            <div class="middle">


                <form class="create-post">
                    <div class="profile-pic">
                        <img src="images/profile-8.jpg" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind Chirag?" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>

                <div class="feeds">
                    <div class="feed">
                        <div class="head">

                        </div>
                        <div class="user">
                            <div class="profile-pic">
                                <img src="images/profile-14.jpg" alt="">
                            </div>
                            <div class="info">
                                <h3>Lana Rose</h3>
                                <small>{{ $post->title }}</</small>
                            </div>
                            <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                        </div>

                        <div class="photo">
                            <img src="{{ asset('images/'.$post->image) }}" alt="Image de couverture" style="max-width: 500px;">
                        </div>

                        <div class="action-button">
                            <div class="interaction-button">
                                <span><i class="uil uil-thumbs-up"></i></span>
                                <span><i class="uil uil-comment"></i></span>
                                <span><i class="uil uil-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="images/profile-15.jpg"></span>
                            <span><img src="images/profile-16.jpg"></span>
                            <span><img src="images/profile-17.jpg"></span> ,
                            <p>Liked by <b>Enrest Achiever</b>snd <b>220 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Lana Rose</b>{{ $post->description }}
                                <span class="hash-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 130 comments</div>
                    </div>


                </div>
            </div>

            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                        <span><i class="uil uil-edit"></i></span>
                    </div>

                    <div class="search-bar">
                        <span><i class="uil uil-search"></i></span>
                        <input type="search" placeholder="Search Messages" id="message-search">
                    </div>

                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-17.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Kareena Joshua</h5>
                            <p class="text-muted">Just woke up bruh..</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-18.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Dan Smith</h5>
                            <p class="text-bold">2 New Messages</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-15.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Chris Brown</h5>
                            <p class="text-muted">Lol u right</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-14.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Lana Rose</h5>
                            <p class="text-bold">Birthday tomorrow!!</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-11.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Varun Nair</h5>
                            <p class="text-muted">Ssup?</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-1.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Jahnvi Doifode</h5>
                            <p class="text-bold">3 New Messages</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </main>

 
</body>

</html>