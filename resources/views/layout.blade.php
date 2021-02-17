<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1><a href="/">meiboapp</a></h1>
    <h2>@yield('pagetitle')</h2>
    <form action="@yield('formAction')" method="post">
    @csrf
        <div>
            <label for="name">名前：</label>
            <input type="text" name="name" value="@yield('inputNameValue')">
        </div>
        <div>
            <label for="age">年齢：</label>
            <input type="text" name="age" value="@yield('inputAgeValue')">
        </div>
        <div>
            <label for="gender">性別：</label>
            <input type="text" name="gender" value="@yield('inputGenderValue')">
        </div>
        @foreach($hobbies as $hobby)
            <input type="checkbox" name="hobbies" value="{{ $hobby->id }}">{{ $hobby->name }}
        @endforeach
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
    @yield('contents')
    
</body>
</html>