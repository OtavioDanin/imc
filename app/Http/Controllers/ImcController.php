<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{

    public function index()
    {
        return view('imc.index');
    }

    public function calculation(Request $request)
    {
        $data = $request->all();
        $altura = $data['altura'];
        $peso = $data['peso'];
        $resultadoImc = $peso / ($altura ** 2);


        $dicionario = [
            "18.5" => "Abaixo do peso",
            "24.9" => "Peso normal",
            "29.9" => "Sobrepeso",
            "34.9" => "Obesidade grau 1",
            "39.9" => "Obesidade grau 2",
            "40.0" => "Obesidade grau 3"
        ];

        foreach ($dicionario as $key => $value) {
            //Se a chave for menor que 40, então testa os valores de acordo com o IMC. 
            if ((float) $key <= 18.5) {
                if ($resultadoImc <= (float) $key) {
                    echo PHP_EOL . "$value";
                    break;
                }
            }
            if ((float) $key < 40.0) {
                if ($resultadoImc <= (float) $key) {
                    echo PHP_EOL . "$value";
                    break;
                }
            } else { //Se o IMC for maior ou igual a 4}
            }

            // echo json_encode(['data' => $resultadoImc]);
        }
    }
}
