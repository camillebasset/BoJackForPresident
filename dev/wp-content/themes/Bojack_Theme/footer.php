

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>

        <footer class="footer row">
      	  <div class="container col-md-offset-1 col-md-10">
      	  	<div class="col-md-6">
		        <?php 
		          $args=array(
		              'theme_location' => 'footer', // nom du slug
		              'menu' => 'footer_fr', // nom à donner cette occurence du menu
		              'menu_class' => '', // class à attribuer au menu
		              'menu_id' => 'menu_id' // id à attribuer au menu
		              // voir les autres arguments possibles sur le codex
		          );
		          wp_nav_menu($args);
		          echo "<p class='text-center footer-copyright'>©2016 BoJack For President - Mentions Légales</p>";
				?>
      	  	</div>
	        	<!-- <div class="col-md-6">
		        	<ul class="footer-links text-center">
		        		<li><a href="">Bojack</a></li><span>-</span>
		        		<li><a href="">Actualités</a></li><span>-</span>
		        		<li><a href="">Boutique</a></li><span>-</span>
		        		<li><a href="">Participer</a></li><span>-</span>
		        		<li><a href="">Programme</a></li>
		        	</ul>
		        	<p class="text-center footer-copyright">©2016 Bojack For President - Mentions Légales</p>
	        	</div> -->
	        	<div class="col-md-6 text-center">
	        		<div class="col-md-6">
		        		<a href="" class="text-center footer-donate">Faire un don</a>
	        		</div>
	        		<div class="col-md-6 text-center">
		        		<img class="footer-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/BoJack_Horseman_Logo.svg/2000px-BoJack_Horseman_Logo.svg.png" class="col-md-6 text-center" alt="">
	        		</div>
	        	</div>

          

        	
     	   </div>
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>

</html>