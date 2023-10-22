<footer id="main-footer">

<div class="container footer-container">

    <div class="footer-column">
        <?php if (is_active_sidebar('footer-widget-left')): ?>
        <?php dynamic_sidebar('footer-widget-left'); ?>
        <?php endif; ?>
        </div>

    <div class="footer-column">
        <?php if (is_active_sidebar('footer-widget-middle')): ?>
        <?php dynamic_sidebar('footer-widget-middle'); ?>
        <?php endif; ?>
    </div>

    <div class="footer-column">
        <?php if (is_active_sidebar('footer-widget-right')): ?>
        <?php dynamic_sidebar('footer-widget-right'); ?>
        <?php endif; ?>
    </div>

    <div class="footer-column">
    <p>Copyrights ABK Devs | 2023</p>
    </div>


</div>


</footer>

    
    
    <?php wp_footer() ?>

</body>

</html>