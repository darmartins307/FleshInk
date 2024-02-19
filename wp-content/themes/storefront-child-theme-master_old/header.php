<?php 
/** 

*@package storegront

*/
?>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=" <?php echo get_template_directory_uri(); ?>/assets/images/favicon-fleshink.png" type="image/x-icon">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open();?>

<!--  Link Whatsapp
<div class="link-whatsapp"> 
    <a target="_blank" onclick="ga('send','event','whatsapp','click','botao');" href="https://api.whatsapp.com/send?phone=5502199999999">
        <img id="wpp" src="#" alt=" Whatsapp ">
</div>
-->

</html>