<?php
namespace assistecApi\V1\Rpc\Cidade;

class CidadeEntity
{
    protected $cidade;
    public function getCidade() { return $this->cidade; }

    protected $estado;
    public function getEstado() { return $this->estado; }
}
