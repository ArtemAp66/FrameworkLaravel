<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PageTwo</title>
</head>
<body>
    <label>ФИО:</label>
    <p>{{session()->get('FIO')}}</p>
    <label>Возраст:</label>
    <p>{{session()->get('Age')}}</p>
    <label>Стана:</label>
    <p>{{session()->get('Country')}}</p>
    <label>Адрес:</label>
    <p>{{session()->get('Address')}}</p>
    <label>Увлечение:</label>
    <p>{{session()->get('Enthusiasm')}}</p>
    <label>О себе:</label>
    <p>{{session()->get('About')}}</p>
</body>
</html>
