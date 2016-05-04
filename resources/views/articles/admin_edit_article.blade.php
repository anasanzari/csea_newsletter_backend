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

            <div class="input-field col-md-12">
              <textarea id="art" rows="15" class="form-control" name="content" ng-model="content">

              </textarea>
            </div>

            <div class="center">
              {!! Form::submit('Save',['class' => 'btn']) !!}
            </div>
            {!! form::close() !!}

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <p>Preview:</p>

          <div class="bb-custom-wrapper">
            <div id="bb-bookblock" class="bb-bookblock"  ng-bind-html="content | to_trusted">

            </div>
          </div>

        </div>
      </div>
  </div>

</div>

</div>

@endsection


@section('script')

{!! Html::script('js/markitup/jquery.markitup.js') !!}
{!! Html::script('js/markitup/settings.js') !!}
<script>
  $('#art').markItUp(mySettings);
</script>

	{!! Html::script('js/angular.min.js') !!}
  {!! Html::script('js/angular-resource.min.js') !!}

<script>

  angular.module("TextAngular", ['ngResource'])
  .constant("CSRF_TOKEN", '{!! csrf_token() !!}')
  .factory('ArticleResource',function ($resource) {
      return $resource("{{url("api/articles/".$id)}}", {},
      {
          get:{method:'GET',params: {}, cache:false,isArray:false}
      });
  })
		.controller("AppController", function($scope,ArticleResource){
      ArticleResource.get({}, function (response) {
        $scope.content = response.content;
        console.log(response);
      });

    })

    .filter('to_trusted', ['$sce', function($sce){
        return function(text) {
            return $sce.trustAsHtml(text);
        };
    }]);

</script>
@endsection
