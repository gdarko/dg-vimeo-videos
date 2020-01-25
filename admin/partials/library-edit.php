<?php
/* @var WP_DGV_Api_Helper $vimeo_helper */
/* @var WP_DGV_Db_Helper $db_helper */
?>

<h2 class="wvv-mb-0"><?php echo get_the_title( $_GET['id'] ); ?></h2>

<?php
$vimeo_id = $db_helper->get_vimeo_id( $_GET['id'] );
?>

<div class="wvv-row">
    <div class="wvv-col-40">
        <!-- Basic Information -->
        <div class="metabox-holder">
            <div class="postbox">
                <h2 class="hndle ui-sortable-handle"><?php _e( 'Preview Video', 'wp-vimeo-videos' ); ?></h2>
                <div class="inside">
                    <div class="form-row wvv-mt-20">
						<?php echo do_shortcode( '[dgv_vimeo_video id="' . $vimeo_id . '"]' ); ?>
                    </div>
                    <div class="form-row wvv-mb-0">
                        <p class="wvv-mb-0"><a href="https://vimeo.com/<?php echo $vimeo_id; ?>" class="button-primary"><?php _e('View On Vimeo', 'wp-vimeo-videos'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>

        <p><small><em><?php echo sprintf(__('Privacy management, front-end upload and more options available in the %s.', 'wp-vimeo-videos'), '<a href="'.wvv_get_purchase_url().'" target="_blank">'.__('premium Version', 'wp-vimeo-videos').'</a>'); ?></em></small></p>
    </div>
</div>