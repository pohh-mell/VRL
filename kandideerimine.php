<?php
session_start(); 
?>

<?php include "header-k.php"; ?>  
    <div class="container">
        <div class="middle" id="lisu">
            <!-- kandidaadi lisamine -->
            <form class="ff1" action="<?php $_PHP_SELF ?>" method="post">
                <div class="block">
                <label>Nimi:</label>
                <input type="text" id="nimi" name="nimi" value = $_SESSION['FULLNAME'];>
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
                <button class="nupp" type="button" onclick="sendToServer()" id="submit-button">Lisa end kandidaadiks</button>
            </form>
        </div>
    </div>   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src = "offlinelisamine.js"></script>    
<?php include "footer.php"; ?>