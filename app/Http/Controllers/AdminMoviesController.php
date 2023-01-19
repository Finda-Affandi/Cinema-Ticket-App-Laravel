<?php

namespace App\Http\Controllers;

use App\Models\movies;
use App\Models\transaction;
use Illuminate\Http\Request;

class AdminmoviesController extends Controller
{
    public $timestamps = false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Movies::all();
        // return view('admin.posts.index', [
        //     'Posts' => Movies::all()
        // ]);
        // $transaction = transaction::all();
        // return view('admin.transaksi', compact('transaction'));



        $movies = movies::all();
        return view('admin.posts.index', compact('movies'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'picUrl' => 'mimes:jpeg,png,jpg,gif,svg'
        // ]);

        // $picUrl = $request->picUrl->getClientOriginalName() . '-' . time() . '.' . $request->picUrl->extension();
        // $request->picUrl->move(public_path('image'), $picUrl);

        $store = new movies;
        $store->name = $request->name;
        $store->picUrl = $request->picUrl;
        $store->genre = $request->genre;
        $store->director = $request->director;
        $store->duration = $request->duration;
        $store->production = $request->production;
        $store->price = $request->price;
        $store->synopsis = $request->synopsis;
        $store->save();


        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  return $movies;
        $movDetails = movies::find($id);
        return view('admin.posts.show', compact('movDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $movies = movies::find($id);
        return view('admin.posts.edit', compact(['movies']));
        // return view('admin.posts.edit', [
        //     'movies' => $movies
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movies $movies, $id)
    {
        $store = movies::find($id);
        $store->name = $request->name;
        $store->picUrl = $request->picUrl;
        $store->genre = $request->genre;
        $store->director = $request->director;
        $store->production = $request->production;
        $store->duration = $request->duration;
        $store->price = $request->price;
        $store->synopsis = $request->synopsis;
        $store->update();
        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // movies::destroy($movies->id);
        // return redirect('/admin/posts');
        $movies = movies::find($id);
        $movies->delete();
        return redirect('/admin/posts');
    }
}
