<?php

    namespace App\Controller;

    use App\Model\TecnicoModel;

    class TecnicoController extends Controller
    {

        public static function Form() : void
        {

            $model = new TecnicoModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Tecnico/Form", $model);

        }

        public static function Save() : void
        {

            $model = new TecnicoModel(
                (int) $_POST["id"],
                $_POST["nome"],
                $_POST["especialidade"]
            );

            $model->Save();

            header("Location: " . ROOT . "/tecnico/listagem");

        }

        public static function Toggle() : void
        {

            $model = new TecnicoModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: " . ROOT . "/tecnico/listagem");

        }

        public static function List() : void
        {

            $model = new TecnicoModel();

            $model->List();

            parent::Render("Tecnico/Listagem", $model->data);

        }

    }

?>