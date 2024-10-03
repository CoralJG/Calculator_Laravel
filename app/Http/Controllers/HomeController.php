<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function add($num1, $num2)
    {
        $result = $num1 + $num2;
        return view('calculator.result', compact('result'));
    }

    public function subtract($num1, $num2)
    {
        $result = $num1 - $num2;
        return view('calculator.result', compact('result'));
    }

    public function multiply($num1, $num2)
    {
        $result = $num1 * $num2;
        return view('calculator.result', compact('result'));
    }

    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            return "Cannot divide by zero";
        }
        $result = $num1 / $num2;
        return view('calculator.result', compact('result'));
    }
}
