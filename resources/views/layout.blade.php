<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <!-- <header>
        <h1><a href="/">meiboapp</a></h1>
    </header> -->
    @include('header')
    <h2>@yield('pagetitle')</h2>
    <form  action="@yield('formAction')" method="post">
    @csrf
        <div class="form-inner-wrapper">
            <div class="form-row">
                <label for="name">名前：</label>
                <input type="text" name="name" value="@yield('inputNameValue')">
            </div>
            <div class="form-row"> 
                <label for="age">年齢：</label>
                <input type="text" name="age" value="@yield('inputAgeValue')">
            </div>
            <div class="form-row">
                <label for="gender">性別：</label>
                <input type="text" name="gender" value="@yield('inputGenderValue')">
            </div>
            <div class="form-row">
                @foreach($hobbies as $hobby)
                    <input type="checkbox" name="hobbies" value="{{ $hobby->id }}">{{ $hobby->name }}
                @endforeach
            </div>
            <div class="form-row button">
                <input type="submit" value="名簿に登録">
            </div>
        </div>
    </form>
    @yield('contents')
    
</body>
</html>