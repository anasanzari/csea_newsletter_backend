@extends('dashboard')

@section('meta')

{!! Html::style('css/theme_one.css') !!}

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="center">
          <h3>{{$article->name}}</h3>
          <h5>-{{$article->author}}</h5>

            <a href="{{url('dashboard/articles/'.$article->id.'/edit')}}" class="waves-effect waves-light btn">Edit</a>
            <a href="{{url('dashboard/articles/'.$article->id.'/delete')}}" class="waves-effect waves-light btn">Delete</a>
        </div>


        <div class="article" id="#article">
          <div class="bb-custom-wrapper">
    				<div id="bb-bookblock" class="bb-bookblock">
              {!! $article->content !!}
            </div>
          </div>
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
