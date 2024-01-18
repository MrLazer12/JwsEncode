<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use Illuminate\Support\Facades\View;

class JwsController extends Controller
{
    public function encodeJws(Request $request)
    {
        $privateKeyFile = $request->file('private_key_file');
        $privateKey = file_get_contents($privateKeyFile->getPathName());

        $jsonData = $request->input('json_data');
        if (json_decode($jsonData) === null) {
            return redirect()->back()->withErrors(['json_data' => 'Format JSON invalid.'])->withInput();
        }

        $data = json_decode($jsonData, true);
        $token = JWT::encode($data, $privateKey, 'RS256');

        $viewData = ['token' => $token, 'json_data' => $jsonData];
        return View::make('JWSconverterPage', $viewData);
    }
}
