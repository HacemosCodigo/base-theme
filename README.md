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

<code>
	npm install -g bower
</code>

<p>Una vez instalado se puede ejecutar el siguiente comando desde la base del directorio y se instalarán todas las dependencias declaradas en el bower.json: <br>(Las librerías se instalarán en 'js/scripts/vendor' de acuerdo con el path establecido en el archivo de configuración .bowerrc)</p>

<code>
	bower install
</code>

<h2>requireJS</h2>

<p>RequireJS permite modularizar la carga de archivos js de manera que solo se carguen los módulos necesarios en cada página, reduciendo los requests al servidor y agilizando el load de la página. Para conocer más sobre como requerir y definir módulos revisar la documentación <br> <a href="http://requirejs.org/docs/api.html">RequireJS Doc</a> <br>
En el index.php se carga require y apunta al módulo a cargar (run.js en este caso). A su vez, run requiere del módulo de configuración main.js, es aquí donde se definen las dependencias del proyecto. Una vez cargadas las configuraciones, run requiere a homeScripts (Usar como functions.js para el home).</p>
