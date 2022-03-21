<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ooo_russia
 */

?>




    <footer id="footer" class="footer">
        <div class="mw">
            <?php if(!is_home() && !is_single()) : ?>
            <div class="m_title">
                <h2 class="h2">
                    Контактная информация
                </h2>
            </div>

            <div class="top_cont">
                <ul>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/pin.svg" alt="pin">
                        </div>

                        <div class="line">
                            <!--                            <h5 class="h5">-->
                            <!--                                Наш адрес-->
                            <!--                            </h5>-->

                            <p>
                                <?php the_field('address',2); ?>
                            </p>
                        </div>
                    </li>
                    <li class="column">
                        <div class="row">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/phone.svg" alt="phone">
                            </div>

                            <div class="line">
                                <!--                            <h5 class="h5">-->
                                <!--                                Наш телефон-->
                                <!--                            </h5>-->

                                <?php
                                $phone = get_field('phone',2);
                                $phone_tel = preg_replace('/[^0-9]/', '', $phone);
                                ?>
                                <a href="tel:+<?php echo $phone_tel; ?>">
                                    <?php echo $phone; ?> <span></span>
                                </a>
                                <?php
                                $phone2 = get_field('phone2',2);
                                $phone_tel2 = preg_replace('/[^0-9]/', '', $phone2);
                                ?>
                                <!--                            <a target="_blank" href="https://wa.me/--><?php //echo $phone_tel2; ?><!--">-->
                                <!--                                --><?php //echo $phone2; ?><!-- <span>WhatsApp</span>-->
                                <!--                            </a>-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/email.svg" alt="email">
                            </div>

                            <div class="line">
                                <!--                            <h5 class="h5">-->
                                <!--                                Наш email-->
                                <!--                            </h5>-->

                                <?php
                                $email = get_field('email',2);
                                ?>
                                <a href="mailto:<?php echo $email; ?>">
                                    <?php echo $email; ?>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <ul class="socials">
                            <li>
                                <a target="_blank" href="<?php the_field('instagram',2); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/instagram.svg" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php the_field('vk',2); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/vk.svg" alt="vk">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php the_field('facebook',2); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/facebook.svg" alt="facebook">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php the_field('zen',2); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/zen.svg" alt="zen">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php the_field('youtube',2); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/youtube.svg" alt="youtube">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://download.teamviewer.com/download/TeamViewer_Setup.exe">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/team-viewer.svg"/>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="map">
               <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae62bf1f268a4003b0e31674575282ab1d60da807decbde53f0dc0b60fa7b470a&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>

            <hr>
            <?php endif; ?>

            <div class="bottom_cont">
                <p>
                    &copy; <a href="https://www.universe-soft.ru ">ООО "Юниверс-Софт"</a> <?php the_time('Y') ?>. Все материалы данного сайта являются объектами авторского права
                    <br>
                    Сайт не является публичной офертой.
                </p>
            </div>
        </div>
    </footer>
</div>


<div id="cookie_block" class="cookie_block">
    <p>
        Мы используем cookie для наилучшего представления нашего сайта. Если Вы продолжите использовать сайт, мы будем считать, что Вас это устраивает.
    </p>

    <div class="btn_c">
        <button type="button" class="btn_m hide_cookie_btn" id="hide_cookie_btn">Ок</button>
    </div>
</div>


<?php
$phone = get_field('phone2',2);
$phone_tel2 = preg_replace('/[^0-9]/', '', $phone);
?>
<a target="_blank" href="https://wa.me/<?php echo $phone_tel2; ?>" title="WhatsApp" class="callback-bt">
    <div class="text-call">
        <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/whatsapp2.svg" class="fas_icon" alt="whatsapp2">
        <span>Написать</span>
    </div>
</a>


<div class="scrollup">
    <img src="<?php echo get_template_directory_uri() . '/assets/'; ?>images/arrow_top.svg" alt="arrow_top">
</div>


<div id="success" class="modal">
    <div class="m-content">
        <div class="c">
            <h3 class="h3 success_h3">Благодарим Вас за заявку</h3>

            <h6>Наши менеджеры свяжутся с Вами в ближайшее время</h6>
        </div>
    </div>
</div>


<script>(function(a,m,o,c,r,m){a[m]={id:"42911",hash:"8936e7ee6f7454f4a0f71f2c35cc6ffd306e45426951c10e8c3f7277e46ae999",locale:"ru",inline:false,setMeta:function(p){this.params=(this.params||[]).concat([p])}};a[o]=a[o]||function(){(a[o].q=a[o].q||[]).push(arguments)};var d=a.document,s=d.createElement('script');s.async=true;s.id=m+'_script';s.src='https://gso.amocrm.ru/js/button.js?1621015279';d.head&&d.head.appendChild(s)}(window,0,'amoSocialButton',0,0,'amo_social_button'));</script>


<?php wp_footer(); ?>

</body>
</html>
