<?php
// Incluir archivos necesarios
require_once './src/Auth/PackModel.php';
class PackController {

    // Método estático para obtener una lista de PackModel
    public function getOrderPack() {
        // Crear una lista de instancias de PackModel
        $packModels = [
            new PackModel(1, 'Carga1', 'F001', '2024-07-01', 1, 'En Proceso', 'Detalle1', 1, 'Empresa1', 1, 'Cliente1', 1, 'Chofer1', 1, 'Carga1', 1, 'Placa1', 1, 'Tramo1'),
            new PackModel(2, 'Carga2', 'F002', '2024-07-02', 2, 'Completado', 'Detalle2', 2, 'Empresa2', 2, 'Cliente2', 2, 'Chofer2', 2, 'Carga2', 2, 'Placa2', 2, 'Tramo2'),
            new PackModel(3, 'Carga3', 'F003', '2024-07-03', 3, 'Pendiente', 'Detalle3', 3, 'Empresa3', 3, 'Cliente3', 3, 'Chofer3', 3, 'Carga3', 3, 'Placa3', 3, 'Tramo3'),
            new PackModel(4, 'Carga4', 'F004', '2024-07-04', 4, 'En Proceso', 'Detalle4', 4, 'Empresa4', 4, 'Cliente4', 4, 'Chofer4', 4, 'Carga4', 4, 'Placa4', 4, 'Tramo4'),
            new PackModel(5, 'Carga5', 'F005', '2024-07-05', 5, 'Completado', 'Detalle5', 5, 'Empresa5', 5, 'Cliente5', 5, 'Chofer5', 5, 'Carga5', 5, 'Placa5', 5, 'Tramo5'),
            // Agrega más instancias si es necesario
        ];
        $jsonData = json_encode($packModels, JSON_PRETTY_PRINT);


        $response = [
            "coderror" => "0",
            "message" => "List successful.",
            "resultobj" => json_decode($jsonData) // Decodifica el JSON para convertirlo en un objeto antes de volver a codificarlo
        ];

        // Mostrar la respuesta JSON
        echo json_encode($response, JSON_PRETTY_PRINT);
        //return $packModels;
        
    }

}