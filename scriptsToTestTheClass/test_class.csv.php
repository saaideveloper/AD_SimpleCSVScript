<?php
require_once('../class.csv.php');
$CSV='../Data/m1_export_reactiveparts.csv';

$importer = new CsvImporter($CSV,',',true);
if(!$importer->headerExists('sku')) {echo 'Missing column sku in the CSV.'; exit;}
 foreach($importer->get() as $num=>$ligne) {
    print_r($ligne);
 }
