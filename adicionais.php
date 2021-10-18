<?php
session_start();
$arrDados = $_SESSION["arrDados"];
$leadId = $_SESSION["id"];
$valorBike = $_SESSION["valorBike"];

require_once "header.php"
?>

    <div class="row">
        <div class="containerProgressbar">
            <ul class="progressbar">
                <li class="active">Valor da bike</li>
                <li class="active">Escolha o plano</li>
                <li class="active">Checkout</li>
                <li class="active">Dados adicionais</li>
            </ul>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Seu pedido já foi recebido pelo time da Velo!</h1>
        <p class="lead">Em breve seu especialista entrará em contato para dar sequência ao processo de obtenção do
            seguro.
            Enquanto isso, vamos agilizar o processo preenchendo mais alguns dados que são pedidos por algumas
            seguradoras?</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-cadastro">
                    <form method="post" action="model/encerra.php">
                        <h3>Outras informações da bike</h3>
                        <div class="form-group">
                            <label for="celular">Tipo da bike</label>
                            <input type="text" class="form-control" id="tipoBike" name="tipoBike"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite se sua bike é mountain, speed..."
                                   maxlength="30"
                            >
                        </div>
                        <div class="form-group">
                            <label for="celular">Material do quadro</label>
                            <input type="text" class="form-control" id="materialQuadro" name="materialQuadro"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite se sua bike é de alumínio, por exemplo"
                                   maxlength="30"
                            >
                        </div>
                        <div class="form-group">
                            <label for="celular">Local de compra</label>
                            <input type="text" class="form-control" id="localCompra" name="localCompra"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite onde você adquiriu sua bike"
                                   maxlength="50"
                            >
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkBikeNova"
                                   name="chkBikeNova">
                            <label class="form-check-label" for="chkBikeNova">
                                Bike nova?
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkNf" name="chkNf">
                            <label class="form-check-label" for="chkNf">
                                Possui Nota Fiscal?
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkOriginal"
                                   name="chkOriginal">
                            <label class="form-check-label" for="chkOriginal">
                                Configuração original de fábrica?
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkCompeticoes"
                                   name="chkCompeticoes">
                            <label class="form-check-label" for="chkCompeticoes">
                                Participa de competições?
                            </label>
                        </div>
                        <hr>
                        <h4>Locais onde pedala</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkUrbana"
                                   name="chkUrbana">
                            <label class="form-check-label" for="chkUrbana">
                                Área urbana
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkMontanha"
                                   name="chkMontanha">
                            <label class="form-check-label" for="chkMontanha">
                                Montanha
                            </label>
                        </div>
                        <hr>
                        <h4>Utilização da bike </h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkDiaria"
                                   name="chkDiaria">
                            <label class="form-check-label" for="chkDiaria">
                                Locomoção diária
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkLazer"
                                   name="chkLazer">
                            <label class="form-check-label" for="chkLazer">
                                Lazer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="chkProfissional"
                                   name="chkProfissional">
                            <label class="form-check-label" for="chkProfissional">
                                Uso profissional
                            </label>
                        </div>
                        <hr>
                        <h4>Frequência de uso da bike</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdFrequencia1a2" id="rdFrequencia1a2">
                            <label class="form-check-label" for="rdFrequencia1a2">
                                1 a duas vezes por semana
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdFrequencia3a5" id="rdFrequencia3a5">
                            <label class="form-check-label" for="rdFrequencia3a5">
                                3 a 5 vezes por semana
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdFrequenciaMais" id="rdFrequenciaMais">
                            <label class="form-check-label" for="rdFrequenciaMais">
                                Mais de 5 vezes por semana
                            </label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="celular">Número do chassi</label>
                            <input type="text" class="form-control" id="chassi" name="chassi"
                                   aria-describedby="emailHelp"
                                   placeholder="Número do chassi"
                                   maxlength="100"
                            >
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-finalizar">Enviar informações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <hr>
<?php require_once "footer.php" ?>