<?php

include 'Pessoa.class.php';
include 'Controlador.php';

$Carlos = new Pessoa(
    'Carlos Rato Roberto Massa Júnior',
    'Masculino',
    22,
    'AB+',
    72,
    1.75
);
$Kassandra = new Pessoa(
    "Kassandra Portadora da Águia",
    "Feminino",
    22,
    "O+",
    67,
    1.60
);

$Arthur = new Pessoa(
    "Arthur Morgan",
    "Masculino",
    17,
    "O-",
    80,
    1.59
);

$pacienteLohane = new Pessoa(
    'Lohane Vêkanandre Sthephany Smith Bueno de HA HA HA de Raio Laser bala de Icekiss',
    'Feminino',
    21,
    'A+',
    71,
    1.72
);

// Carlos
$controladorCarlos = new Controlador();
$controladorCarlos->verificaDoador($Carlos, $pacienteLohane);

$controladorKassandra = new Controlador();
$controladorKassandra->verificaDoador($Kassandra, $pacienteLohane);


//arthur
$controladorArthur = new Controlador();
$controladorArthur->verificaDoador($Arthur, $pacienteLohane);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .card1 {
        background-color: pink;
        border-radius: 5px;
        margin-left: 10%;
        margin-right: 10%;
        margin-bottom: 5%;
    }

    .cards2 {
        background-color: paleturquoise;
        margin-left: 5px;
    }
</style>

<body>
    <h1>Esta é uma sala de análise de paciêntes</h1>
    <div class="card1">
        <div class="dados" style="margin-left:10px ;">
            <h3><? echo $pacienteLohane->pegaNome() ?></h1>
                <h3><? echo $pacienteLohane->pegaGenero() ?><br></h3>
                <h3> <? echo $pacienteLohane->pegaIdade() ?></h3>
                <h3><? echo $pacienteLohane->pegaTipoSanguineo() ?></h3>
                <h3> <? echo $pacienteLohane->pegaPeso() ?></h3>
                <h3> <? echo $pacienteLohane->pegaAltura() ?></h3>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="cards2 col">
                    <h3><? echo $Carlos->pegaNome() ?><br></h3>
                    <h4><? echo $Carlos->pegaGenero() ?><br></h4>
                    <h4> <? echo $Carlos->pegaIdade() ?></h4>
                    <h4><? echo $Carlos->pegaTipoSanguineo() ?></h4>
                    <h4> <? echo $Carlos->pegaPeso() ?></h4>
                    <h4> <? echo $Carlos->pegaAltura() ?></h4>
                    <br>
                    <div>
                        <h2>Resultado</h2>
                        <h3><? echo $controladorCarlos->pegadescricaoPeso() . PHP_EOL; ?></h3>
                        <h3><? echo $controladorCarlos->pegadescricaoIdade() . PHP_EOL; ?></h3>
                        <h3><? echo $controladorCarlos->pegadescricaoTipoSang() . PHP_EOL; ?></h3>

                    </div>


                </div>
                <div class="cards2 col">
                    <h3><? echo $Kassandra->pegaNome() ?><br></h3>
                    <h4><? echo $Kassandra->pegaGenero() ?><br></h4>
                    <h4> <? echo $Kassandra->pegaIdade() ?></h4>
                    <h4><? echo $Kassandra->pegaTipoSanguineo() ?></h4>
                    <h4> <? echo $Kassandra->pegaPeso() ?></h4>
                    <h4> <? echo $Kassandra->pegaAltura() ?></h4>
                    <br>
                    <div>
                        <h2>Resultado</h2>
                        <h3><? echo $controladorKassandra->pegadescricaoPeso() . PHP_EOL; ?></h3>
                        <h3><? echo $controladorKassandra->pegadescricaoIdade() . PHP_EOL; ?></h3>
                        <h3><? echo $controladorKassandra->pegadescricaoTipoSang() . PHP_EOL; ?></h3>

                    </div>
                </div>
                <div class="cards2 col">
                    <h3><? echo $Arthur->pegaNome() ?><br></h3>
                    <h4><? echo $Arthur->pegaGenero() ?><br></h4>
                    <h4> <? echo $Arthur->pegaIdade() ?></h4>
                    <h4><? echo $Arthur->pegaTipoSanguineo() ?></h4>
                    <h4> <? echo $Arthur->pegaPeso() ?></h4>
                    <h4> <? echo $Arthur->pegaAltura() ?></h4>
                    <br>
                    <div>
                        <h2>Resultado</h2>
                        <h3><? echo $controladorArthur->pegadescricaoPeso() . PHP_EOL; ?></h3>
                        <h3><? echo $controladorArthur->pegadescricaoIdade() . PHP_EOL; ?></h3>
                        <h3><? echo $controladorArthur->pegadescricaoTipoSang() . PHP_EOL; ?></h3>

                    </div>
                </div>
            </div>

        </div>
</body>