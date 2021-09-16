<?php
namespace App\Services;

use App\Models\Recipient;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class TxtFileParser extends  AbstractParser
{
    /**
     * Function to extraxt data from text string
     * @returns array
     */
    public function process($filePath,$groupRecipientType,$type ='group')
    {
        // $filePath - Text File path

        $fileData   = file_get_contents($filePath); // Get text from file
        $txtData    = preg_split("/\n,/", $fileData); //expode string on the basis of , \n and returns array
        dd($txtData);
        $txtData = $this->getData($txtData,$groupRecipientType);
        return $txtData ;
    }

}

?>
