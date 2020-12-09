<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 05</title>
    <!-- Compiled and minified CSS 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <?php //include_once 'caminho' ?>
    -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<?php include('include/banner.php'); ?>

<div id="corpo">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Quiz</h1>

                <form method="POST" action="perguntas.php">
                    1. Linguagem usada para WEB:
                    <p>
                        <label>
                            <input name="group1" type="radio" value="php" checked="checked" />
                            <span>PHP</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group1" type="radio" value="c" />
                            <span>C</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group1" type="radio" value="java" />
                            <span>R</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group1" type="radio" value="c#" />
                            <span>C#</span>
                        </label>
                    </p>
                    <br/>

                    2. São frameworks, exceto:
                    <p>
                        <label>
                            <input name="group2" type="radio" value="bulma" checked="checked" />
                            <span>Bulma</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group2" type="radio" value="bootstrap" />
                            <span>Bootstrap</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group2" type="radio" value="materialize" />
                            <span>Materialize</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group2" type="radio" value="c++" />
                            <span>C++</span>
                        </label>
                    </p>
                    <br/>
                    3. Não é nível de experiência do programador:
                    <p>
                        <label>
                            <input name="group3" type="radio" value="jr" checked="checked" />
                            <span>Junior</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group3" type="radio" value="pleno" />
                            <span>Pleno</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group3" type="radio" value="scout" />
                            <span>Escoteiro</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group3" type="radio" value="sr" />
                            <span>Sênior</span>
                        </label>
                    </p>
                    <br/>
                    4. Nomenclatura do desenvolvedor mais completo: 
                    <p>
                        <label>
                            <input name="group4" type="radio" value="fe" checked="checked" />
                            <span>Front-End</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group4" type="radio" value="ts" />
                            <span>T-Shaped</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group4" type="radio" value="be" />
                            <span>Back-End</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group4" type="radio" value="fs" />
                            <span>Fullstack</span>
                        </label>
                    </p>
                    <br/>
                    5. Não é um Framework PHP:
                    <p>
                        <label>
                            <input name="group5" type="radio" value="jq" checked="checked" />
                            <span>Jquery</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group5" type="radio" value="ci" />
                            <span>CodeIgniter</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group5" type="radio" value="la" />
                            <span>Laravel</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group5" type="radio" value="cp" />
                            <span>CakePHP</span>
                        </label>
                    </p>
                    <br/>
                    6. O Django é um arcabouço focado em web de qual linguagem?
                    <p>
                        <label>
                            <input name="group6" type="radio" value="go" checked="checked" />
                            <span>Go</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group6" type="radio" value="py" />
                            <span>Python</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group6" type="radio" value="sw" />
                            <span>Swift</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group6" type="radio" value="rb" />
                            <span>Ruby</span>
                        </label>
                    </p>
                    <br/>
                    7. Qual linguagem de programação não faz parte da plataforma .NET?
                    <p>
                        <label>
                            <input name="group7" type="radio" value="vb" checked="checked" />
                            <span>Visual Basic</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group7" type="radio" value="j#" />
                            <span>J#</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group7" type="radio" value="dp" />
                            <span>Delphi</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group7" type="radio" value="sql" />
                            <span>SQL</span>
                        </label>
                    </p>
                    <br/>
                    8. Qual é o nível da LP mais perto da máquina
                    <p>
                        <label>
                            <input name="group8" type="radio" value="an" checked="checked" />
                            <span>Alto nível</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group8" type="radio" value="n0" />
                            <span>Nível abaixo de 0</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group8" type="radio" value="mn" />
                            <span>Médio nível</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group8" type="radio" value="bn" />
                            <span>Baixo nível</span>
                        </label>
                    </p>
                    <br/>
                    9. Qual é o componente do PC que é memória de armazenamento?
                    <p>
                        <label>
                            <input name="group9" type="radio" value="hd" checked="checked" />
                            <span>HD</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group9" type="radio" value="ram" />
                            <span>RAM</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group9" type="radio" value="cpu" />
                            <span>CPU</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group9" type="radio" value="cmos" />
                            <span>CMOS</span>
                        </label>
                    </p>
                    <br/>
                    10. Não é um periférico: 
                    <p>
                        <label>
                            <input name="group10" type="radio" value="mouse" checked="checked" />
                            <span>Mouse</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group10" type="radio" value="tec" />
                            <span>Teclado</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group10" type="radio" value="tel" />
                            <span>Telefone</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group10" type="radio" value="mon" />
                            <span>Monitor</span>
                        </label>
                    </p>
                    <br/>

                    <input type="submit" class="waves-effect waves-light btn" value="Enviar" />
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'include/rodape.inc' ?>
    <!-- Compiled and minified JavaScript 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    -->
    <script src="js/materialize.min.js" type="text/javascript"></script>
</body>
</html>