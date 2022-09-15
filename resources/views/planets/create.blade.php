<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>惑星情報登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/planets" method="post">
        @csrf
        <div class="form-item">
            <label for="name">名前</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-item">
            <label for="name_en">名前(英語)</label>
            <input type="text" id="name_en" name="name_en" value="{{ old('name_en') }}">
        </div>
        <div class="form-item">
            <label for="radius">半径</label>
            <input type="text" id="radius" name="radius" value="{{ old('radius') }}">
        </div>
        <div class="form-item">
            <label for="weight">重量</label>
            <input type="text" id="weight" name="weight" value="{{ old('weight') }}">
        </div>
        <input type="submit" value="登録">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>
