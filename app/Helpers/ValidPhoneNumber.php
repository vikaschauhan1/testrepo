<?php 

if (!function_exists('isValidPhone'))
{
    /**
     * @param phone number single or in array of numbers
     * @return  2-D array with valid and invalid numbers
     *
     */

    function isValidPhone($phones, $type = 'domestic')
    {
        $phoneRequirements = config('requirement.phone');
        $returnNumbers = [];
        
        if(is_array($phones)) 
        {
            foreach($phones as $phone){
                if(isValid($phoneRequirements, $phone, $type)){
                    $returnNumbers['valid'][] = $phone;
                } else {
                    $returnNumbers['invalid'][] = $phone;
                }
            }
        }
        else
        {  
            if(isValid($phoneRequirements, $phones, $type)){
                $returnNumbers['valid'][] = $phones;
            } else {
                $returnNumbers['invalid'][] = $phones;
            }
        }

        return $returnNumbers;

    }

    function isValid($phoneRequirements, $phoneNumber, $type = 'domestic') {
        $phoneLength = strlen($phoneNumber);
        $isValid = false;
        $phoneNumber = trim($phoneNumber);

        if($type == 'domestic') {
            switch($phoneLength) {
                case 10:
                case 11:
                case 12:
                    $isValid = ctype_digit($phoneNumber) ? phoneRequirement($phoneRequirements[$phoneLength], $phoneNumber) : false;
                break;
                case 13:
                    if(!stringStartsWith($phoneNumber, '+')) {
                        return false;
                    }
                    $tenDigitPhone = str_replace('+', '', $phoneNumber);
                    $isValid = ctype_digit($tenDigitPhone) ? phoneRequirement($phoneRequirements[$phoneLength - 1], $tenDigitPhone) : false;
                break;
                case 14:
                    if(!stringStartsWith($phoneNumber, '+91-')) {
                        return false;
                    }
                    $tenDigitPhone = str_replace('+91-', '', $phoneNumber);
                    $isValid = ctype_digit($tenDigitPhone) ? phoneRequirement($phoneRequirements[$phoneLength - 4], $tenDigitPhone) : false;
                break;
                default:
                    $isValid = false; 
                break;
            }
        } else {
            $isValid = false;
            if($phoneLength >= 8 && $phoneLength <= 15){
                if(stringStartsWith($phoneNumber, '+')) {
                    $phoneNumber = str_replace('+', '', $phoneNumber);
                }
                return ctype_digit($phoneNumber);
            }
        }
        return $isValid;
    }

    function stringStartsWith ($string, $startString) { 
        $len = strlen($startString); 
        return (substr($string, 0, $len) === $startString); 
    } 

    function phoneRequirement($phoneRequirement, $phoneNumber) {

        foreach($phoneRequirement['starts_with'] as $digitPlace => $digitReq) {
            if(!in_array($phoneNumber[$digitPlace], $digitReq)) {
                return false;
            }
        }
        return true;
    }
}



?>
