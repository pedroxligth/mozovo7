<!-- application/views/ambientes/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ambientes</title>
    
    


    <!-- Adicione links para seus estilos ou scripts, se necessário -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h1>Lista de Ambientes</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Ambiente</th>
                <th>localizacao</th>
                <th>Problema</th>
               
                <!-- Adicione mais colunas conforme necessário -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ambientes as $ambiente): ?>
                <tr>
                    <td><?= $ambiente->id; ?></td>
                    <td><?= $ambiente->nome_ambiente; ?></td>
                    <td><?= $ambiente->localizacao; ?></td>                    
                    <td><?= $ambiente->problema; ?></td>
                    
                    <!-- Adicione mais colunas conforme necessário -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    
</body>
    

</html>
