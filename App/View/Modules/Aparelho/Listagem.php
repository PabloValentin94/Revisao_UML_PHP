<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="<?= ROOT ?>/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Listagem.css">

        <title> Listagem de Modelos de Aparelhos </title>

    </head>

    <body>

        <div>

            <table>
                
                <thead>

                    <tr>

                        <th> Descrição </th>

                        <th> Modelo </th>

                        <th> Proprietário </th>

                        <th> Editar </th>

                        <th> Remover </th>
                    
                    </tr>

                </thead>

                <tbody>

                    <?php if(count($model) > 0): ?>

                        <?php foreach($model as $aparelho): ?>

                            <tr>

                                <td> <?= $aparelho->GET_Descricao() ?> </td>

                                <td> <?= $aparelho->GET_Modelo()->GET_Descricao() ?> </td>

                                <td> <?= $aparelho->GET_Cliente()->GET_Nome() ?> </td>

                                <td> <a href="<?= ROOT ?>/aparelho?id=<?= $aparelho->GET_ID() ?>"> <i class="bx bx-edit">  </i> </a> </td>

                                <td> <a href="<?= ROOT ?>/aparelho/alternar_ativacao?id=<?= $aparelho->GET_ID() ?>&ativo=<?= $aparelho->GET_Ativo() ?>"> <i class="<?= ((bool) $aparelho->GET_Ativo()) ? "bx bx-message-square-x" : "bx bx-message-square-add" ?>">  </i> </a> </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td> NULL </td>

                            <td> NULL </td>

                            <td> NULL </td>

                            <td> NULL </td>

                            <td> NULL </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

        <a href="<?= ROOT ?>/aparelho"> Voltar </a>
        
    </body>

</html>