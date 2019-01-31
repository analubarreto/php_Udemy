<?php
// Funções Recursivas (chamão a si mesmas), se der pra resolver com for, while, forEach, é melhor pois gasta menos recursos

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados' => array(
            // Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    // Início: Gerente de Vendas
                    'nome_cargo' => 'Gerente de Vendas'
                )
            ),
            // Término Diretor Comercial

            // Início Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    // Início de Gerente de Contas à pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            // Início: Supervisor de Pagamento
                            'nome_cargo' => 'Supervisor de Pagamento'
                            // Término: Supervisor de Pagamento
                        )
                    )
                ),
                // Término Gerente de Contas à Pagar

                // Início Gerente de Compras
                array(
                    'nome_cargo' => 'Gerente de Comrpas',
                    'subordinados' => array (
                        // Início Supervisor de Suprimentos
                        'nome_cargo' => 'Supervisor de Suprimentos'
                        // Término Supervisor de Suprimentos
                    )
                    // Término, gerente de compras
                )
              // Término Diretor Financeiro  
            )
            
        )
    )
);

// recebe um array de cargos
function exibe($cargos) {
    $html = "<ul>";
        foreach($cargos as $cargo) {
            $html .= "<li>"; 
            $html .= $cargo['nome_cargo'];

            // count conta quantas chaves de elemento tem dentro de um array
            if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
                $html .= exibe($cargo['subordinados']);
            }
            $html .= "</li>";
        }
    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);