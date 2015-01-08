<?php
    $title = filer_input(INPUT_POST, "title", FILLER_SANITIZE_STRING);
    $post = filler_input(INPUT_POST, "post", FILLER_SANITIZE_STRING);
    
    echo "<p>TITLE:$title</p>";
    echo "<p>POST:$post</p>";