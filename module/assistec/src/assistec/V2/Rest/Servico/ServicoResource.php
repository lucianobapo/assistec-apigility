<?php
namespace assistec\V2\Rest\Servico;

use StatusLib\MapperInterface;
use ZF\Apigility\DbConnectedResource;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Zend\Paginator\Adapter\DbTableGateway as TableGatewayPaginator;

class ServicoResource extends DbConnectedResource
{
//    protected $mapper;

//    public function __construct()
//    {
////        $this->mapper = $mapper;
//    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
//    public function create($data)
//    {
//        return new ApiProblem(405, 'The POST method has not been defined');
////        return $this->mapper->create($data);
//    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
//    public function delete($id)
//    {
//        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
////        return $this->mapper->delete($id);
//    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
//    public function deleteList($data)
//    {
//        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
//    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
//    public function fetch($id)
//    {
//        return new ApiProblem(405, 'The GET method has not been defined for individual resources');
////        return $this->mapper->fetch($id);
//    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
//        return new ApiProblem(405, 'The GET method has not been defined for collections');
//        return $this->mapper->fetchAll();

//        die(var_dump($params->sort));
        // WHERE CLAUSE
        $where = '';
        foreach($params->where as $clause)
        {
            $where .= $clause.' AND ';
        }
        //chop off the last AND
        $where = substr($where,0,-4);

        // ORDER CLAUSE
        $order = '';
//        die(var_dump(($params->sort)));
//        die(var_dump(count($params->sort)));
        if (count($params->sort)>1)
            foreach($params->sort as $clause)
            {
                $order .= $clause.' , ';
            }
        elseif(!empty($params->sort)) $order .= $params->sort.' , ';

//        die(var_dump($order));
        //chop off the last comma
        $order = substr($order,0,-2);

        // GROUP CLAUSE
        $group = '';
        foreach($params->group as $clause)
        {
            $group .= $clause.' , ';
        }
        //chop off the last comma
        $group = substr($group,0,-2);

        // HAVING CLAUSE
        $having = '';
        foreach($params->having as $clause)
        {
            $having .= $clause.' AND ';
        }
        //chop off the last AND
        $having = substr($having,0,-4);
//        die(var_dump($order));
        $adapter = new TableGatewayPaginator($this->table,$where, $order, $group, $having);
//        die(var_dump($adapter->count()));

        return new $this->collectionClass($adapter);
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
//    public function patch($id, $data)
//    {
//        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
////        return $this->mapper->update($id, $data);
//    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
//    public function replaceList($data)
//    {
//        return new ApiProblem(405, 'The PUT method has not been defined for collections');
//    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
//    public function update($id, $data)
//    {
//        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
////        return $this->mapper->update($id, $data);
//    }
}
