@extends('dashboard')

@section('meta')

@endsection

@section('content')
<div class="admin">
<div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <h3>Upload New Image</h3>

        @include('errors.errorlist',['err'=>$errors])

        {!! Form::open(['url' => url('dashboard/photos/upload'),'files' => 'true']) !!}
          <div class="input-field col s12">
            <input name="name" type="text" class="validate">
            <label>Image Caption</label>
          </div>
          <div class="input-field col s12">
            <input name="user" type="text" class="validate">
            <label>Author</label>
          </div>

          <div class="file-field input-field col s12">
                <div class="btn">
                  <span>Choose Image</span>
                  <input name="photo" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
          <div class="input-field col s12">
            {!! Form::submit('Create',['class' => 'btn']) !!}
          </div>
        {!! form::close() !!}

      </div>
    </div>
</div>


@endsection


@section('script')
<script>


</script>
@endsection
