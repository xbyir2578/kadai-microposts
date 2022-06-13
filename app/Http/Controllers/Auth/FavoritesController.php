<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りにする
     */
    public function store($id)
    {
        \Auth::user()->favorite($id);
        return back();
    }

    /**
     * お気に入りから削除する。
     */
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }
}