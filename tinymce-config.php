<?php
/*
Plugin Name: gnoyelle : Config TinyMCE 4
Plugin URI: http://wwww.gregoirenoyelle.com
Description: Options pour l'éditeur TinyMCE 4
Version: 1.0
Author: Grégoire Noyelle
Author URI: http://wwww.gregoirenoyelle.com
License: GPL2
GitHub Plugin URI: https://github.com/gregoirenoyelle/gnoyelle-tinymce-config
GitHub Branch: master
*/

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

/***
 * DEFAULT SET UP
 * default set up for $in['toolbar1']
 * bold,italic,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink,wp_more,spellchecker,wp_fullscreen,wp_adv
 * default set up for $in['toolbar2']
 * formatselect,underline,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help
 * default set up for $in['block_formats']
 * Paragraph=p;Address=address;Pre=pre;Heading 1=h1;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5; Heading 6=h6
 */
function gn_tinymce_filtre($in){
 	$in['toolbar1']='formatselect,bold,italic,underline,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,alignjustify,link,unlink,wp_more,spellchecker,wp_fullscreen,wp_adv ';
    $in['toolbar2']='pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help ';
    $in['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5';
    return $in;
  }
add_filter('tiny_mce_before_init', 'gn_tinymce_filtre');


