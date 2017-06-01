<?php
namespace admin\model;
use core\lib\Model;

class PublicModel extends Model
{
    /**
     * 修改信息
     * @param string  $table 表名
     * @param array   $data 将要修改的数据
     * @param array   $where 条件
     * @return int 受影响的行数
     */
    public function mod($table, $data, $where = [])
    {
        $dealedData = [];
        foreach ($data as $key => $value) {
            $dealedData[$key]  =  $value;
        }
       return $this->update($table, $dealedData, $where);
    }    
    
    /**
     * 插入信息
     * @param string $table 表名
     * @param array  $data  要插入的数据，需要和数据表中的字段名对应
     * @param array  $where 条件
     * @return int 新增id
     */
    public function ins($table, $data, $where)
    {
        return $this->insert($table, $data, $where);
    }
}
