# UTSWebProg


<b>Composer</b> <br>
```bash
composer init
```

<b>Gregwar Captcha</b> <br>
```bash
composer require gregwar/captcha
```

<b>Check GD For Gregwar Captcha</b> <br>
```PHP
$testGD = get_extension_funcs("gd"); // Grab function list 
if (!$testGD){ echo "GD not even installed."; exit; }
echo"<pre>".print_r($testGD,true)."</pre>";
```
<b>Step to enable GD </b> <br>
1. Enable GD in php.ini <br>
<img src="https://user-images.githubusercontent.com/115067526/228823717-f4fc840b-64a8-41f5-b1e0-08db881eb4a8.png" width="50%" height="50%" /> <br>
<img src="https://user-images.githubusercontent.com/115067526/228824017-53b168d5-7a30-40a1-8681-da4136cfd9de.png" width="40%" height="40%" /> <br>
<img src="https://user-images.githubusercontent.com/115067526/228824044-0c5d94d6-5abe-4243-8471-97b27dfcdd70.png" width="40%" height="40%" /> <br>

2. Copy php_gd.dll to System32 <br>
<img src="https://user-images.githubusercontent.com/115067526/228824675-24d80cd9-fade-4097-a0d6-3796964da6a9.png" width="50%" height="50%" /> <br>
<img src="https://user-images.githubusercontent.com/115067526/228825034-e8e2a030-32d7-417b-ad6e-b2e645e94be7.png" width="50%" height="50%" /> <br>

