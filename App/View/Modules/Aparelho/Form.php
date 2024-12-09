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

        <form action="<?= ROOT ?>/aparelho/salvar" method="post">

            <input type="hidden" name="id" id="id" inputmode="numeric" value="<?= $model[0]->GET_ID() ?>">

            <label for="descricao"> Descrição do Aparelho: </label>
            <input type="text" name="descricao" id="descricao" value="<?= $model[0]->GET_Descricao() ?>" required>

            <label for="fk_cliente"> Proprietário: </label>
            <select name="fk_cliente" id="fk_cliente" required>

                <?php foreach($model[1] as $cliente): ?>

                    <option value="<?= $cliente->GET_ID() ?>"<?= ($cliente->GET_ID() === $model[0]->GET_FK_Cliente()) ? " selected" : "" ?>> <?= $cliente->GET_Nome() ?> </option>

                <?php endforeach ?>

            </select>

            <label for="fk_modelo"> Modelo: </label>
            <select name="fk_modelo" id="fk_modelo" required>

                <?php foreach($model[2] as $modelo): ?>

                    <option value="<?= $modelo->GET_ID() ?>"<?= ($modelo->GET_ID() === $model[0]->GET_FK_Modelo()) ? " selected" : "" ?>> <?= $modelo->GET_Descricao() ?> </option>

                <?php endforeach ?>

            </select>

            <div>

                <button type="reset"> Limpar </button>

                <button type="submit"> Salvar </button>

            </div>

            <div>

                <a href="<?= ROOT ?>/"> Voltar </a>

                <a href="<?= ROOT ?>/aparelho/listagem"> Listagem </a>

            </div>

        </form>
        
    </body>

</html>