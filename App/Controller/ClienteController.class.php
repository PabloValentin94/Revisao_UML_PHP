<?php

    namespace App\Controller;

    use App\Model\ClienteModel;

    class ClienteController extends Controller
    {

        public static function Form() : void
        {

            $model = new ClienteModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Cliente/Form", $model);

        }

        public static function Save() : void
        {

            $model = new ClienteModel(
                (int) $_POST["id"],
                $_POST["nome"],
                $_POST["cpf"]
            );

            $model->Save();

            header("Location: " . ROOT . "/cliente/listagem");

        }

        public static function Toggle() : void
        {

            $model = new ClienteModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: " . ROOT . "/cliente/listagem");

        }

        public static function List() : void
        {

            $model = new ClienteModel();

            $model->List();

            parent::Render("Cliente/Listagem", $model->data);

        }

    }

?>