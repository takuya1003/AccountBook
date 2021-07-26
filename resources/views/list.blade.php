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
                <th></th>
            </tr>
            @foreach($lists as $list)
            <tr>
                <td>{{ $list->date }}</td>
                <td>{{ $list->item }}</td>
                <td>{{ $list->income }}</td>
                <td>{{ $list->expense }}</td>
                <td>{{ $list->remains }}</td>
                <td><a href="{{ route('create') }}" class="btn btn-primary">編集</a></td>
                <form method="POST" action="{{ route('delete', $list->id) }}" onSubmit="return checkDelete()">
                @method('DELETE')
                @csrf
                <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
                </form>
            </tr>
            @endforeach
            
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