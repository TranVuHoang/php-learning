{{-- child.blade.php kế thừa từ app.blade.php --}}
@extends('layouts.app')

@section('title', "Tiêu đê trang con")
	
@section('content')
    <p>Nội dung trang con</p>
   {{-- if trong tample  --}}

   @isset($post_title)
        <p>Tiêu đề:{{$post_title}}</p>
   @endisset

   @empty($users)
        <p>Không có user nào</p>
   @endempty
   
    @if($data % 2 == 0) 
        <p>{{$data}} là số chẵn</p> 
    @else 
        <p>{{$data}} là số lẻ</p>
    @endif
@endsection

@section('sidebar')
    @parent
    <p>Sidebar trang con</p>
@endsection

