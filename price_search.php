<?php
session_start();
include "DB connection.php";

/*$brand=$_POST['brand'];
$type=$_POST['type'];
$year=$_POST['year'];
$transmission=$_POST['trasmission'];
$city=$_POST['city'];
$max_price=$_POST['max_price'];
$min_price=$_POST['min_price'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
*/

$transmission="a";
$city="alexandria";


$start_date="2000-02-05";
$end_date="2000-02-10";

if($year=="") {
      $year=2020;}    //default value
if($max_price=="") $max_price=100000;   //default value
if($min_price=="") $min_price=0;    //default value

if($brand=="" &&$type==""){     //00
$query="Select *
From car natural join office natural join reservation
where  year >= '$year' and transmisson='$transmission' and city='$city' and price between '$max_price' and '$min_price' and plate_number not in ( select plate_number
                                                                                             from reservation   
                                                                                             where 
                                                                                             start_date <'$end_date' and end_date > '$end_date'
                                                                                             OR start_date <'$start_date' and end_date > '$start_date'

                                                                                                                                  )";

$result = mysqli_query($connection,$query);
$res=mysqli_fetch_array($result);

if($res) {
    echo "yes";
}

}

elseif($brand=="" &&$type!=""){     //01
    $query="Select *
    From car natural join office natural join reservation
    where type='$type' and year >='$year' and transmisson='$transmission' and city='$city' and price between '$max_price' and '$min_price' and plate_number not in ( select plate_number
                                                                                                 from reservation   
                                                                                                 where 
                                                                                                 start_date <'$end_date' and end_date > '$end_date'
                                                                                                 OR start_date <'$start_date' and end_date > '$start_date' 
                                                                                                                                      )";
    
    $result = mysqli_query($connection, $query);
    $userRow = mysqli_fetch_array($result);
    
    }

    elseif($brand!="" &&$type==""){     //10
        $query="Select *
        From car natural join office natural join reservation
        where brand='$brand' and year >='$year' and transmisson='$transmission' and city='$city' and price between '$max_price' and '$min_price' and plate_number not in ( select plate_number
                                                                                                     from reservation   
                                                                                                     where 
                                                                                                     start_date <'$end_date' and end_date > '$end_date'
                                                                                                     OR start_date <'$start_date' and end_date > '$start_date' 
                                                                                                                                          )";
        
        $result = mysqli_query($connection, $query);
        $userRow = mysqli_fetch_array($result);
        }

        else{       //11
            $query="Select *
            From car natural join office natural join reservation
            where brand='$brand' and type='$type' and year >='$year' and transmisson='$transmission' and city='$city' and price between '$max_price' and '$min_price' and plate_number not in ( select plate_number
                                                                                                         from reservation   
                                                                                                         where 
                                                                                                         start_date <'$end_date' and end_date > '$end_date'
                                                                                                         OR start_date <'$start_date' and end_date > '$start_date' 
                                                                                                                                              )";
            $result = mysqli_query($connection, $query);
            $userRow = mysqli_fetch_array($result);
        } 


