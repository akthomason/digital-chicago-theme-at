<?php
$title = metadata('item', 'display_title');
echo head(array('title' => $title, 'bodyclass' => 'items show'));
?>

<h1><?php echo metadata('item', 'display_title'); ?></h1>

<?php if (metadata('item', 'has files')): ?>
<div id="itemfiles" class="element">
    <?php echo files_for_item(array('imageSize' => 'fullsize')); ?>
</div>
<?php endif; ?>

<?php echo all_element_texts('item'); ?>

<!-- The following returns all of the files associated with an item. -->


<!-- If the item belongs to a collection, the following creates a link to that collection. -->
<?php if (metadata('item', 'Collection Name')): ?>
<div id="collection" class="element">
    <h3><?php echo __('Collection'); ?></h3>
    <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
</div>
<?php endif; ?>

<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item', 'has tags')): ?>
<div id="item-tags" class="element">
    <h3><?php echo __('Tags'); ?></h3>
    <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif;?>

<!-- The following prints a citation for this item. -->
<!-- <div id="item-citation" class="element"> -->
    <!-- <h3><?php echo __('How to cite this item:'); ?></h3> -->
    <!-- <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
</div> -->

<!-- <div id="item-output-formats" class="element"> -->
    <!-- <h3><?php echo __('Output Formats'); ?></h3> -->
    <!-- <div class="element-text"><?php echo output_format_list(); ?></div> -->
<!-- </div> -->

<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


<?php echo foot(); ?>
