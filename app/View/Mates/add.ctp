<div class="mates form">
<?php echo $this->Form->create('Mate'); ?>
    <fieldset>
        <legend><?php echo __('Add Mate'); ?></legend>
    <?php
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('doku');
        echo $this->Form->input('product');
        echo $this->Form->input('reports');
        echo $this->Form->input('presentation');
        echo $this->Form->input('talk');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>