<?php require_once "topo.php" ?>

    <div class="row clearfix">
        <div class="col-md-8 column">
            <h2>Fale Conosco</h2>
            <form role="form" action="envia-contato.php" method="POST">
                <div class="form-group">
                    <label for="inputNome">Nome:</label><input type="text" class="form-control" id="inputNome" name="inputNome" />
                </div>
                <div class="form-group">
                <label for="inputEmail">Email:</label><input type="email" class="form-control" id="inputEmail" name="inputEmail"/>
                </div>
                <div class="form-group">
                <label for="inputAssunto">Assunto:</label><input type="text" class="form-control" id="inputAssunto" name="inputAssunto"/>
                </div>
                <div class="form-group">
                    <label for="inputMessage">Mensagem:</label><textarea class="form-control" id="inputMessage" name="inputMessage"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-md-4 column">
            <img alt="140x140" src="img/img-contato.jpg" class="img-rounded"/>
        </div>
    </div>

<?php require_once "boxs.php" ?>
<?php require_once "footer.php" ?>