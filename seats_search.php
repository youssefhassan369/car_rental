<?php
session_start();
include "DB connection.php";

$max=$_POST['max_seats'];
$min=$_POST['min_seats'];

if($max!=''&&$min!=''){
$query=mysqli_query($connection,"Select brand,model,year,transmission,price,seats,state,insurance,image,office.city
                                    From car natural join office
                                    Where seats BETWEEN '$max' AND '$min'");

$result = mysqli_query($connection, $query);
}



elseif($min=''&& max!='') { //no min value
    $query=mysqli_query($connection,"Select brand,model,year,transmission,price,seats,state,insurance,image,office.
    city
    From car natural join office
    Where seats <='$max' ");
    $result = mysqli_query($connection, $query);

}


elseif($max='' && min!='') { //no max value
    $query=mysqli_query($connection,"Select brand,model,year,transmission,price,seats,state,insurance,image,office.city
    From car natural join office
    Where seats >='$min' ");
    $result = mysqli_query($connection, $query);

}

else{ //no min or max
    $query=mysqli_query($connection,"Select brand,model,year,transmission,price,seats,state,insurance,image,office.city
    From car natural join office");
    $result = mysqli_query($connection, $query);

}





SELECT *
From car natural join office natural join reservation
where  `year` >= 2000 and transmission='$transmission' and city="alexandria" and price between 10000 and 0 and plate_number not in ( SELECT plate_number
                                                                                             FROM  reservation   
                                                                                             WHERE
                                                                                             start_date <"2000-02-25" and end_date > "2000-02-25"
                                                                                             OR start_date <"2000-02-05" and end_date > "2000-02-05"

                                                                                                                                  );


