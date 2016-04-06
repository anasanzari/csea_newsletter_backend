@extends('dashboard')

@section('meta')

@endsection

@section('content')
<div class="admin">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>Edit Image Identifiers</h3>

          @include('errors.errorlist',['err'=>$errors])

          {!! Form::open(['url' => url('dashboard/photos/'.$photo->id.'/edit')]) !!}
            <div class="input-field col s12">
              <input name="name" type="text" class="validate" value="{{ $photo->name }}">
              <label>Image Caption</label>
            </div>
            <div class="input-field col s12">
              <input name="user" type="text" class="validate" value="{{ $photo->user }}">
              <label>Author</label>
            </div>

            <div class="input-field col s12">
              {!! Form::submit('Confirm',['class' => 'btn']) !!}
            </div>
          {!! form::close() !!}
        </div>
      </div>
  </div>
<div class="row container">

@endsection


@section('script')
<script>


</script>
@endsection
