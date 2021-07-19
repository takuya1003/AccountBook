@extends('layouts.layout')
@section('title','一覧')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h2>一覧</h2>
        @if(session('err_msg'))
            <p class = "text-danger">{{session('err_msg')}}</p>
        @endif 
        <table class="table table-striped">
            <tr>
                <th>日付</th>
                <th>項目</th>
                <th>収入</th>
                <th>支出</th>
                <th>残額</th>
                <th></th>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick="">削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
            <tr>
                <td>1/1</td>
                <td><a href="#">hoge</a></td>
                <td>100</td>
                <td>100</td>
                <td><button type="button" class="btn btn-primary" onclick="">編集</button></td>
                <form method="POST" action="" onSubmit="return checkDelete()">
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
            </tr>
        </table>
    </div>
</div>
<script>
function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection