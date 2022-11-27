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
    <title>Ordem de Serviços</title>
</head>

<body>
    <!-- Incluindo o menu superior do site -->
    <?php include_once "view/menu.php"; ?>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <p>Este é um projeto foi feito por Matheus de Melo, do 3º semestre de Análise e Desenvolvimento de sistemas, da ETEC de Francisco Morato,
                    como conclusão de nota da matéria programação WEB III, ministrada pelo professor Anderson Spera</strong></p>
                </div>

                <div class="alert alert-success" role="alert">
                    <p>This project was made by Matheus de Melo, from the third module of systems analysis and development of the School Etec Francisco Morato,
                    as a mention conclusion of WEB PROGRAMMING III, ministered by the awesome teatcher Anderson Wait!</strong></p>
                </div>

                <div class="alert alert-info" role="alert">
                    <p>Navegue pelas pastas do projeto e pelo seu menu intuitivo!!Divirta-se!</strong></p>
                </div>

                <div class="alert alert-info" role="alert">
                    <p>Navigate through project folders and it's intuitive menu!!Have fun!</strong></p>
                </div>

                <form action="<?php echo URL; ?>opcao-secreta" method="post">
                    <div class="form-group">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success mt-3">Você gostaria de adicionar o campo proibido no menu?????</button>
                        </div>
                    </div>
                </form>
                <form action="<?php echo URL; ?>excluir-secreta" method="post">
                    <div class="form-group">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger mt-3">Você gostaria de remover o campo proibido do menu?????</button>
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