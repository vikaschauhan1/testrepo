<?php

namespace App\Services;

use App\Models\Recipient;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Services\AbstractParser ;

class CsvFileParser extends AbstractParser
{
    /**
     * Function to Process the Uploaded CSV Data.
     * @returns Array
     */
    public  function process($filePath, $groupRecipientType, $type ='group')
    {

        // $filePath - CSV File Path

        $file = fopen($filePath,"r");
        $data = array();
        while(! feof($file))
        {
            $data[] = fgetcsv($file);
        }
        fclose($file);

        // $group      = 'to check if group - for numbers only';
        // $broadcast  = 'to check if broadcast - for numbers and messages';
        $csvData    = [];
        
        // if($group){
            foreach ($data as $key => $row) {
                if($key == 0) {
                    continue;
                }
                if(isset($row[0]) && ($row[0] != '') ){
                    $csvData[] = $row[0];
                }
            }
        // }
        // if($broadcast){
        //     foreach ($fileData as $key => $row) {
        //         if($key == 0) {
        //             continue;
        //         }
        //         if(isset($row[0]) && isset($row[1]) && ($row[0] != '') && ($row[1] != '') ){
        //             $csvData[] = array( 'number' => $row[0], 'message' => $row[1] );
        //         }
        //     }
        // }

        $validCsvData = $this->getData($csvData,$groupRecipientType);
        return $validCsvData ;
    }


}

?>
