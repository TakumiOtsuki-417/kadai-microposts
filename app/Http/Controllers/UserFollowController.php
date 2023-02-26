<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    /**
     * ユーザをフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 閲覧者が、 idのユーザをフォロー
        \Auth::user()->follow($id);
        // 前のURLへリダイレクト
        return back();
    }

    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 閲覧者が、 idのユーザをアンフォロー
        \Auth::user()->unfollow($id);
        // 前のURLへリダイレクト
        return back();
    }
}
