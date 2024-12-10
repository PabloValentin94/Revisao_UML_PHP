<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="<?= ROOT ?>/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Form.css">

        <title> Cadastro de Orçamentos </title>

    </head>

    <body>

        <h1> Cadastro de Orçamentos </h1>

        <form action="<?= ROOT ?>/orcamento/salvar" method="post">

            <input type="hidden" name="id" id="id" inputmode="numeric" value="<?= $model[0]->GET_ID() ?>">

            <label for="data_orcamento"> Data do Orçamento: </label>
            <input type="date" name="data_orcamento" id="data_orcamento" value="<?= $model[0]->GET_Data_Orcamento() ?>" required>

            <label for="preco"> Preço: </label>
            <input type="number" name="preco" id="preco" value="<?= $model[0]->GET_Preco() ?>" autocomplete="off" step="0.01" required>

            <label for="data_validade"> Validade do Orçamento: </label>
            <input type="date" name="data_validade" id="data_validade" value="<?= $model[0]->GET_Data_Validade() ?>" required>

            <label for="fk_tecnico"> Técnico Responsável: </label>
            <select name="fk_tecnico" id="fk_tecnico" required>

                <?php foreach($model[1] as $tecnico): ?>

                    <option value="<?= $tecnico->GET_ID() ?>"<?= ($tecnico->GET_ID() === $model[0]->GET_FK_Tecnico()) ? " selected" : "" ?>> <?= $tecnico->GET_Nome() ?> </option>

                <?php endforeach ?>

            </select>

            <label for="fk_aparelho"> Aparelho Analisado: </label>
            <select name="fk_aparelho" id="fk_aparelho" required>

                <?php foreach($model[2] as $aparelho): ?>

                    <option value="<?= $aparelho->GET_ID() ?>"<?= ($aparelho->GET_ID() === $model[0]->GET_FK_Aparelho()) ? " selected" : "" ?>> <?= $aparelho->GET_Descricao() ?> </option>

                <?php endforeach ?>

            </select>

            <div>

                <button type="reset"> Limpar </button>

                <button type="submit"> Salvar </button>

            </div>

            <div>

                <a href="<?= ROOT ?>/"> Voltar </a>

                <a href="<?= ROOT ?>/orcamento/listagem"> Listagem </a>

            </div>

        </form>
        
    </body>

</html>