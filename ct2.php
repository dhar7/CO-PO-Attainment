<?php

session_start();
$code = $_SESSION['code'];





if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo $code;
  // Retrieve form data
  //$code = $_POST['code'];
  $q1_text_1 = $_POST['q1_text_1'];
  $q1_dropdown_1 = $_POST['q1_dropdown_1'];
  $q1_text_2 = $_POST['q1_text_2'];
  $q1_dropdown_2 = $_POST['q1_dropdown_2'];
  $q1_text_3 = $_POST['q1_text_3'];
  $q1_dropdown_3 = $_POST['q1_dropdown_3'];
  $q1_text_4 = $_POST['q1_text_4'];
  $q1_dropdown_4 = $_POST['q1_dropdown_4'];

  $q2_text_1 = $_POST['q2_text_1'];
  $q2_dropdown_1 = $_POST['q2_dropdown_1'];
  $q2_text_2 = $_POST['q2_text_2'];
  $q2_dropdown_2 = $_POST['q2_dropdown_2'];
  $q2_text_3 = $_POST['q2_text_3'];
  $q2_dropdown_3 = $_POST['q2_dropdown_3'];
  $q2_text_4 = $_POST['q2_text_4'];
  $q2_dropdown_4 = $_POST['q2_dropdown_4'];

  $q3_text_1 = $_POST['q3_text_1'];
  $q3_dropdown_1 = $_POST['q3_dropdown_1'];
  $q3_text_2 = $_POST['q3_text_2'];
  $q3_dropdown_2 = $_POST['q3_dropdown_2'];
  $q3_text_3 = $_POST['q3_text_3'];
  $q3_dropdown_3 = $_POST['q3_dropdown_3'];
  $q3_text_4 = $_POST['q3_text_4'];
  $q3_dropdown_4 = $_POST['q3_dropdown_4'];

  $q4_text_1 = $_POST['q4_text_1'];
  $q4_dropdown_1 = $_POST['q4_dropdown_1'];
  $q4_text_2 = $_POST['q4_text_2'];
  $q4_dropdown_2 = $_POST['q4_dropdown_2'];
  $q4_text_3 = $_POST['q4_text_3'];
  $q4_dropdown_3 = $_POST['q4_dropdown_3'];
  $q4_text_4 = $_POST['q4_text_4'];
  $q4_dropdown_4 = $_POST['q4_dropdown_4'];

  $q5_text_1 = $_POST['q5_text_1'];
  $q5_dropdown_1 = $_POST['q5_dropdown_1'];
  $q5_text_2 = $_POST['q5_text_2'];
  $q5_dropdown_2 = $_POST['q5_dropdown_2'];
  $q5_text_3 = $_POST['q5_text_3'];
  $q5_dropdown_3 = $_POST['q5_dropdown_3'];
  $q5_text_4 = $_POST['q5_text_4'];
  $q5_dropdown_4 = $_POST['q5_dropdown_4'];

  


 




  $aq1_text_1 = $_POST['aq1_text_1'];
  $aq1_dropdown_1 = $_POST['aq1_dropdown_1'];
  $aq1_text_2 = $_POST['aq1_text_2'];
  $aq1_dropdown_2 = $_POST['aq1_dropdown_2'];
  $aq1_text_3 = $_POST['aq1_text_3'];
  $aq1_dropdown_3 = $_POST['aq1_dropdown_3'];
  $aq1_text_4 = $_POST['aq1_text_4'];
  $aq1_dropdown_4 = $_POST['aq1_dropdown_4'];

  $aq2_text_1 = $_POST['aq2_text_1'];
  $aq2_dropdown_1 = $_POST['aq2_dropdown_1'];
  $aq2_text_2 = $_POST['aq2_text_2'];
  $aq2_dropdown_2 = $_POST['aq2_dropdown_2'];
  $aq2_text_3 = $_POST['aq2_text_3'];
  $aq2_dropdown_3 = $_POST['aq2_dropdown_3'];
  $aq2_text_4 = $_POST['aq2_text_4'];
  $aq2_dropdown_4 = $_POST['aq2_dropdown_4'];

  $aq3_text_1 = $_POST['aq3_text_1'];
  $aq3_dropdown_1 = $_POST['aq3_dropdown_1'];
  $aq3_text_2 = $_POST['aq3_text_2'];
  $aq3_dropdown_2 = $_POST['aq3_dropdown_2'];
  $aq3_text_3 = $_POST['aq3_text_3'];
  $aq3_dropdown_3 = $_POST['aq3_dropdown_3'];
  $aq3_text_4 = $_POST['aq3_text_4'];
  $aq3_dropdown_4 = $_POST['aq3_dropdown_4'];

  $aq4_text_1 = $_POST['aq4_text_1'];
  $aq4_dropdown_1 = $_POST['aq4_dropdown_1'];
  $aq4_text_2 = $_POST['aq4_text_2'];
  $aq4_dropdown_2 = $_POST['aq4_dropdown_2'];
  $aq4_text_3 = $_POST['aq4_text_3'];
  $aq4_dropdown_3 = $_POST['aq4_dropdown_3'];
  $aq4_text_4 = $_POST['aq4_text_4'];
  $aq4_dropdown_4 = $_POST['aq4_dropdown_4'];

  $aq5_text_1 = $_POST['aq5_text_1'];
  $aq5_dropdown_1 = $_POST['aq5_dropdown_1'];
  $aq5_text_2 = $_POST['aq5_text_2'];
  $aq5_dropdown_2 = $_POST['aq5_dropdown_2'];
  $aq5_text_3 = $_POST['aq5_text_3'];
  $aq5_dropdown_3 = $_POST['aq5_dropdown_3'];
  $aq5_text_4 = $_POST['aq5_text_4'];
  $aq5_dropdown_4 = $_POST['aq5_dropdown_4'];




  
  $f1_text_1 = $_POST['f1_text_1'];
  $f1_dropdown_1 = $_POST['f1_dropdown_1'];
  $f1_text_2 = $_POST['f1_text_2'];
  $f1_dropdown_2 = $_POST['f1_dropdown_2'];
  $f1_text_3 = $_POST['f1_text_3'];
  $f1_dropdown_3 = $_POST['f1_dropdown_3'];
  $f1_text_4 = $_POST['f1_text_4'];
  $f1_dropdown_4 = $_POST['f1_dropdown_4'];
  $f1_text_5 = $_POST['f1_text_5'];
  $f1_dropdown_5 = $_POST['f1_dropdown_5'];
  $f1_text_6 = $_POST['f1_text_6'];
  $f1_dropdown_6 = $_POST['f1_dropdown_6'];
  $f1_text_7 = $_POST['f1_text_7'];
  $f1_dropdown_7 = $_POST['f1_dropdown_7'];
  $f1_text_8 = $_POST['f1_text_8'];
  $f1_dropdown_8 = $_POST['f1_dropdown_8'];

  $f2_text_1 = $_POST['f2_text_1'];
  $f2_dropdown_1 = $_POST['f2_dropdown_1'];
  $f2_text_2 = $_POST['f2_text_2'];
  $f2_dropdown_2 = $_POST['f2_dropdown_2'];
  $f2_text_3 = $_POST['f2_text_3'];
  $f2_dropdown_3 = $_POST['f2_dropdown_3'];
  $f2_text_4 = $_POST['f2_text_4'];
  $f2_dropdown_4 = $_POST['f2_dropdown_4'];
  $f2_text_5 = $_POST['f2_text_5'];
  $f2_dropdown_5 = $_POST['f2_dropdown_5'];
  $f2_text_6 = $_POST['f2_text_6'];
  $f2_dropdown_6 = $_POST['f2_dropdown_6'];
  $f2_text_7 = $_POST['f2_text_7'];
  $f2_dropdown_7 = $_POST['f2_dropdown_7'];
  $f2_text_8 = $_POST['f2_text_8'];
  $f2_dropdown_8 = $_POST['f2_dropdown_8'];

  $f3_text_1 = $_POST['f3_text_1'];
  $f3_dropdown_1 = $_POST['f3_dropdown_1'];
  $f3_text_2 = $_POST['f3_text_2'];
  $f3_dropdown_2 = $_POST['f3_dropdown_2'];
  $f3_text_3 = $_POST['f3_text_3'];
  $f3_dropdown_3 = $_POST['f3_dropdown_3'];
  $f3_text_4 = $_POST['f3_text_4'];
  $f3_dropdown_4 = $_POST['f3_dropdown_4'];
  $f3_text_5 = $_POST['f3_text_5'];
  $f3_dropdown_5 = $_POST['f3_dropdown_5'];
  $f3_text_6 = $_POST['f3_text_6'];
  $f3_dropdown_6 = $_POST['f3_dropdown_6'];
  $f3_text_7 = $_POST['f3_text_7'];
  $f3_dropdown_7 = $_POST['f3_dropdown_7'];
  $f3_text_8 = $_POST['f3_text_8'];
  $f3_dropdown_8 = $_POST['f3_dropdown_8'];

  $f4_text_1 = $_POST['f4_text_1'];
  $f4_dropdown_1 = $_POST['f4_dropdown_1'];
  $f4_text_2 = $_POST['f4_text_2'];
  $f4_dropdown_2 = $_POST['f4_dropdown_2'];
  $f4_text_3 = $_POST['f4_text_3'];
  $f4_dropdown_3 = $_POST['f4_dropdown_3'];
  $f4_text_4 = $_POST['f4_text_4'];
  $f4_dropdown_4 = $_POST['f4_dropdown_4'];
  $f4_text_5 = $_POST['f4_text_5'];
  $f4_dropdown_5 = $_POST['f4_dropdown_5'];
  $f4_text_6 = $_POST['f4_text_6'];
  $f4_dropdown_6 = $_POST['f4_dropdown_6'];
  $f4_text_7 = $_POST['f4_text_7'];
  $f4_dropdown_7 = $_POST['f4_dropdown_7'];
  $f4_text_8 = $_POST['f4_text_8'];
  $f4_dropdown_8 = $_POST['f4_dropdown_8'];

  $f5_text_1 = $_POST['f5_text_1'];
  $f5_dropdown_1 = $_POST['f5_dropdown_1'];
  $f5_text_2 = $_POST['f5_text_2'];
  $f5_dropdown_2 = $_POST['f5_dropdown_2'];
  $f5_text_3 = $_POST['f5_text_3'];
  $f5_dropdown_3 = $_POST['f5_dropdown_3'];
  $f5_text_4 = $_POST['f5_text_4'];
  $f5_dropdown_4 = $_POST['f5_dropdown_4'];
  $f5_text_5 = $_POST['f5_text_5'];
  $f5_dropdown_5 = $_POST['f5_dropdown_5'];
  $f5_text_6 = $_POST['f5_text_6'];
  $f5_dropdown_6 = $_POST['f5_dropdown_6'];
  $f5_text_7 = $_POST['f5_text_7'];
  $f5_dropdown_7 = $_POST['f5_dropdown_7'];
  $f5_text_8 = $_POST['f5_text_8'];
  $f5_dropdown_8 = $_POST['f5_dropdown_8'];


  

  

