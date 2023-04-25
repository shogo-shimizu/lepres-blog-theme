<footer>
    <div class="footerTitle">
        <h2><?php bloginfo('name'); ?></h2>
        <div class="snsFooter">
            <i class="fa-brands fa-twitter fa-size"></i>
            <i class="fa-brands fa-instagram"></i>
            <!-- <i class="fa-brands fa-youtube"></i> -->
        </div>
    </div>
    <div class="footerInfo">
        <h2>Blog Infomation</h2>
        <!-- <p>お問合せ</p>
        <a href="mailto:<?php bloginfo('admin_email') ?>">
            <p><?php bloginfo('admin_email') ?></p>
        </a> -->
        <p>Blogger</p>
        <?php $users = get_users(array(
            'orderby' => 'ID',
            'order' => 'ASC'
        )); ?>
        <ul class="users_list">
            <?php foreach ($users as $user) {
                $uid = $user->ID; ?>
                <li>
                    <a href="<?php echo get_bloginfo("url") . '/?author=' . $uid ?>"><?php echo $user->display_name; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- <div class="footerContact">
        <h2>Contact</h2>
        <p>お問合せ</p>
    </div> -->
</footer>
<?php wp_footer(); ?>