<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ordem de Serviço</title>
</head>

<body>
    <!-- Incluindo o menu superior do site -->
    <?php include_once "view/menu.php"; ?>

    <div class="container">
        <div class="row mt-3 px-2">
            <div class="col-sm-8 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Cadastro de uma nova ordem de Serviço!</h5>
                <form action="<?php echo URL; ?>enviar-servico" method="post">
                    <div class="form-group">
                        <label for="nome">Nome do Cliente</label>
                        <input type="text" name="nome_cliente" id="nome" placeholder="Informe o nome completo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="data_pedido">Data do pedido</label>
                                <input type="date" name="data_pedido" id="data_pedido" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <label for="data_entrega">Data da entrega</label>
                                <input type="date" name="data_entrega" id="data_entrega" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="valor_pedido">Valor do serviço</label>
                                <input type="number" name="valor_servico" id="valor_servico" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="descricao_pedido" class="form-label">Descrição do serviço</label>
                                <input type="text" name="descricao_servico" id="descricao_servico" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success mt-3">cadastrar</button>
                    </div>
            </div>

            </form>
        </div>
    </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>