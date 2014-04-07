WordPress Base Theme with bower and requireJS
=============
![Los Maquiladores](https://raw.github.com/HacemosCodigo/base-theme/master/images/logo_hc.png)

Usar para iniciar un nuevo tema de WordPress cno Bower y requireJs

### Credits

Link: http://www.hacemoscodigo.com/<br />
Contributors: Los Maquiladores<br />
Tags: wordpress, themes<br />
Tested up to: 3.8<br />
Stable tag: 1.0<br />
License: GPLv2 or later<br />
License URI: http://www.gnu.org/licenses/gpl-2.0.html<br />

<h2>Uso</h2>
<p>Para mayor información de como utilizar Bower como administrador de dependencias de js revisar la documentación: <br> 
<a href="https://github.com/bower/bower">Bower on github</a> <br>
Para buscar paquetes disponibles a través de Bower: <br> <a href="http://bower.io/search/">Bower package search</a> <br>

<strong>Para utilizar Bower, este debe estar instalado globalmente via npm. </strong></p>

<div class="highlight">
	npm install -g bower
</div>

<p>Una vez instalado se puede ejecutar el siguiente comando desde la base del directorio y se instalarán todas las dependencias declaradas en el bower.json: <br>(Las librerías se instalarán en 'js/scripts/vendor' de acuerdo con el archivo de configuración .bowerrc)</p>

<div class="highlight">
	bower install
</div>