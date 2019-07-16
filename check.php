<?php
/*
// +----------------------------------------------------------------------
// | 小天博客 [ https://www.xtboke.com ]
// +----------------------------------------------------------------------
// | GItHub: https://github.com/ftx0912/sliderCode.git
// +----------------------------------------------------------------------
// | Author: 小天 <ftx5410@163.com>
// +----------------------------------------------------------------------
*/
require_once dirname(__FILE__).'/TnCode.class.php';
$tn  = new TnCode();
if($tn->check()){
	$_SESSION['tncode_check'] = 'ok';
    echo "ok";
}else{
	$_SESSION['tncode_check'] = 'error';
    echo "error";
}

?>
