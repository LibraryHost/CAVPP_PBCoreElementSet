<div class="field">
    <div id="CAVPP_PBCoreElementSetAddUrlAsIdentifier_label" class="one columns alpha">
        <?php echo get_view()->formLabel('CAVPP_BCoreElementSetAddUrlAsIdentifier', __('Add url as identifier'));?>
    </div>
    <div class="inputs">
        <?php echo get_view()->formCheckbox('CAVPP_PBCoreElementSetAddUrlAsIdentifier', true, array('checked' => (boolean) get_option('pbcore_element_set_add_url_as_identifier')));?>
        <p class="explanation"><?php echo __(
            'This option adds automatically the url of the item ("http://myomeka.com/items/show/#") to the metadata "PBCore > Identifier".'
        );?></p>
    </div>
</div>
