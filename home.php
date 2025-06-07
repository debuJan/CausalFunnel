<?php get_header(); ?>

<style>
/* Custom adjustments for very small screens */
@media (max-width: 475px) {
  .mobile-reduce-gap {
    gap: 0.5rem !important;
  }
}
</style>

<!-- Hero Section -->
<section
   id="hero"
   class="w-full max-w-[1349px] mx-auto px-4 sm:px-8 md:px-10 lg:px-[86px] flex flex-row-reverse items-center justify-between gap-4 md:gap-6 lg:gap-12 py-6">
   <div
      class="bg-[#E4FAFF] w-full sm:w-64 md:w-80 lg:w-[547px] h-auto lg:h-[320px] px-4 sm:px-4 md:px-6 lg:px-[34px] py-4 lg:py-[73px] rounded-lg md:rounded-2xl lg:rounded-3xl order-2 lg:order-1">
      <h1
         class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-medium font-poppins text-gray-800 leading-tight mb-3 md:mb-4">
         Causalfunnel's Knowledge Base
      </h1>
      <p
         class="text-gray-600 mb-2 font-roboto text-sm md:text-base xl:text-base">
         Insights from our team to help you drive your sales and marketing
         strategies with cutting edge AI and ML.
      </p>
   </div>

   <div class="flex items-center justify-center w-full md:w-auto">
      <img
         class="w-[200px] h-[126px] sm:w-48 sm:h-32 md:w-60 md:h-40 lg:w-[447px] lg:h-[229px] object-contain"
         alt="Undraw blogging"
         src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-hero.png" />
   </div>
</section>

