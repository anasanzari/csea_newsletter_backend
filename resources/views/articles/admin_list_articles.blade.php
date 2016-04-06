@extends('dashboard')

@section('meta')

@endsection

@section('content')
<div class="admin">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <h3>Articles</h3>

        <div class="collection">
          @foreach($articles as $article)
            <a href="{{url('dashboard/articles/'.$article->id)}}" class="collection-item">
              {{$article->name}}
            </a>
          @endforeach
        </div>
        <a class="btn" href="{{url('dashboard/editions/'.$id.'/preview')}}">Preview</a>
        <a class="btn" href="{{url('dashboard/editions/'.$id.'/create')}}">Create Article</a>

      </div>
  </div>
</div>
</div>

@endsection


@section('script')
<script>

</script>
@endsection
