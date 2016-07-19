<?php
namespace assistecTesteApi\V1\Rpc\RpcCidade;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Sql;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Adapter\DbSelect;
use ZF\ContentNegotiation\ViewModel;
use Zend\Stdlib\Hydrator\Reflection as ReflectionHydrator;

class RpcCidadeController extends AbstractActionController
{
    protected $mapper;

    public function __construct(Adapter $mapper)
    {
//        die(var_dump($mapper));
//        die(var_dump(get_class($mapper)));
        $this->mapper = $mapper;
    }

    public function rpcCidadeAction()
    {
        $query = $this->mapper
//            ->query('select distinct concat(cidade,\'-\', estado) as nome from servico order by nome');
            ->query('select distinct cidade, estado from servico order by cidade');
        $result = $query
            ->execute();

        if ($result instanceof ResultInterface && $result->isQueryResult()) {
//            $resultSet = new ResultSet;
            $resultSet = new HydratingResultSet(new ReflectionHydrator, new RpcCidadeEntity);

            $resultSet->initialize($result);

//            $adapter = new \Zend\Paginator\Adapter\DbSelect($select, $this->mapper, $resultSet);
//            $paginator = new \Zend\Paginator\Paginator($this->mapper);

//            die(var_dump($resultSet));
//            foreach ($resultSet as $row) {
//                die(var_dump($row));
//                echo $row->my_column . PHP_EOL;
//            }
        }
//        die(var_dump($query));
//        die(var_dump(get_class($query)));

        // Using Zend\Db's SQL abstraction
//        $sql = new Sql($this->mapper);
//        $select = $sql->select('servico');

//        die(var_dump($sql->buildSqlString($select)));
//        die(var_dump($select));

        // This provides paginated results for the given Select instance
//        $paged  = new DbSelect($select, $this->mapper);
//        die(var_dump($paged));

        // which we then pass to our collection
//        $rpcCidadeCollection = new RpcCidadeCollection($paginator);
//        $rpcCidadeCollection = new RpcCidadeCollection($paged);
//        $rpcCidadeCollection->setItemCountPerPage(5);
//        die(var_dump($rpcCidadeCollection->toJson()));
//        return $rpcCidadeCollection;



        return new ViewModel(array(
            'payload' => $this->getPluginManager()
                ->get('hal')
//                ->createCollection($rpcCidadeCollection)
                ->createCollection($resultSet)
//                ->createCollection($paginator)
        ));
//        return new ViewModel(array(
//            'ack' => time()
//        ));
    }
}
