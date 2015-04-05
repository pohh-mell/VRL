    
<?php
    include "header-k.php";
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src = "offlinelisamine.js"></script>
       
    <div class="container">
        <div class="middle">
            <!-- kandidaadi lisamine -->
            <form class="ff1" action="<?php $_PHP_SELF ?>" method="post">
                <div class="block">
                <label>Nimi:</label>
                <input type="text" id="nimi" name="nimi">
                </div>
                <div class="block">
                <label>Piirkond:</label>
                <input type="text" id="piirkond" name="piirkond">
                </div>
                <div class="block">
                <label>Erakond:</label>
                <input type="text" id="erakond" name="erakond">
                </div>
                <div class="block">
                <label>Isikukood:</label>
                <input type="text" id="isikukood" name="isikukood">
                </div>
                <button class="nupp" type="submit" onclick="sendToServer()" id="submit-button">Lisa end kandidaadiks</button>
            </form>
        </div>
    </div>
        
<?php include "footer.php"; ?>