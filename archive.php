<?php

/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package justg
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = velocitytheme_option('justg_container_type', 'container');
?>

<div class="wrapper" id="archive-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

        <div class="card shadow-sm bg-light pt-2 px-3 mb-3">
            <?php echo justg_breadcrumb(); ?>
        </div>

        <div class="row">

            <!-- Do the left sidebar check -->
            <?php do_action('justg_before_content'); ?>

            <main class="site-main col order-2" id="main">

                <?php

                if (have_posts()) {
                ?>
                    <header class="page-header block-primary">
                        <?php
                        the_archive_title('<h1 class="page-title text-uppercase">', '</h1>');
                        the_archive_description('<div class="taxonomy-description">', '</div>');
                        ?>
                    </header><!-- .page-header -->
                    <?php
                    // Start the loop.
                    $postcount = 1;
                    while (have_posts()) {
                        the_post();
                    ?>
                        <article class="block-primary mb-4">
                            <?php if ($postcount === 1) : ?>
                                <div class="post-tumbnail position-relative border border-4">
                                    <div class="ratio ratio-21x9 bg-light overflow-hidden">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            $img_atr = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                            echo '<img src="' . $img_atr[0] . '" alt="' . get_the_title() . '" />';
                                        } else {
                                            echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="background-color: #ececec;width: 100%;height: auto;enable-background:new 0 0 60 60;" xml:space="preserve" width="' . $width . '" height="' . $height . '"><g><g><path d="M55.201,15.5h-8.524l-4-10H17.323l-4,10H12v-5H6v5H4.799C2.152,15.5,0,17.652,0,20.299v29.368   C0,52.332,2.168,54.5,4.833,54.5h50.334c2.665,0,4.833-2.168,4.833-4.833V20.299C60,17.652,57.848,15.5,55.201,15.5z M8,12.5h2v3H8   V12.5z M58,49.667c0,1.563-1.271,2.833-2.833,2.833H4.833C3.271,52.5,2,51.229,2,49.667V20.299C2,18.756,3.256,17.5,4.799,17.5H6h6   h2.677l4-10h22.646l4,10h9.878c1.543,0,2.799,1.256,2.799,2.799V49.667z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/><path d="M30,14.5c-9.925,0-18,8.075-18,18s8.075,18,18,18s18-8.075,18-18S39.925,14.5,30,14.5z M30,48.5c-8.822,0-16-7.178-16-16   s7.178-16,16-16s16,7.178,16,16S38.822,48.5,30,48.5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/><path d="M30,20.5c-6.617,0-12,5.383-12,12s5.383,12,12,12s12-5.383,12-12S36.617,20.5,30,20.5z M30,42.5c-5.514,0-10-4.486-10-10   s4.486-10,10-10s10,4.486,10,10S35.514,42.5,30,42.5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/><path d="M52,19.5c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S54.206,19.5,52,19.5z M52,25.5c-1.103,0-2-0.897-2-2s0.897-2,2-2   s2,0.897,2,2S53.103,25.5,52,25.5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/></g></g> </svg>';
                                        } ?>
                                    </div>
                                    <div class="position-absolute px-3 pt-2 bottom-0 end-0 start-0 bg-dark" style="--bs-bg-opacity: 0.90;">
                                        <?php
                                        the_title(
                                            sprintf('<h2 class="h5 fw-bold"><a href="%s" class="text-white" rel="bookmark">', esc_url(get_permalink())),
                                            '</a></h2>'
                                        );
                                        ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="post-tumbnail position-relative border border-4">
                                            <div class="ratio ratio-4x3 bg-light overflow-hidden">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $img_atr = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                                                    echo '<img src="' . $img_atr[0] . '" alt="' . get_the_title() . '" loading="lazy"/>';
                                                } else {
                                                    echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="background-color: #ececec;width: 100%;height: auto;enable-background:new 0 0 60 60;" xml:space="preserve" width="' . $width . '" height="' . $height . '"><g><g><path d="M55.201,15.5h-8.524l-4-10H17.323l-4,10H12v-5H6v5H4.799C2.152,15.5,0,17.652,0,20.299v29.368   C0,52.332,2.168,54.5,4.833,54.5h50.334c2.665,0,4.833-2.168,4.833-4.833V20.299C60,17.652,57.848,15.5,55.201,15.5z M8,12.5h2v3H8   V12.5z M58,49.667c0,1.563-1.271,2.833-2.833,2.833H4.833C3.271,52.5,2,51.229,2,49.667V20.299C2,18.756,3.256,17.5,4.799,17.5H6h6   h2.677l4-10h22.646l4,10h9.878c1.543,0,2.799,1.256,2.799,2.799V49.667z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/><path d="M30,14.5c-9.925,0-18,8.075-18,18s8.075,18,18,18s18-8.075,18-18S39.925,14.5,30,14.5z M30,48.5c-8.822,0-16-7.178-16-16   s7.178-16,16-16s16,7.178,16,16S38.822,48.5,30,48.5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/><path d="M30,20.5c-6.617,0-12,5.383-12,12s5.383,12,12,12s12-5.383,12-12S36.617,20.5,30,20.5z M30,42.5c-5.514,0-10-4.486-10-10   s4.486-10,10-10s10,4.486,10,10S35.514,42.5,30,42.5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/><path d="M52,19.5c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S54.206,19.5,52,19.5z M52,25.5c-1.103,0-2-0.897-2-2s0.897-2,2-2   s2,0.897,2,2S53.103,25.5,52,25.5z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#5F7D95"/></g></g> </svg>';
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-text">
                                            <?php
                                            the_title(
                                                sprintf('<h2 class="h6 mb-md-3 fw-bold"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
                                                '</a></h2>'
                                            );
                                            ?>
                                            <div class="post-excerpt text-muted">
                                                <div class="d-none d-md-block">
                                                    <?php echo vdberita_limit_text(strip_tags(get_the_content()), 25); ?>
                                                </div>
                                                <div class="d-md-none">
                                                    <small>
                                                        <?php echo vdberita_limit_text(strip_tags(get_the_content()), 8); ?>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="d-flex mt-2 justify-content-between align-items-center py-1 px-2 border-bottom border-top text-muted bg-light mb-3">
                                <div>
                                    <small>
                                        Posted by : <?php echo get_the_author(); ?>
                                    </small>
                                    <small class="ms-2">
                                        <?php echo get_the_date(); ?>
                                    </small>
                                    <?php $gettags = get_the_tags(get_the_ID()); ?>
                                    <?php if ($gettags) : ?>
                                        <small class="ms-2">
                                            Tags :
                                            <?php foreach ($gettags as $index => $tag) : ?>
                                                <?php echo $index === 0 ? '' : ','; ?>
                                                <a href="<?php echo get_tag_link($tag->term_id); ?>"> <?php echo $tag->name; ?> </a>
                                                <?php if ($index > 1) {
                                                    break;
                                                } ?>
                                            <?php endforeach; ?>
                                        </small>
                                    <?php endif; ?>
                                </div>
                                <div class="d-none d-md-inline-block">
                                    <a class="btn btn-sm btn-light border shadow-sm" style="--bs-btn-font-size: .65rem;" href="<?php echo get_the_permalink(); ?>#respond">
                                        <?php echo get_comments_number() == 0 ? 'Reply' : get_comments_number() . ' comments'; ?>
                                    </a>
                                </div>
                            </div>

                        </article>

                <?php

                        if ($postcount == 1) :
                            echo '<div class="mb-3">';
                                get_berita_iklan('iklan_archive');
                            echo '</div>';
                        endif;
                        if ($postcount == 8) :
                            echo '<div class="mb-3">';
                                get_berita_iklan('iklan_archive_2');
                            echo '</div>';
                        endif;

                        $postcount++;
                    }
                } else {
                    get_template_part('loop-templates/content', 'none');
                }
                ?>
                <!-- Display the pagination component. -->
                <?php justg_pagination(); ?>

            </main><!-- #main -->

            <!-- Do the right sidebar check. -->
            <?php do_action('justg_after_content'); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
