<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $token)
    {
        // Token esperado
        $expectedToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk';
        try {
            // Verificar si el token es igual al esperado
            if ($token !== $expectedToken) {
                return response()->json(['error' => 'Token inválido'], 403);
            }
            // Si el token es válido y coincide con el esperado, obtener todos los usuarios ordenados por created_at de forma descendente
            $users = DB::table('users')->orderBy('created_at', 'desc')->get();
            return response()->json($users, 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Token inválido'], 401);
        }
    }
}
