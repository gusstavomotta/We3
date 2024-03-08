<?php

function WebServiceExec($params, $data)
{

    if (empty($params)) {
        return false;
    }
	
    $pessoa = Db::Read()->clear()
        ->select([
			'idpessoa',
			'nome',
            'cpf',
            'email'
						
        ])
        ->from('base_pessoa')
        ->whereAND([

            'cpf' => $params["cpf"],
            'email' => $params["email"]
        ])
		
        ->groupBy([1, 2, 3, 4])
        ->fetchAll();

    if (empty($pessoa)) {
        return false;
    }

    return ['result' => $pessoa];
}
