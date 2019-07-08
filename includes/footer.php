<footer class="bg-03 container">
    <div class="footer">
        <p>Rua A, 168, Empresarial Costa do Atlantico, Sl. 01,e 04 | Pitangueiras, Lauro de Freitas | BA
            <br>(71) 3508-7135 / (71) 0000-0000</p>

        <div class="redes-sociais">
            <div class="col-md-4">
                <a class="" href="https://www.instagram.com/maiseletricidade/" target="_blank">
                    <img src="images/icones/instagram.png" width="40"> maiseletricidade
                </a>
            </div>
            <div class="col-md-4">
                <a class="" href="https://www.facebook.com/maiseletricidade" target="_blank">
                    <img src="images/icones/facebook.png" width="40"> maiseletricidade
                </a>
            </div>
            <div class="col-md-4">
                <a class="" href="https://api.whatsapp.com/send?phone=5571991777477&text=Olá,%20tudo%20bem?%20A%20Mais%20Eletricidade%20agradece%20pelo%20contato,%20em%20que%20podemos%20ajudar?" target="_blank">
                    <img src="images/icones/whatsapp.png" width="40"> 71-99177.7477
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Slick -->
<script src="js/slick.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.slide-topo').slick({
            infinite: true,
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            arrows: true,
            dots: true,
        });
    });

    $(document).ready(function () {
        $('.slide-produtos').slick({
            infinite: true,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            arrows: true,
        });
    });
</script>
</body>

</html>