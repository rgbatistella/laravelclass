@extends("templates.app")
    @section("content")
        @foreach($posts as $posts)
            <div class="post-preview">
                 <a href="post.html">
                      <h2 class="post-title">{{$posts['title']}}</h2>
                      <h3 class="post-subtitle">{{$posts['content']}}</h3>
                 </a>
                 <p class="post-meta">{{$posts['comment']}}</p>
            </div>
            <hr>
    @endforeach
@endsection