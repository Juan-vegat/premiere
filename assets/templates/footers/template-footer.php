<footer class="site-footer ">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
                        <?php if (is_active_sidebar('footer_1')) : dynamic_sidebar('footer_1'); endif; ?>
                        <?php if (is_active_sidebar('footer_2')) : dynamic_sidebar('footer_2'); endif; ?>
					
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
                    <?php if (is_active_sidebar('footer_3')) : dynamic_sidebar('footer_3'); endif; ?>
					
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-3">
                    <?php if (is_active_sidebar('footer_4')) : dynamic_sidebar('footer_4'); endif; ?>
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->




