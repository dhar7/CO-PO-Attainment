<?php
$rows = 125; // Number of rows
$cols = 7; // Number of columns
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$th = $_POST['th'];
//$matrix = array_fill(0, 6, array_fill(0, 40, 0));

session_start();


$code = $_SESSION['code'];
$batch = $_SESSION['batch'];
$conn = new mysqli('localhost','root','','test');
$query = "SHOW TABLES LIKE '$code'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    
    // Table exists, so read its data into a 2D matrix
    
    $code = $_SESSION['code'];
    $batch = $_SESSION['batch'];
    $query = "SELECT * FROM $code";
    $result = mysqli_query($conn, $query);
    $matrix = array();

    // Check if there are any records in the table
    if ($result->num_rows > 0) {
        // Loop through each row and store the values into the $matrix array
        while ($row = $result->fetch_row()) {
            $matrix[] = $row;
        }
    }

    // Display the 2D matrix
    
} else {
    echo "Table does not exist!";
}

function valueExceed($i,$roll)
{
    //echo"asdsad";
    if (1<=$i && $i<=5)
    {
        echo"1";
        if($i-1 % 5 == 0)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT1 Q1", E_USER_ERROR);
        elseif($i-1 % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT1 Q2", E_USER_ERROR);
        elseif($i-1 % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT1 Q3", E_USER_ERROR);
        elseif($i-1 % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT1 Q4", E_USER_ERROR);
        elseif($i-1 % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT1 Q5", E_USER_ERROR);
    }    
    elseif (6<=$i && $i<=10)
    {
        echo"2";
        if($i % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT2 Q1", E_USER_ERROR);
        elseif($i % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT2 Q2", E_USER_ERROR);
        elseif($i % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT2 Q3", E_USER_ERROR);
        elseif($i % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT2 Q4", E_USER_ERROR);
        elseif($i % 5 == 5)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT2 Q5", E_USER_ERROR);
    }
    elseif (11<=$i && $i<=15)
    {
        echo"3";
        if($i-1 % 5 == 0)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT3 Q1", E_USER_ERROR);
        elseif($i-1 % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT3 Q2", E_USER_ERROR);
        elseif($i-1 % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT3 Q3", E_USER_ERROR);
        elseif($i-1 % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT3 Q4", E_USER_ERROR);
        elseif($i-1 % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at CT3 Q5", E_USER_ERROR);
    }
    exit();
}

//$matrix = $_SESSION['matrix'];
$obatained = array_fill(0, $rows, array_fill(0, $cols, 0));
$total = array_fill(0, $rows, array_fill(0, $cols, 0));



//$filename = "CT_"."2K".$batch."_".$code.".csv";  // Replace with the path to your CSV file
$filename = "ct.csv";


$r = 1;
$lines = file($filename, FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) 
{
    $data = str_getcsv($line);

    // Fill missing values with 0
    $data = array_map(function ($value) {
        return empty($value) ? 0 : $value;
    }, $data);

    //foreach ($data as $value) {
    //    echo $value . ' ';
    //}

    for( $i = 0; $i<16; $i++)
    {
        if( ($data[0] != '') && ($data[0] != 'Roll') )
        {
            if($i == 0)
            {
                $obatained[$r][0] = $data[0];
                $total[$r][0] = $data[0];
            }
            else
            {
                if ($matrix[0][$i-1] == 0)
                {
                    if ( (int)$data[$i] <= (int)$matrix[1][$i-1])
                    {
                        $obatained[$r][1] += (int)$data[$i];
                        $total[$r][1] += (int)$matrix[1][$i-1];
                    }
                    else
                    {
                        echo (int)$matrix[1][$col3];
                        //header("Location: index.html?error=exceeded");
                        valueExceed($i, $data[0]);
                       // exit();
                    }    
                }
                elseif ($matrix[0][$i-1] == 1)
                {
                    if ( (int)$data[$i] <= (int)$matrix[1][$i-1])
                    {
                        $obatained[$r][2] += (int)$data[$i];
                        $total[$r][2] += (int)$matrix[1][$i-1];
                    }  
                    else
                    {
                        //header("Location: index.html?error=exceeded");
                        valueExceed($i, $data[0]);
                        //exit();
                    }   
                }
                elseif ($matrix[0][$i-1] == 2)
                {
                    if ( (int)$data[$i] <= (int)$matrix[1][$i-1])
                    {
                        $obatained[$r][3] += (int)$data[$i];
                        $total[$r][3] += (int)$matrix[1][$i-1];
                    }  
                    else
                    {
                        //header("Location: index.html?error=exceeded");
                        valueExceed($i, $data[0]);
                        //exit();
                    }   
                }
                elseif ($matrix[0][$i-1] == 3)
                {
                    if ( (int)$data[$i] <= (int)$matrix[1][$i-1])
                    {
                        $obatained[$r][4] += (int)$data[$i];
                        $total[$r][4] += (int)$matrix[1][$i-1];
                    }    
                    else
                    {
                        //header("Location: index.html?error=exceeded");
                        valueExceed($i, $data[0]);
                        //exit();
                    } 
                }
                elseif ($matrix[0][$i-1] == 4)
                {
                    if ( (int)$data[$i] <= (int)$matrix[1][$i-1])
                    {
                        $obatained[$r][5] += (int)$data[$i];
                        $total[$r][5] += (int)$matrix[1][$i-1];
                    }  
                    else
                    {
                        //header("Location: index.html?error=exceeded");
                        valueExceed($i, $data[0]);
                        //exit();
                    }   
                }
                elseif ($matrix[0][$i-1] == 5)
                {
                    if ( (int)$data[$i] <= (int)$matrix[1][$i-1])
                    {
                        $obatained[$r][6] += (int)$data[$i];
                        $total[$r][6] += (int)$matrix[1][$i-1];
                    } 
                    else
                    {
                        //header("Location: index.html?error=exceeded");
                        valueExceed($i, $data[0]);
                        //exit();
                    }    
                }
            }    
        }    
        else break;
    }
    $r++;
    
}



/*for ($i = 0; $i < 125; $i++) 
{
    for ($j = 0; $j < 7; $j++) {
        echo $obatained[$i][$j] . ' ';
    }
    for ($j = 0; $j < 7; $j++) {
        echo $total[$i][$j] . ' ';
    }
    echo '<br>';
}*/

//$_SESSION['matrix'] = $matrix;
$_SESSION['ct'] = $obatained;
$_SESSION['total_ct'] = $total;
$_SESSION['th'] = $th;

header("Location: calculate_assignment.php");
exit;



?>