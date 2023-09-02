
<?php

session_start();

function createCsvIfNotExists($filename)
{
    //if (!file_exists($filename)) {
        $batch = $_SESSION['batch'];
        //echo $batch;echo $batch;
        unlink($filename);
        $file = fopen($filename, 'w');
        //fputcsv($file, array_fill(0, 16));
        fputcsv($file, ['','','','Q1', '', '','', '', 'Q2', '', '','', '', 'Q3', '', '','','','Q4', '', '','', '', 'Q5', '', '','', '', 'Q6', '', '','','','Q7', '', '','', '', 'Q8', '', '','']);
        fputcsv($file, ['Roll','a','b','c', 'd', 'e','a','b','c', 'd', 'e','a','b','c', 'd', 'e','a','b','c', 'd', 'e','a','b','c', 'd', 'e','a','b','c', 'd', 'e','a','b','c', 'd', 'e','a','b','c', 'd', 'e']);
        for($i = 1; $i<=125; $i++)
        {
            //echo $i;
            $a = array();
            if (strlen(strval($i)) == 1) $roll = strval($batch)."0700".strval($i);
            elseif (strlen(strval($i)) == 2) $roll = strval($batch)."070".strval($i);
            elseif (strlen(strval($i)) == 3) $roll = strval($batch)."07".strval($i);
            for($j=0;$j<41;$j++)
            {
                if($j==0) $a[$j] = $roll;
                elseif( $j==1 || $j==2 || $j==3 ||$j==6 || $j==7 || $j==8 || $j==11 || $j==12 || $j==13
                || $j==26 || $j==27 || $j==28 
                || $j==31 || $j==32 || $j==33 || $j==36 || $j==37 || $j==38 )
                {
                    $a[$j] = rand(0,10);
                    
                }
                else $a[$j] = '';
            }
            fputcsv($file, $a);
        }
        fclose($file);
    //}
    //else 
}
$code = $_SESSION['code'];
$batch = $_SESSION['batch'];
$csvFileName = "final.csv";
//$csvFileName = "Final_"."2K".$batch."_".$code.".csv";
if (!file_exists($csvFileName))createCsvIfNotExists($csvFileName);

echo "CSV file created successfully!";

header("Location: test.html");
?>


