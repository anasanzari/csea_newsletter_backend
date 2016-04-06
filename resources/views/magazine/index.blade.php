@extends('magazine')

@section('meta')

@endsection

@section('content')

<div id="container" class="containerl">
  <div class="menu-panel">
    <h3>Table of Contents</h3>
    <ul id="menu-toc" class="menu-toc">
      @foreach($articles as $key => $value)

      @if($key==0)
        <li class="menu-toc-current"><a href="{{$value->number}}">{{$value->name}}</a></li>
      @else
        <li><a href="#item{{$value->number}}">{{$value->name}}</a></li>
      @endif

      @endforeach

    </ul>
  </div>

  <div class="bb-custom-wrapper">
    <div id="bb-bookblock" class="bb-bookblock">
      @foreach($articles as $key => $value)
        {!!$value->content!!}
      @endforeach
    </div>
    <div>
      <nav>
        <span id="bb-nav-prev">&larr;</span>
        <span id="bb-nav-next">&rarr;</span>
      </nav>
      <span id="tblcontents" class="menu-button">Table of Contents</span>
    </div>
  </div>

</div><!-- /container -->

@endsection


@section('script')
{!! Html::script('js/magazine/jquery.min.js') !!}
{!! Html::script('js/magazine/jquery.mousewheel.js') !!}
{!! Html::script('js/magazine/jquery.jscrollpane.min.js') !!}
{!! Html::script('js/magazine/jquerypp.custom.js') !!}
{!! Html::script('js/magazine/jquery.bookblock.js') !!}
{!! Html::script('js/magazine/page.js') !!}

<script>
  $(function() {

    Page.init();

  });
</script>
@endsection
