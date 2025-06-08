<!-- Email Signup Section -->
<section id="signup" class="mx-auto translate-y-14 z-20 relative">
   <div
      class="max-w-[328px] sm:max-w-[480px] md:max-w-[680px] lg:max-w-[992px] xl:max-w-[1200px] mx-auto flex flex-col sm:flex-row justify-between items-center gap-3 sm:gap-4 bg-white px-3 sm:px-4 lg:px-4 py-3 lg:py-3 rounded-lg shadow-[0px_4px_9px_#00000040]">
      <div
         class="font-poppins text-[#00265F] text-[11px] sm:text-[12px] md:text-[14px] lg:text-[16px] font-medium text-center sm:text-left max-w-[280px] sm:max-w-[300px] md:max-w-[340px] lg:max-w-[347px] leading-[13px] sm:leading-[14px] md:leading-[18px] lg:leading-[24px] flex justify-center items-center">
         Get Funnel Optimization Insights Delivered To Your Inbox!
      </div>
      <div
         class="flex w-full sm:w-auto md:w-auto border border-[#00265F] rounded-lg overflow-hidden min-w-[200px] sm:min-w-[220px] md:min-w-[280px]">
         <input
            type="email"
            placeholder="Enter email..."
            class="hidden sm:hidden md:hidden lg:block font-poppins w-full md:w-[280px] lg:w-[300px] px-3 md:px-4 py-2 text-[12px] md:text-[14px] text-[#00265F] focus:outline-none" />
         <button
            class="bg-[#E4FAFF] text-[#00265F] w-full lg:w-[141px] text-[10px] sm:text-xs md:text-xs lg:text-sm px-2 sm:px-3 md:px-4 lg:px-6 py-2 font-poppins font-medium transition whitespace-nowrap">
            SUBSCRIBE
         </button>
      </div>
   </div>
</section>

<!-- Footer Section -->
<footer class="w-full px-4 sm:px-8 md:px-12 lg:px-16 xl:px-[86px] py-4 pt-20 sm:pt-24 md:pt-26 lg:pt-28 bg-[#E4FAFF] relative z-10">
   <div
      class="mx-auto flex flex-col md:flex-row justify-between items-center mb-6 sm:mb-8 gap-4 sm:gap-6">
      <div class="flex w-full md:w-1/3 items-center justify-center">
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
            alt="CausalFunnel Logo"
            class="h-6 sm:h-7 md:h-8" />
      </div>
      <div class="flex w-full md:w-1/3 items-center flex-col">
         <div class="flex space-x-4 sm:space-x-6 font-poppins text-[12px] sm:text-[13px] md:text-[14px]">
            <a href="#" class="font-roboto text-sm font-normal hover:text-[#00265F] transition">Platform</a>
            <a href="#" class="font-roboto text-sm font-normal hover:text-[#00265F] transition">Company</a>
            <a href="#" class="font-roboto text-sm font-normal hover:text-[#00265F] transition">Blog</a>
         </div>
         <div class="flex space-x-2 mt-3 sm:mt-4">
            <a
               href="#"
               class="bg-white rounded-sm h-6 w-6 sm:h-7 sm:w-7 flex items-center justify-center shadow hover:shadow-md transition"><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.png"
                  alt="Facebook"
                  class="h-3 sm:h-4" /></a>
            <a
               href="#"
               class="bg-white rounded-sm h-6 w-6 sm:h-7 sm:w-7 flex items-center justify-center shadow hover:shadow-md transition"><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.png"
                  alt="Twitter"
                  class="h-3 sm:h-4" /></a>
            <a
               href="#"
               class="bg-white rounded-sm h-6 w-6 sm:h-7 sm:w-7 flex items-center justify-center shadow hover:shadow-md transition"><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/linkedin.png"
                  alt="LinkedIn"
                  class="h-3 sm:h-4" /></a>
            <a
               href="#"
               class="bg-white rounded-sm h-6 w-6 sm:h-7 sm:w-7 flex items-center justify-center shadow hover:shadow-md transition"><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/skype.png"
                  alt="Skype"
                  class="h-3 sm:h-4" /></a>
         </div>
      </div>
      <div class="hidden md:block w-1/3"></div>
   </div>
   <!-- Bottom Copyright -->
   <div
      class="font-roboto text-center text-[#00265F] text-[10px] sm:text-xs border-t pt-2 sm:pt-3">
      2025 copyrights. All Rights Reserved
   </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
<?php wp_footer(); ?>
</body>
</html>
