<?php
namespace assistecApi\V1\Rpc\Cidade;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Stdlib\Hydrator\Reflection as ReflectionHydrator;
use ZF\ContentNegotiation\ViewModel;

class CidadeController extends AbstractActionController
{

    protected $mapper;

    public function __construct(Adapter $mapper)
    {
        $this->mapper = $mapper;
    }

    public function cidadeAction()
    {
        $query = $this->mapper
            ->query('select distinct cidade, estado from servico order by cidade');
        $result = $query
            ->execute();
        if ($result instanceof ResultInterface && $result->isQueryResult()) {
            $resultSet = new HydratingResultSet(new ReflectionHydrator, new CidadeEntity);

            $resultSet->initialize($result);
        }

        return new ViewModel(array(
            'payload' => $this->getPluginManager()
                ->get('hal')
                ->createCollection($resultSet)
        ));
    }
}
