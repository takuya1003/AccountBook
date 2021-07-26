<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Remains;
use PhpParser\Node\Expr\AssignOp\Pow;

class AccountBookController extends Controller
{
    /**
     * トップページ
     * @return view
     */
    public function index()
    {
        $lists = Post::all();
        return view('list',['lists' => $lists]);
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
    public function store(Request $request)
    {
        $posts = new Post;
        $input_remains = new Remains;
        $get_remains = Remains::get(['remains']);

        foreach($get_remains as $val){
            $remains = $val->remains;
        }

        if ($request->income !== null) {
            $posts->fill($request->all());
            $input_remains->remains = $posts->remains = $remains + $request->income;
            $posts->save();
            \DB::table('remains')
                ->where('remains', $remains)
                ->update([
                    'remains' => $input_remains->remains
            ]);
        } elseif ($request->expense !== null) {
            $posts->fill($request->all());
            $input_remains->remains = $posts->remains = $remains - $request->expense;
            $posts->save();
            \DB::table('remains')
                ->where('remains', $remains)
                ->update([
                    'remains' => $input_remains->remains
            ]);
        }
        return redirect('/');
    }

    /**
     * 削除機能
     */
    public function delete($id)
    {
        $lists = Post::find($id);
        $lists->delete();
        return redirect('/');
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
