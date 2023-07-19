<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Exception;

class TransactionController extends Controller
{
    public function show(String $token, int $id)
    {
        // $transactions = Transaction::all();
        // Token esperado
        $expectedToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk';

        try {
            // Verificar si el token es igual al esperado
            if ($token !== $expectedToken) {
                return response()->json(['error' => 'Token inválido'], 401);
            }
            // Si el token es válido y coincide con el esperado, obtener todos los usuarios
            // Primero, obtén el valor del parámetro user_id proporcionado por el usuario
            $user_id = $id;

            // Luego, utiliza el método where para filtrar las transacciones por el user_id
            $transactions = Transaction::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
            return response()->json($transactions, 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Token inválido'], 401);
        }
    }

}
