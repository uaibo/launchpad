<?php
function launchpad_get_styled_text($configKey){
    $text = config("launchpad.{$configKey}.text");
    $highlighted_words = config("launchpad.{$configKey}.highlighted");
    $bold_words = config("launchpad.{$configKey}.bold");
    $main_brand_color = config("launchpad.branding_colors.primary");

    if( !$text )
    {
        return null;
    }

    if( !$highlighted_words || !is_array($highlighted_words) )
    {
        return $text;
    }

    foreach( $highlighted_words as $highlight )
    {
        $text = str_replace(
            $highlight,
            '<span style="color: '.$main_brand_color.'";>'.$highlight.'</span>',
            $text
        );
    }

    foreach( $bold_words as $bold )
    {
        $text = str_replace(
            $bold,
            '<span style="font-weight: bold;">'.$bold.'</span>',
            $text
        );
    }

    return $text;
}

function launchpad_get_file_url($filename)
{
    $file_path = 'vendor/uaibo/launchpad/assets/'.$filename;

    if( file_exists( public_path($file_path) ) ){
        return url($file_path);
    }

    return null;
}


function launchpad_color_adjust($hex, $steps=-30) {
    // Steps should be between -255 and 255. Negative = darker, positive = lighter
    $steps = max(-255, min(255, $steps));

    // Normalize into a six character long hex string
    $hex = str_replace('#', '', $hex);
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
    }

    // Split into three parts: R, G and B
    $color_parts = str_split($hex, 2);
    $return = '#';

    foreach ($color_parts as $color) {
        $color   = hexdec($color); // Convert to decimal
        $color   = max(0,min(255,$color + $steps)); // Adjust color
        $return .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
    }

    return $return;
}
