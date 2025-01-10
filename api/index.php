<?php 
if(isset($_REQUEST['username'])){
    
    if($_REQUEST['username'] == 'test' && $_REQUEST['password'] == 'wew323223Sss') {
        $result = [
            'success' => true,
            'products' => [
                [
                    'code' => 8413,
                    'name' => 'Пневматична гвинтівка Optima Mod.135',
                    'price' => '12172'
                ]
            ]
        ];
    } else {
        $result = [
            'success' => false,
            'error' => 'incorrect_username_password'
        ];
    }
    echo json_encode($result);
} else include_once 'info.php';