<?php
/**
 * 
 * @author davis
 *
 */

class Address extends CActiveRecord{
    /**
     * 
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    public function tableName()
    {
        //数据库表名修改user为admin
        return '{{address}}';
    }
    
} 