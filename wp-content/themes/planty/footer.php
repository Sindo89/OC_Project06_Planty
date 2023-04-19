</main>
</div>
<footer id="footer" role="contentinfo">
  <nav id="footernav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
  </nav>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>