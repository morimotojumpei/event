@extends('layouts.app')

@section('content')
<img src="image/contact.top.png" alt="問い合わせ" class="contact_top">
  <div class="background">
      <form method="POST" action="{{ route('contact.confirm') }}">
        @csrf
         <div class="contact_content"> 
          <label>メールアドレス</label><br>
          <input name="email" value="{{ old('email') }}" type="text">
            @if ($errors->has('email'))
              <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
            <br>

          <label>タイトル</label><br>
          <input name="title" value="{{ old('title') }}" type="text">
            @if ($errors->has('title'))
                <p class="error-message">{{ $errors->first('title') }}</p>
            @endif
             <br>

          <label>お問い合わせ内容</label><br>
           <textarea name="body">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
                <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
            <br>

         </div>
          <button type="submit">入力内容確認</button>
       </form>
      </div>
      @endsection