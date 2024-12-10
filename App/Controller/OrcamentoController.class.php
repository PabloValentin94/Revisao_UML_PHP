<?php

    namespace App\Controller;

    use App\Model\
    {

        OrcamentoModel,
        TecnicoModel,
        AparelhoModel

    };

    class OrcamentoController extends Controller
    {

        public static function Form() : void
        {

            $model = new OrcamentoModel();

            $tecnicos = new TecnicoModel();

            $tecnicos->List();

            $aparelhos = new AparelhoModel();

            $aparelhos->List();

            parent::Render("Orcamento/Form", array($model, $tecnicos->data, $aparelhos->data));

        }

        public static function Save() : void
        {

            $model = new OrcamentoModel(
                (int) $_POST["id"],
                $_POST["data_orcamento"],
                (float) str_replace(",", ".", $_POST["preco"]),
                $_POST["data_validade"],
                (int) $_POST["fk_tecnico"],
                (int) $_POST["fk_aparelho"]
            );

            $model->Save();

            header("Location: " . ROOT . "/orcamento/listagem");

        }

        public static function Erase() : void
        {

            (new OrcamentoModel())->Erase((int) $_GET["id"]);

            header("Location: " . ROOT . "/orcamento/listagem");

        }

        public static function List() : void
        {

            $model = new OrcamentoModel();

            $model->List();

            parent::Render("Orcamento/Listagem", $model->data);

        }

    }

?>