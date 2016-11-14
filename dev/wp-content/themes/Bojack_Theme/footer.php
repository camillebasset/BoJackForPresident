<<<<<<< HEAD
        <footer class="footer row">
      	  <div class="container col-md-offset-1 col-md-10">
	        	<div class="col-md-6">
		        	<ul class="footer-links text-center">
		        		<li><a href="">Bojack</a></li><span>-</span>
		        		<li><a href="">Actualités</a></li><span>-</span>
		        		<li><a href="">Boutique</a></li><span>-</span>
		        		<li><a href="">Participer</a></li><span>-</span>
		        		<li><a href="">Programme</a></li>
		        	</ul>
		        	<p class="text-center footer-copyright">©2016 Bojack For President - Mentions Légales</p>
	        	</div>
	        	<div class="col-md-6 text-center">
	        		<div class="col-md-6">
		        		<a href="" class="text-center footer-donate">faire un don</a>
	        		</div>
	        		<div class="col-md-6">
		        		<img src="" class="col-md-6 text-center" alt="">
	        		</div>
	        	</div>
        	
     	   </div>
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
=======
        <footer class="footer row">
      	  <div class="container col-md-offset-1 col-md-10">
	        	<div class="col-md-6">
		        	<ul class="footer-links text-center">
		        		<li><a href="">Bojack</a></li><span>-</span>
		        		<li><a href="">Actualités</a></li><span>-</span>
		        		<li><a href="">Boutique</a></li><span>-</span>
		        		<li><a href="">Participer</a></li><span>-</span>
		        		<li><a href="">Programme</a></li>
		        	</ul>
		        	<p class="text-center footer-copyright">©2016 Bojack For President - Mentions Légales</p>
	        	</div>
	        	<div class="col-md-6 text-center">
	        		<div class="col-md-6">
		        		<a href="" class="text-center footer-donate">faire un don</a>
	        		</div>
	        		<div class="col-md-6">
		        		<img src="" class="col-md-6 text-center" alt="">
	        		</div>
	        	</div>

        	<?php 
          $args=array(
              'theme_location' => 'footer', // nom du slug
              'menu' => 'footer_fr', // nom à donner cette occurence du menu
              'menu_class' => 'footer container', // class à attribuer au menu
              'menu_id' => 'menu_id' // id à attribuer au menu
              // voir les autres arguments possibles sur le codex
          );
          echo '</footer>';
          wp_nav_menu($args);
          ?>
        	
     	   </div>
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
>>>>>>> 9d6b3e6c0724a5663bd3e72cf75e417e6047aec7
</html>