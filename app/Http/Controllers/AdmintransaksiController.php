<?php

namespace App\Http\Controllers;

use App\Models\movies;
use App\Models\transaction;
use Illuminate\Http\Request;

class AdmintransaksiController extends Controller
{
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
        if (auth()->user()->name !== 'ega') {
            abort(403);
        }
        $transaction = transaction::all();
        return view('admin.transaksi', compact('transaction'));
    }
}
