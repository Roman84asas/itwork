<?php
/*
  * Template name: Home
  * */
get_header(); ?>

<section class="home_slider cf">
    <div class="flexslider homeslider">
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_option('homesliderslug'));  ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                    <li>
                        <figure>
                            <?php if ($slide['image']) : ?>
                                <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" />
                            <?php endif; ?>
                            <?php if($slide['title'] or $slide['description'] or $slide['html']){ ?>
                                <figcaption>
                                    <?php if($slide['title']){ echo '<span class="mainslidertitle">'.$slide['title'].'</span>'; } ?><br />
                                    <?php if($slide['description']){ echo '<span class="mainsliderdesc">'.$slide['description'].'</span>'; } ?><br />
                                    <?php if($slide['url']){ echo '<a href="'.$slide['url'].'" class="sliderlinkmore">'.__('Details ','aletheme').'</a>'; } ?>
                                </figcaption>
                            <?php } ?>
                        </figure>
                    </li>
                <?php endforeach; ?>
            <?php endif;?>
        </ul>
    </div>
</section>

<section class="curs">
    <div class="curs_val">
        <span>
           <?php
           $sum = 2500;
           $languages = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp");
           //валюты
           foreach ($languages->Valute as $lang) {
               if ($lang["ID"] == 'R01335') { //тип валюты
                   $koeficient1 = round(str_replace(',','.',$lang->Value), 4);
               }
           }
           $sum = round(100 / $koeficient1 * $sum, 0);

           echo $sum;
           ?>
        тенге.
        </span>
    </div>
</section>

<?php get_footer();

