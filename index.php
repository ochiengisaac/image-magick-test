<?php

if(file_exists($pdf_file="demo_theme-sky_com_drile_home-02_.pdf")){
    $imagick = new Imagick();
    $imagick->setResolution(150, 150);
    $imagick->readImage($pdf_file);
    $imagick->writeImages('demo_theme-sky_com_drile_home-02_.jpg', false);
}












?>