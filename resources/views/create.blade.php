@extends('layouts.layout')
@section('title', '投稿ページ')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @if ($errors->has('title'))
            <div class="text-danger">
                {{ $errors->first('title') }}
            </div>
        @endif
        <h2>投稿フォーム</h2>
        <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
        @csrf
            <div class="form-group">
                <label for="">日付</label>
                <input id="title" name="date" class="form-control" value="{{ old('title') }}" type="text">
                <label for="title">項目</label>
                <input id="title" name="item" class="form-control" value="{{ old('title') }}" type="text">
            </div>
            @if ($errors->has('content'))
                <div class="text-danger">
                    {{ $errors->first('content') }}
                </div>
            @endif
            <div class="form-group">
                <label for="content">収入</label>
                <input id="title" name="income" class="form-control" value="{{ old('title') }}" type="text">
            </div>
            <div class="form-group">
                <label for="content">支出</label>
                <input id="title" name="expense" class="form-control" value="{{ old('title') }}" type="text">
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('list') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">登録する</button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('登録してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection