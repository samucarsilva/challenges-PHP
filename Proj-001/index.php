<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Máquina de Café </title>
    <style>

        h2 {
            text-align: center;
        }

        p {
            text-align: center;
            margin: auto;
        }

        img {

            display: block;
            margin: auto;
            width: 480px;
            
            
        }

    </style>
</head>
<body>


    <h2> Máquina de Café </h2>
   

    <?php


        // Criando Uma Classe

            class MaquinaCafe {


                // Atributos

                    private array $valoresAceitos;
                    private string $quebraLinha;
                    public float $valorInserido = 0;
                    
                    public const VALOR_CAFE = 5.00;

                
                // Métodos

                    public function __construct() {

                        $this->quebraLinha = "<br></br>";

                        $this->valoresAceitos = [
                            0.25, 0.50, 1.00, 2.00
                        ];

                        $this->exibirInfo();
                        

                    }


                    function inserirValor($valor) {

                            if($valor == 0.25 || $valor == 0.50 
                                    || $valor == 1.00 || $valor == 2.00) {

                                $this->valorInserido += $valor;

                                echo '<p> Crédito: R$ ', number_format($this->valorInserido, 2, ",", "."), "</p>" . $this->quebraLinha;


                                // Utilizando o Looping While Para verificar Enquanto o Valor Não For Suficiente

                                while($this->valorInserido < self::VALOR_CAFE) {
                                    echo '<p> Valor Insuficiente. Insira Mais Moedas. </p>' . $this->quebraLinha;
                                    return; // Sai do Método Até o Que Valor Seja Suficiente
                                }


                                // Se o Valor Inserido For Suficiente

                                $troco = $this->valorInserido - self::VALOR_CAFE;


                                if($troco > 0) {
                                    echo "<p> Seu Troco é: R$ ", number_format($troco, 2, ",", "."), "</p>" . $this->quebraLinha;
                                }


                                echo '<p> O Café Foi Comprado Com Sucesso! </p>' . $this->quebraLinha;
                                echo '<div> <img src="../Cafézinho.gif" alt="GIF de Um Cafézinho"> </div>';


                                // Reseta o Valor Após a Compra

                                $this->valorInserido = 0.00;


                            }else {

                                echo "<p> A máquina não aceita este valor. Por favor, insira um valor válido! </p>" . $this->quebraLinha;

                            }


                    }


                    function exibirInfo() {

                        echo "Preço do Café: R$ 5.00" . $this->quebraLinha;

                            for($indice = 0; $indice < count($this->valoresAceitos); $indice++) {
                                echo "R$: ", number_format($this->valoresAceitos[$indice], 2, ",", ".") . $this->quebraLinha;
                            }

                        echo "<p> Por Favor, Insira o Valor Aqui. </p>" . $this->quebraLinha;
                        
                    }


            }


        // Instanciando Objetos

            $maquinaCafeTerreo = new MaquinaCafe();
            $maquinaCafeTerreo->inserirValor(2.00);
            $maquinaCafeTerreo->inserirValor(1.00);
            $maquinaCafeTerreo->inserirValor(2.00);


    ?>


</body>
</html>
