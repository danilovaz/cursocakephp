<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
	<title>	<?php echo $title_for_layout; ?></title>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('estilo');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

    	<script src='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.js'></script>
 	<link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.css' rel='stylesheet' />
 	<!--[if lte IE 8]>
    	<link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.ie.css' rel='stylesheet' >
  	<![endif]-->
</head>
<body>
<div id="main">
	<header>
		<div class="wrapper">
			<h1>
				<?php echo $this->Html->link($this->Html->image('sanja-logo1.png', array('alt' => 'SANJA TALK CAKE')), '/', array('escapeTitle' => false, 'title' => 'SANJA <3 CAKE')); ?>
			</h1>
			<article class="infos-header">
			    <span>
			        <?php echo $this->element('data-evento', array('dia' => '20','mes' => 'novembro')) ?>
			        
			        <?php echo $this->Html->link($this->Html->image('inscreva.png', array('alt' => 'INSCREVA-SE')), '/inscricao', array('escapeTitle' => false, 'title' => 'INSCREVER')); ?>
			        
			    </span>
			</article>
		</div>	
	</header>
	<?php echo $this->element('menu') ?>
	<div class="content">
		<?php echo $this->fetch('content') ?>
	</div>
	<footer>
		<?php echo $this->element('rodape') ?>
	</footer>
</div>
</body>
</html>