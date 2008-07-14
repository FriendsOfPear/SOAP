--TEST--
Serialize untyped string
--FILE--
<?php

require_once dirname(__FILE__) . '/../test.utility.php';
$soap_base = new SOAP_Base();

$v = new SOAP_Value('inputString', '', 'hello world');
echo $v->serialize($soap_base);

?>
--EXPECT--
<inputString xsi:type="xsd:string">hello world</inputString>