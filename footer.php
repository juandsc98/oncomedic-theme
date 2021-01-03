
<?php wp_footer(); ?>
   
   
    <br><br>
    <div class="semi-circulo-up"> 
        <div class="social-footer">
            <div class="table"> 
                <div class="table-cell">
                    <img src="<?php echo get_template_directory_uri().'/assets/src/img/Icon awesome-facebook.svg'?>" alt="">
                </div>
                <div class="table-cell">
                    <img src="<?php echo get_template_directory_uri().'/assets/src/img/Icon awesome-whatsapp.svg'?>" alt="">
                </div>
                <div class="table-cell">
                    <img src="<?php echo get_template_directory_uri().'/assets/src/img/Icon material-email.svg'?>" alt="">
                </div>
            </div>
        </div>
        <div class="container-footer">
            <div class="row">
                <?php dynamic_sidebar('seccion_general');  ?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h3 class="widget-title text-center" style="color:#7bb63e!important">Navegación</h3>
                    <div class="menu-footer">
                        <?php
                        
                            wp_nav_menu(array(
                                'theme_location' => 'menu_secundario'
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    

</div>
</body>
</html>