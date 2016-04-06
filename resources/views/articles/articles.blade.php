@extends('app')

@section('content')


<div class="articlesbg"></div>
<div class="row container articles">
    <h1 class="shadow transbar">{{$month}} Edition</h1>
    <h3 class="shadow whitetext">Contents</h3>

    <div class="row">
      @foreach ($articles as $article)
        <div class="col s12 m6">
          <div class="article-card card z-depth-2 hoverable">
            <div class="card-content">
              <span class="title">{{$article->name}}</span>
              <span class="sub-title">{{$article->author}}</span>
              <a href="{{url('articles/'.$article->id)}}" class="waves-effect waves-light btn">Read More</a>
            </div>
          </div>
        </div>
     @endforeach
    </div>
</div>

@endsection


@section('script')
<script>

</script>
@endsection
