<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <h1>惑星情報編集</h1>
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ $planet->name }}">
        </div>
        <div>
            <label for="name_en">名前(英語)</label>
            <input type="text" name="name_en" id="name_en" value="{{ $planet->name_en }}">
        </div>
        <div>
            <label for="radius">半径</label>
            <input type="text" name="radius" id="radius" value="{{ $planet->radius }}">
        </div>
        <div>
            <label for="weight">重量</label>
            <input type="text" name="weight" id="weight" value="{{ $planet->weight }}">
        </div>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>
