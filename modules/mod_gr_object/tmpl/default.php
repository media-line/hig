<div class="mod_gr_object">
    <?php foreach ($objects as $object) { ?>
        <a href="<?php echo $object->product_link; ?>" class="mod_gr_object__element<?php if ($attribs['current_id'] == $object->product_id) { echo ' mod_gr_object__element_active'; } ?>">
            <?php echo $object->name; ?>
        </a>
    <?php } ?>
</div>