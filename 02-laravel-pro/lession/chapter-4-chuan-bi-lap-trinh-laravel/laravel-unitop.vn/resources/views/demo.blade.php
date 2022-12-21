{{-- @for ($i = 2; $i < $n; $i++)
    <p>Giá trị hiện tại của i là:{{$i}} </p>
@endfor --}}
{{-- @foreach ($users as $user)
    <p>Name: {{$user['name']}}</p>
@endforeach --}}

{{-- comment trong blade.php --}}
{{-- ctrl + / --}}


@include('inc.comment', ['title' => "comment bài viết"])

@php
    foreach ($users as $user => $value) {
        echo $value['name']."<br/>";
    }
@endphp

