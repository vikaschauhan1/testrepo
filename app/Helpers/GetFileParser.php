<?php 
if (!function_exists('getFileParser'))
{
    /**
     * @param extension file extension
     * @return  file parser class name
     *
     */

    function getFileParser($extension)
    {
        
        $fileName = ucwords($extension).'FileParser';
        $className = '\App\Services\\'.$fileName;
        return new $className;
    }

    
}



?>
