<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blogue App</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
<div class="container">
    <h1>Gestão de Categorias</h1>
    <table class="table table-dark table-striped">
        <thead>
                <tr>
                    <th scope="#">#</th>
                    <th scope="Categoria">Categoria</th>
                    <th scope="Ações">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categorias as $categoria)
                    <tr>
                        <th scope="row">{{ $ccategoria->id }}1</th>
                        <td>{{ $categoria->categoria }}</td>
                        <td>Edit Delete</td>
                    </tr>
                @empty
                    <th colspan="3">Ainda Sem Categorias</th>
                @endforelse
            </tbody>
    </table>

</html>
