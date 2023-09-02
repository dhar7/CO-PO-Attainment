<?php

ob_start();

//echo "finalass";
$rows = 125; // Number of rows
$cols = 7; // Number of columns

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$matrix = array_fill(0, 6, array_fill(0, 40, 0));

session_start();
$th = floatval($_SESSION['th']);
$code = $_SESSION['code'];
$conn = new mysqli('localhost','root','','test');
$query = "SHOW TABLES LIKE '$code'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) 
{
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
    
} 
else 
{
    //echo "Table does not exist!";
}

//$matrix = $_SESSION['matrix'];
$obatained = array_fill(0, $rows, array_fill(0, $cols, 0));
$total = array_fill(0, $rows, array_fill(0, $cols, 0));


function calculate($i,$data,$matrix,$obatained,$total,$r)
{
    
    if ($matrix[4][$i-1] == 0)
    {
        if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
        {
            $obatained[$r][1] += (int)$data[$i];
            $total[$r][1] += (int)$matrix[5][$i-1];
        }
        else
        {
            //echo $data[$i]." ".$matrix[5][$i-1];
            //header("Location: index.html?error=exceeded");
            valueExceed($i, $data[0]);
        // exit();
        }    
    }
    elseif ($matrix[4][$i-1] == 1)
    {
        if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
        {
            $obatained[$r][2] += (int)$data[$i];
            $total[$r][2] += (int)$matrix[5][$i-1];
        }  
        else
        {
            //header("Location: index.html?error=exceeded");
            valueExceed($i, $data[0]);
            //exit();
        }   
    }
    elseif ($matrix[4][$i-1] == 2)
    {
        if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
        {
            $obatained[$r][3] += (int)$data[$i];
            $total[$r][3] += (int)$matrix[5][$i-1];
        }  
        else
        {
            //header("Location: index.html?error=exceeded");
            valueExceed($i, $data[0]);
            //exit();
        }   
    }
    elseif ($matrix[4][$i-1] == 3)
    {
        if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
        {
            $obatained[$r][4] += (int)$data[$i];
            $total[$r][4] += (int)$matrix[5][$i-1];
        }    
        else
        {
            //header("Location: index.html?error=exceeded");
            valueExceed($i, $data[0]);
            //exit();
        } 
    }
    elseif ($matrix[4][$i-1] == 4)
    {
        if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
        {
            $obatained[$r][5] += (int)$data[$i];
            $total[$r][5] += (int)$matrix[5][$i-1];
        }  
        else
        {
            //header("Location: index.html?error=exceeded");
            valueExceed($i, $data[0]);
            //exit();
        }   
    }
    elseif ($matrix[4][$i-1] == 5)
    {
        if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
        {
            $obatained[$r][6] += (int)$data[$i];
            $total[$r][6] += (int)$matrix[5][$i-1];
        } 
        else
        {
            //header("Location: index.html?error=exceeded");
            valueExceed($i, $data[0]);
            //exit();
        }    
    }
}

