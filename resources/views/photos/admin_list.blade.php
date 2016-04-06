@extends('dashboard')

@section('meta')

@endsection

@section('content')
<div class="admin">
<div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h3>Photos</h3>

        <div class="collection">
          @foreach($photos as $photo)
            <a href="{{url('dashboard/photos/'.$photo->id)}}" class="collection-item">
              {{$photo->name}} : {{$photo->user}}
            </a>
          @endforeach
        </div>

        <a class="btn" href="{{url('dashboard/photos/upload')}}">Create</a>
      </div>
    </div>
</div>

</div>
</div>

@endsection


@section('script')
<script>

</script>
@endsection
