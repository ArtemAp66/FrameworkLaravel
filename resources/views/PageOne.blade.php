<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Page 1</title>
</head>
<body>
<div class="row">
    <div class="col"></div>
    <div class="col-6 border border-1 rounded-2 mt-2 p-2">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputFIO" class="form-label">ФИО:</label>
                <input name="FIO" value="{{session('FIO')}}" type="text" class="form-control" id="exampleInputFIO">
            </div>
            <div class="mb-3">
                <label for="exampleInputAge" class="form-label">Возраст:</label>
                <input name="Age" value="{{session('Age')}}" type="text" class="form-control" id="exampleInputAge">
            </div>
            <div class="mb-3">
                <label for="exampleInputCountry" class="form-label">Страна:</label>
                <select name="Country" class="form-select" aria-label="Default select example">
                    <option selected>Страна</option>
                    <option value="Россия">Россия</option>
                    <option value="США">США</option>
                    <option value="Индия">Индия</option>
                    <option value="Китай">Китай</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress" class="form-label">Адрес:</label>
                <input name="Address" class="form-control" id="exampleInputAddress">
            </div>
            <div class="mb-3">
                <label for="exampleInputEnthusiasm" class="form-label">Увлечение:</label>
                <select name="Enthusiasm" class="form-select" aria-label="Default select example">
                    <option selected>Увлечение</option>
                    <option value="Футбол">Футбол</option>
                    <option value="Волейбол">Волейбол</option>
                    <option value="Хоккей">Хоккей</option>
                    <option value="Теннис">Теннис</option>
                </select>
            </div>
            <div class="form-outline mb-3">
                <label class="form-label" for="textAreaAbout">О себе:</label>
                <textarea name="About" class="form-control" id="textAreaAbout" rows="8"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
    <div class="col"></div>
</div>
</body>
</html>
