@extends('app')

@section('meta')

<meta property="og:title" content="" />
<meta property="og:site_name" content="inquisite.istenitc.org"/>
<meta property="og:url" content="http://inquisite.istenitc.org/photoclix"/>
<meta property="og:description" content="Photos from inquisite." />
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="148666522131344" />
<meta property="og:image" content="http://inquisite.istenitc.org/images/aug.jpg">


@endsection

@section('content')
<div class="photoclixbg"></div>
 <div class="photoclix">
      @foreach($photos as $key => $photo)
        @if($key%4==0)
          <div class="row">
        @endif
            <div class="col s6 m3 l3">
                <div class="imgcont">
                  <img class="responsive-img  thebox" src="{{url($photo->link)}}">
                  <p class="hide-on-small-only"><b>{{ $photo->name }}</b>
                     by {{ $photo->user }}</p>
                </div>
             </div>
         @if($key%4==3||$key==sizeof($photos)-1)
          </div>
        @endif
      @endforeach
 </div>

 @include('includes.pagination', ['paginator' => $photos])

 <p style="text-align:center;padding-top:7px;font-size:2rem;color:#000">Send us your photos to istenitcmail@gmail.com</p>


@endsection


@section('script')
<script>
$('.thebox').materialbox();
</script>
@endsection
