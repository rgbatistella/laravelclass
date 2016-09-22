@extends("templates.app")
@section("content")
    {!! Form::model($posts, ['route' => ['posts.update', $posts->id], 'method' => 'patch']) !!}
    @include("posts.fields")
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
    </div>
    {!! Form::close() !!}
@endsection