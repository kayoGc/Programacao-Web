<?php 

    class Produto { // Objeto Produto, manter maisculo
        var $Codigo;
        var $Descricao;
        var $Preco;
        var $Quantidade;
    

        function ImprimeEtiqueta()
        {

            print 'Código:' . $this->Codigo . "<br>";
            print 'Descrição:' . $this->Descricao . "<br> <br>";

        }
    }
?>