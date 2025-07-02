<footer class="footer text-center text-white">
    <div class="container p-4 pb-0">
        <div class="mb-4">
            <?php
            $redes = array();
            $redes['Facebook'] = 'facebook';
            $redes['Twitter'] = 'twitter';
            $redes['Instagram'] = 'instagram';

            foreach ($redes as $webs => $links) {
                print "<a class=btn text-white btn-floating m-1 href=https://www.$links.com role=button><img src=../img/$links.png alt=$webs></a>";
            }
            ?>
        </div>
    </div>
    <div class="footer2 text-center p-3">
        © 2023 Copyright: Patas Felices SRL
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>