function valueExceed($i,$roll)
{
    ////echo"asdsad";
    if (1<=$i && $i<=5)
    {
        ////echo"1";
        if($i % 8 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q1 a", E_USER_ERROR);
        elseif($i % 8 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q1 b", E_USER_ERROR);
        elseif($i % 8 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q1 c", E_USER_ERROR);
        elseif($i % 8 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q1 d", E_USER_ERROR);
        elseif($i % 8 == 5)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q1 e", E_USER_ERROR);
    }    
    elseif (6<=$i && $i<=10)
    {
        //echo"2";
        if($i % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q2 a", E_USER_ERROR);
        elseif($i % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q2 b", E_USER_ERROR);
        elseif($i % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q2 c", E_USER_ERROR);
        elseif($i % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q2 d", E_USER_ERROR);
        elseif($i % 5 == 5)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q2 e", E_USER_ERROR);
    }
    elseif (11<=$i && $i<=15)
    {
        //echo"3";
        if($i % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q3 a", E_USER_ERROR);
        elseif($i % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q3 b", E_USER_ERROR);
        elseif($i % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q3 c", E_USER_ERROR);
        elseif($i % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q3 d", E_USER_ERROR);
        elseif($i % 5 == 5)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q3 e", E_USER_ERROR);
    }
    elseif (16<=$i && $i<=20)
    {
        //echo"4";
        if($i % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q4 a", E_USER_ERROR);
        elseif($i % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q4 b", E_USER_ERROR);
        elseif($i % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q4 c", E_USER_ERROR);
        elseif($i % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q4 d", E_USER_ERROR);
        elseif($i % 5 == 5)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q4 e", E_USER_ERROR);
    }
    elseif (21<=$i && $i<=25)
    {
        //echo"3";
        if($i-1 % 5 == 0)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q5 a", E_USER_ERROR);
        elseif($i-1 % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q5 b", E_USER_ERROR);
        elseif($i-1 % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q5 c", E_USER_ERROR);
        elseif($i-1 % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q5 d", E_USER_ERROR);
        elseif($i-1 % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q5 e", E_USER_ERROR);
    }
    elseif (26<=$i && $i<=30)
    {
        //echo"3";
        if($i-1 % 5 == 0)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q6 a", E_USER_ERROR);
        elseif($i-1 % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q6 b", E_USER_ERROR);
        elseif($i-1 % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q6 c", E_USER_ERROR);
        elseif($i-1 % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q6 d", E_USER_ERROR);
        elseif($i-1 % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q6 e", E_USER_ERROR);
    }
    elseif (31<=$i && $i<=35)
    {
        //echo"3";
        if($i-1 % 5 == 0)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q7 a", E_USER_ERROR);
        elseif($i-1 % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q7 b", E_USER_ERROR);
        elseif($i-1 % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q7 c", E_USER_ERROR);
        elseif($i-1 % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q7 d", E_USER_ERROR);
        elseif($i-1 % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q7 e", E_USER_ERROR);
    }
    elseif (36<=$i && $i<=40)
    {
        //echo"3";
        if($i-1 % 5 == 0)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q8 a", E_USER_ERROR);
        elseif($i-1 % 5 == 1)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q8 b", E_USER_ERROR);
        elseif($i-1 % 5 == 2)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q8 c", E_USER_ERROR);
        elseif($i-1 % 5 == 3)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q8 d", E_USER_ERROR);
        elseif($i-1 % 5 == 4)trigger_error("Value exceeded the maximum allowed for Roll: ". $roll. "at Q8 e", E_USER_ERROR);
    }
    exit();
}





//$filename = 'Final_2K20_CSE2101.csv';  // Replace with the path to your CSV file
$filename = "final.csv";


$r = 1;
$lines = file($filename, FILE_IGNORE_NEW_LINES);
echo $lines;
foreach ($lines as $line) 
{
    echo $line."<br>";
    $data = str_getcsv($line);

    // Fill missing values with 0
    $data = array_map(function ($value) {
        return empty($value) ? 0 : $value;
    }, $data);

    //foreach ($data as $value) {
    //    //echo $value . ' ';
    //}

    for( $i = 0; $i<41; $i++)
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
                
                ////echo $i."<br>";
                ////echo "-------------"."<br>";
                //if($i==1 || $i==6 || $i==11 || $i==16 || $i==21 || $i==26 || $i==31 || $i==36 )
                if( $i%5 == 1)
                {
                    $a = (int)$data[$i];
                    $b = (int)$data[$i+1];
                    $c = (int)$data[$i+2];
                    $d = (int)$data[$i+3];
                    $e = (int)$data[$i+4];
                   // //echo $a." ";//echo $b." ";//echo $c." ";//echo $d." ";//echo $e." ";
                    if($a==0 && $b==0 && $c==0 && $d==0 && $e==0) {   $i = $i + 4;}
                    else 
                    {
                        
                        //echo"<br>";
                        if ($matrix[4][$i-1] == 0)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][1] += (int)$data[$i];
                                $total[$r][1] += (int)$matrix[5][$i-1];
                            }
                            else
                            {
                                //echo $data[$i]." ".$matrix[5][$i-1];
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                            // exit();
                            }    
                        }
                        elseif ($matrix[4][$i-1] == 1)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][2] += (int)$data[$i];
                                $total[$r][2] += (int)$matrix[5][$i-1];
                            }  
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            }   
                        }
                        elseif ($matrix[4][$i-1] == 2)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][3] += (int)$data[$i];
                                $total[$r][3] += (int)$matrix[5][$i-1];
                            }  
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            }   
                        }
                        elseif ($matrix[4][$i-1] == 3)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][4] += (int)$data[$i];
                                $total[$r][4] += (int)$matrix[5][$i-1];
                            }    
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            } 
                        }
                        elseif ($matrix[4][$i-1] == 4)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][5] += (int)$data[$i];
                                $total[$r][5] += (int)$matrix[5][$i-1];
                            }  
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            }   
                        }
                        elseif ($matrix[4][$i-1] == 5)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][6] += (int)$data[$i];
                                $total[$r][6] += (int)$matrix[5][$i-1];
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
                else 
                {
                    if ($matrix[4][$i-1] == 0)
                        {
                            
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][1] += (int)$data[$i];
                                $total[$r][1] += (int)$matrix[5][$i-1];
                            }
                            else
                            {
                                ////echo $data[$i]." ".$matrix[5][$i-1];
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                            // exit();
                            }    
                        }
                        elseif ($matrix[4][$i-1] == 1)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][2] += (int)$data[$i];
                                $total[$r][2] += (int)$matrix[5][$i-1];
                            }  
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            }   
                        }
                        elseif ($matrix[4][$i-1] == 2)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][3] += (int)$data[$i];
                                $total[$r][3] += (int)$matrix[5][$i-1];
                            }  
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            }   
                        }
                        elseif ($matrix[4][$i-1] == 3)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][4] += (int)$data[$i];
                                $total[$r][4] += (int)$matrix[5][$i-1];
                            }    
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            } 
                        }
                        elseif ($matrix[4][$i-1] == 4)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][5] += (int)$data[$i];
                                $total[$r][5] += (int)$matrix[5][$i-1];
                            }  
                            else
                            {
                                //header("Location: index.html?error=exceeded");
                                valueExceed($i, $data[0]);
                                //exit();
                            }   
                        }
                        elseif ($matrix[4][$i-1] == 5)
                        {
                            if ( (int)$data[$i] <= (int)$matrix[5][$i-1])
                            {
                                $obatained[$r][6] += (int)$data[$i];
                                $total[$r][6] += (int)$matrix[5][$i-1];
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
        }    
        else break;
    }
    $r++;
    echo $line;
    
}

