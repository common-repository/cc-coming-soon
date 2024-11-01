<?php
/**
 *
 * id: default
 * title: Default
 *
 */
$base_url = plugin_dir_url( __FILE__ );
$includes_url = CC_CS_PLUGIN_URL.'public/includes/';
$background_type = $this->get_background_type();

$options = $this->get_options();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo plugins_url('css/normalize.min.css', __FILE__); ?>">
        <link rel="stylesheet" href="<?php echo plugins_url('css/main.css', __FILE__); ?>">



        <?php if($favicon = $this->get_option('content', 'favicon')): ?>
        <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
        <?php endif; ?>

        <?php $fonts = array(
            'Open+Sans',
            'Oswald:b'
        ); ?>

        <?php if($this->get_logo_type() === 'text'): ?>
            <?php if($font = $this->get_option('text_logo', 'font')): ?>
                <?php if(!in_array($font, $fonts)) $fonts[] = $font; ?>
            <?php endif; ?>
        <?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'header_font')): ?>
       		<?php if(!in_array($font, $fonts)) $fonts[] = $font; ?>
   		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'content_font')): ?>
       		<?php if(!in_array($font, $fonts)) $fonts[] = $font; ?>
   		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'input_font')): ?>
       		<?php if(!in_array($font, $fonts)) $fonts[] = $font; ?>
   		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'button_font')): ?>
       		<?php if(!in_array($font, $fonts)) $fonts[] = $font; ?>
   		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'message_font')): ?>
       		<?php if(!in_array($font, $fonts)) $fonts[] = $font; ?>
   		<?php endif; ?>

        <?php if($font = $this->get_option('privacy_policy', 'font')): ?>
            <?php if(!in_array($font, $fonts)) $fonts[] = $font; ?>
        <?php endif; ?>

        <?php $fonts_code = implode('%7c', $fonts); ?>

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=<?php echo $fonts_code; ?>">

        <style>
        body {
            background-color: <?php echo $this->get_option('background', 'color'); ?>;

            <?php $background_type = $this->get_background_type(); ?>
            <?php if($background_type === 'image'): ?>
                background-image: url('<?php echo $this->get_option('background', 'image'); ?>');
                background-size: cover;
                background-position: top center;
            <?php elseif($background_type === 'pattern'): ?>
                background-image: url('<?php echo $this->get_option('background', 'pattern'); ?>');
                background-repeat: <?php echo $this->get_option('background', 'repeat'); ?>;
            <?php endif; ?>
            background-attachment: <?php echo $this->get_option('background', 'attachment'); ?>;

        }

        <?php if($options['font']['text_color'] != 'transparent'): ?>
        body { color: <?php echo $options['font']['text_color']; ?>; }
        <?php endif; ?>

        <?php if($options['font']['header_color'] != 'transparent'): ?>
        h1 { color: <?php echo $options['font']['header_color']; ?>; }
        <?php endif; ?>

        <?php if($options['font']['link_color'] != 'transparent'): ?>
        a { color: <?php echo $options['font']['link_color']; ?>; }
        <?php endif; ?>

        <?php if($options['text_logo']['color'] != 'transparent'): ?>
        .header-container header h1 { color: <?php echo $options['text_logo']['color']; ?>; }
        <?php endif; ?>

        <?php if($this->get_logo_type() === 'text'): ?>
            <?php if($font = $this->get_option('text_logo', 'font')): ?>
                .header-container h1.title { font-family: '<?php echo str_replace("+", " ", $font); ?>';}
            <?php endif; ?>
        <?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'content_font')): ?>
       		body, .main { font-family: '<?php echo str_replace("+", " ", $font); ?>';}
 		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'input_font')): ?>
       		#newsletter input { font-family: '<?php echo str_replace("+", " ", $font); ?>';}
 		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'button_font')): ?>
       		#newsletter button { font-family: '<?php echo str_replace("+", " ", $font); ?>';}
 		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'message_font')): ?>
       		#thank-you { font-family: '<?php echo str_replace("+", " ", $font); ?>';}
 		<?php endif; ?>

		<?php if($font = $this->get_option('content_fonts', 'header_font')): ?>
       		h1, h2, h3, h4, h5, h6  { font-family: '<?php echo str_replace("+", " ", $font); ?>';}
 		<?php endif; ?>

		<?php if($button_color = $this->get_option('font', 'button_color')): ?>
       		#newsletter button { background-color:<?php echo $button_color; ?>;}
 		<?php endif; ?>

        <?php if($button_text_color = $this->get_option('font', 'button_text_color')): ?>
            #newsletter button { color:<?php echo $button_text_color; ?>;}
        <?php endif; ?>

        <?php if($message_background_color = $this->get_option('font', 'message_background_color')): ?>
            #thank-you { background-color:<?php echo $message_background_color; ?>;}
            #thank-you .triangle { border-top-color: <?php echo $message_background_color; ?>;}
            @media only screen and (min-width: 768px) {
                #thank-you .triangle { border-bottom-color: <?php echo $message_background_color; ?>;}
            }
        <?php endif; ?>

        <?php if($message_text_color = $this->get_option('font', 'message_text_color')): ?>
            #thank-you { color:<?php echo $message_text_color; ?>;}
        <?php endif; ?>

		<?php if($icons_color = $this->get_option('font', 'icons_color')): ?>
       		.social-links li a i  { color:<?php echo $icons_color; ?>;}
 		<?php endif; ?>

		<?php if($icons_background_color = $this->get_option('font', 'icons_background_color')): ?>
       		.social-links li a  { background-color:<?php echo $icons_background_color; ?>;}
 		<?php endif; ?>

        <?php if(defined('CC_CS_CUSTOMIZE')): ?>
            #thank-you { display: block; }
        <?php endif; ?>

        <?php if($checkbox_label_font = $this->get_option('checkbox', 'checkbox_label_font')): ?>
            .cc-cs-form-control__checkbox-text { font-family:<?php echo $checkbox_label_font; ?>;}
        <?php endif; ?>
        <?php if($checkbox_label_color = $this->get_option('checkbox', 'checkbox_label_color')): ?>
            .cc-cs-form-control__checkbox-text { color:<?php echo $checkbox_label_color; ?>;}
        <?php endif; ?>
        <?php if($checkbox_border_color = $this->get_option('checkbox', 'checkbox_border_color')): ?>
            .cc-cs-form-control__checkmark { border-color:<?php echo $checkbox_border_color; ?>;}
        <?php endif; ?>
        <?php if($checkbox_checkmark_color = $this->get_option('checkbox', 'checkbox_checkmark_color')): ?>
            .cc-cs-form-control__checkmark-before,.cc-cs-form-control__checkmark-after { background:<?php echo $checkbox_checkmark_color; ?>;}
        <?php endif; ?>
        </style>

        <!--[if lt IE 9]>
        <script src="<?php echo plugins_url('js/html5shiv.min.js', __FILE__); ?>""></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="page">
            <div class="header-container">
                <header class="wrapper clearfix">
                    <h1 class="title logo-image" style="<?php if($this->get_logo_type() === 'text'): ?>display: none;<?php endif; ?>">
                        <img src="<?php echo $this->get_option('content', 'logo_image'); ?>" alt="">
                    </h1>
                    <h1 class="title logo-text" style="<?php if($this->get_logo_type() === 'image'): ?>display: none;<?php endif; ?>">
                        <?php echo $this->get_option('content', 'logo_text'); ?>
                    </h1>
                </header>
            </div>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <main class="clearfix">
                        <?php echo apply_filters('cc_the_content', $options['content']['header_text']); ?>
                        <span class="message-text">
                            <?php echo apply_filters('cc_the_content', $options['content']['message_text']); ?>
                        </span>
                    </main>

                    <?php if($this->get_option('newsletter', 'enabled') === 'yes'): ?>

                        <div class="form-container">
                            <div id="thank-you"><p><?php if($thank_u_message = $this->get_option('subscribe_strings', 'thank_u_message')): echo $thank_u_message; else: _e('<strong>Thank you!</strong> We will notify you as soon as we launch.', $this->plugin_slug); endif; ?></p><span class="triangle"></span></div>
                            <form action="" id="newsletter" method="POST">
                                <div class="form-wrapper clearfix">
                                    <p class="icon-email-envelope">
                                        <input type="email" name="email" id="email" placeholder="<?php if($subscribe_field = $this->get_option('subscribe_strings', 'subscribe_field')): echo $subscribe_field; else: _e('Be the first to know', $this->plugin_slug); endif; ?>" required>
                                    </p>
                                    <input type="hidden" name="_ajax_nonce" id="_ajax_nonce" value="<?php echo wp_create_nonce("cc-cs-newsletter-subscribe"); ?>">
                                    <p>
                                        <button type="submit" id="submit"><?php if($subscribe_button = $this->get_option('subscribe_strings', 'subscribe_button')): echo $subscribe_button; else: _e('Submit', $this->plugin_slug); endif; ?></button>
                                    </p>
                                </div>
                                <?php if($this->get_option('newsletter', 'checkbox_enabled') === 'yes'): ?>
                                    <div class="cc-cs__input-group cc-cs__input-group-gdpr">
                                        <?php
                                        $checkbox_label = $this->get_option('subscribe_strings', 'checkbox_label');
                                        $gdpr_label = $checkbox_label ? $checkbox_label : __('I agree to have my personal data processed.', $this->plugin_slug);
                                        printf( "\t<label id=\"cc-cs-gdpr_checkbox_label\" class=\"cc-cs-form-control__checkbox-label\"><input type=\"checkbox\" id=\"cc-cs-gdpr_checkbox\" class=\"cc-cs-form-control__checkbox\" name=\"cc-cs-gdpr_checkbox\" data-type=\"checkbox\" required data-value=\"%s\"><span class=\"cc-cs-form-control__checkmark\"><span class=\"cc-cs-form-control__checkmark-before\"></span><span class=\"cc-cs-form-control__checkmark-after\"></span></span><span class=\"cc-cs-form-control__checkbox-text\">%s</span></label>", $gdpr_label, $gdpr_label);
                                        ?>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>

                    <?php endif; ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <div class="footer-container">
                <footer class="wrapper">
                    <ul class="social-links clearfix">
                        <?php
                            $services = array(
                                'facebook',
                                'twitter',
                                'youtube',
                                'vimeo',
                                'instagram',
                                'linkedin',
                                'pinterest'
                            );
                        ?>

                        <?php foreach($services as $key => $service): ?>
                            <?php if(isset($options['social_services']['urls'][$key]) && $url = $options['social_services']['urls'][$key]): ?>
                                <li><a href="<?php echo $url; ?>"><i class="icon-<?php echo $service; ?>"></i></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <span class="footer-note clearfix"><p><?php echo strip_tags($options['content']['footer_note']); ?><?php $this->get_popup_label(); ?></p></span>
                </footer>
            </div>
            <?php $this->get_popup_content(); ?>

            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="<?php echo plugins_url('js/main.js', __FILE__); ?>"></script>
            <script>
                $(document).ready(function(){
                    <?php if($this->get_option('google_adwords', 'conversion_code')): ?>
                    var conversion_code = <?php echo json_encode($this->get_option('google_adwords', 'conversion_code')); ?>;
                    <?php endif; ?>

                    var form = document.querySelector("#newsletter");

                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        var request = new XMLHttpRequest();
                        request.open('POST', '<?php echo admin_url( 'admin-ajax.php' ); ?>', true);
                        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

                        request.onload = function() {
                        if (request.status >= 200 && request.status < 400){
                            // Success!
                            var response = JSON.parse(request.responseText);

                            if(response.status === 'ok') {
                                $('#thank-you').fadeIn();
                                <?php if($this->get_option('google_adwords', 'conversion_code')): ?>
                                    $(conversion_code).appendTo('body');
                                <?php endif; ?>
                            }

                        }
                        };

                        var data = "action=cc_cs_newsletter_subscribe&email=" + document.getElementById("email").value + "&_ajax_nonce=" + document.getElementById("_ajax_nonce").value;

                        if ( document.getElementById('cc-cs-gdpr_checkbox') && document.getElementById('cc-cs-gdpr_checkbox').checked ) {
                            data += "&cc-cs-gdpr_checkbox=yes";
                        }
                        request.send(data);

                    });
                });
            </script>
            <?php echo $this->get_option('google_analytics', 'tracking_code'); ?>
        </div>
    </body>
</html>
