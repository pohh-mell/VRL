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
                <input type="text" id="nimi" name="nimi" value = "<?php echo  $_SESSION['FULLNAME'];?>" readonly="readonly";>
                </div>
                <div class="block">
                <label>Piirkond:</label>
                <input type="text" id="piirkond" name="piirkond">
                </div>
                <div class="block">
                <label>Erakond:</label>
                <select class="Valikud" id "erakond">
                    <?php
                    require_once("andmed.php");
                    $conn=database();
                    //Query the database
                    $resultSet = $conn->query("SELECT nimi FROM erakonnad group by nimi;");
                    if($resultSet->num_rows != 0){
                        while($rows = $resultSet->fetch_assoc()){
                            $errakond = $rows['nimi'];
                            echo"<option value=\"$errakond\">$errakond</option>";
                        }
                    }
                    $conn->close();
                    ?>
                </select>
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