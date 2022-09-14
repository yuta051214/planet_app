<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>惑星情報登録</h1>
    <form action="/planets" method="post">
        @csrf
        <div>
            <label for="name">名前</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="name_en">名前(英語)</label>
            <input type="text" id="name_en" name="name_en">
        </div>
        <div>
            <label for="radius">半径</label>
            <input type="text" id="radius" name="radius">
        </div>
        <div>
            <label for="weight">重量</label>
            <input type="text" id="weight" name="weight">
        </div>
        <input type="submit" value="登録">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>