echo $r;




$term_final = $obatained;
$total_term_final = $total;

$ct = $_SESSION['ct'];
$total_ct = $_SESSION['total_ct'];

$ass = $_SESSION['assignment'];
$total_ass = $_SESSION['total_assignment'];

$o = array_fill(0, $rows, array_fill(0, $cols, 0));
$t = array_fill(0, $rows, array_fill(0, $cols, 0));
$p = array_fill(0, $rows, array_fill(0, $cols, 0));
$d = array_fill(0, $rows, array_fill(0, $cols, 0));

for ($i = 0; $i < 128; $i++) 
{
    for ($j = 0; $j < 7; $j++)
    {
        
        if ($j != 0)
        {
            $o[$i][$j] += $ct[$i][$j] + $ass[$i][$j] + $term_final[$i][$j];
            $t[$i][$j] += $total_ct[$i][$j] + $total_ass[$i][$j] + $total_term_final[$i][$j];
            if ($t[$i][$j] != 0) $p[$i][$j] = ( $o[$i][$j] / $t[$i][$j] ) * 100.0;
            else $p[$i][$j] = '-';
            if ($p[$i][$j] != '-')
            {
                if ($p[$i][$j] >= $th) $d[$i][$j] = 'Y';
                else $d[$i][$j] = 'N';
            }
            else $d[$i][$j] = '-';

        }
        else
        {
            $o[$i][$j] = $ct[$i][$j];
            $t[$i][$j] = "";
            $p[$i][$j] = "";
            $d[$i][$j] = "";

        }

    }
}


