<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>内容確認</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
   @php
$title = '内容確認';
@endphp

@extends('layout')

@section('content')
    <h1 class="text-center mt-2 mb-5">内容確認</h1>
    <div class="container">
        {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前</p>
                <div class="col-sm-8">
                    {{ $inputs['name'] }}
                </div>
            </div>
            <input type="hidden" name="name" value="{{ $inputs['name'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">性別</p>
                <div class="col-sm-8">
                    {{ $inputs['gender'] }}
                </div>
            </div>
            <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス</p>
                <div class="col-sm-8">
                    {{ $inputs['email'] }}
                </div>
            </div>
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">郵便番号</p>
                <div class="col-sm-8">
                    {{ $inputs['postal'] }}
                </div>
            </div>
            <input type="hidden" name="tel" value="{{ $inputs['postal'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">住所</p>
                <div class="col-sm-8">
                    {{ $inputs['adress'] }}
                </div>
            </div>
            <input type="hidden" name="name" value="{{ $inputs['adress'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">建物名</p>
                <div class="col-sm-8">
                    {{ $inputs['billding'] }}
                </div>
            </div>
            <input type="hidden" name="name" value="{{ $inputs['billding'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お問い合わせ内容</p>
                <div class="col-sm-8">
                    {{ $inputs['contents'] }}
                </div>
            </div>
            <input type="hidden" name="contents" value="{{ $inputs['contents'] }}">
            
            <div class="text-center">
                
                <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
DB