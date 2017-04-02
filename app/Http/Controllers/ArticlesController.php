<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::published()->get();
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param ArticleRequest $articleRequest
	 * @return Response
	 */
	public function store(ArticleRequest $articleRequest)
	{
		$input = $articleRequest->all();
		Article::create($input);
		return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::find($id);
		if (empty($article))
			abort(484);
		return view('articles.show', compact('article'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);
		if(empty($article))
			abort(404);
		return view('articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @param ArticleRequest $articleRequest
	 * @return Response
	 */
	public function update($id, ArticleRequest $articleRequest)
	{
		$article = Article::findOrFail($id);
		$article->update($articleRequest->all());
		return redirect('articles');
//		return redirect('articles/'.$article->id);
//		return "Hello";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
