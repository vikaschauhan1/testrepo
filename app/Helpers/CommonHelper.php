<?php

use Route as Route;
use \Carbon\Carbon as Carbon;


if (!function_exists('isActiveRoute')) {
    /**
     * @param string
     * @return  string
     *
     */

    function isActiveRoute($route, $output = 'active')
    {

        if (strpos($route, ',') !== false) {
            $routArray = explode(',', $route);
            if (in_array(Route::currentRouteName(), $routArray)) {
                return $output;
            }
        } else {
            if (Route::currentRouteName() == $route) {
                return $output;
            }
        }

        return $output = '';


    }
}

if (!function_exists('formatDate')) {
    /**
     * @param date and date format as carbon supported
     * @return  formatted date
     *
     */

    function formatDate($date, $format = 'd M Y', $queryComparision = false)
    {
        if ($queryComparision) {
            $dateObj = \DateTime::createFromFormat('d/m/Y H:i', $date);
            $date = $dateObj->format($format);
        } else {
            $date = new Carbon($date);
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($format);
        }

        return $date;
    }
}

if (!function_exists('getPhoneNumbers')) {
    /**
     * @param string PhoneNumbers from manual recipient type
     * @return  array: list of PhoneNumbers
     *
     */

    function getPhoneNumbers($numbers)
    {
        $totalPhoneNumbers = preg_split("/[:,\s]+/", $numbers);
        return $totalPhoneNumbers;
    }
}


if (!function_exists('getFilename')) {
    /**
     * @param string: File extention like txt,zip,csv etc
     * @return  string: Random numeric name with file extention.
     *
     */

    function getFilename($originalFileExtention)
    {
        $timestamp = time();
        $rand = rand(11111, 99999);
        $newFileName = $timestamp . $rand . '.' . $originalFileExtention;
        return $newFileName;
    }
}

if (!function_exists('getGroupRecipientType')) {
    /**
     * @param string: Recipient type as raw input from form
     * @return  string: Recipient type for DB save and for conditional statement
     *
     */

    function getGroupRecipientType($classObj, $inputGroupRecipientType)
    {
        switch ($inputGroupRecipientType) {

            case $classObj::DOMESTIC :
                return $classObj::DOMESTIC;
                break;
            case $classObj::INT :
                return $classObj::INTERNATIONAL;
                break;
            case $classObj::ALL :
                return $classObj::ALL;
                break;
            default:
                return $classObj::DOMESTIC;
        }
    }
}

if (!function_exists('errorMessage')) {
    /**
     * @param string: Type Of error and dynamic Input data
     * @return  array: error message with some dynamic data
     *
     */

    function errorMessage($errorInfo = NULL, $input = NULL)
    {
        switch ($errorInfo) {
            case 'append':
                return ['info' => true, 'message' => '<b> 0 </b> Phone number appended.'];
            case 'remove':
                return ['info' => true, 'message' => '<b> 0 </b> Phone Number removed.'];
            case 'invalidFile':
                return ['commonError' => true, 'message' => "Please Select file with valid extention .
                    Your file: $input is invalid."];
            case 'alreadyExist':
                return ['commonError' => true, 'message' => "This group: $input is already exist."];
            default:
                return ['commonError' => true, 'message' => 'Something went wrong.Please try again later!'];
        }

    }

}


if (!function_exists('successMessage')) {
    /**
     * @param string: Type Of success and dynamic Input parameters
     * @return  array: success message with some dynamic string data
     *
     */

    function successMessage($successInfo = NULL, $input = NULL)
    {
        switch ($successInfo) {
            case 'createGroup':
                return ['success' => true, 'message' => "Group name <b> $input </b>
                has been successfully created.To view/modify group details, please go to view section"];
            case 'copyGroup':
                return ['success' => true, 'message' => "Group name <b> $input </b>
                has been successfully copied."];
            default:
                return ['commonError' => true, 'message' => 'Something went wrong.Please try again later!'];
        }

    }

}


?>
