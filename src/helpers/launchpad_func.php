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
