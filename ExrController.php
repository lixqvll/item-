<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
    

/**class ExrController extends Controller
{
    public function show($value)
    {
        return  "The Value: " . $value;
    }
}
**/

/**class ExrController extends Controller
{
    public function add($num1, $num2)
    {
        $result = $num1 + $num2;
        return " The Sum is: " . $result;
    }
}
**/ 
class ExrController extends Controller
{
    public function showItem()
    {
        return view('item');
    }
}
