@extends('dashboard')

@section('meta')

{!! Html::style('css/theme_one.css') !!}
{!! Html::style('css/textAngular.css') !!}

@endsection

@section('content')
<div class="admin" ng-app="TextAngular" ng-controller="AppController">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>Create Article</h3>
          @include('errors.errorlist',['err'=>$errors])

          {!! Form::open(['url' => url('dashboard/articles/'.$id.'/save')]) !!}
            <div class="input-field col-md-12">
              <input name="name" type="text" value="{{$article->name}}" class="validate">
              <label>Name</label>
            </div>
            <div class="input-field col-md-12">
              <input name="author" type="text" value="{{$article->author}}" class="validate">
              <label>Author</label>
            </div>

            <div class="input-field col-md-12">
              <input name="number" type="text" value="{{$article->number}}" class="validate">
              <label>Article Number</label>
            </div>

            <input type="hidden" name="content" ng-value="htmlContent" />


            <!--div class="input-field col-md-12">
              <textarea name="content" class="materialize-textarea"></textarea>
              <label>Html Content</label>
            </div-->

        </div>
        <div class="col-md-12">

            <h4>Add Content:</h4>
            <div class="bb-custom-wrapper">
              <div id="bb-bookblock" class="bb-bookblock">
                <div text-angular class="editor" ng-model="htmlContent" name="demo-editor" ta-text-editor-class="border-around" ta-html-editor-class="border-around"></div>
              </div>
            </div>

          <div class="center">
            {!! Form::submit('Save',['class' => 'btn']) !!}
          </div>
          {!! form::close() !!}

        </div>
      </div>
  </div>


@endsection


@section('script')

	{!! Html::script('js/angular.min.js') !!}
  {!! Html::script('js/angular-resource.min.js') !!}
  {!! Html::script('js/textAngular-rangy.min.js') !!}
  {!! Html::script('js/textAngular-sanitize.min.js') !!}
  {!! Html::script('js/textAngular.min.js') !!}

<script>

  angular.module("TextAngular", ['textAngular','ngResource'])
  .constant("CSRF_TOKEN", '{!! csrf_token() !!}')
  .factory('ArticleResource',function ($resource) {
      return $resource("{{url("api/articles/".$id)}}", {},
      {
          get:{method:'GET',params: {}, cache:false,isArray:false}
      });
  })
		.controller("AppController", function($scope,ArticleResource){
      ArticleResource.get({}, function (response) {
        $scope.htmlContent = response.content;
        console.log(response);
      });

    });

</script>
@endsection
