@extends('app')

@section('meta')

<meta property="og:title" content="Inquisite" />
<meta property="og:site_name" content="inquisite.istenitc.org"/>
<meta property="og:url" content="http://inquisite.istenitc.org/home"/>
<meta property="og:description" content="Read and share tech in a new way." />
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="148666522131344" />
<meta property="og:image" content="{{url('images/inq.jpg')}}">
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

@endsection

@section('content')

<div class="mainheader">

 <h1>Inquisite</h1>
 <a class="btn" href="./articles">Read New Edition</a>
</div>

<div class="row writer">
 <div class="col s12 m6">
		 <h2>Found something new in the Tech World?</h2>
		 <h4>We provide a platform to share your knowledge.</h4>
 </div>
 <div class="col s12 m6">
		 <h4>Send your entries</h4>

		 <ul class="collapsible popout" data-collapsible="accordion">
				 <li>
						 <div class="collapsible-header"><i class="icon icon-email"></i>Mail Us</div>
						 <div class="collapsible-body"><p>Send your articles to istenitcmail@gmail.com</p></div>
				 </li>
				 <li>
						 <div class="collapsible-header"><i class="icon icon-contact"></i>Contact Us</div>
						 <div class="collapsible-body"><p>You can contact us at +91 9567212875</p></div>
				 </li>
				 <li>
						 <div class="collapsible-header"><i class="icon icon-info"></i>Info</div>
						 <div class="collapsible-body"><p>Send us scientific articles that are interesting and new.</p></div>
				 </li>
		 </ul>
 </div>
</div>

<div class="row writer">
 <div class="col s12 m6">
		 <h2>Write to us.</h2>
		 <h4>We would love to hear from you!</h4>
 </div>
 <div class="col s12 m6">

       {!! Form::open(['url' => url('home/feed'),'id'=>"feedform"]) !!}
				 <div class="row" style="padding-top: 20px;text-align: center">
						 <div class="input-field col s12">
								<input type="text" name="name" class="validate">
								<label>Name</label>
						 </div>
						<div class="input-field col s12">
								<input type="email" name="email" class="validate">
								<label>Email</label>
						 </div>
						<div class="input-field col s12">
								<textarea id="textarea1" name="feed" class="materialize-textarea"></textarea>
								<label>Write your feedback</label>
						</div>

						 <button class="btn">Send</button>
				 </div>
		 </form>
 </div>
</div>

@endsection


@section('script')
<script>

 $('.dropdown-button').dropdown({
		 inDuration: 300,
		 outDuration: 225,
		 constrain_width: false,
		 hover: false,
		 gutter: 0,
		 belowOrigin: false
	 }
 );

 $('#feedform').submit(function (){
	 Materialize.toast('Sending feed..',1000);
	 var data =  $(this).serialize();
	 $.post("{{url('home/feed')}}",data,function(res){
       console.log(res);
			 //var val = JSON.parse(res);
			 if(res.status == "success"){
						Materialize.toast('Your feed is recieved.', 3000)
			 }else{
						Materialize.toast('Sorry.Something went wrong!', 1000)
			 }
	 })
	 return false;
 });


</script>
@endsection
