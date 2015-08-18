<?php
return array(
    'db'=>array(
        'name'=>'cfair',
        'host'=>'hosting',
        'username'=>'username',
        'password'=>'pass',
    ),
    'transactions_per_second'=>8,#how many transactions to save per second...
    
    'consumption'=>array(
        'expected_params'=>array(
            'userId'=>array(
                'type'=>'int',
                'required'=>true,
            ),
            'currencyFrom'=>array(
                'type'=>'string',
                'required'=>true,
            ),
            'currencyTo'=>array(
                'type'=>'string',
                'required'=>true,
            ),
            'amountSell'=>array(
                'type'=>'int',
                'required'=>true,
            ),
            'amountBuy'=>array(
                'type'=>'int',
                'required'=>true
            ),
            'rate'=>array(
                'type'=>'int',
                'required'=>true,
            ),
            'timePlaced'=>array(
                'type'=>'string',
                'required'=>true,
            ),
            'originatingCountry'=>array(
                'type'=>'string',
                'required'=>true,
            ),
        ),
    ),
    
);

