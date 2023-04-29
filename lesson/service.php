<?
    require('connectDB.php');

    $service = $_POST['service'];
    if($service == 'create_table'){
        $table_name = $_POST['table_name'];
        $table_name  = str_replace(" ", "", $table_name);
        if ($table_name == ""){
            die("error. table haven`t name");
        }

        $sql = "SELECT IF(COUNT(*)> 0,'yes', 'no') as exist
        FROM `information_schema`.`TABLES`
        WHERE `TABLE_NAME` = '".$table_name ."'";
    
        if ($result = mysqli_query($conn, $sql)){
            foreach($result as $row){
                if($row["exist"] =='yes'){
                    echo "ty daun? table uje was creating";
                } else {
                    $sql = "CREATE TABLE " . $table_name . " (`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT)";
                    if (mysqli_query($conn, $sql)){
                        echo "table was creating";
                    } else{
                        echo "nihuya ne sozdana";
                    }
                }
            }
        }
        
        
    }