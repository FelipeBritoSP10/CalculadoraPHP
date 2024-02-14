<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <div class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5 col-8">
                <div class="card card-header text-center">
                    <strong>Calculadora</strong>
                </div>
                <div class="card-body">
                    <form action="resultado.php" method="POST">
                        <div class="form-group">
                            <select name="opcao" class="form-control">
                             <option selected>Escolha a operação</option>
                             <option value="soma">Adição</option>
                             <option value="sub">Subtração</option>
                             <option value="mult">Multiplicação</option>
                             <option value="div">Divisão</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="">Digite um número</label>  
                        <input type="number" class="form-control" name="num1" placeholder="Digite um número...">
                        <br>  
                        <label for="">Digite um número</label>  
                        <input type="number" class="form-control" name="num2" placeholder="Digite um número...">
                        </div>
                        <br>
                        <button class="btn btn-success">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <center>
    <h2>Desenvolvido por Felipe Brito</h2>
    </center>
</body>
</html>
