<?php
class Response{
    /**
    *生成指定数据格式
    *@param intval $code 状态码
    *@param  string $message 状态说明
    *@param  array $data 数据
    *@param  string $type 要求返回的数据格式
    *@return string $data 数据
    */
   public static function dataType($code,$message,$data='',$type='xml'){

        if (in_array($type,array('json','xml','array'))) {
            if ($type == 'json') {
                $data = self::json($code,$message,$data);
            }elseif ($type == 'xml') {
                $data = self::xml($code,$message,$data);
            }elseif ($type == 'array') {
                var_dump(self::data($code,$message,$data));
            }else{
                exit;
            }
        }
   }

    /**
    *按json格式生成数据格式
    *@param intval $code
    *@param  string $message
    *@param  array $data
    *@return string
    */
    public static function json($code,$message,$data){
        $data = self::data($code,$message,$data);
        echo json_encode($data);
        exit;
    }
    /**
    *按xml格式生成数据格式
    *@param intval $code
    *@param  string $message
    *@param  array $data
    *@return string
    */
    public static function xml($code,$message,$data){
        $data = self::data($code,$message,$data);
        header("Content-Type:text/xml");
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<note>';
        $xml .= self::xmlToEncode($data);
        $xml .= '</note>';
        echo $xml;
        exit;
    }
    /**
    *创建xml节点
    *@param  array $data
    *@return string $xml
    */
    public static function xmlToEncode($data){
        $xml = '';
        foreach ($data as $k=>$v) {
            $attr = '';
            if (is_numeric($k))  {
                $attr = " id='{$k}'";
                $k = 'item';
            }
            $xml .= "<{$k}{$attr}>";
            $xml .= is_array($v)?self::xmlToEncode($v):$v;
            $xml .= "</$k>";
        }
        return $xml;
    }

    /**
    *按array格式创建数据格式
    *@param intval $code
    *@param  string $message
    *@param  array $data
    *@return array $data
    */
    public static function data($code,$message,$data){
        if (!is_numeric($code)) {
            return '';
        }
        $data = array(
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
            );
        return $data;
    }

}
?>
