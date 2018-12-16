<?php
function debug($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function formatted_print_r($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}
function formatted_var_dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function sanitize($dirty)
{
    return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
}

function currentUser(){
    return usersModel::currentLoggedInUser();
}

/*
function isModel(string $className)
{
    if (strpos($className, 'Model')) {
        return true;
    }
    return false;
}

function isView(string $className)
{
    if (strpos($className, 'View')) {
        return true;
    }
    return false;
}

function isController(string $className)
{
    if (strpos($className, 'Controller')) {
        return true;
    }
    return false;
}

function splitClassFromSuffix(string $className)
{
    if (isModel($className)) {
        //$className -= 'Model'
        return; //$className
    } elseif (isView($className)) {
        # code...
    } elseif (isController($className)) {
        # code...
    }
    return $className;
}

*/

/* 
* credits to: http://trac.bewelcome.org/wiki/CamelCaseExplode
* 
* How to use: 
* echo '<br>'.camelCaseExplode('useItLIKEThis', true,  'ABCd',    ' '); .......... //use it likethis
* echo '<br>'.camelCaseExplode('useItLIKEThis', true,  'AB Cd',   ' '); .......... //use it like this
* echo '<br>'.camelCaseExplode('useItLIKEThis', true,  'A B Cd',  ' '); .......... //use it l i k e this
* echo '<br>'.camelCaseExplode('useItLIKEThis', false, 'AB Cd',   ','); .......... //use,It,LIKE,This
* echo '<br>';formatted_print_r(camelCaseExplode('useItLIKEThis', true, 'AB Cd')); //Array ( [0] => three [1] => tasty [2] => burgers ) 
* 
 */
function camelCaseExplode($string, $lowercase = true, $example_string = 'AA Bc', $glue = false)
{
    static $regexp_available = array(
        '/([A-Z][^A-Z]*)/',
        '/([A-Z][^A-Z]+)/',
        '/([A-Z]+[^A-Z]*)/',
    );
    static $regexp_by_example = array();
    if (!isset($regexp_by_example[$example_string])) {
        $example_array = explode(' ', $example_string);
        foreach ($regexp_available as $regexp) {
            if (implode(' ', preg_split(
                $regexp,
                str_replace(' ', '', $example_string),
                -1,
                PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE
            )) == $example_string) {
                break;
            }
        }
        $regexp_by_example[$example_string] = $regexp;
    }
    $array = preg_split(
        $regexp_by_example[$example_string],
        $string,
        -1,
        PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE
    );
    if ($lowercase) $array = array_map('strtolower', $array);
    return is_string($glue) ? implode($glue, $array) : $array;
}


?>