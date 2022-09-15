<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>惑星情報編集</h1>

    @if ($errors->any())
        <div>
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('patch')
        <div class="form-item">
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name', $planet->name) }}">
        </div>
        <div class="form-item">
            <label for="name_en">名前(英語)</label>
            <input type="text" name="name_en" id="name_en" value="{{ old('name_en', $planet->name_en) }}">
        </div>
        <div class="form-item">
            <label for="radius">半径</label>
            <input type="text" name="radius" id="radius" value="{{ old('radius', $planet->radius) }}">
        </div>
        <div class="form-item">
            <label for="weight">重量</label>
            <input type="text" name="weight" id="weight" value="{{ old('weight', $planet->weight) }}">
        </div>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>
