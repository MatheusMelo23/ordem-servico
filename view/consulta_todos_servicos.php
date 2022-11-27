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
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <title>Ordem de Serviço</title>
</head>

<body>

    <?php include_once "view/menu.php"; ?>


    <div class="container-fluid ">
        <div class="row mt-3 px-2 ">
            <div class="col-sm-10 rounded border mx-auto p-3 shadow ">
                <h5 class="text-center">Consulta de Todas as ordem de serviços</h5>
                <table class="table table-striped" name="tabela" id="tabela">
                    <thead>
                        <tr>
                            <th scope="col">#Serviço</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Data do Serviço</th>
                            <th scope="col">Data da Entrega</th>
                            <th scope="col">Valor do Serviço</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dados_servico as $value) {
                            echo "<tr>
                                        <th scope='row'>$value->cod_servico</th>
                                        <td>$value->nome_cliente</td>
                                        <td>" . date("d/m/y", strtotime($value->data_pedido)) . "</td>
                                        <td>" . date("d/m/y", strtotime($value->data_entrega)) . "</td>
                                        <td>R$ $value->valor_servico</td>
                                        <td>$value->descricao_servico</td>
                                        <td><a href='" . URL . "realmente-excluir-servico/$value->cod_servico' onclick='return confirm(\"Tem REALMENTE certeza?\")' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a></td>

                                    </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <!--  DataTables -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabela').DataTable();
        });
    </script>



</body>

</html>