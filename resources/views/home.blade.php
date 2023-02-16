@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase text-indigo-500 font-semibold">Post Idea</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Jan 20 · 5 min read</h6>
                            <a href="#" class="card-link mb-2 text-lg font-medium text-black">10 Creative Ideas for Social Media Posts</a>
                            <p class="card-text text-gray-500">Looking for inspiration for your next social media post? Check out these 10 creative ideas that are sure to engage your audience.</p>
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://source.unsplash.com/random/50x50" alt="Avatar">
                                <div class="flex-grow-1">
                                    <p class="mb-0 text-gray-900 font-medium">Jane Doe</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <img src="https://source.unsplash.com/random/400x200" class="img-fluid rounded-3" alt="Post Image">
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <button class="btn btn-outline-primary me-2"><i class="bi bi-hand-thumbs-up"></i> Like</button>
                                <button class="btn btn-outline-danger me-2"><i class="bi bi-hand-thumbs-down"></i> Dislike</button>
                                <button class="btn btn-outline-secondary"  id="comment"><i class="bi bi-chat-dots" ></i> Comment</button>
                                <div class="ms-auto">
                                <span class="badge bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                    10
                                  </span>
                                  </div>
                            </div>
                            <div class="comment_section">
                                <textarea class="form-control mt-3 border-0 d-none" id="comment-input" placeholder="Leave a comment" rows="3"></textarea>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./app.js"></script>

@endsection
