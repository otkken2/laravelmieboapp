<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
@include('header')
<h2>削除確認ページ</h2>
<p class="notice">このデータを削除してもよろしいですか？</p>
<div class="list">
    <table>
        <tr>        
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
            <th>趣味</th>
        </tr>
        <tr>
            <td>{{ $person->name }}</td>
            <td>{{ $person->age }}</td>
            <td>{{ $person->gender }}</td>
            <td>
                @foreach($person->hobbies as $hobby)
                    <div class="hobby_tag">{{ $hobby->name }}</div>
                @endforeach
            </td>
        </tr>
    </table>
</div>
    <form action="/delete/{ $person->id }" method="post">
        {{ csrf_field() }}
        <input type='hidden' name='id' value='{{ $person->id }}'>
        <input class="form-row" type="submit" value="削除する">
    </form>
</body>
</html>