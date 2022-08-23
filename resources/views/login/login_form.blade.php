<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <!-- @vite('resources/css/app.css') -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js')}}" defer></script>
</head>
<body>
    <h1 class="text-3xl font-bold underline">ログインフォーム</h1>
    <form action="{{route('login')}}" method="POST">
      @csrf
      <h2>Please signin</h2>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <label for="inputEmail">Email address</label>
      <input type="email" name="email" id="" placeholder="Email address">
      <label for="inputPassword">Password</label>
      <input type="password" name="password" id="" placeholder="Password">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ログイン</button>
    </form>
</body>
</html>