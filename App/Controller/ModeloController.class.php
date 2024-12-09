<?php

    namespace App\Controller;

    use App\Model\ModeloModel;

    class ModeloController extends Controller
    {

        public static function Form() : void
        {

            $model = new ModeloModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Modelo/Form", $model);

        }

        public static function Save() : void
        {

            $model = new ModeloModel(
                (int) $_POST["id"],
                $_POST["descricao"]
            );

            $model->Save();

            header("Location: " . ROOT . "/modelo/listagem");

        }

        public static function Toggle() : void
        {

            $model = new ModeloModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: " . ROOT . "/modelo/listagem");

        }

        public static function List() : void
        {

            $model = new ModeloModel();

            $model->List();

            parent::Render("Modelo/Listagem", $model->data);

        }

    }

?>