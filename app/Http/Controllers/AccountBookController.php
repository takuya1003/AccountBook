<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountBookController extends Controller
{
    /**
     * トップページ
     * @return view
     */
    public function index()
    {
        return view('list');
    }

    /**
     * 投稿ページ
     * @return view
     */
    public function create()
    {
        return view('create');
    }

    /**
     * 登録機能
     * 
     */
    public function store()
    {

    }

    /**
     * 削除機能
     */
    public function delete()
    {

    }
    
    /**
     * 編集ページ
     */
    public function edit()
    {

    }


    /**
     * 
     */
}
