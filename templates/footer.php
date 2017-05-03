<footer class="content-info">
 <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> Logo</div>
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
      <?php dynamic_sidebar('sidebar-footer-2'); ?>

      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
      <?php dynamic_sidebar('sidebar-footer-3'); ?>
		</div>
		 <div class="col-md-3 col-sm-6 paddingtop-bottom">
		 <?php dynamic_sidebar('sidebar-footer-4'); ?>

      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p><?php echo ot_get_option ( 'copyright_at', '© Copyright 2017 - Andrea Tasselli' )?></p>
    </div>
  </div>
</div>
