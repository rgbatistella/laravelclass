@extends("templates.app")
    @section("content")
        <div class="post-preview">
        <div class="post-preview">
        @foreach($posts as $post)
            <div class="post-preview">
                 <a href="{!! route('posts.edit', [$post->id]) !!}">
                      <h2 class="post-title">{{$post->title}}</h2>
                      <h3 class="post-subtitle">{{$post->content}}</h3>
                 </a>
                 <!--p class="post-meta">$posts->comment</p-->
            </div>
            <hr>
        @endforeach
        </DIV>
        {{ $posts->links() }}
        </DIV>
    @endsection