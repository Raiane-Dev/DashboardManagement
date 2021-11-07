<?php
    namespace ModelIndexs;

    class ModelIndex{
        public static function get($table){
            $get = \MySql::connect()->prepare("SELECT * FROM `$table`");
            $get->execute();
            $get = $get->fetchAll();
            return $get;
        }

        public static function getWhere($table,$where){
            $get = \MySql::connect()->prepare("SELECT * FROM `$table` $where");
            $get->execute();
            $get = $get->fetchAll();
            return $get;
        }

        public static function getTotalOrders(){
            $get_order = \MySql::connect()->prepare("SELECT `amount` FROM `orders`");
            $get_order->execute();
            $get_order = $get_order->fetchAll();
            $sum = 0;
            foreach($get_order as $key => $value){
                $sum += $value['amount'];
            }
            return $sum;
        }
        
    }
?>