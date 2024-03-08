<?php

function WebServiceExec($params, $data){ 
	
    $produto = Db::Read()->clear()
        ->select([
             'p.idproduto',
             'p.dscproduto',
             'p.preco'
        ])
        ->from('pdv_produto p')
        ->whereAND([
             'p.preco' => 50
        ])
		->groupBy([1,2,3])
        ->fetchAll();
	
    
    if(empty($produto)){
         return false;   
    } 
    
    return $produto;	
}