/*for ($i = 0; $i < 125; $i++) 
{
    for ($j = 0; $j < 7; $j++) {
        //echo $o[$i][$j] . ' ';
    }
    for ($j = 0; $j < 7; $j++) {
        //echo $t[$i][$j] . ' ';
    }
    for ($j = 0; $j < 7; $j++) {
        //echo $p[$i][$j] . ' ';
    }
    for ($j = 0; $j < 7; $j++) {
        //echo $d[$i][$j] . ' ';
    }
    //echo '<br>';
}*/

$data = array_map('array_merge', $o, $t, $p, $d);

$d1 = 0;
$d2 = 0;
$d3 = 0;
$d4 = 0;
$d5 = 0;
$d6 = 0;

function createCSV($filename, $data) 
{
    if (file_exists($filename)) {
        unlink($filename);
    }
    $file = fopen($filename, 'w');
    $pl = array("", "","","","","","","", "","","","","","","", "","","","","","","Final:", "23","24","25","26","27","28","");
    $dd = array("", "","","","Obtained","","","", "","","","Total","","","", "","","","Percentage","","","", "","","","Decision","","",""); fputcsv($file,$dd);
    $dd = array("Roll","CO1","CO2","CO3","CO4","CO5","Other","" ,"CO1","CO2","CO3","CO4","CO5","Other","","CO1","CO2","CO3","CO4","CO5","Other","","CO1","CO2","CO3","CO4","CO5","Other","");fputcsv($file,$dd);
    $i = 0;
    foreach ($data as $row)
    {  
        if($i>2)
        {
            fputcsv($file, $row);
            if ($row[22] == "Y") $d1++;
            if ($row[23] == "Y") $d2++;
            if ($row[24] == "Y") $d3++;
            if ($row[25] == "Y") $d4++;
            if ($row[26] == "Y") $d5++;
            if ($row[27] == "Y") $d6++;
        }    
        $i++;
    }
    ////echo $i;
    if($d1>0)
    {
        if( ($d1 / ($i-3)) * 100.0  >= $th )  $pl[22] = "Y"; 
        else $pl[22] = "N";
    } 
    else $pl[22] = "-";
    if($d1>0){if($d1 >= (($i-3)/2) ) $pl[22] = "Y"; else $pl[22] = "N";} else $pl[22] = "-";
    if($d2>0){if($d2 >= (($i-3)/2) ) $pl[23] = "Y"; else $pl[23] = "N";} else $pl[23] = "-";
    if($d3>0){if($d3 >= (($i-3)/2) ) $pl[24] = "Y"; else $pl[24] = "N";} else $pl[24] = "-";
    if($d4>0){if($d4 >= (($i-3)/2) ) $pl[25] = "Y"; else $pl[25] = "N";} else $pl[25] = "-";
    if($d5>0){if($d5 >= (($i-3)/2) ) $pl[26] = "Y"; else $pl[26] = "N";} else $pl[26] = "-";
    if($d6>0){if($d6 >= (($i-3)/2) ) $pl[27] = "Y"; else $pl[27] = "N";} else $pl[27] = "-";

    fputcsv($file,$pl);
     
    fclose($file);

    echo $d1."<br>";
    echo $d2."<br>";
    echo $d3."<br>";
    echo $d4."<br>";
    echo $d5."<br>";
    echo $d6."<br>";

    header("Location: last.html");
    ob_end_flush();
}

// Check if "result" or "result(1)" file already exists
$baseFilename = 'result';
$suffix = '';
$counter = 1;
while (file_exists($baseFilename . $suffix . '.csv')) {
    $suffix = '(' . $counter . ')';
    $counter++;
}

// Generate the final filename
//$finalFilename = $baseFilename . $suffix . '.csv';
$finalFilename = "result.csv";

// Create the CSV file with the 'total' matrix data
createCSV($finalFilename, $data);

echo "CSV file '$finalFilename' has been created successfully.";


?>