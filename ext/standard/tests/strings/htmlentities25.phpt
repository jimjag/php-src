--TEST--
htmlentities() should not be influenced by mb_internal_encoding()
--INI--
default_charset=
internal_encoding=
mbstring.internal_encoding=ISO-8859-1
--FILE--
<?php

var_dump(htmlentities('äöü'));

?>
--EXPECT--
PHP Deprecated:  PHP Startup: Use of mbstring.internal_encoding is deprecated in Unknown on line 0

Deprecated: PHP Startup: Use of mbstring.internal_encoding is deprecated in Unknown on line 0
string(18) "&auml;&ouml;&uuml;"
