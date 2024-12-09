<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="<?= ROOT ?>/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Listagem.css">

        <title> Listagem de Técnicos </title>

    </head>

    <body>

        <div>

            <table>
                
                <thead>

                    <tr>

                        <th> Nome </th>

                        <th> Especialidade </th>

                        <th> Editar </th>

                        <th> Remover </th>
                    
                    </tr>

                </thead>

                <tbody>

                    <?php if(count($model) > 0): ?>

                        <?php foreach($model as $cliente): ?>

                            <tr>

                                <td> <?= $cliente->GET_Nome() ?> </td>

                                <td> <?= $cliente->GET_Especialidade() ?> </td>

                                <td> <a href="<?= ROOT ?>/tecnico?id=<?= $cliente->GET_ID() ?>"> <i class="bx bx-edit">  </i> </a> </td>

                                <td> <a href="<?= ROOT ?>/tecnico/alternar_ativacao?id=<?= $cliente->GET_ID() ?>&ativo=<?= $cliente->GET_Ativo() ?>"> <i class="<?= ((bool) $cliente->GET_Ativo()) ? "bx bx-message-square-x" : "bx bx-message-square-add" ?>">  </i> </a> </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td> NULL </td>

                            <td> NULL </td>

                            <td> NULL </td>

                            <td> NULL </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

        <a href="<?= ROOT ?>/tecnico"> Voltar </a>
        
    </body>

</html>