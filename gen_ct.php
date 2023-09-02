



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
        fputcsv($file, ['','','','CT1', '', '','', '', 'CT2', '', '','', '', 'CT3', '', '']);
        fputcsv($file, ['Roll','Q1','Q2','Q3', 'Q4', 'Q5','Q1','Q2','Q3', 'Q4', 'Q5','Q1','Q2','Q3', 'Q4', 'Q5']);
        for($i = 1; $i<=125; $i++)
        {
            //echo $i;
            $a = array();
            if (strlen(strval($i)) == 1) $roll = strval($batch)."0700".strval($i);
            elseif (strlen(strval($i)) == 2) $roll = strval($batch)."070".strval($i);
            elseif (strlen(strval($i)) == 3) $roll = strval($batch)."07".strval($i);
            for($j=0;$j<16;$j++)
            {
                if($j==0) $a[$j] = $roll;
                elseif( $j==1 || $j==2 || $j==6 || $j==7 || $j==11 || $j==12 )
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
//$csvFileName = "CT_"."2K".$batch."_".$code.".csv";
$csvFileName = "ct.csv";
if (!file_exists($csvFileName)) createCsvIfNotExists($csvFileName);

echo "CSV file created successfully!";
header("Location: test.html");
?>


