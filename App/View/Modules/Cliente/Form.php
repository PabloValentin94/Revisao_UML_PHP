<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="<?= ROOT ?>/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Form.css">

        <title> Cadastro de Clientes </title>

    </head>

    <body>

        <form action="<?= ROOT ?>/cliente/salvar" method="post">

            <input type="hidden" name="id" id="id" inputmode="numeric" value="<?= $model->GET_ID() ?>">

            <label for="nome"> Nome do Cliente: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->GET_Nome() ?>" required>

            <label for="cpf"> CPF do Cliente: </label>
            <input type="text" name="cpf" id="cpf" inputmode="numeric" value="<?= $model->GET_CPF() ?>" required>

            <div>

                <button type="reset"> Limpar </button>

                <button type="submit"> Salvar </button>

            </div>

            <div>

                <a href="<?= ROOT ?>/"> Voltar </a>

                <a href="<?= ROOT ?>/cliente/listagem"> Listagem </a>

            </div>

        </form>
        
    </body>

</html>