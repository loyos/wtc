<div class = "menu">
	<div class = "logo">
				<?php echo $this->Html->image('logo.png', array()); ?>
	</div>
	<div class = "login">
			<span>Login | Register </span> 
	</div>
	<ul>
		<li>
			<?php echo $this->Html->link('Home',array('controller' => 'index', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link('About Us',array('controller' => 'index', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link('Subscribe',array('controller' => 'index', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link('Contact',array('controller' => 'index', 'action' => 'index')); ?>
		</li>
		<li>
	</ul>
	
</div>