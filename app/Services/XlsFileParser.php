<?php
namespace App\Services;

use App\Models\Recipient;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

require_once 'Classes/PHPExcel/IOFactory.php';

class XlsFileParser
{

    public static function process($filePath,$groupRecipientType,$type ='group')
    {

        $excelObj   = \PHPExcel_IOFactory::load($filePath);
        $getsheet   = $excelObj->getActiveSheet()->toArray(null);
        $sheetData  = [];
        // if($group){
            foreach ($getsheet as $key => $row) {
                if($key == 0) {
                    continue;
                }
                if(isset($row[0]) && ($row[0] != '') ){
                    $sheetData[] = $row[0];
                }
            }
        // }
        // if($broadcast){
        //     foreach ($getsheet as $key => $row) {
        //         if($key == 0) {
        //             continue;
        //         }
        //         if(isset($row[0]) && isset($row[1]) && ($row[0] != '') && ($row[1] != '') ){
        //             $sheetData[] = array( 'number' => $row[0], 'message' => $row[1] );
        //         }
        //     }
        // }
            dd($sheetData);
        return $sheetData;
        
    }

}

?>
