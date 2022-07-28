<?php 
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<div class="exit-intent-popup">
    <div class="newsletter">
    <h2>Töltsd le ingyenes tetőszigetelési kisokosunkat!</h2>
        <div class="caption grid grid-2">
            <div class="grid-item hidden-xs">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/components/exit-popup/assets/images/kisokos.jpg" alt="tetőszigetelési kisokos">
            </div>
            <div class="grid-item align-center-y">
                <div class="txtBx d-none">
                    <p>A hőszigetelés hosszú távú, de többszörösen megtérülő beruházás. Mi már tudjuk, hogy megéri!</p>
                    <p> Gondolkodsz rajta, de még nem vagy biztos a dolgodban, esetleg még gyűjtögetsz?  Maradj velünk jól informált!</p>
                </div>
                <div class="txtBx d-none">

                    <p>Mire figyeljünk szigeteléskor?
                        Ökölszabályok a tetőszigeteléssel kapcsolatban,
                        Energia megtakarítási tippek
                    </p>
                </div>
                <ul class="lista d-none">
                    <li>Mire figyeljünk szigeteléskor?</li>
                    <li>Ökölszabályok a tetőszigeteléssel kapcsolatban</li>
                    <li>Energia megtakarítási tippek</li>
                </ul>
                <div class="signup">
                    <h4>Iratkozz fel!</h4>
                    <?php echo do_shortcode('[ninja_form id="2"]'); ?>
                </div>
            </div>
            
        </div>
        
        
        <span class="close">x</span>
    </div>
</div>