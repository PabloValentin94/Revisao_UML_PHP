<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" sizes="512x512" href="<?= ROOT ?>/View/Assets/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/View/Assets/CSS/Listagem.css">

        <title> Listagem de Orçamentos </title>

    </head>

    <body>

        <h1> Listagem de Orçamentos </h1>

        <div>

            <table>
                
                <thead>

                    <tr>

                        <th> Data do Orçamento </th>

                        <th> Preço </th>

                        <th> Validade </th>

                        <th> Aparelho Analisado </th>

                        <th> Modelo </th>

                        <th> Proprietário </th>

                        <th> Técnico Responsável </th>

                        <th> Remover </th>
                    
                    </tr>

                </thead>

                <tbody>

                    <?php if(count($model) > 0): ?>

                        <?php foreach($model as $orcamento): ?>

                            <tr>

                                <td> <?= (new DateTime($orcamento->GET_Data_Orcamento()))->format("d/m/Y") ?> </td>

                                <td> <?= "R$" . number_format($orcamento->GET_Preco(), 2, ",", ".") ?> </td>

                                <td> <?= (new DateTime($orcamento->GET_Data_Validade()))->format("d/m/Y") ?> </td>

                                <td> <?= $orcamento->GET_Aparelho()->GET_Descricao() ?> </td>

                                <td> <?= $orcamento->GET_Aparelho()->GET_Modelo()->GET_Descricao() ?> </td>

                                <td> <?= $orcamento->GET_Aparelho()->GET_Cliente()->GET_Nome() ?> </td>

                                <td> <?= $orcamento->GET_Tecnico()->GET_Nome() ?> </td>

                                <td> <a href="<?= ROOT ?>/orcamento/apagar?id=<?= $orcamento->GET_ID() ?>"> <i class="bx bx-trash">  </i> </a> </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="8"> NULL </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

        <a href="<?= ROOT ?>/orcamento"> Voltar </a>
        
    </body>

</html>