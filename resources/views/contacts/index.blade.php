<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
 @php
$title = 'お問い合わせ';
@endphp

@extends('layout')

@section('content')
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
    <div class="container">
        {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前<span class="contact-form-item-required">*</span></p>
                <div class="col-sm-8">
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
            @if ($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
            @endif
            </div>
            
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">性別<span class="contact-form-item-required">*</span></p>
                <div class="col-sm-8">
                    <label>{{ Form::radio('gender', "男性") }}男性</label>
                    <label>{{ Form::radio('gender', "女性") }}女性</label>
                </div>
            </div>
            @if ($errors->has('gender'))
                <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス<span class="contact-form-item-required">*</span></p>
                <div class="col-sm-8">
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">郵便番号</p>
                <div class="col-sm-8">
                    <p>	&#8376;</p>{{ Form::text('postal', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('postal'))
                <p class="alert alert-danger">{{ $errors->first('postal') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">住所<span class="contact-form-item-required">*</span></p>
                <div class="col-sm-8">
                    {{ Form::text('adress', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('adress'))
                <p class="alert alert-danger">{{ $errors->first('adress') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">建物</p>
                <div class="col-sm-8">
                    {{ Form::text('billding', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('billding'))
                <p class="alert alert-danger">{{ $errors->first('billding') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">ご意見<span class="contact-form-item-required">*</span><</p>
                <div class="col-sm-8">
                    {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('contents'))
                <p class="alert alert-danger">{{ $errors->first('contents') }}</p>
            @endif
            
            <div class="text-center">
                {{ Form::submit('確認画面へ', ['class' => 'btn btn-primary']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
