# UTSWebProg


<b>Composer</b> <br>
composer init

<b>Gregwar Captcha</b> <br>
composer require gregwar/captcha

<b>Check GD For Gregwar Captcha</b> <br>
$testGD = get_extension_funcs("gd"); // Grab function list 
if (!$testGD){ echo "GD not even installed."; exit; }
echo"<pre>".print_r($testGD,true)."</pre>";
