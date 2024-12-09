<?php

    namespace App\Controller;

    use App\Model\
    {

        AparelhoModel,
        ClienteModel,
        ModeloModel

    };

    class AparelhoController extends Controller
    {

        public static function Form() : void
        {

            $model = new AparelhoModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            $clientes = new ClienteModel();

            $clientes->List();

            $modelos = new ModeloModel();

            $modelos->List();

            parent::Render("Aparelho/Form", array($model, $clientes->data, $modelos->data));

        }

        public static function Save() : void
        {

            $model = new AparelhoModel(
                (int) $_POST["id"],
                $_POST["descricao"],
                (int) $_POST["fk_cliente"],
                (int) $_POST["fk_modelo"]
            );

            $model->Save();

            header("Location: " . ROOT . "/aparelho/listagem");

        }

        public static function Toggle() : void
        {

            $model = new AparelhoModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: " . ROOT . "/aparelho/listagem");

        }

        public static function List() : void
        {

            $model = new AparelhoModel();

            $model->List();

            parent::Render("Aparelho/Listagem", $model->data);

        }

    }

?>