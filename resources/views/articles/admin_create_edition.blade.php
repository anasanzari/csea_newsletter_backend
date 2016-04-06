@extends('dashboard')

@section('meta')

@endsection

@section('content')
<div class="admin">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>Create New Edition</h3>
          @include('errors.errorlist',['err'=>$errors])

          {!! Form::open(['url' => url('dashboard/editions/create')]) !!}
            <div class="input-field col-md-12">
              <input name="name" type="text" class="validate">
              <label>Name</label>
            </div>

            <div class="form-group col-md-12">
              <select class="form-control" name="month">
                <option value="" disabled selected>Select Month</option>
                @foreach($months as $key => $value)
                  <option value="{{$key+1}}">{{$value}}</option>
                @endforeach
              </select>
            </div>

            <div class="input-field col-md-12">
              <input name="year" type="text" class="validate">
              <label>Year</label>
            </div>

            {!! Form::submit('Create',['class' => 'btn']) !!}
          {!! form::close() !!}
        </div>
      </div>
  </div>


@endsection


@section('script')
<script>
$(document).ready(function () {
           $('select').material_select();
});

</script>
@endsection
