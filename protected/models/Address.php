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
        //���ݿ�����޸�userΪadmin
        return '{{address}}';
    }
    
} 