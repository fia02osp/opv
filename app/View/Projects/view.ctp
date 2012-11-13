<h1><?php echo h($project['Project']['topic']); ?></h1>

<p><small>Created: <?php echo $project['Project']['created']; ?></small></p>

   <?php foreach ($project['Mate'] as $mate): ?>
   <table>
    <tr>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Dokumentation</th>
        <th>Produktbewertung</th>
        <th>Tagesberichte</th>
        <th>Präsentation</th>
        <th>Fachgespräch</th>
        <th>Erstellt am</th>
        <th>Verändert am</th>
    </tr>
   <tr>
        <td> <p><?php echo $mate['first_name']; ?></p></td>
        <td><p><?php echo $mate['last_name']; ?></p></td>
        <td> <p><?php echo $mate['doku']; ?></p></td>
        <td> <p><?php echo $mate['product']; ?></p></td>
        <td> <p><?php echo $mate['reports']; ?></p></td>
        <td><p><?php echo $mate['presentation']; ?></p></td>
        <td> <p><?php echo $mate['talk']; ?></p></td>
        <td><p><?php echo $mate['created']; ?></p></td>
        <td><p><?php echo $mate['modified']; ?></p></td>
    </tr>
        
    <?php endforeach; ?>

<?php echo $this->Html->link("Teilnehmer Hinzufügen",array('controller' => 'mates', 'action' => 'add', $project['Project']['id'])); ?>

<?php echo $this->Html->link("Back",array('controller' => 'projects', 'action' => 'index')); ?>