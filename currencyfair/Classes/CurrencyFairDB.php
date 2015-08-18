<?php
namespace Classes;

class CurrencyFairDB {
    
    private $db_connection = null;
    
    public function __construct(\PDO $pdo) {
        $this->db_connection = $pdo;
    }
    
    public function getCounterPerSecond(){
        $select = "SELECT total_persecond,time FROM currency_fair.transactions_counter where transactions_counter_id = 1;";
        $execution = $this->db_connection->prepare($select);
		$execution->execute();
        $result = $execution->fetch(\PDO::FETCH_OBJ);
        
        return $result;
    }
    
    public function resetCounterPerSecond(){
        $update = "UPDATE `transactions_counter` SET `total_persecond`='0' WHERE `transactions_counter_id`='1';";
        $execution = $this->db_connection->prepare($update);
        $result = $execution->execute();
        return $result;
    }
    
    
    public function saveTransaction(array $arguments){
        
        if(empty($arguments)){
            throw new \InvalidArgumentException('No valid arguments provided. ');
        }
        
         $insert = "INSERT INTO `trade_messages` (`userId`, `currencyFrom`, `currencyTo`, `amountSell`, `amountBuy`, `rate`, `timePlaced`, `originatingCountry`, `createddate`) "
                . "VALUES (:userId, :currencyFrom, :currencyTo, :amountSell, :amountBuy, :rate, :timePlaced, :originatingCountry, now());";
        $statement = $this->db_connection->prepare($insert);        
                
        $insert_params = array(
            ':userId'=>$arguments['userId'],
            ':currencyFrom'=>$arguments['currencyFrom'],
            ':currencyTo'=>$arguments['currencyTo'],
            ':amountSell'=>$arguments['amountSell'],
            ':amountBuy'=>$arguments['amountBuy'],
            ':rate'=>$arguments['rate'],
            ':timePlaced'=>date('Y-m-d H:i:s',strtotime($arguments['timePlaced'])),
            ':originatingCountry'=>$arguments['originatingCountry'],
        );
                
        $result = $statement->execute($insert_params);
       
        return $result;
        
    }
    
    
    public function getTotalMessagesPerCurrencyPair(){
        $select = "SELECT count(*) as total, currencyFrom,CurrencyTo FROM trade_messages group by currencyFrom, currencyTo;";		
        $execution = $this->db_connection->prepare($select);
		$execution->execute();
        $result = $execution->fetchAll(\PDO::FETCH_OBJ);
        
        return $result;
    }
    
    
    
}
