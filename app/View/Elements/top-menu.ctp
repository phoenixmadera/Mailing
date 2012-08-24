<div class="nav-collapse collapse">
  <ul class="nav">
    <li class="active">
    	<?php echo $this->Html->link('Home', '/'); ?>
    </li>
    <li>
			<div class="btn-group">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
	    		Mailing
	    		<span class="caret"></span>
	  		</a>
	  		<ul class="dropdown-menu">
	    		<?php echo $this->Html->link('Lists Management', array('plugin' => 'Mailing', 'controller' => 'lists', 'action' => 'index')); ?>
	  		</ul>
			</div>
		</li>
  </ul>
</div>