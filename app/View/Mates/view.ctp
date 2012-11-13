<h1><?php echo h($project['Project']['topic']); ?></h1>

<p><small>Created: <?php echo $project['Project']['created']; ?></small></p>
<?php echo $this->Html->link("Back",array('controller' => 'projects', 'action' => 'index')); ?>