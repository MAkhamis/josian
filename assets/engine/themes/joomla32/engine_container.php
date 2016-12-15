<div class="engine<?php echo $this->is_rtl ? ' engine_rtl' : ''?>">
    <?php echo $this->render_table_name(false, 'div', true)?>
    <div class="engine-container"<?php echo ($this->start_minimized) ? ' style="display:none;"' : '' ?>>
        <div class="engine-ajax">
            <?php echo $this->render_view() ?>
        </div>
        <div class="engine-overlay"></div>
    </div>
</div>