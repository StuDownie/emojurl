<?php
    $term = ''; // set this whatever your 404 page is using for the end term of the URL, e.g $_GET['request']
        
    // First we check for a % in the URL, it's an emoji! (probably...doesn't matter if it's not) 
    $emojurl = "%";

    // List your emojis and where they should go, here
    $emojiArray = [
        "F09F9880" => "/link-for-happy-emoji",
        "F09F98A2" => "/link-for-sad-emoji",
        "F09F98A1" => "/link-for-angry-emoji",
        // etc, etc...
    ];

    $emo = str_replace('%', '', urlencode($term));
    
    if($emojiArray[$emo] != '' && $emojiArray[$emo] != null) {
        echo '<script>window.location.replace("' . $emojiArray[$emo] . '")</script>';              
        exit;
    }
?>
