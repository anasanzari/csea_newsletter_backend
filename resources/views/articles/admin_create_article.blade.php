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

          {!! Form::open(['url' => url('dashboard/editions/'.$id.'/create')]) !!}
            <div class="input-field col-md-12">
              <input name="name" type="text" class="validate">
              <label>Name</label>
            </div>
            <div class="input-field col-md-12">
              <input name="author" type="text" class="validate">
              <label>Author</label>
            </div>

            <div class="input-field col-md-12">
              <input name="number" type="text" class="validate">
              <label>Article Number</label>
            </div>

            <div class="input-field col-md-12">
              <textarea id="art" rows="15" class="form-control" name="content" ng-model="content">

              </textarea>
            </div>
            <div class="center">
              {!! Form::submit('Create',['class' => 'btn']) !!}
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

<div style="display:none" id="template">
  <div class="bb-item" id="item4">
    <div class="pagenum"></div>
    <div class="content">
      <div class="scroller">
        <div class="light">

          <h2>Title</h2>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <h3> A sample 2 Column Design </h3>
              </div>
              <div class="col-md-6">
                <h4>Second Column</h4>
              </div>
            </div>
          </div><!--containerfluid-->

        </div><!--light div-->
      </div><!--scroller-->
    </div><!--content -->
  </div><!--bb-item-->
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

  angular.module("TextAngular", [])
		.controller("AppController", function($scope){
      var ele = angular.element("#template");
      console.log(ele.html());
      $scope.content = ele.html();
    }).filter('to_trusted', ['$sce', function($sce){
        return function(text) {
            return $sce.trustAsHtml(text);
        };
    }]);;

</script>
@endsection
