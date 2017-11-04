<?php

/*
Plugin Name: Snappy List Builder
Plugin URI: https://lisabronwyn.com/plugins/snappy-list-builder
Description: The ultimate email list builder for WordPress. Capture new subscribers. Reward new subscribers with a custom download upon opt-in. Build unlimited lists. Import and export subscribers easily with .CSV
Version: 1.0
Author: Lisa Bronwyn
Author URI: https://lisabronwyn.custom
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: snappy-list-builder
*/

/* !0. TABLE OF CONTENTS */

/*

    1. HOOKS

    2. SHORTCODES
        2.1 - slb_form_shortcode()

    3. FILTERS

    4. EXTERNAL SCRIPTS

    5. ACTIONS

    6. HELPERS

    7. CUSTOM POST TYPES

    8. ADMIN PAGES

    9. SETTINGS

/*



/* !1. HOOKS */



/* !2. SHORTCODES */

//2.1

function slb_form( $args, $content="") {

    // setup our output variable - the form html
    $output = '

        <div class="slb">

            <form id="slb_form" name="slb_form" class="slb-form" method="post">

                <p class="slb-input-container">

                    <label>Your Name</label><br /></label>
                    <input type="text" name="slb_fname" placeholder="First Name"  />
                    <input type="text" name="slb_lname" placeholder="Last Name"  />

                </p>

                <p class="slb-input-container">

                    <label>Email Address</label><br /></label>
                    <input type="email" name="email" placeholder="First Name"  />
                    <input type="text" name="slb_email" placeholder="ex. you@email.com"  />

                </p>';

                // including content in our form html if content is passed into the function
                if( strlen($content) ):

                    $output .= '<div class="slb-content">'. wpautop($content) .</div>;

                endif;

                // including content in our form html if content is passed into the function

                $output .='<p class="slb-input-container">


                    <input type="submit" name="slb_submit" placeholder="Sign Me Up!"  />

                </p>

            </form>

        </div>

    ';

    //return our results/html
    return $output;

}
