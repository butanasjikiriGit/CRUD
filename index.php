<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crud PHP</title>

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- External CSS -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <!-- PHP -->
        <?php
            include "database.php";
            $result = $connection->query("SELECT * FROM tbl_name");
        ?>
        <!-- /PHP -->

        
        <div class="display-box">

            <table>
                <tr>
                    <th>NAME LIST</th>
                </tr>
                <?php
                
                    if (!empty($result)){
                        foreach ($result as $row){
                            ?>
                            
                                <tr>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                </tr>
                            
                            <?php
                        }
                    }
                
                ?>
            </table>

        </div>
        
    </body>
</html>