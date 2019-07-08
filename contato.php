<!-- HEAD -->
<?php include("includes/head.php"); ?>
<!-- HEAD -->

<body>
    <!-- HEADER -->
    <?php include("includes/header.php"); ?>
    <!-- HEADER -->

    
    <section class="mt-5 pt-3 text-center">

        <div class="titulolinha">
            <span>
                CONTATO 
            </span>
        </div>
        <p class="texto-servicos">Entre em contato conosco e <br>solicite um orçamento</p>
    </section>
    
    <section>
        <div class="container pg-contato">
            <div class="col-lg-6 col-md-6">
                <form class="form-horizontal">
                    <fieldset class="fomulario-contato"> 

                        <!-- Text input-->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="name">Nome</label>-->  
                            <div class="col-md-12">
                                <h3>Nome:</h3>
                                <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="phone">Telefone</label>-->  
                            <div class="col-md-12">
                                <h3>Telefone:</h3>
                                <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="email">E-mail</label>-->  
                            <div class="col-md-12">
                                <h3>E-mail:</h3>
                                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="mensagem">Mensagem</label>-->
                            <div class="col-md-12">   
                                <h3>Mensagem:</h3>
                                <textarea class="form-control" id="mensagem" name="mensagem" placeholder="" ></textarea>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submit"></label>
                            <div class="col-md-4">
                                <button id="submit" name="submit" class="btn btn-01 btn-primary">Enviar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            
            <div class="col-lg-6 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.394911806329!2d-38.315281684948964!3d-12.882308990914458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7163e00ee822723%3A0x3647174d49da629f!2sMAIS+ELETRICIDADE!5e0!3m2!1spt-BR!2sbr!4v1562592116524!5m2!1spt-BR!2sbr" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <?php include("includes/footer.php"); ?>
    <!-- FOOTER -->
        
    