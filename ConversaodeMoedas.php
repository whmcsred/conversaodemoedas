<?php
//Desenvolvido por Luciano Zanita :: http://whmcs.red
//Baseado no Widget da http://mconvert.net/currency-converter-widget
//Bloqueia o acesso direto ao arquivo
if (!defined("WHMCS")){
	die("Acesso restrito!");
}
//Adiciona o Hook ao Dashboard a Administração do WHMCS
add_hook('AdminHomeWidgets', 1, function() {
    return new ConversaodeMoedas();
});
//Cria o widget
class ConversaodeMoedas extends \WHMCS\Module\AbstractWidget{
    protected $title = 'Conversão de Moedas - WHMCS.RED';
    protected $description = '';
    protected $weight = 150;
    protected $columns = 1;
    protected $cache = false;
    protected $cacheExpiry = 120;
    protected $requiredPermission = '';
    public function getData(){
        return array();
    }
    public function generateOutput($data){
    	//Configuracao de moedas
    	$converter_de = "usd";
    	$converter_para = "brl";
    	//Cria o Script
    	$script = '<iframe src="https://s.mconvert.net/get-converter-widget?from='.$converter_de.'&to='.$converter_para.'&lang=en&theme=darkblue&font=1&ssl=2" width="100%" height="300" frameborder="0" scrolling="no"></iframe>';
    	//retorna o widget
        return $script;
    }
}
?>