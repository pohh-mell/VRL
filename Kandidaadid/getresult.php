<?php 
    include 'database.php';
    $pdo = Database::connect();
    $product = "";
    $queryCondition = "";
?>
<form name="frmSearch" method="post" onsubmit="return getresult('getresult.php')">
    <div class="search-box">
        <input type="text" placeholder="Product Name" name="product" value="<?php if(isset($_POST["kandidaadid.nimi"])) echo $_POST["kandidaadid.nimi"]; ?>"   />
        <input type="button" name="go" class="btnSearch" value="Search">
        <input type="reset" class="btnSearch" value="Reset" onclick="window.location='kandidaadid.php'">
    </div>
</form>

    <table class="t01">
        <thead>
            <tr>
                <th>Nr</th>
                <th>Nimi</th>
                <th>Piirkond</th>
                <th>Erakond</th>
                <th>Hääli</th>
                </tr>
        </thead>
        <tbody>
            <?php
                $queryCondition = "";
                $sql = "SELECT * FROM users " . $queryCondition;
                if(!empty($_POST["kandidaadid.nimi"])) {
                    
                    $sql = "SELECT kandidaadid.id as Number,kandidaadid.nimi as Nimi,piirkond as Piirkond ,x.Nimi as Erakond, IFNULL(abi,0) as Hääli FROM kandidaadid
                    left join (select Haal,count(Haal) as abi from users group by users.haal) as t on kandidaadid.id=t.Haal WHERE kandidaadid.nimi LIKE '%" . $_POST["kandidaadid.nimi"] . "%'
                    left join erakonnad as x on kandidaadid.Erakonna_id=x.id
                    order by Number;";
                }
                
                foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['Number'] . '</td>';
                    echo '<td>'. $row['product'] . '</td>';
                    echo '<td>'. $row['quantity'] . '</td>';
                    echo '<td>'. $row['grossprice'] . '</td>';
                    echo '<td>'. $row['profit'] . '</td>';
                    echo '</tr>';
                }
                Database::disconnect();
            ?>
        </tbody>
    </table>
