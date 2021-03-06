@extends('layout')

@section('pagetitle','新規登録')

@section('formAction','/')

@section('contents')
    <div class="list"><!-- 登録者一覧 -->
        @if(count($people) != 0)
        <table>
            <tr>
                <th>名前</th>
                <th>年齢</th>
                <th>性別</th>
                <th>趣味</th>
                <th></th>
                <th></th>

            </tr>
            @foreach($people as $person)
            <tr>
                <td>{{ $person->name }}</td>
                <td>{{ $person->age }}</td>
                <td>{{ $person->gender }}</td>
                <td>
                    @foreach($person->hobbies as $hobby)
                        <div class="hobby_tag">{{ $hobby->name }}</div>
                    @endforeach
                </td>
                
                <td><a href="/edit/{{ $person->id }}">編集</a></td>
                <td><a href="/delete/{{ $person->id }}">削除</a></td>
            </tr>
            @endforeach
        </table>
        @else
        <p>まだ誰も登録されていません。</p>
        @endif
    </div>
    <!-- テストです -->
    @foreach( $ad_htmls as $ad_html )
    {!! $ad_html->html !!}<br>
    @endforeach
@endsection