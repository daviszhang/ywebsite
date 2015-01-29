<?php
/**
 * pagination class as component
 */

class Pagination{
    private $total;
    private $listRows;
    private $limit;
    private $uri;
    private $pageNum;
    private $config=array('header'=>"个记录","prev"=>"上一页","next"=>"下一页","first"=>"首页","last"=>"尾页");
    private $listNum=8;
    
    
    public function __construct($total,$listRows=10,$pa=""){
    
    }
    /**
     * @return the $total
     */
    public function getTotal()
    {
        return $this->total;
    }

 /**
     * @return the $listRows
     */
    public function getListRows()
    {
        return $this->listRows;
    }

 /**
     * @return the $limit
     */
    public function getLimit()
    {
        return $this->limit;
    }

 /**
     * @return the $uri
     */
    public function getUri()
    {
        return $this->uri;
    }

 /**
     * @return the $pageNum
     */
    public function getPageNum()
    {
        return $this->pageNum;
    }

 /**
     * @return the $config
     */
    public function getConfig()
    {
        return $this->config;
    }

 /**
     * @return the $listNum
     */
    public function getListNum()
    {
        return $this->listNum;
    }

 /**
     * @param field_type $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

 /**
     * @param field_type $listRows
     */
    public function setListRows($listRows)
    {
        $this->listRows = $listRows;
    }

 /**
     * @param field_type $limit
     */
    private function setLimit($limit)
    {
        $this->limit = $limit;
    }

 /**
     * @param field_type $uri
     */
    private function setUri($uri)
    {
        $this->uri = $uri;
    }

 /**
     * @param field_type $pageNum
     */
    private function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
    }

 /**
     * @param multitype:string  $config
     */
    private function setConfig($config)
    {
        $this->config = $config;
    }

 /**
     * @param number $listNum
     */
    private function setListNum($listNum)
    {
        $this->listNum = $listNum;
    }


    
}