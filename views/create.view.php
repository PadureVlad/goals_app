<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Adauga obiectiv</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h2 class="text-center">Adauga un obiectiv</h2>
    </div>
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="/goal/store" method="post">
                <div class="mb-3">
                    <label for="name">Nume</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description">Descriere</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label for="due_date">Dată scadentă</label>
                    <input type="date" name="due_date" id="due_date" class="form-control">
                </div>
                <button class="btn btn-success">Salveaza</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>