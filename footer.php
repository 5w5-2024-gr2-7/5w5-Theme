<footer>
<div class="citation">
    <h4>Citation de la journée</h4>
    <blockquote>
        <?php echo do_shortcode('[citation_multimedia]'); ?>
    </blockquote>
</div>
  <div class="footer-sections">
    <div class="footer-section">
      <div class="contenu-footer-section">
        <h3>Nous retrouver</h3>
        <ul>
          <li><a href="https://tim.cmaisonneuve.qc.ca/" target="_blank">Site du département</a></li>
          <li><a href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/" target="_blank">Site du collège</a></li>
          <li><a href="https://www.instagram.com/maisonneuvetim/" target="_blank">Instagram</a></li>
          <li><a href="https://youtu.be/apb4hUeypGs" target="_blank">Youtube</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-section">
      <div class="contenu-footer-section">
        <h3>Naviguer</h3>
        <ul>
          <li><a href="<?php echo site_url('/stages/'); ?>">Stages</a></li>
          <li><a href="<?php echo get_post_type_archive_link('course'); ?>">Cours</a></li>
          <li><a href="<?php echo get_post_type_archive_link('professor'); ?>">Professeurs</a></li>
          <li><a href="<?php echo get_post_type_archive_link('project'); ?>">Projets</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-section">
      <div class="contenu-footer-section">
        <h3>À propos</h3>
        <ul>
          <li>Collège de Maisonneuve</li>
          <li>3800 Sherbrooke St E, Montréal, Quebec H1X 2A2</li>
          <li>514-254-7131</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="credit"><p>© Alexander Rankov • Dominic Gibeau <br><br> Guillaume Ducharme-Vanier • Mathieu Croteau-Dufour </p></div>
  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/tim2.png" alt="image">
</footer>

<?php wp_footer(); ?>
<script>

</script>
</body>
</html>