<!-- Blog Posts Section -->
<section
   class="max-w-[1349px] mx-auto px-4 sm:px-8 md:px-10 lg:px-[86px] mt-6 lg:mt-10">
   <div class="flex flex-row gap-2 sm:gap-4 md:gap-6 lg:gap-12">
      
      <div class="flex-1 min-w-0">
         <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
            <?php
               $post_count = 0;
               if (have_posts()) : while (have_posts()) : the_post();
               $post_count++;

               $bg_colors = array('#E4FAFF', '#F5D0FF', '#FFDDED', '#FFEEB0');
               $bg_color = $bg_colors[array_rand($bg_colors)];
            ?>

            <div
               class="w-full max-w-[363px] h-auto min-h-[450px] sm:min-h-[480px] md:min-h-[520px] lg:min-h-[570px] rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow cursor-pointer mx-auto"
               style="background-color: <?php echo $bg_color; ?>;">
               <div class="p-0 h-full flex flex-col">

                  <!-- Featured Image -->
                  <div class="flex-shrink-0">
                     <img
                        class="w-full h-[180px] sm:h-[195px] md:h-[210px] lg:h-[225px] mt-2.5 mx-auto rounded-t-lg object-cover px-3"
                        alt="<?php the_title_attribute(); ?>"
                        src="<?php if (has_post_thumbnail()) {
                                 the_post_thumbnail_url('medium');
                              } else {
                                 echo get_template_directory_uri() . '/assets/images/posts/default.png';
                              } ?>" />
                  </div>

                  <div class="px-[18px] pt-3 flex-1 flex flex-col">

                     <!-- Title -->
                     <h2
                        class="font-poppins font-medium text-[#212529] text-base sm:text-lg md:text-xl leading-5 sm:leading-6 hover:text-blue-600 transition-colors mb-3">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h2>

                     <!-- Author + Date -->
                     <div class="flex items-center mb-4">
                        <img
                           class="w-8 h-8 md:w-9 md:h-9 lg:w-11 lg:h-11 object-cover rounded-full flex-shrink-0"
                           alt="<?php the_author(); ?>"
                           src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size' => 96)); ?>" />
                        <div
                           class="ml-3 font-roboto font-normal text-xs sm:text-sm leading-5">
                           <span class="text-[#979797]">by</span>
                           <span class="text-[#1c1f22]"><?php the_author(); ?> |</span>
                           <span class="text-[#858585]"><?php echo get_the_date(); ?></span>
                        </div>
                     </div>

                     <!-- Tags -->
                     <div class="flex flex-wrap gap-2 mb-4">
                        <?php
                        $post_tags = get_the_tags();
                        if ($post_tags) {
                        $limited_tags = array_slice($post_tags, 0, 2);
                        foreach ($limited_tags as $tag) {
                           echo '<div class="font-roboto font-medium text-xs text-[#ff3594] px-3 py-1 bg-white rounded-full">'
                                 . esc_html($tag->name) . '</div>';
                        }
                        }
                        ?>
                     </div>

                     <!-- Excerpt + Arrow -->
                     <div class="flex-1 flex flex-col justify-between">
                        <div class="font-roboto font-light text-[#1c1f22] text-sm leading-5 mb-4 line-clamp-4 relative">
                           <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                           <img
                              src="<?php echo get_template_directory_uri(); ?>/assets/images/posts/arrow.png"
                              alt="arrow"
                              class="absolute right-0 bottom-0 w-4 h-4 lg:w-5 lg:h-5 cursor-pointer hover:scale-110 transition-transform" />
                        </div>

                        <!-- Comments -->
                        <div class="mt-auto pt-3">
                           <div class="font-roboto font-normal text-sm leading-5">
                              <span class="text-[#1c1f22]"><?php echo get_comments_number(); ?> </span>
                              <span class="text-[#858585]">Comments</span>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>

            <?php endwhile;
            else: ?>
               <p class="col-span-full text-center text-gray-500">No posts found.</p>
            <?php endif; ?>
         </div>
      </div>

      <!-- Sidebar -->
      <aside class="w-32 sm:w-48 md:w-56 lg:w-[327px] flex-shrink-0">

         <!-- Recent Posts -->
         <div class="mb-8">
            <h2 class="font-poppins font-medium text-[#212529] text-xl leading-6 mb-6">
               Recent Posts
            </h2>

            <div class="space-y-4 mobile-reduce-gap">
               <?php
               $recent_posts = wp_get_recent_posts(array(
                  'numberposts' => 5,
                  'post_status' => 'publish'
               ));

               foreach ($recent_posts as $post) : ?>

                  <div class="flex cursor-pointer hover:bg-gray-50 p-2 sm:p-3 rounded transition-colors">
                     <img
                        class="w-12 h-9 sm:w-16 sm:h-12 md:w-20 md:h-15 lg:w-[108px] lg:h-[81px] object-cover rounded flex-shrink-0"
                        alt="<?php echo esc_attr($post['post_title']); ?>"
                        src="<?php
                              if (has_post_thumbnail($post['ID'])) {
                                 echo get_the_post_thumbnail_url($post['ID'], 'thumbnail');
                              } else {
                                 echo get_template_directory_uri() . '/assets/images/posts/default.png';
                              }
                              ?>" />
                     <div class="ml-2 flex flex-col justify-center flex-1 min-w-0">
                        <p class="font-roboto font-normal text-[#1d1f22] text-[10px] sm:text-xs lg:text-[13px] leading-3 sm:leading-4 hover:text-blue-600 transition-colors">
                           <a href="<?php echo get_permalink($post['ID']); ?>">
                              <?php echo wp_trim_words($post['post_title'], 8, '...'); ?>
                           </a>
                        </p>
                        <p class="font-roboto font-normal text-[#858585] text-[9px] sm:text-xs lg:text-sm leading-4 sm:leading-5 mt-1">
                           <?php echo get_the_date('', $post['ID']); ?>
                        </p>
                     </div>
                  </div>

               <?php endforeach;
               wp_reset_query(); ?>

            </div>
         </div>

         <!-- Categories -->
         <div>
            <h2 class="font-poppins font-medium text-[#212529] text-xl leading-6 mb-4">
               Categories
            </h2>

            <div class="space-y-4">
               <?php
               $categories = get_categories(array(
                  'hide_empty' => 0
               ));

               foreach ($categories as $category) : 
                  $bg_colors = array('#E4FAFF', '#F5D0FF', '#FFDDED', '#FFEEB0');
                  $bg_color = $bg_colors[array_rand($bg_colors)];
               ?>

                  <div class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded transition-colors">
                     <div class="w-8 h-8 lg:w-[39px] lg:h-[34px] rounded flex items-center justify-center flex-shrink-0" style="background-color: <?php echo $bg_color; ?>;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/features/f1.png" alt="Category" class="w-5 h-5 lg:w-7 lg:h-7" />
                     </div>
                     <a href="<?php echo get_category_link($category->term_id); ?>" class="ml-2 font-roboto font-normal text-[#1d1f22] text-[9px] sm:text-xs md:text-sm lg:text-[15px] leading-3 sm:leading-4 hover:text-blue-600 transition-colors">
                        <?php echo esc_html($category->name); ?>
                     </a>
                  </div>

               <?php endforeach; ?>

            </div>
         </div>

      </aside>

   </div>
</section>

<?php get_footer(); ?>