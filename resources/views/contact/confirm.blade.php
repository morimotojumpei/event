@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf
    <div class="contact_content">
      <label>メールアドレス:</label><br>
      {{ $inputs['email'] }}
      <input name="email" value="{{ $inputs['email'] }}" type="hidden">
      <br>
      <p></p>

      <label>タイトル:</label><br>
      {{ $inputs['title'] }}
      <input name="title" value="{{ $inputs['title'] }}" type="hidden">
      <br>
      <p></p>

      <label>お問い合わせ内容:</label><br>
      {!! nl2br(e($inputs['body'])) !!}
      <input name="body" value="{{ $inputs['body'] }}" type="hidden">
      <br>
     
      <button type="submit" name="action" value="back">入力内容修正</button><br>
    
      <button type="submit" name="action" value="submit">送信する</button><br>
    </div>
  </form>
@endsection