@extends("templates.app")
@section("content")
    {!! Form::open(['route' => 'posts.store']) !!}
    @include("posts.fields")
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
    </div>
    {!! Form::close() !!}
@endsection