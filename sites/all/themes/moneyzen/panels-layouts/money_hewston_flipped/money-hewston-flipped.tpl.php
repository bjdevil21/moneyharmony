<?php
/**
 * @file
 * Template for Radix Hewston Flipped.
 * MODIFIED FOR Moneyharmony front page (needed 75/25 layout in row 1, not 67/33)
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display money-hewston-flipped clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 radix-layouts-slidergutter panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['slidergutter']; ?>
        </div>
      </div>
      <div class="col-md-9 radix-layouts-slider panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['slider']; ?>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4 radix-layouts-column1 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column1']; ?>
        </div>
      </div>
      <div class="col-md-4 radix-layouts-column2 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column2']; ?>
        </div>
      </div>
      <div class="col-md-4 radix-layouts-column3 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column3']; ?>
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /.money-hewston-flipped -->
