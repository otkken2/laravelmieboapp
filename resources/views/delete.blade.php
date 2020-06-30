<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="/">meiboapp</a></h1>
<h2>削除確認ページ</h2>
<p>このデータを削除してもよろしいですか？</p>
    <table border="1">
        <tr>        
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
        </tr>
        <tr>
            <td>{{ $person->name }}</td>
            <td>{{ $person->age }}</td>
            <td>{{ $person->gender }}</td>
        </tr>
    </table>
    <form action="/delete/{ $person->id }" method="post">
    {{ csrf_field() }}
    <input type='hidden' name='id' value='{{ $person->id }}'>
        <input type="submit" value="削除する">
    </form>
</body>
</html>