<!-- main wrapper end -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/SmoothScroll.min.js"></script>
    <script src="assets/js/swiper.min.js"></script> 
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/ui_range_slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/slider.js"></script>
     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/948955ccc5.js" crossorigin="anonymous"></script>
        <script src="https://omnitex-uk.com/wp-content/themes/omnitex/js/jquery-modal-video.min.js"></script>
        <script type="text/javascript" src="https://omnitex-uk.com/wp-content/themes/omnitex/js/jquery.modal.min.js"></script>
        <script src="https://omnitex-uk.com/wp-content/themes/omnitex/js/carousel-vertical.js"></script>
        <!-- <script src="https://omnitex-uk.com/wp-content/themes/omnitex/js/script.js"></script> -->
        <!-- <script src="assets/js/jquery.magnific-popup.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
 
</script>

<?php
    if(!isset($_COOKIE['accept_cookie']))
    {
        ?>
            <script>
                $(document).ready(function()
                {
                            $("#cookieBtn").click()
                            console.log("showing")
                })
             
            </script>
        
        <?php
    }
?>
        
</body>