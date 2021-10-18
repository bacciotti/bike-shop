<?php require_once "header.php" ?>

<div class="row">
    <div class="containerProgressbar">
        <ul class="progressbar">
            <li class="active">Valor da bike</li>
            <li>Escolha o plano</li>
            <li>Checkout</li>
            <li>Dados adicionais</li>
        </ul>
    </div>

</div>

<div class="float-right share-link">
    <button type="button" class="btn-modal-share btn btn-primary" data-toggle="modal" data-target="#shareModal">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill"
             viewBox="0 0 16 16">
            <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
        </svg>
        <span>Compartilhar</span>
    </button>
</div>
<div class="jumbotron">
    <div class="d-flex justify-content-center">
        <span class="h3 text-center">Informe o valor da sua bike</span>
    </div>
    <div class="d-flex justify-content-center">
        <input type="text" class="input-bike" placeholder="R$ 0,00" name="valor-bike" id="valor-bike" maxlength="10">
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="input-bike-button" data-toggle="modal" data-target="#procederModal" id="btn-comparar">COMPARAR
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">Compartilhar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg>
                    <span><a href="#">Email</a></span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    <span><a href="#">Facebook</a></span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg>
                    <span><a href="#">Google+</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Proceder -->
<div class="modal fade" id="procederModal" tabindex="-1" role="dialog" aria-labelledby="procederModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="procederModalLabel">Dados para contato</h5>
                <p id="emailHelp" class="form-text text-muted">Não divulgaremos seus dados seu seu
                    consentimento.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="model/cadastra.php" method="post">
                    <input type="hidden" id="valorBike" name="valorBike" value="0" maxlength="10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp"
                               placeholder="Nome" maxlength="40" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Whatsapp" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="30" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>