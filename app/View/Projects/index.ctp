<h1>Projects</h1>
<?php echo $this->Html->link('Projekt Hinzufügen', array('controller' => 'projects', 'action' => 'add')); ?>
<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>

<form class="navbar-search pull-left">
  <input type="text" class="search-query" placeholder="Search">
</form>

<div class="searchResults hide" id='searchResults'>
</div>

<table>
    <tr>
        <th>Id</th>
        <th>Topic</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($project['Project']['topic'],
                array('controller' => 'projects', 'action' => 'view', $project['Project']['id'])); ?>
        </td>

        <td><?php echo $project['Project']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($project); ?>
</table>

