<style type="text/css">
  footer {
    background: #f8f8f8 url(<?= get_stylesheet_directory_uri(); ?> '/images/footer-bg.png') no-repeat bottom right;
    background-size: 80%;
    padding: 20px 0 40px;
    border-top: 1px solid #eee;
  }

  .c-info {
    padding: 10px !important;
    word-wrap: break-word;
  }

</style>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>About us</h4>
        <p><?= localize('about_us'); ?></p>
      </div>
      <div class="col-md-6">
        <h4>Contact</h4>
        <ul class="c-info">
          <li><i class="fa fa-map-marker"></i> Mosoti Macharia & Company Advocates,
            Nas Office Suites, Suite No. 8
            Jakaya Kikwete Road<br>Kenya<br>
          </li>
          <li>
          </li>
          <li><i class="fa fa-phone"></i> +254 718 202 194</li>
          <li><i class="fa fa-envelope-o"></i> P.O Box 11465-00100 Nairobi - Info@mmacadvocates.com</li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <!-- FOOTER COPYRIGHT -->
  <?php include(get_stylesheet_directory() . "/includes/copyright_footer.php"); ?>
</footer>