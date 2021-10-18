<?php
session_start();
$arrDados = $_SESSION["arrDados"];
$leadId = $_SESSION["id"];
$valorBike = $_SESSION["valorBike"];
$nomeLead = $_SESSION["nomeLead"];
$whatsappLead = $_SESSION["whatsappLead"];
$emailLead = $_SESSION["emailLead"];
$planoEscolhido = $_GET["company"];

$valorAnual = 501;
$parcelas = 3;

if ($planoEscolhido == "argo") {
    $valorAnual = $arrDados["argo"][2];
    $parcelas = $arrDados["argo"][0];
} elseif ($planoEscolhido == "argobasic") {
    $valorAnual = $arrDados["argobasic"][2];
    $parcelas = $arrDados["argobasic"][0];
}

require_once "header.php"
?>

    <div class="row">
        <div class="containerProgressbar">
            <ul class="progressbar">
                <li class="active">Valor da bike</li>
                <li class="active">Escolha o plano</li>
                <li class="active">Checkout</li>
                <li>Dados adicionais</li>
            </ul>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Estamos quase lá!</h1>
        <p class="lead">Preencha as informações abaixo e finalize sua compra. </p>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-cadastro">
                    <div class="form-cadastro">
                        <h3>Forma de pagamento</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" value="boleto"
                                   checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Boleto bancário
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" value="cartao">
                            <label class="form-check-label" for="exampleRadios2">
                                Cartão de crédito
                            </label>
                        </div>
                        <div class="form-group col-md-4 d-none select-parcelas">
                            <select id="inputState" class="form-control">
                                <option selected>Selecione...</option>
                                <?php
                                for ($i = 1; $i <= $parcelas; $i++) {
                                    echo "<option>" . $i . "x sem juros</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <hr>
                    </div>
                    <form method="post" action="model/atualiza.php">
                        <h3>Informações do segurado</h3>
                        <div class="form-group">
                            <label for="nomeCompleto">Nome completo</label>
                            <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto"
                                   aria-describedby="emailHelp" placeholder="Digite seu nome completo"
                                   value="<?php echo $nomeLead ?>"
                                   maxlength="100"
                            >
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="emailHelp"
                                   placeholder="Digite seu CPF"
                                   maxlength="14"
                            >
                        </div>
                        <div class="form-group">
                            <label for="celular">Telefone celular</label>
                            <input type="text" class="form-control" id="celular" name="celular"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite seu número de telefone celular"
                                   value="<?php echo $whatsappLead ?>"
                                   maxlength="15"
                            >
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite seu e-mail"
                                   value="<?php echo $emailLead ?>"
                                   maxlength="50"
                            >
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite seu número de telefone"
                                   maxlength="15"
                            >
                        </div>
                        <div class="form-group">
                            <label for="endereco">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite seu CEP"
                                   maxlength="10"
                            >
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite seu endereço completo"
                                   maxlength="100"
                            >
                        </div>
                        <div class="form-group">
                            <label for="cidadeEstado">Cidade/Estado</label>
                            <input type="text" class="form-control" id="cidadeEstado" name="cidadeEstado"
                                   aria-describedby="emailHelp" placeholder="Digite sua cidade e seu estado"
                                   maxlength="100"
                            >
                        </div>
                        <hr>
                        <h3>Informações da bike</h3>
                        <div class="form-group">
                            <label for="marcaBike">Marca</label>
                            <input type="text" class="form-control" id="marcaBike" name="marcaBike"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite a marca da sua bike"
                                   maxlength="30"
                            >
                        </div>
                        <div class="form-group">
                            <label for="cpf">Modelo</label>
                            <input type="text" class="form-control" id="modeloBike" name="modeloBike"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite o modelo da bike"
                                   maxlength="30"
                            >
                        </div>
                        <div class="form-group">
                            <label for="celular">Ano de fabricação</label>
                            <input type="text" class="form-control" id="anobike" name="anobike"
                                   aria-describedby="emailHelp"
                                   placeholder="Digite o ano de fabricação da bike"
                                   maxlength="4"
                            >
                        </div>
                        <h3>Detalhes das coberturas</h3>
                        <div>
                            <p class="font-weight-bold">Assalto</p>
                            <p>R$<?php echo $valorBike ?></p>
                            <small>
                                É a subtração da bike mediante grave ameaça ou violência reduzindo a possibilidade de
                                resistência.
                                Exemplo: Você está pedalando e é abordado e ameaçado por um bandido para entregar sua
                                bike.
                            </small>
                        </div>
                        <hr>
                        <div>
                            <p class="font-weight-bold">Furto qualificado</p>
                            <p>R$<?php echo $valorBike ?></p>
                            <small>
                                Diferente do roubo (assalto) o furto qualificado é quando sua bike é subtraída enquanto
                                ela não está com você, mas guardada ou presa.
                                Exemplo: Você guarda sua bike em casa e a porta foi arrombada enquanto você estava
                                viajando.
                            </small>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-finalizar">Finalizar compra!</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar rounded text-center">
                    <h3>Seu especialista</h3>
                    <h5>Diego dos Santos</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                    </svg>
                    <small>Tire dúvidas</small>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                    </svg>
                    <small>Peça conselhos</small>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                    </svg>
                    <small>Confirme seus dados</small>
                    <hr>
                    <a href="https://wa.me/553488888888" class="btn btn-primary btn-falecom">Whatsapp</a>
                    <a href="tel:553488888888" class="btn btn-primary btn-falecom">Telefone</a>
                    <a href="mailto:a@a.net" class="btn btn-primary btn-falecom">Email</a>
                    <hr>
                    <h5>Plano escolhido</h5>
                    <h2 class="plano-escolhido"><?php echo $planoEscolhido ?></h2>
                    <hr>
                    <p class="valor-anual">R$ <?php echo $valorAnual ?></p>
                    <p>Valor anual do seguro</p>
                    <p class="font-weight-bold">Valor da sua bike: R$<?php echo $valorBike ?></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
<?php require_once "footer.php" ?>