$rows = 6; // Number of rows
$cols = 40; // Number of columns

// Initialize the matrix with all elements set to 0
$matrix = array_fill(0, $rows, array_fill(0, $cols, 0));





// Printing the matrix
$str1 = "_dropdown_";
$str2 = "_text_";
$index = 0;
for ($x = 1; $x <= 3; $x++)
{
    $str3 = $str1 . strval($x);
    $str4 = $str2 . strval($x);
    //$str7 = "q" . strval($x);
    for ($y = 1; $y <= 5; $y++)
    {
        $str5 = "q" . strval($y) . $str3 ;
        $str6 = "q" . strval($y) . $str4 ;

       // echo $str5." = ".$$str5." = ".$str6."<br>";

        if($$str5 == "Option 1") 
        {
            $matrix[0][$index ] = 0;
            $matrix[1][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[0] = ${$str7}[0] + (int)$$str6;
        }
        elseif($$str5 == "Option 2") 
        {
            $matrix[0][$index ] = 1;
            $matrix[1][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[1] = ${$str7}[1] + (int)$$str6;
        }
        elseif($$str5 == "Option 3") 
        {
            $matrix[0][$index ] = 2;
            $matrix[1][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[2] = ${$str7}[2] + (int)$$str6;
        }
        elseif($$str5 == "Option 4") 
        {
            $matrix[0][$index ] = 3;
            $matrix[1][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[3] = ${$str7}[3] + (int)$$str6;
        }
        elseif($$str5 == "Option 5") 
        {
            $matrix[0][$index ] = 4;
            $matrix[1][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[4] = ${$str7}[4] + (int)$$str6;
        }
        elseif($$str5 == "Option 6") 
        {
            $matrix[0][$index ] = 5;
            $matrix[1][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[4] = ${$str7}[4] + (int)$$str6;
        }
        
        //print((int)$$str6);
    }
}   

$str1 = "_dropdown_";
$str2 = "_text_";
$index = 0;
for ($x = 1; $x <= 3; $x++)
{
    $str3 = $str1 . strval($x);
    $str4 = $str2 . strval($x);
    //$str7 = "q" . strval($x);
    for ($y = 1; $y <= 5; $y++)
    {
        $str5 = "aq" . strval($y) . $str3 ;
        $str6 = "aq" . strval($y) . $str4 ;

        //echo $str5." = ".$$str5." = ".$str6."<br>";

        if($$str5 == "Option 1") 
        {
            $matrix[2][$index ] = 0;
            $matrix[3][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[0] = ${$str7}[0] + (int)$$str6;
        }
        elseif($$str5 == "Option 2") 
        {
            $matrix[2][$index ] = 1;
            $matrix[3][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[1] = ${$str7}[1] + (int)$$str6;
        }
        elseif($$str5 == "Option 3") 
        {
            $matrix[2][$index ] = 2;
            $matrix[3][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[2] = ${$str7}[2] + (int)$$str6;
        }
        elseif($$str5 == "Option 4") 
        {
            $matrix[2][$index ] = 3;
            $matrix[3][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[3] = ${$str7}[3] + (int)$$str6;
        }
        elseif($$str5 == "Option 5") 
        {
            $matrix[2][$index ] = 4;
            $matrix[3][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[4] = ${$str7}[4] + (int)$$str6;
        }
        elseif($$str5 == "Option 6") 
        {
            $matrix[2][$index ] = 5;
            $matrix[3][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[4] = ${$str7}[4] + (int)$$str6;
        }
        
        //print((int)$$str6);
    }
}   

$str1 = "_dropdown_";
$str2 = "_text_";
$index = 0;
for ($x = 1; $x <= 8; $x++)
{
    $str3 = $str1 . strval($x);
    $str4 = $str2 . strval($x);
    //$str7 = "q" . strval($x);
    for ($y = 1; $y <= 5; $y++)
    {
        $str5 = "f" . strval($y) . $str3 ;
        $str6 = "f" . strval($y) . $str4 ;

        //echo $str5." = ".$$str5." = ".$str6."<br>";

        if($$str5 == "Option 1") 
        {
            $matrix[4][$index ] = 0;
            $matrix[5][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[0] = ${$str7}[0] + (int)$$str6;
        }
        elseif($$str5 == "Option 2") 
        {
            $matrix[4][$index ] = 1;
            $matrix[5][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[1] = ${$str7}[1] + (int)$$str6;
        }
        elseif($$str5 == "Option 3") 
        {
            $matrix[4][$index ] = 2;
            $matrix[5][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[2] = ${$str7}[2] + (int)$$str6;
        }
        elseif($$str5 == "Option 4") 
        {
            $matrix[4][$index ] = 3;
            $matrix[5][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[3] = ${$str7}[3] + (int)$$str6;
        }
        elseif($$str5 == "Option 5") 
        {
            $matrix[4][$index ] = 4;
            $matrix[5][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[4] = ${$str7}[4] + (int)$$str6;
        }
        elseif($$str5 == "Option 6") 
        {
            $matrix[4][$index ] = 5;
            $matrix[5][$index ] = (int)$$str6;
            $index ++;
        //${$str7}[4] = ${$str7}[4] + (int)$$str6;
        }
        
        //print((int)$$str6);
    }
}   

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo $matrix[$i][$j] . ' ';
    }
    echo '<br>';
}

/*$rows = 125; // Number of rows
$cols = 7; // Number of columns

// Initialize the matrix with all elements set to 0
$obatained_ct = array_fill(0, $rows, array_fill(0, $cols, 0));
$total_ct = array_fill(0, $rows, array_fill(0, $cols, 0));

$obatained_ass = array_fill(0, $rows, array_fill(0, $cols, 0));
$total_ass = array_fill(0, $rows, array_fill(0, $cols, 0));

$obatained_final = array_fill(0, $rows, array_fill(0, $cols, 0));
$total_final = array_fill(0, $rows, array_fill(0, $cols, 0));

$obatained = array_fill(0, $rows, array_fill(0, $cols, 0));
$total = array_fill(0, $rows, array_fill(0, $cols, 0));


$_SESSION['matrix'] = $matrix;
$_SESSION['obatained'] = $obatained;
$_SESSION['total'] = $total;
*/

$conn = new mysqli('localhost','root','','test');



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP TABLE IF EXISTS $code";

if ($conn->query($sql) === TRUE) {
    echo "Table $code dropped successfully.";
} else {
    echo "Error dropping table: " . $conn->error;
}

// SQL query to create the table with 40 columns
$sql = "CREATE TABLE $code (
    col1 INT,
    col2 INT,
    col3 INT,
    col4 INT,
    col5 INT,
    col6 INT,
    col7 INT,
    col8 INT,
    col9 INT,
    col10 INT,
    col11 INT,
    col12 INT,
    col13 INT,
    col14 INT,
    col15 INT,
    col16 INT,
    col17 INT,
    col18 INT,
    col19 INT,
    col20 INT,
    col21 INT,
    col22 INT,
    col23 INT,
    col24 INT,
    col25 INT,
    col26 INT,
    col27 INT,
    col28 INT,
    col29 INT,
    col30 INT,
    col31 INT,
    col32 INT,
    col33 INT,
    col34 INT,
    col35 INT,
    col36 INT,
    col37 INT,
    col38 INT,
    col39 INT,
    col40 INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $code created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}



for ($j=0;$j<6;$j++)
{
    $command = "INSERT INTO $code (col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,col11,col12,col13,col14,col15,col16,col17,col18,col19,col20,col21,col22,col23,col24,col25,col26,col27,col28,col29,col30,col31,col32,col33,col34,col35,col36,col37,col38,col39,col40) VALUES(";
    for ($i=0;$i<40;$i++)
    {
        $command .= $matrix[$j][$i];

        if($i<39) $command .= ",";
    }
    $command .= ")";
    //echo $command."<br>";
    if (mysqli_query($conn, $command)) 
    {
        echo "Matrix data saved successfully!";
    } 
    else 
    {
        echo "Error saving matrix data: " . mysqli_error($connection);
    }
}
// Execute the INSERT query


// Close the database connection
mysqli_close($conn);


header("Location: test.html");
exit();

}

?>


