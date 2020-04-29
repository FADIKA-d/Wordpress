<!-- MENU -->
<nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark my-3">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <?php  
        wp_nav_menu(array(
            'theme_location'    => 'principal',
            'depth'             => 5,
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
            )
        ); 
        ?>   
        <div id="menu" role="navigation" class="border-top border-bottom m-3"> 
            <ul>
                <li class="page_item page-item-36"><a href="mentions-legales/">Mentions légales</a></li>
                <li class="page_item page-item-2"><a href="page-d-exemple/">Page d’exemple</a></li>
            </ul>
	    </div>               
    </div> 
</nav>