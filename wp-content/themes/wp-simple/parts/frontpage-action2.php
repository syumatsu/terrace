<?php 
$section_bg=nimbus_get_option('fp-action2-background-image');
if (!empty($section_bg['url'])) {
    $nimbus_parallax="data-parallax='scroll' data-image-src='" . $section_bg['url'] . "' style='background: transparent;padding:220px 0 200px;background: rgba(0, 0, 0, 0.3);'";
    $parallax_active="parallax_active";
} 
if (nimbus_get_option('fp-action2-toggle') == '1') { ?>
    <section id="<?php if (nimbus_get_option('fp-action2-slug')=='') {echo "action2";} else {echo nimbus_get_option('fp-action2-slug');} ?>" class="frontpage-row frontpage-action2 <?php if(isset($parallax_active)){echo $parallax_active;} ?>" <?php if(isset($nimbus_parallax)){echo $nimbus_parallax;} ?>>  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (nimbus_get_option('fp-action2-title') != '') { ?>
                        <div class="action2-title h1" data-sr='wait 0.2s, scale up 25%'><?php echo nimbus_get_option('fp-action2-title'); ?></div>
                    <?php } ?>
                    <?php if (nimbus_get_option('fp-action2-sub-title') != '') { ?>
                        <div class="action2-sub-title h4" data-sr='wait 0.2s, scale up 25%'><?php echo nimbus_get_option('fp-action2-sub-title'); ?></div>
                    <?php } ?>
                    <?php if ((nimbus_get_option('fp-action2-button-text') != '') && (nimbus_get_option('fp-action2-button-url') != '')) { ?>
                        <div class="action2-link-button" data-sr='wait 0.2s, scale up 25%'><a href="<?php echo nimbus_get_option('fp-action2-button-url'); ?>"><?php echo nimbus_get_option('fp-action2-button-text'); ?></a></div>
                    <?php } ?>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } else if (nimbus_get_option('fp-action2-toggle') == '3') {
    // Don't do anything
} else { ?>  
    <section id="<?php if (nimbus_get_option('fp-action2-slug')=='') {echo "action2";} else {echo nimbus_get_option('fp-action2-slug');} ?>" class="frontpage-row frontpage-action2 preview parallax_active" data-parallax='scroll' data-image-src='<?php echo get_template_directory_uri(); ?>/images/preview/girl.jpg' style='background: transparent;padding:220px 0 200px;background: rgba(0, 0, 0, 0.3);'>  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="action2-title h1" data-sr='wait 0.2s, scale up 25%'>Call To Action</div>
                    <div class="action2-sub-title h4" data-sr='wait 0.2s, scale up 25%'>Convince me why I should take this action.</div>
                    <div class="action2-link-button" data-sr='wait 0.2s, scale up 25%'><a href="#">Go For It!</a></div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } ?> 

