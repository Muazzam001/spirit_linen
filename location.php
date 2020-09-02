    <?php 
    
    $title = "SPIRIT LINEN | LOCATIONS";
    include "header.php";
    
    ?>
        <div class="sections-container">
        <!-- section 1 -->
        <div class="section location-section1 page">
        <div class="section-title">
            <h2>Our Headquarters</h2>
            <div class="addr-container">
                <div class="map">
                    <img src="img/location-map.jpg" alt="">
                </div>
                <div class="addr">
                    <h2>SPIRIT LINEN<br>Corporate Office</h2>
                    <p>820 Williams Ave<br>Brooklyn, NY 11207-7619</p>
                </div>
            </div>
        </div>
        </div>
          <div class="section location-section1 page">
        <div class="section-title">
            <!-- <h2>Our Headquarters</h2> -->
            <div class="addr-container">
                  <div class="addr">
                    <h2>SPIRIT LINEN<br>NYC Showroom</h2>
                    <p>230 5th Ave, <br>Suite 615, New York, NY 10001</p>
                </div>
                <div class="map">
                    <img src="img/location-map.jpg" alt="">
                </div>
            </div>
        </div>
        </div>
              <!-- Contact -->
        <div id="section3" class="section-contact page">
            <div class="overlay">
                <div class="text-box text-center">
                    <h2>CONTACT US</h2>
                   <!--  <p>Email form below or Call us at 718-398-7196</p>
                    <p>Don't be afraid to reach out. You + Us = Awesome!</p> -->
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- footer -->
<?php 
    include "footer.php" 
?>
<script>
$('body').addClass("location")
</script>