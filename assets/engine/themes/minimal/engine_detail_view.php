<?php echo $this->render_table_name($mode); ?>
<div class="engine-top-actions">
    <?php echo $this->render_button('save_new','save','create','engine-button engine-blue','','create,edit') ?>
    <?php echo $this->render_button('save_edit','save','edit','engine-button engine-green','','create,edit') ?>
    <?php echo $this->render_button('save_return','save','list','engine-button engine-purple','','create,edit') ?>
    <?php echo $this->render_button('return','list','','engine-button engine-orange') ?>
</div>
<div class="engine-view">
<?php echo $this->render_fields_list($mode); ?>
</div>
<div class="engine-nav">
    <?php echo $this->render_benchmark(); ?>
</div>
