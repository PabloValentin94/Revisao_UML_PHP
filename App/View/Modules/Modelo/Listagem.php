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

                        <th> Editar </th>

                        <th> Remover </th>
                    
                    </tr>

                </thead>

                <tbody>

                    <?php if(count($model) > 0): ?>

                        <?php foreach($model as $modelo): ?>

                            <tr>

                                <td> <?= $modelo->GET_Descricao() ?> </td>

                                <td> <a href="<?= ROOT ?>/modelo?id=<?= $modelo->GET_ID() ?>"> <i class="bx bx-edit">  </i> </a> </td>

                                <td> <a href="<?= ROOT ?>/modelo/alternar_ativacao?id=<?= $modelo->GET_ID() ?>&ativo=<?= $modelo->GET_Ativo() ?>"> <i class="<?= ((bool) $modelo->GET_Ativo()) ? "bx bx-message-square-x" : "bx bx-message-square-add" ?>">  </i> </a> </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td> NULL </td>

                            <td> NULL </td>

                            <td> NULL </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

        <a href="<?= ROOT ?>/modelo"> Voltar </a>
        
    </body>

</html>