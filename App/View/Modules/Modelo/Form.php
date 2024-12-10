<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="<?= ROOT ?>/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Form.css">

        <title> Cadastro de Modelos de Aparelhos </title>

    </head>

    <body>

        <h1> Cadastro de Modelos de Aparelhos </h1>

        <form action="<?= ROOT ?>/modelo/salvar" method="post">

            <input type="hidden" name="id" id="id" inputmode="numeric" value="<?= $model->GET_ID() ?>">

            <label for="descricao"> Descrição do Modelo: </label>
            <input type="text" name="descricao" id="descricao" value="<?= $model->GET_Descricao() ?>" autocomplete="off" required>

            <div>

                <button type="reset"> Limpar </button>

                <button type="submit"> Salvar </button>

            </div>

            <div>

                <a href="<?= ROOT ?>/"> Voltar </a>

                <a href="<?= ROOT ?>/modelo/listagem"> Listagem </a>

            </div>

        </form>
        
    </body>

</html>