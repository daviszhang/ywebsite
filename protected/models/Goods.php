<?php
class Goods extends CActiveRecord
{
    /**
     * 模型里有两个关键静态方法，缺一不可
     * model() 创建一个模型的对象，是静态方法
     * tableName() 返回当前数据表的名字
     * @param system $className
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    public function tableName()
    {
        //数据库表名修改user为admin
        return '{{goods}}';
    }
    
}