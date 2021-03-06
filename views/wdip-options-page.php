<?php
use WDIP\Plugin\MyFXBookClient as MFBClient;

?>

<div class="wrap">
    <h1><?= esc_html(get_admin_page_title()); ?></h1>
    <p>
    <div><span style="margin-right: 20px;">Author Name:</span><i>Igor Popravka</i></div>
    <div>
        <span style="margin-right: 20px;">Author Page:</span>
        <i><a href="https://www.upwork.com/freelancers/~010854a54a1811f970">https://www.upwork.com/freelancers/~010854a54a1811f970</a></i>
    </div>
    <div>
        <span style="margin-right: 20px;">Plugin Page:</span>
        <i><a href="https://github.com/igor-popravka/MyFXBookClient">https://github.com/igor-popravka/MyFXBookClient</a></i>
    </div>
    </p>
    <form action="options.php" method="post">
        <?php
        // output security fields
        settings_fields(MFBClient::OPTIONS_GROUP);
        // output setting sections and their fields
        do_settings_sections(MFBClient::OPTIONS_PAGE);
        // output save settings button
        submit_button('Save Settings');
        ?>
    </form>
</div>