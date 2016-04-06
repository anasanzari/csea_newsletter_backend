@extends('app')

@section('meta')

<meta property="og:title" content="{{$article->name}}" />
<meta property="og:site_name" content="inquisite.istenitc.org"/>
<meta property="og:url" content="{{url('articles/'.$article->id)}}"/>
<meta property="og:description" content="Read the articles from new edition of Inquisite." />
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="148666522131344" />
<meta property="og:image" content="{{url('images/inq.jpg')}}">
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

@endsection

@section('content')

 @include('includes.fb_init')

 <div class="articleitembg"></div>
<div class="row container article-item">
             <div class="right">
                 <a class="waves-effect waves-light btn-large" id="sharebtn">Share</a>
             </div>
             <h1 class="shadow">{{$article->name}}</h2>
             <h3 class="shadow whitetext">{{$article->author}}</h3>
             <div class="article" id="#article">
                 {!!$article->content!!}
             </div>
</div>


@endsection


@section('script')
<script>

$("#sharebtn").click(function(){
FB.ui({
 method: 'share',
 href: '{{url('articles/'.$article->id)}}'
 }, function(response){});
});

</script>
@endsection
