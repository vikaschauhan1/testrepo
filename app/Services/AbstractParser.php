<?php
namespace App\Services;

use App\Models\Recipient;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;


Abstract class AbstractParser
{

    public  abstract function process($filePath,$groupRecipientType,$type) ;

    public static function getData(array $fileContentArray,$groupRecipientType)
    {
        $numbersResult = isValidPhone($fileContentArray, $groupRecipientType);
        return $numbersResult ;
    }

}

?>
