<?php
    echo "Welcome to PHPSandbox";

//'<a href="receiver=15507288&amp;item_name=January+E-Commerce+Deal&amp;amount=
//' . _l('invoice_amount_due') . '><img src="https://www.payfast.co.za/images/buttons/light-small-paynow.png"

$payfastdata = array(
    'receiver' => '15507288'
);

    $data = array(
    'user' => array(
        'name' => 'Bob Smith',
        'age'  => 47,
        'sex'  => 'M',
        'dob'  => '5/12/1956'
    ),
    'pastimes' => array('golf', 'opera', 'poker', 'rap'),
    'children' => array(
        'bobby' => array('age'=>12, 'sex'=>'M'),
        'sally' => array('age'=>8, 'sex'=>'F')
    ),
    'CEO'
);

$test =  http_build_query($data, 'flags_');
$payfastline = http_build_query($payfastdata,'flags');

$link_to_google = "https://google.com"; 
$link_to_quora = "https://quora.com"; 

?> 
 
<html> 
<head> 
<title>Some test title</title> 
</head> 
<body> 
<a href='<?php echo $test; ?>' target='_blank'>Click here to visit Google</a><br/> 
<a href='https://www.payfast.co.za/eng/process?cmd=_paynow&amp;<?php echo $payfastline; ?>' target='_blank'>Click here to Pay Gerald</a><br/> 
<a href='<?php echo $link_to_google; ?>' target='_blank'>Click here to visit Google</a><br/> 
<a href='<?php echo $link_to_quora; ?>' target='_blank'>Click here to visit Quora</a> 

</body> 
</html>