<?php
/**
 * Template Name: additional feature
 * Created by PhpStorm.
 * User: Waqas Riaz
 * Date: 19/12/16
 * Time: 4:06 PM
 * Since v1.5.0
 */

$row = 1;
$handel = "/home/listed420/public_html/update/newsetup.csv";
function csv_to_array($filename='', $delimiter=',')
{
	if(!file_exists($filename) || !is_readable($filename))
		return FALSE;
	
	$header = NULL;
	$data = array();
	if (($handle = fopen($filename, 'r')) !== FALSE)
	{
		while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
		{
			if(!$header){
				$header = explode("\t",$row[0]);
			}
			else {
				$rowData = explode("\t",$row[0]);
				foreach ($rowData as $key => &$value) {
					if(in_array($value, array('#','NA'))) {
						$rowData[$key] = '';
					}
				}
				$data[] = array_combine($header, $rowData);
			}
		}
		fclose($handle);
	}
	return $data;
}

$result = csv_to_array($handel);

function array_to_csv_download($array, $filename = "export.csv", $delimiter=";") {
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');
    $f = fopen('php://output', 'w');
    foreach ($array as $line) {
        fputcsv($f, array(0=>serialize($line)), $delimiter);
    }
}
array_to_csv_download($result);
?>