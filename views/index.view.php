<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Obiective</title>
</head>
<body>
<div class="m-4">
    <div class="row">
        <div class="col-sm-2">
            <h3>Căutare obiectiv</h3>
            <form action="/goal/find" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Denumire:</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-success">Caută</button>

            </form>
        </div>
        <div class="col-sm-10">
            <h3 class='text-center mt-2'>Lista obiectivelor</h3>
            <table class='table table-hover table-bordered table-striped'>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Denumire</th>
                    <th>Descriere</th>
                    <th>Dată scadentă</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($goals as $key => $goal):?>
                    <tr>
                        <td><?= $goal->id ?></td>
                        <td><?= $goal->name ?></td>
                        <td><?= $goal->description ?></td>
                        <td><?= date_format(date_create($goal->due_date), "d.m.Y") ?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <div>
                <a href="/goal/adauga" class="btn btn-success">Adauga obiectiv</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>