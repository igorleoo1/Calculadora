<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma () {
        return view ('soma');
    }

    public function divide () {
        return view ('divide');
    }

    public function sub () {
        return view ('sub');
    }

    public function multi () {
        return view ('multi');
    }

    public function calculadora () {
        return view ('calculadora');
    }

    public function calcularSoma(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 + $valor2;

        return view('resultadoSoma', compact('valor1', 'valor2', 'resultado'));

    }

    public function calcularDivide(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado2 = $valor1 / $valor2;

        return view('resultadoDivide', compact('valor1', 'valor2', 'resultado2'));

    }

    public function calcularSub(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado3 = $valor1 - $valor2;

        return view('resultadoSub', compact('valor1', 'valor2', 'resultado3'));

    }

    public function calcularMulti(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado4 = $valor1 * $valor2;

        return view('resultadoMulti', compact('valor1', 'valor2', 'resultado4'));

    }
}
