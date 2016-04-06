@extends('dashboard')

@section('title', 'Change Password')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-xs-offset-0 col-md-offset-3">
              <h4>Change Password</h4>
              {!! Form::open(['url'=>'dashboard/password']) !!}
                <div class="form-group">
                    {!! Form::label('name','Current Password :') !!}
                    {!! Form::text('cpassword', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name','New Password :') !!}
                    <input type="password" name="password" class="form-control" />

                </div>
                <div class="form-group">
                    {!! Form::label('name','Confirm Password :') !!}
                    <input type="password" name="confirm" class="form-control" />

                </div>
                <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
              {!! Form::close() !!}

              @include('errors.errorlist',['err'=>$errors->cat])



          </div>
    </div>
  </div>

@endsection
