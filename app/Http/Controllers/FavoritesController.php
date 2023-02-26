<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 記事をお気に入りに登録するアクション。
     * @param  $id  記事のid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 閲覧者が、 idの記事をお気に入り
        \Auth::user()->add_favorite($id);
        // 前のURLへリダイレクト
        return back();
    }

    /**
     * 記事をお気に入り解除するアクション。
     * @param  $id  記事のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 閲覧者が、 idの記事をお気に入り解除
        \Auth::user()->remove_favorite($id);
        // 前のURLへリダイレクト
        return back();
    }
}
