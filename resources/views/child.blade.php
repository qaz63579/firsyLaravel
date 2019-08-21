<!-- 儲存於 resources/views/child.blade.php -->

@extends('layouts.master')

@section('title', '頁面標題')

@section('sidebar')
    @parent

    <p>這邊會附加在主要的側邊欄。</p>
@endsection

@section('content')
    <p>這是我的主要內容。</p>
@endsection
