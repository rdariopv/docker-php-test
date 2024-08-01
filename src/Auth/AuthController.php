<?php
class AuthController {
    // Usuario estático para la autenticación
    private $username = 'admin';
    private $password = 'password'; // Cambia esto por una contraseña segura

    public function login() {
        // Obtener datos de la solicitud
        $data = json_decode(file_get_contents("php://input"), true);
        
        // Verificar datos
        if (!empty($data['username']) && !empty($data['password'])) {
            if ($data['username'] === $this->username && $data['password'] === $this->password) {
                // Generar un token de sesión (esto es solo un ejemplo simple)
                $token = base64_encode($this->username . ':' . time());
                
                echo json_encode([
				    "coderror" => "0",
                    "message" => "Login successful.",
                    "token" => $token
                ]);
            } else {
                echo json_encode(["coderror" => "1","message" => "Invalid username or password."]);
            }
        } else {
            echo json_encode(["coderror" => "2","message" => "Incomplete data."]);
        }
    }
}
