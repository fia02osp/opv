<h1>Projekt hinzufügen</h1>
<?php
echo $this->Form->create('Project');
echo $this->Form->input('topic');
echo $this->Form->end('Save Project');
?>