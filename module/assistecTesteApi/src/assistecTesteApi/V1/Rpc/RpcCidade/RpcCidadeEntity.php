<?php
namespace assistecTesteApi\V1\Rpc\RpcCidade;

class RpcCidadeEntity
{
    protected $cidade;
    public function getCidade() { return $this->cidade; }

    protected $estado;
    public function getEstado() { return $this->estado; }
}
