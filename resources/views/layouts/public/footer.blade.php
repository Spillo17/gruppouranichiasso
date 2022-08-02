<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; <?php echo date("Y"); ?> | Gruppo Urani Chiasso, Via
                    Sottopenz, 6830 Chiasso</div>
            </div>
            <div class="col-auto text-white">
                <a class="bi bi-facebook text-white" href="https://www.facebook.com/GruppoUrani/"></a>
                <span class="text-white mx-1 ">&middot;</span>
                <a class="bi bi-instagram text-white" href="https://www.instagram.com/gruppogiovaniurani/"></a>

            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<?php
$requested_page = $_SERVER['REQUEST_URI'];
$requested_page = explode("/", $requested_page)[count(explode("/", $requested_page))-1];
if ($requested_page == "ristrutturazione.php") {


    echo '<script type="text/javascript" src="js/gallery.js"></script>';
}
?>
