@extends('dashboard')

@section('meta')

@endsection

@section('content')

<div class="admin"></div>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="right">
            <a href="{{url('dashboard/photos/'.$photo->id.'/edit')}}" class="waves-effect waves-light btn">Edit</a>
            <a href="{{url('dashboard/photos/'.$photo->id.'/delete')}}" class="waves-effect waves-light btn">Delete</a>
        </div>
        <h4 class="shadow">{{$photo->name}}</h4>
        <h5 class="shadow whitetext">{{$photo->user}}</h5>
        <p class="shadow whitetext">Link :{{url('uploads/photos/'.$photo->id.'.jpg')}}</p>
        <div class="article" id="#article">
          <img class="img-responsive" src="{{ url('/').'/'.$photo->link }}">
        </div>
      </div>
    </div>
</div>

@stop
