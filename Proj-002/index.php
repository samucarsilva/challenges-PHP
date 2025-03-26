<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mercadinho Alegria </title>
    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>


    <h2> Mercadinho Alegria </h2>


    <?php


        // Criando Uma Classe

            class Prateleira {


                // Atributos

                    public $quebraLinha = "<br></br>";
                    public $prateleira;

                
                // Métodos

                    public function adicionarProduto($produto, $preco) {

                        $this->prateleira = [
                            "<strong>Produto</strong>: " => $produto,
                            "<strong>Preço</strong>: R$ " => number_format($preco, 2, ",", ".")
                        ];


                        foreach($this->prateleira as $chave => $valor) {
                            echo $chave, $valor . $this->quebraLinha;
                        }

                        echo $this->quebraLinha;

                    }


            }


        // Instanciando Objetos

            $prateleira01 = new Prateleira();

            $prateleira01->adicionarProduto("Café em Pó 500g", 29.99);
            $prateleira01->adicionarProduto("Leite Integral 1 Litro", 4.59);
            $prateleira01->adicionarProduto("Baguete Brioche 340g", 13.99);


    ?>


</body>
</html>
