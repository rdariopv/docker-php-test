<?php
class PackModel {
    private $conn;
    public $id_orden;
    public $nro_carga;
    public $nrofactura;
    public $fecha_orden;
    public $id_estado;
    public $desc_estado;
    public $detalle;
    public $id_empresa;
    public $desc_empresa;
    public $id_cliente;
    public $desc_cliente;
    public $id_chofer;
    public $desc_chofer;
    public $id_carga;
    public $desc_carga;
    public $id_placa;
    public $desc_placa;
    public $id_tramo;
    public $desc_tramo;

        public function __construct($id_orden, $nro_carga, $nrofactura, $fecha_orden, $id_estado, $desc_estado, $detalle,
        $id_empresa, $desc_empresa, $id_cliente, $desc_cliente, $id_chofer, $desc_chofer,
        $id_carga, $desc_carga, $id_placa, $desc_placa, $id_tramo, $desc_tramo) {

            $this->id_orden = $id_orden;
            $this->nro_carga = $nro_carga;
            $this->nrofactura = $nrofactura;
            $this->fecha_orden = $fecha_orden;
            $this->id_estado = $id_estado;
            $this->desc_estado = $desc_estado;
            $this->detalle = $detalle;
            $this->id_empresa = $id_empresa;
            $this->desc_empresa = $desc_empresa;
            $this->id_cliente = $id_cliente;
            $this->desc_cliente = $desc_cliente;
            $this->id_chofer = $id_chofer;
            $this->desc_chofer = $desc_chofer;
            $this->id_carga = $id_carga;
            $this->desc_carga = $desc_carga;
            $this->id_placa = $id_placa;
            $this->desc_placa = $desc_placa;
            $this->id_tramo = $id_tramo;
            $this->desc_tramo = $desc_tramo;
        }
}
