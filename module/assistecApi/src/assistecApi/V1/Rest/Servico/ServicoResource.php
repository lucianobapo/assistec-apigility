<?php
namespace assistecApi\V1\Rest\Servico;

use ZF\Apigility\DbConnectedResource;
use ZF\ApiProblem\ApiProblem;
use Zend\Paginator\Adapter\DbTableGateway as TableGatewayPaginator;

class ServicoResource extends DbConnectedResource
{

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
//        return new ApiProblem(405, 'The GET method has not been defined for collections');

//        die(var_dump($params));
        // WHERE CLAUSE
        $where = '';
        if (isset($params->where))
            if (count($params->where)>1)
                foreach($params->where as $clause)
                {
                    $where .= $clause.' AND ';
                }
            elseif(!empty($params->where))
                $where .= $params->where.' AND ';
        //chop off the last AND
        $where = substr($where,0,-4);
//        die(var_dump($where));
        // ORDER CLAUSE
        $order = '';
        if (isset($params->order))
            if (count($params->order)>1)
                foreach($params->order as $clause)
                {
                    $order .= $clause.' , ';
                }
            elseif(!empty($params->order))
                $order .= $params->order.' , ';

        //chop off the last comma
        $order = substr($order,0,-2);

        // GROUP CLAUSE
        $group = '';
        if (isset($params->group))
            foreach($params->group as $clause)
            {
                $group .= $clause.' , ';
            }
        //chop off the last comma
        $group = substr($group,0,-2);

        // HAVING CLAUSE
        $having = '';
        if (isset($params->having))
            foreach($params->having as $clause)
            {
                $having .= $clause.' AND ';
            }
        //chop off the last AND
        $having = substr($having,0,-4);
        $adapter = new TableGatewayPaginator($this->table,$where, $order, $group, $having);

        return new $this->collectionClass($adapter);
    }

}
