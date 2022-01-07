<?php
session_start();
include "DB connection.php";


$brand=$_POST['brand'];
$city=$_POST['city'];
$year=$_POST['year'];
$max_price=$_POST['tprice'];
$min_price=$_POST['Fprice'];
$transmission=$_POST['transsmision'];
$type=$_POST['type'];
$start_date=$_POST['RStart_date'];
$end_date=$_POST['REnd_date'];


$query="Select *
FROM  car natural join office
WHERE  `year` >= '$year' and city='$city' and transmission='$transmission' and price BETWEEN  '$min_price' and '$max_price' ";

$brand_query="and brand= '$brand' " ;
$type_query="and type ='$type' " ;
$query_end="and plate_number not in ( 
(
Select plate_number
From reservation   
where 
start_date <'$end_date' and end_date > '$end_date'
OR start_date <'$start_date' and end_date > '$start_date'   
)                               
Union
(
Select * 
From service
where 
start_date <'$end_date' and end_date > '$end_date'
OR start_date <'$start_date' and end_date > '$start_date' 
)
)";


if($brand!=""){
    $query.=$brand_query;
}

if($type!=""){
    $query.=$type_query;
}
$query.=$query_end;


$sql = mysqli_query($connection, $query);
$resultArray = [];


while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
    $resultArray[] = $row;
}






/*if($brand=="" && $type==""){     //00
    $query="Select *
    FROM  car natural join office
    WHERE  `year` >= '$year' and city='$city' and transmission='$transmission' and price BETWEEN  '$min_price' and '$max_price' and plate_number not in ( select plate_number
    From reservation   
    where 
    start_date <'$end_date' and end_date > '$end_date'
    OR start_date <'$start_date' and end_date > '$start_date'                                  
    Union
    Select * 
    From service
    where 
    start_date <'$end_date' and end_date > '$end_date'
    OR start_date <'$start_date' and end_date > '$start_date'                                       
    
    )
    ";
    
    
$sql = mysqli_query($connection,$query);
$res=mysqli_fetch_array($sql);


}

elseif($brand=="" &&$type!=""){     //01
    $query="Select *
    From car natural join office
    where type='$type' and year >='$year' and transmission='$transmission' and city='$city' and price between '$min_price' and '$max_price' and plate_number not in ( select plate_number
                                                                                                 from reservation   
                                                                                                 where 
                                                                                                 start_date <'$end_date' and end_date > '$end_date'
                                                                                                 OR start_date <'$start_date' and end_date > '$start_date' 
                                                                                                 Union
                                                                                                 Select * 
                                                                                                 From service
                                                                                                 where   
                                                                                                 start_date <'$end_date' and end_date > '$end_date'
                                                                                                 OR start_date <'$start_date' and end_date > '$start_date'
                                                                                                                                      )";
    
    $sql = mysqli_query($connection, $query);
    $res = mysqli_fetch_array($sql);

    
    }

    elseif($brand!="" &&$type==""){     //10
        $query="Select *
        From car natural join office
        where brand='$brand' and year >='$year' and transmission='$transmission' and city='$city' and price between '$min_price' and '$max_price' and plate_number not in ( select plate_number
                                                                                                     from reservation   
                                                                                                     where 
                                                                                                     start_date <'$end_date' and end_date > '$end_date'
                                                                                                     OR start_date <'$start_date' and end_date > '$start_date' 
                                                                                                     Union
                                                                                                     Select * 
                                                                                                     From service
                                                                                                     where   
                                                                                                     start_date <'$end_date' and end_date > '$end_date'
                                                                                                     OR start_date <'$start_date' and end_date > '$start_date'
                                                                                                                                          )";
        
        $sql = mysqli_query($connection, $query);
        $res = mysqli_fetch_array($sql);

        
            }

        else{       //11
            $query="Select *
            From car natural join office
            where brand='$brand' and type='$type' and year >='$year' and transmission='$transmission' and city='$city' and price between '$min_price' and '$max_price' and plate_number not in ( select plate_number
                                                                                                         from reservation   
                                                                                                         where 
                                                                                                         start_date <'$end_date' and end_date > '$end_date'
                                                                                                         OR start_date <'$start_date' and end_date > '$start_date' 
                                                                                                         Union
                                                                                                         Select * 
                                                                                                         From service
                                                                                                         where   
                                                                                                         start_date <'$end_date' and end_date > '$end_date'
                                                                                                         OR start_date <'$start_date' and end_date > '$start_date'
                                                                                                                                              )";
            $sql = mysqli_query($connection, $query);
            $res = mysqli_fetch_array($sql);

        } 
        */

?>
