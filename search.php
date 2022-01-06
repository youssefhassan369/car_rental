<?php
session_start();
include "DB connection.php";

$brand=$_POST['brand'];
$type=$_POST['type'];
$year=$_POST['year'];
$transmission=$_POST['trasmission'];
$city=$_POST['city'];
$max_price=$_POST['max_price'];
$min_price=$_POST['min_price'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];




if($year=="") $year=2000;    //default value
if($max_price=="") $max_price=100000;   //default value
if($min_price=="") $min_price=0;    //default value

$type="sedan";
$brand="toyota";
$city="alexandria";
$transmission="a";
$start_date="2020-02-05";
$end_date="2020-02-12";


if($brand=="" && $type==""){     //00
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

?>
