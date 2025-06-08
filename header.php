<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>CausalFunnel</title>

   <!-- Tailwind CSS CDN -->
   <script src="https://cdn.tailwindcss.com"></script>
   <script>
      tailwind.config = {
         theme: {
            extend: {
               fontFamily: {
                  poppins: ["Poppins", "sans-serif"],
                  roboto: ["Roboto", "sans-serif"],
               },
            },
         },
      };
   </script>

   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet" />

   <?php wp_head(); ?>
</head>

<body class="font-sans text-gray-800">
   <!-- Header/Navbar -->
   <header
      class="w-full max-w-[1349px] mx-auto px-3 sm:px-4 md:px-6 lg:px-12 xl:px-[86px] py-3 sm:py-4 md:py-5 lg:py-[28px] flex items-center justify-between relative">
      <!-- Logo -->
      <div class="flex items-center space-x-2">
         <a href="/">
            <img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
               alt="CausalFunnel Logo"
               class="h-6 xs:h-7 sm:h-8 md:h-9 lg:h-10" />
         </a>
      </div>

      <!-- Mobile menu button -->
      <button
         id="mobileMenuButton"
         class="md:hidden text-gray-600 hover:text-gray-900 p-1 rounded-md transition-colors duration-200">
         <svg
            class="w-5 h-5 sm:w-6 sm:h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24">
            <path
               stroke-linecap="round"
               stroke-linejoin="round"
               stroke-width="2"
               d="M4 6h16M4 12h16M4 18h16"></path>
         </svg>
      </button>

      <!-- Navigation links -->
      <nav
         class="hidden md:flex space-x-3 lg:space-x-6 xl:space-x-8 font-medium text-black font-roboto items-center">
         <a href="#platform" class="text-xs md:text-sm lg:text-sm py-2 hover:text-gray-600 transition-colors duration-200">PLATFORM</a>
         <a href="#company" class="text-xs md:text-sm lg:text-sm py-2 hover:text-gray-600 transition-colors duration-200">COMPANY</a>
         <a href="/blog" class="text-xs md:text-sm lg:text-sm py-2 hover:text-gray-600 transition-colors duration-200">BLOG</a>
         <a
            href="#"
            class="bg-[#0F3267] hover:bg-[#0F3267]/90 text-white text-xs md:text-sm lg:text-sm rounded-lg font-medium px-2 md:px-3 lg:px-4 xl:px-5 py-1.5 md:py-2 whitespace-nowrap transition-colors duration-200">
            FREE TRIAL
         </a>
      </nav>

      <!-- Mobile menu -->
      <div
         id="mobileMenu"
         class="hidden absolute top-full left-0 right-0 bg-white shadow-lg border-t md:hidden z-50 mx-3 sm:mx-4 rounded-b-lg mt-1">
         <nav
            class="flex flex-col space-y-1 sm:space-y-2 p-3 sm:p-4 font-medium text-black font-roboto">
            <a href="#platform" class="text-xs sm:text-sm py-2 px-2 rounded-md hover:bg-gray-50 transition-colors duration-200">PLATFORM</a>
            <a href="#company" class="text-xs sm:text-sm py-2 px-2 rounded-md hover:bg-gray-50 transition-colors duration-200">COMPANY</a>
            <a href="/blog" class="text-xs sm:text-sm py-2 px-2 rounded-md hover:bg-gray-50 transition-colors duration-200">BLOG</a>
            <a
               href="#"
               class="bg-[#0F3267] hover:bg-[#0F3267]/90 text-white text-xs sm:text-sm rounded-lg font-medium px-4 sm:px-5 py-2 text-center mt-2 transition-colors duration-200">
               FREE TRIAL
            </a>
         </nav>
      </div>
   </header>
