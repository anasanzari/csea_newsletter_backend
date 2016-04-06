<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Article;
use App\Edition;
use Validator;

class ArticlesController extends Controller {

	public function __construct(){
		$this->middleware('auth',['except'=>['all','show','preview']]);
	}

	function all(){
		$articles = Article::where('year',2016)->where('month',1)->get();
		$month = Carbon::parse('2010/01/01')->format('F');
		return view('articles.articles',['articles'=>$articles,'month'=>$month]);
	}
	function show($id){
		$article = Article::find($id);
		//$article->content = str_replace("uploads/photos",url("uploads/photos"),$article->content);
		return view('articles.article',['article'=>$article]);
	}



	/* Administrator routes */

	function getArticle($id){
		$article = Article::find($id);
	  //$article->content = str_replace("uploads/photos",url("uploads/photos"),$article->content);
		return $article;
	}

	function showArticle($id){
		$article = Article::find($id);
		//$article->content = str_replace("uploads/photos",url("uploads/photos"),$article->content);
		return view('articles.admin_show_article',['article'=>$article]);
	}

	function listAll(){
		$articles = Edition::all();
	  return view('articles.admin_list',['articles'=>$articles]);
	}
	function listArticles($id){
		$articles = Article::where('edition',$id)->get();
		return view('articles.admin_list_articles',['articles'=>$articles,'id'=>$id]);
	}

	function preview($id){
		$articles = Article::where('edition',$id)->orderBy('number')->get();
		return view('magazine.index',['articles'=>$articles,'id'=>$id]);
	}

	function createArticle($id){
		$e = Edition::all();
		return view('articles.admin_create_article',['editions'=>$e,'id'=>$id]);
	}

	function newArticle($id,Request $request){

		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'author' => 'required',
			'content' => 'required'
		]);
		if ($validator->fails()) {
					 return redirect('dashboard/editions/'.$id.'/create')
											 ->withErrors($validator)
											 ->withInput();
		}
		$v = $request->all();
		$v['edition'] = $id;
    Article::create($v);
		return redirect('dashboard/editions/'.$id);

	}

	function createEdition(){
		$months = [];
		for ($i=1; $i <=12 ; $i++) {
			$months[] = Carbon::parse('2010/'.$i.'/01')->format('F');
		}
		return view('articles.admin_create_edition',['months'=>$months]);
	}

	function saveEdition(Request $request){

		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'year' => 'required',
			'month' => 'required'
		]);
		if ($validator->fails()) {
					 return redirect('dashboard/editions/create')
											 ->withErrors($validator)
											 ->withInput();
		}
		Edition::create($request->all());
		return redirect('dashboard/editions');

	}




	// function get($id){
	// 	$article = Article::find($id);
	// 	$article->content = str_replace("images/articles",url("images/articles"),$article->content);
	// 	return view('articles.admin_get',['article'=>$article]);
	// }

	function delete($id){
		$article = Article::destroy($id);
		return redirect('dashboard/articles');
	}

	function editArticle($id){
		$article = Article::find($id);
		return view('articles.admin_edit_article',['article'=>$article,'id'=>$id]);
	}


	function saveArticle($id,Request $request){
		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'author' => 'required',
			'content' => 'required'
		]);
		if ($validator->fails()) {
					 return redirect('dashboard/articles/'.$id.'/edit')
											 ->withErrors($validator)
											 ->withInput();
		}
		$values = $request->all();
		$article = Article::find($id);
		$article->name = $request['name'];
		$article->author = $request['author'];
		$article->content = $request['content'];
		$article->save();
		return redirect('dashboard/articles/'.$id);

	}


}
