<?php
    /* Background */
    // $nametype = "background";
    // $config['photo']['photo_static'][$nametype]['title_main'] = "Background";
    // $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    // $config['photo']['photo_static'][$nametype]['images'] = true;
    // $config['photo']['photo_static'][$nametype]['background'] = true;
    // $config['photo']['photo_static'][$nametype]['width'] = 900;
    // $config['photo']['photo_static'][$nametype]['height'] = 300;
    // $config['photo']['photo_static'][$nametype]['thumb'] = '900x300x1';
    // $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Banner seo home */
    $nametype = "banner-seo-home";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner SEO Home";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 500;
    $config['photo']['photo_static'][$nametype]['height'] = 260;
    $config['photo']['photo_static'][$nametype]['thumb'] = '500x260x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

 

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 130;
    $config['photo']['photo_static'][$nametype]['height'] = 80;
    $config['photo']['photo_static'][$nametype]['thumb'] = '130x80x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 48;
    $config['photo']['photo_static'][$nametype]['height'] = 48;
    $config['photo']['photo_static'][$nametype]['thumb'] = '48x48x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Watermark */
    $nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 50;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Watermark tin tức */
    // $nametype = "watermark-news";
    // $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark tin tức";
    // $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    // $config['photo']['photo_static'][$nametype]['images'] = true;
    // $config['photo']['photo_static'][$nametype]['watermark'] = true;
    // $config['photo']['photo_static'][$nametype]['watermark-advanced'] = false;
    // $config['photo']['photo_static'][$nametype]['width'] = 50;
    // $config['photo']['photo_static'][$nametype]['height'] = 50;
    // $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
    // $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';


    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['desc_photo'] = false;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 490;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    // php.ini xampp
    // post_max_size=4000M
    // upload_max_filesize=4000M
    /* Video MP4  */
    // $nametype = "video-mp4";
    // $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video MP4 ";
    // $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    // $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    // $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.mp4';

    /* Social */
    $nametype = "social";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['luu'] = false;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 44;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 45;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '44x45x2';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

?>