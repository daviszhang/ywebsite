<?php
class Goods extends CActiveRecord
{
    /**
     * ģ�����������ؼ���̬������ȱһ����
     * model() ����һ��ģ�͵Ķ����Ǿ�̬����
     * tableName() ���ص�ǰ���ݱ������
     * @param system $className
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    public function tableName()
    {
        //���ݿ�����޸�userΪadmin
        return '{{goods}}';
    }
    
}