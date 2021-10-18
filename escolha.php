<?php
session_start();
$valorBike = isset($_SESSION["valorBike"]) ? $_SESSION["valorBike"] : null;
$arrDados = [];

if ($valorBike >= 2000 and $valorBike <= 2500) {
    $arrDados = [
        "argo" => [3, 110, 330],
        "argobasic" => [4, "71,10", "284,40"]
    ];
} elseif ($valorBike > 2501 and $valorBike <= 3000) {
    $arrDados = [
        "argo" => [3, 110, 330],
        "argobasic" => [1, 190, 190]
    ];
} elseif ($valorBike > 3001 and $valorBike <= 3500) {
    $arrDados = [
        "argo" => [3, 110, 330],
        "argobasic" => [4, "71,10", "284,40"]
    ];
} elseif ($valorBike > 3501 and $valorBike <= 4000) {
    $arrDados = [
        "argo" => [3, 126, 378],
        "argobasic" => [5, "65,02", "325,10"]
    ];
} elseif ($valorBike > 4001 and $valorBike <= 4500) {
    $arrDados = [
        "argo" => [4, 103, 412],
        "argobasic" => [6, "60,83", "364,98"]
    ];
} elseif ($valorBike > 4501 and $valorBike <= 5000) {
    $arrDados = [
        "argo" => [4, 113, 452],
        "argobasic" => ["--", "--", "--"]
    ];
} elseif ($valorBike > 5001 and $valorBike <= 5500) {
    $arrDados = [
        "argo" => [5, 100, 500],
        "argobasic" => ["--", "--", "--"]
    ];
} else {
    $arrDados = [
        "argo" => [5, 109, 545],
        "argobasic" => ["--", "--", "--"]
    ];
}

$_SESSION["arrDados"] = $arrDados;

require_once "header.php"
?>

    <div class="row">
        <div class="containerProgressbar">
            <ul class="progressbar">
                <li class="active">Valor da bike</li>
                <li class="active">Escolha o plano</li>
                <li>Checkout</li>
                <li>Dados adicionais</li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button type="button" class="btn-modal-share btn btn-primary details-link" data-toggle="modal"
                data-target="#shareModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill"
                 viewBox="0 0 16 16">
                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
            </svg>
            <span>Detalhes das coberturas</span>
        </button>
    </div>


    <div class="row d-flex justify-content-center">
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-body">
                    <h3 class="card-title ">Argo</h3>
                    <img class="company-logo" src="assets/argo-logo.jpg">
                    <p class="card-text">A partir de <?php echo $arrDados["argo"][0] ?>x</p>
                    <p class="card-text p-valor">R$ <?php echo $arrDados["argo"][1] ?></p>
                    <p class="card-text">sem juros</p>
                    <a href="https://wa.me/553488888888" class="btn btn-primary btn-falecom">Fale com a velo</a>
                    <a href="checkout.php?company=argo" class="btn btn-primary btn-prosseguir">Prosseguir online</a>
                    <hr>
                    <p class="card-text">Franquia mínima R$500</p>
                    <p class="card-text">POS 10%</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg>
                        <span>Nota fiscal obrigatória</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg>
                        <span>Assalto</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-x-lg"
                             viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                        </svg>
                        <span>Furto</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-body <?php echo $arrDados['argobasic'][0] == '--' ? 'card-disabled' : null ?>">
                    <h3 class="card-title">Argo Basic</h3>
                    <img class="company-logo" src="assets/argo-logo.jpg">
                    <p class="card-text">A partir de <?php echo $arrDados["argobasic"][0] ?>x</p>
                    <p class="card-text p-valor">R$ <?php echo $arrDados["argobasic"][1] ?></p>
                    <p class="card-text">sem juros</p>
                    <a href="https://wa.me/553488888888"
                       class="btn btn-primary btn-falecom <?php echo $arrDados['argobasic'][0] == '--' ? 'disabled' : null ?>">Fale
                        com a velo</a>
                    <a href="checkout.php?company=argobasic"
                       class="btn btn-primary btn-prosseguir <?php echo $arrDados['argobasic'][0] == '--' ? 'disabled' : null ?>"
                    >Prosseguir
                        online</a>
                    <hr>
                    <p class="card-text">Franquia mínima R$400</p>
                    <p class="card-text">POS 10%</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-x-lg"
                             viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                        </svg>
                        <span>Nota fiscal obrigatória</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-x-lg"
                             viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                        </svg>
                        <span>Assalto</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-x-lg"
                             viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                        </svg>
                        <span>Furto</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-body">
                    <h3 class="card-title ">Berkeley</h3>
                    <img class="company-logo" src="assets/berkeley-logo.png">
                    <p class="card-text">A partir de 3x</p>
                    <p class="card-text p-valor">R$ 167</p>
                    <p class="card-text">sem juros</p>
                    <a href="https://wa.me/553488888888" class="btn btn-primary btn-falecom">Fale com a velo</a>
                    <a href="checkout.php?company=berkeley" class="btn btn-primary btn-prosseguir">Prosseguir online</a>
                    <hr>
                    <p class="card-text">Franquia mínima R$500</p>
                    <p class="card-text">POS 10%</p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg>
                        <span>Nota fiscal obrigatória</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg>
                        <span>Assalto</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg>
                        <span>Furto</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <!-- Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shareModalLabel">Detalhes das coberturas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title ">Sem nota fiscal</h5>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                         class="bi bi-file-earmark-medical" viewBox="0 0 16 16">
                                        <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    </svg>
                                    <hr>
                                    <span>
                                    <small>
                                        A maioria das seguradoras exige a nota fiscal como único comprovante de propriedade válido.
                                        Independente da exigência ou não da nota fiscal, todas as seguradoras irão requerer evidências capazes de comprovar a aquisição da bike por
                                        meios lícitos em caso de acionamento do seguro.
                                    </small>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title ">Assalto</h5>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                         class="bi bi-bullseye" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>
                                    <hr>
                                    <span>
                                    <small>
                                        É a subtração da bike mediante grave ameaça ou violência reduzindo a possibilidade de resistência.
                                        O assalto ou roubo ocorre quando você está com a bike e é coagido para entregá-la mediante ameaça.
                                        A diferença para furto é que neste último, a bike não está com você e sim, guardada.
                                    </small>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php require_once "footer.php" ?>