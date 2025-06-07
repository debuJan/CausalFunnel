<?php get_header(); ?>

<!-- Hero Section -->
<section
   id="hero"
   class="w-full max-w-[1349px] mx-auto px-4 sm:px-6 md:px-8 lg:px-[86px] flex flex-row-reverse lg:flex-row items-center justify-between gap-2 md:gap-6 lg:gap-12">
   <div
      class="bg-[#E4FAFF] w-64 h-48 md:w-80 md:h-56 lg:w-[547px] lg:h-[360px] px-2 sm:px-4 md:px-6 lg:px-[34px] pt-6 md:pt-12 rounded-3xl order-2 lg:order-1">
      <h1
         class="text-sm sm:text-lg md:text-xl lg:text-3xl font-medium font-poppins text-gray-800 leading-tight mb-2 md:mb-4">
         <span class="block text-[#00265F]">
            Predicting Buying Intent In
            The Post Cookie World
         </span>
      </h1>
      <p
         class="text-gray-600 mb-2 md:mb-4 font-roboto text-xs md:text-sm md:text-base">
         Uncover The Hidden Value Of Your Anonymous Visitors With Our
         Disruptive Cookie-Less AI Technology.
      </p>
      <a
         href="#"
         class="inline-block bg-[#00265F] text-white font-roboto px-3 py-1 sm:px-4 sm:py-2 md:px-6 md:py-3 mb-16 sm:mb-20 md:mb-24 lg:mb-[133px] rounded-sm md:rounded-lg text-[11px] sm:text-sm md:text-[17px] font-medium hover:bg-blue-800 transition">
         Start Free Trial
      </a>
   </div>

   <div class="flex justify-center order-1 lg:order-2">
      <img
         src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png"
         alt="Illustration"
         class="w-36 h-28 sm:w-48 sm:h-40 md:w-64 md:h-52 lg:w-96 lg:h-80" />
   </div>
</section>

<!-- Features Row -->
<section
   id="features-row"
   class="w-full max-w-[1349px] mx-auto px-4 sm:px-6 md:px-8 lg:px-[86px] pt-8 md:pt-12">
   <div
      class="grid grid-cols-2 lg:grid-cols-5 gap-3 sm:gap-4 lg:gap-6 bg-[#fcfcfc] py-4 sm:py-6 px-3 sm:px-4 rounded-lg">
      <div class="flex items-center gap-2 sm:gap-3">
         <div class="bg-[#FF090933] rounded-full p-1.5 sm:p-2 flex-shrink-0">
            <img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/features/f1.png"
               alt="High Accuracy"
               class="w-4 h-4 sm:w-6 sm:h-6" />
         </div>
         <p
            class="text-xs sm:text-sm md:text-sm text-[#353535] font-roboto font-medium text-gray-700">
            High Accuracy Intent Prediction
         </p>
      </div>

      <div class="flex items-center gap-2 sm:gap-3">
         <div class="bg-[#B620E033] rounded-full p-1.5 sm:p-2 flex-shrink-0">
            <img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/features/f2.png"
               alt="Automated Nudges"
               class="w-4 h-4 sm:w-6 sm:h-6" />
         </div>
         <p
            class="text-xs sm:text-sm md:text-sm text-[#353535] font-roboto font-medium text-gray-700">
            Automated Personalized Nudges (Offers)
         </p>
      </div>

      <div class="hidden md:flex items-center gap-2 sm:gap-3">
         <div class="bg-[#FDD4024D] rounded-full p-1.5 sm:p-2 flex-shrink-0">
            <img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/features/f3.png"
               alt="Conversion Boost"
               class="w-4 h-4 sm:w-6 sm:h-6" />
         </div>
         <p
            class="text-xs sm:text-sm md:text-sm text-[#353535] font-roboto font-medium text-gray-700">
            Boosts Conversion By 40% On Average
         </p>
      </div>

      <div class="hidden md:flex items-center gap-2 sm:gap-3">
         <div class="bg-[#6C63FF4D] rounded-full p-1.5 sm:p-2 flex-shrink-0">
            <img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/features/f4.png"
               alt="Real-time"
               class="w-4 h-4 sm:w-6 sm:h-6" />
         </div>
         <p
            class="text-xs sm:text-sm md:text-sm text-[#353535] font-roboto font-medium text-gray-700">
            Works In Real-Time To Convert Visitors
         </p>
      </div>

      <div class="hidden lg:flex items-center gap-2 sm:gap-3">
         <div class="bg-[#00DF7233] rounded-full p-1.5 sm:p-2 flex-shrink-0">
            <img
               src="<?php echo get_template_directory_uri(); ?>/assets/images/features/f5.png"
               alt="Tested at scale"
               class="w-4 h-4 sm:w-6 sm:h-6" />
         </div>
         <p
            class="text-xs sm:text-sm md:text-sm text-[#353535] font-roboto font-medium text-gray-700">
            Tested With 200 Million+ Visitors
         </p>
      </div>
   </div>
</section>

<!-- How It Works Section -->
<section
   id="how-it-works"
   class="w-full max-w-[1349px] mx-auto px-4 sm:px-6 md:px-8 lg:px-[86px] py-8 md:py-12">
   <h2
      class="text-center text-lg sm:text-xl md:text-2xl font-semibold text-blue-900 mb-6 md:mb-8">
      How It Works?
   </h2>

   <div class="space-y-4 sm:space-y-6 lg:space-y-[22px]">
      <div class="flex justify-center lg:justify-start">
         <div
            class="relative bg-[#E4FAFF] rounded-2xl p-4 sm:p-6 lg:p-8 w-full max-w-sm sm:max-w-2xl md:max-w-3xl flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
            <div
               class="flex-1 text-center lg:text-left order-2 sm:order-1">
               <h3
                  class="text-base sm:text-lg lg:text-xl font-poppins font-medium text-gray-800 mb-2">
                  Identify Visitor
               </h3>
               <p class="text-sm font-roboto font-light text-gray-600">
                  Our ground-breaking DeepID tech is the industry's first
                  cookie-less anonymous visitor identification.
               </p>
            </div>
            <div
               class="w-6 h-6 bg-white text-lg font-normal border border-black rounded-full flex items-center justify-center shadow text-[#6C63FF] order-1 sm:order-2 flex-shrink-0">
               1
            </div>
            <div class="flex-1 order-3 flex justify-center">
               <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/steps/s1.png"
                  alt="Identify Visitor"
                  class="max-w-full h-auto max-h-32 sm:max-h-40" />
            </div>
         </div>
      </div>

      <div class="flex justify-center lg:justify-end">
         <div
            class="relative bg-[#FFDDED] rounded-2xl p-4 sm:p-6 lg:p-8 w-full max-w-sm sm:max-w-2xl md:max-w-3xl flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
            <div class="flex-1 order-1 flex justify-center">
               <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/steps/s2.png"
                  alt="Predict Intent"
                  class="max-w-full h-auto max-h-32 sm:max-h-40" />
            </div>
            <div
               class="w-6 h-6 bg-white text-[#FF0909] text-lg font-normal border border-black rounded-full flex items-center justify-center shadow order-2 flex-shrink-0">
               2
            </div>
            <div class="flex-1 text-center lg:text-left order-3 sm:order-3">
               <h3
                  class="text-base sm:text-lg lg:text-xl font-poppins font-medium text-gray-800 mb-2">
                  Predict Intent
               </h3>
               <p class="text-sm font-roboto font-light text-gray-600">
                  Our proprietary AI models predict every visitor's intent
                  to buy with great accuracy, only possible with our
                  cookie-less DeepID.
               </p>
            </div>
         </div>
      </div>

      <div class="flex justify-center lg:justify-start">
         <div
            class="relative bg-[#FFEEB0] rounded-2xl p-4 sm:p-6 lg:p-8 w-full max-w-sm sm:max-w-2xl md:max-w-3xl flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
            <div
               class="flex-1 text-center lg:text-left order-2 sm:order-1">
               <h3
                  class="text-base sm:text-lg lg:text-xl font-poppins font-medium text-gray-800 mb-2">
                  Discover Persona
               </h3>
               <p class="text-sm font-roboto font-light text-gray-600">
                  Our behavior models help you discover the visitor
                  persona, like discount buyers, convenience shoppers,
                  impulse buyers, etc.
               </p>
            </div>
            <div
               class="w-6 h-6 bg-white text-[#FDD402] text-lg font-normal border border-black rounded-full flex items-center justify-center shadow order-1 sm:order-2 flex-shrink-0">
               3
            </div>
            <div class="flex-1 order-3 flex justify-center">
               <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/steps/s3.png"
                  alt="Discover Persona"
                  class="max-w-full h-auto max-h-32 sm:max-h-40" />
            </div>
         </div>
      </div>

      <div class="flex justify-center lg:justify-end">
         <div
            class="relative bg-[#F5D0FF] rounded-2xl p-4 sm:p-6 lg:p-8 w-full max-w-sm sm:max-w-2xl md:max-w-3xl flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
            <div class="flex-1 order-1 flex justify-center">
               <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/steps/s4.png"
                  alt="Targeted Offers"
                  class="max-w-full h-auto max-h-32 sm:max-h-40" />
            </div>
            <div
               class="w-6 h-6 bg-white text-[#B620E0] text-lg font-normal border border-black rounded-full flex items-center justify-center shadow order-2 flex-shrink-0">
               4
            </div>
            <div class="flex-1 text-center lg:text-left order-3 sm:order-3">
               <h3
                  class="text-base sm:text-lg lg:text-xl font-poppins font-medium text-gray-800 mb-2">
                  Targeted Offers
               </h3>
               <p class="text-sm font-roboto font-light text-gray-600">
                  Powered with buying intent and persona we show targeted
                  offers to the visitors in real-time when they are about
                  to abandon your site and lead them to convert.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Conversion Section -->
<section
   id="conversion"
   class="relative w-full max-w-[1349px] mx-auto px-4 sm:px-6 md:px-8 lg:px-[86px] py-8 md:py-12 bg-[#FCFCFC]">
   <div
      class="flex flex-col lg:flex-row items-center justify-between gap-6 md:gap-8">
      <div class="w-full lg:w-1/2 text-center lg:text-left">
         <h2
            class="font-poppins text-xl sm:text-2xl md:text-3xl font-medium text-gray-900 mb-4 md:mb-6">
            How We Improve Your Conversion
         </h2>
         <p
            class="font-roboto font-light text-sm sm:text-base max-w-full lg:w-[469px] text-gray-600 mb-4 md:mb-6">
            CausalFunnel technology actively drives your visitors along
            the conversion funnel with persona and intent prediction
            nudges. Our technology works even if the visitor comes back
            after their cookies have been wiped (Apple clears cookies in 1
            to 7 days) and continuously boosts your conversions.
         </p>
         <button
            class="bg-[#E4FAFF] text-[#00265F] shadow px-4 sm:px-6 py-2 sm:py-3 rounded font-roboto font-medium transition">
            Start Free Trial
         </button>
      </div>

      <div class="w-full lg:w-1/2">
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/convo.png"
            alt="Conversion Graph"
            class="w-full max-w-[646px] h-auto lg:h-[291px] rounded-lg shadow mx-auto" />
      </div>
   </div>

   <div class="h-8 md:h-12 lg:h-24"></div>

   <div class="relative flex flex-wrap gap-3 sm:gap-5 justify-center z-10">
      <div
         class="w-full sm:w-[300px] md:w-[350px] lg:w-[394px] max-w-[394px] h-auto lg:h-[90px] card shadow-none bg-transparent">
         <div class="flex items-center bg-[#E4FAFF] p-3 rounded-3xl">
            <div
               class="w-[60px] sm:w-[70px] lg:w-[90px] h-12 sm:h-16 lg:h-20 bg-white rounded-[15px] flex items-center justify-center flex-shrink-0">
               <img
                  class="max-w-[50px] sm:max-w-[60px] lg:max-w-[87px] max-h-[35px] sm:max-h-[40px] lg:max-h-[46px] object-contain"
                  alt="Company logo"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs1.png" />
            </div>
            <div class="ml-3 sm:ml-4 lg:ml-6 flex-1">
               <div
                  class="font-medium text-[#212529] text-lg sm:text-lg lg:text-xl tracking-[-0.60px] font-poppins">
                  200%
               </div>
               <div
                  class="font-light text-[#212529] text-sm sm:text-sm lg:text-base tracking-[-0.48px] font-poppins">
                  Increase in conversion
               </div>
            </div>
            <img
               class="ml-auto w-[14px] sm:w-[16px] lg:w-[18px] h-[14px] sm:h-[16px] lg:h-[18px] mt-3 sm:mt-4 lg:mt-6"
               alt="Group"
               src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/arrow.png" />
         </div>
      </div>

      <div
         class="w-full sm:w-[300px] md:w-[350px] lg:w-[394px] max-w-[394px] h-auto lg:h-[90px] card shadow-none bg-transparent">
         <div class="flex items-center bg-[#FFEEB0] p-3 rounded-3xl">
            <div
               class="w-[60px] sm:w-[70px] lg:w-[90px] h-12 sm:h-16 lg:h-20 bg-white rounded-[15px] flex items-center justify-center flex-shrink-0">
               <img
                  class="max-w-[50px] sm:max-w-[60px] lg:max-w-[87px] max-h-[35px] sm:max-h-[40px] lg:max-h-[46px] object-contain"
                  alt="Company logo"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs2.png" />
            </div>
            <div class="ml-3 sm:ml-4 lg:ml-6 flex-1">
               <div
                  class="font-medium text-[#212529] text-lg sm:text-lg lg:text-xl tracking-[-0.60px] font-poppins">
                  302%
               </div>
               <div
                  class="font-light text-[#212529] text-sm sm:text-sm lg:text-base tracking-[-0.48px] font-poppins">
                  Increase in conversion
               </div>
            </div>
            <img
               class="ml-auto w-[14px] sm:w-[16px] lg:w-[18px] h-[14px] sm:h-[16px] lg:h-[18px] mt-3 sm:mt-4 lg:mt-6"
               alt="Group"
               src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/arrow.png" />
         </div>
      </div>

      <div
         class="w-full sm:w-[300px] md:w-[350px] lg:w-[394px] max-w-[394px] h-auto lg:h-[90px] card shadow-none bg-transparent">
         <div class="flex items-center bg-[#FFDDED] p-3 rounded-3xl">
            <div
               class="w-[60px] sm:w-[70px] lg:w-[90px] h-12 sm:h-16 lg:h-20 bg-white rounded-[15px] flex items-center justify-center flex-shrink-0">
               <img
                  class="max-w-[50px] sm:max-w-[60px] lg:max-w-[87px] max-h-[35px] sm:max-h-[40px] lg:max-h-[46px] object-contain"
                  alt="Company logo"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs3.png" />
            </div>
            <div class="ml-3 sm:ml-4 lg:ml-6 flex-1">
               <div
                  class="font-medium text-[#212529] text-lg sm:text-lg lg:text-xl tracking-[-0.60px] font-poppins">
                  8X
               </div>
               <div
                  class="font-light text-[#212529] text-sm sm:text-sm lg:text-base tracking-[-0.48px] font-poppins">
                  Increase in orders
               </div>
            </div>
            <img
               class="ml-auto w-[14px] sm:w-[16px] lg:w-[18px] h-[14px] sm:h-[16px] lg:h-[18px] mt-3 sm:mt-4 lg:mt-6"
               alt="Group"
               src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/arrow.png" />
         </div>
      </div>

      <div
         class="w-full sm:w-[300px] md:w-[350px] lg:w-[394px] max-w-[394px] h-auto lg:h-[90px] card shadow-none bg-transparent">
         <div class="flex items-center bg-[#F5D0FF] p-3 rounded-3xl">
            <div
               class="w-[60px] sm:w-[70px] lg:w-[90px] h-12 sm:h-16 lg:h-20 bg-white rounded-[15px] flex items-center justify-center flex-shrink-0">
               <img
                  class="max-w-[50px] sm:max-w-[60px] lg:max-w-[87px] max-h-[35px] sm:max-h-[40px] lg:max-h-[46px] object-contain"
                  alt="Company logo"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs4.png" />
            </div>
            <div class="ml-3 sm:ml-4 lg:ml-6 flex-1">
               <div
                  class="font-medium text-[#212529] text-lg sm:text-lg lg:text-xl tracking-[-0.60px] font-poppins">
                  3.8X
               </div>
               <div
                  class="font-light text-[#212529] text-sm sm:text-sm lg:text-base tracking-[-0.48px] font-poppins">
                  Increase in orders
               </div>
            </div>
            <img
               class="ml-auto w-[14px] sm:w-[16px] lg:w-[18px] h-[14px] sm:h-[16px] lg:h-[18px] mt-3 sm:mt-4 lg:mt-6"
               alt="Group"
               src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/arrow.png" />
         </div>
      </div>
   </div>

   <img
      class="absolute w-[60px] sm:w-[73px] lg:w-[85px] h-[60px] sm:h-[72px] lg:h-[84px] bottom-[350px] sm:bottom-[400px] left-[15px] sm:left-[25px] lg:top-[410px] lg:left-4 xl:left-[235px] z-0"
      alt="Titik titik"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/dots.png" />

   <img
      class="absolute w-[60px] sm:w-[73px] lg:w-[85px] h-[60px] sm:h-[72px] lg:h-[84px] lg:top-[590px] right-[15px] sm:right-[28px] bottom-[15px] sm:bottom-[25px] lg:right-[235px]"
      alt="Titik titik"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/dots.png" />
</section>

<!-- Customer Stories Section -->
<section
   id="testimonials"
   class="max-w-[1349px] mx-auto px-3 sm:px-4 md:px-6 lg:px-12 xl:px-[86px] mt-16 sm:mt-20 md:mt-24 lg:mt-[102px]">
   <div class="relative">
      <div
         class="font-medium text-[#00265F] text-[20px] sm:text-[22px] md:text-[24px] lg:text-[28px] ml-12 sm:ml-16 md:ml-32 lg:ml-[280px] xl:ml-[330px] leading-[20px] sm:leading-6 md:leading-7 lg:leading-8 mb-6 md:mb-8 lg:mb-12 font-poppins relative md:left-4 lg:left-8 lg:top-8 z-10 justify-left">
         Customer <br />
         Stories
      </div>

      <div
         class="absolute left-[80px] sm:left-[100px] md:left-[200px] lg:left-[350px] xl:left-[410px] w-[200px] sm:w-[233px] md:w-[300px] lg:w-[380px] xl:w-[450px] h-[180px] sm:h-[208px] md:h-[220px] lg:h-[260px] xl:h-[300px] bg-[url(<?php echo get_template_directory_uri(); ?>/assets/images/news/bg.png)] rounded-[20px] opacity-50 z-0 bg-contain bg-no-repeat bg-center"></div>

      <div class="relative min-h-[350px] sm:min-h-[400px] md:min-h-[450px] lg:min-h-[500px]">
         <div
            class="absolute -top-[120px] sm:-top-[140px] md:-top-[130px] lg:-top-[100px] left-[200px] sm:left-[230px] md:left-[400px] lg:left-[520px] xl:left-[600px] w-[160px] sm:w-[184px] md:w-[280px] lg:w-[420px] xl:w-[526px] static mt-8 bg-white rounded-[20px] shadow-[0px_4px_9px_#00000040] p-3 md:p-4 lg:p-6 z-10">
            <div
               class="font-medium text-[#212529] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[17px] tracking-[-0.51px] mb-2 md:mb-3 lg:mb-4 font-poppins">
               Awesome Services
            </div>
            <div
               class="font-light text-[#00255e] text-[11px] sm:text-xs md:text-[12px] lg:text-[13px] leading-[14px] sm:leading-[15px] md:leading-[18px] lg:leading-5 mb-4 md:mb-5 lg:mb-6 font-roboto">
               CausalFunnel helps us analyze millions of visitors and
               provides insights into our user behavior across sessions
               and journeys. Their DeepID product <span class="hidden md:inline"> is a game-changer to
               enhance the user experience for repeat visitors/users and
               even stitching sessions when cookies are wiped-out... </span>
            </div>
            <div class="flex items-center">
               <img
                  class="w-8 h-8 sm:w-9 sm:h-[34px] md:w-12 md:h-12 lg:w-[54px] lg:h-14 object-cover rounded-sm"
                  alt="Profile"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/stories/p1.png" />
               <div class="ml-2 md:ml-3">
                  <div
                     class="font-medium text-[#212529] text-[11px] sm:text-xs md:text-[15px] lg:text-[17px] font-poppins">
                     Rajat Agarwal
                  </div>
                  <div
                     class="font-light text-[#00255e] text-[10px] sm:text-[11px] md:text-[13px] lg:text-sm leading-[18px] sm:leading-[22px] font-roboto">
                     VP, Engineering
                  </div>
               </div>
            </div>
         </div>

         <div
            class="absolute left-[30px] sm:left-[35px] md:left-[100px] lg:left-[150px] xl:left-[180px] top-[90px] sm:top-[100px] md:top-[90px] lg:top-[80px] w-[150px] sm:w-[171px] md:w-[250px] lg:w-[300px] xl:w-[366px] bg-white rounded-[20px] shadow-[0px_4px_9px_#00000040] p-3 md:p-4 lg:p-6 z-10">
            <div
               class="font-medium text-[#212529] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[17px] tracking-[-0.51px] mb-2 md:mb-3 lg:mb-4 font-poppins">
               We have a great tool!
            </div>
            <div
               class="font-light text-[#00255e] text-[11px] sm:text-xs md:text-[12px] lg:text-[13px] leading-[14px] sm:leading-[15px] md:leading-[18px] lg:leading-5 mb-4 md:mb-5 lg:mb-6 font-roboto">
               We serve two types of persona and didn't know how many of
               our visitors classify in each of them. <span class="hidden md:inline">
                  CF's AI used the
                  visitor behavior and gave us details about how many of each
                  persona type were we getting.
               </span>
            </div>
            <div class="flex items-center">
               <img
                  class="w-8 h-8 sm:w-9 sm:h-[34px] md:w-12 md:h-12 lg:w-[54px] lg:h-14 object-cover rounded-sm"
                  alt="Profile"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/stories/p2.png" />
               <div class="ml-2 md:ml-3">
                  <div
                     class="font-medium text-[#212529] text-[11px] sm:text-xs md:text-[15px] lg:text-[17px] font-poppins">
                     Umair Tazeem
                  </div>
                  <div
                     class="font-light text-[#00255e] text-[10px] sm:text-[11px] md:text-[13px] lg:text-sm leading-[18px] sm:leading-[22px] font-roboto">
                     CEO & Co-founder
                  </div>
               </div>
            </div>
         </div>

         <div
            class="absolute top-[110px] sm:top-[120px] md:top-[200px] lg:top-[340px] lg:translate-y-[-50%] left-[200px] sm:left-[230px] md:left-[400px] lg:left-[520px] xl:left-[600px] w-[160px] sm:w-[184px] md:w-[280px] lg:w-[350px] xl:w-[435px] bg-white rounded-[20px] shadow-[0px_4px_9px_#00000040] p-3 md:p-4 lg:p-6 z-10">
            <div
               class="font-medium text-[#212529] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[17px] tracking-[-0.51px] mb-2 md:mb-3 lg:mb-4 font-poppins">
               We have a great tool!
            </div>
            <div
               class="font-light text-[#00255e] text-[11px] sm:text-xs md:text-[12px] lg:text-[13px] leading-[14px] sm:leading-[15px] md:leading-[18px] lg:leading-5 mb-4 md:mb-5 lg:mb-6 font-roboto">
               We serve two types of persona and didn't know how many of
               our visitors classify in each of them. <span class="hidden md:inline">CF's AI used the
               visitor behavior and gave us details about how many of each
               persona type were we getting. </span>
            </div>
            <div class="flex items-center">
               <img
                  class="w-8 h-8 sm:w-9 sm:h-[34px] md:w-12 md:h-12 lg:w-[54px] lg:h-14 object-cover rounded-sm"
                  alt="Profile"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/stories/p3.png" />
               <div class="ml-2 md:ml-3">
                  <div
                     class="font-medium text-[#212529] text-[11px] sm:text-xs md:text-[15px] lg:text-[17px] font-poppins">
                     Dr. Erson Religioso
                  </div>
                  <div
                     class="font-light text-[#00255e] text-[10px] sm:text-[11px] md:text-[13px] lg:text-sm leading-[18px] sm:leading-[22px] font-roboto">
                     Founder
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Company logos carousel -->
   <div
      class="flex flex-wrap justify-center items-center gap-2 sm:gap-3 md:gap-5 lg:gap-8 py-4 sm:py-6 md:py-8 lg:py-12 border-gray-200 mt-6 sm:mt-8 bg-[#fcfcfc] rounded-lg">
      <img
         class="w-[15px] h-[15px] sm:w-[18px] sm:h-[18px] md:w-[24px] md:h-[24px] lg:w-[30px] lg:h-[30px] cursor-pointer hover:opacity-70 transition-opacity"
         alt="Previous"
         src="<?php echo get_template_directory_uri(); ?>/assets/images/prev.png" />
      <div class="flex items-center gap-3 sm:gap-4 md:gap-6 lg:gap-8">
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs1.png"
            alt="California Logo"
            class="h-8 sm:h-10 md:h-12" />
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs5.png"
            alt="Fast Company"
            class="h-3 sm:h-4 md:h-6 lg:h-8" />
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs6.png"
            alt="Embold"
            class="h-5 sm:h-6 md:h-8 lg:h-10" />
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs4.png"
            alt="Edge Mobility"
            class="hidden sm:block h-10 md:h-12" />
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cs7.png"
            alt="CherishX"
            class="hidden md:block h-10 md:h-12" />
      </div>
      <img
         class="w-[15px] h-[15px] sm:w-[18px] sm:h-[18px] md:w-[24px] md:h-[24px] lg:w-[30px] lg:h-[30px] cursor-pointer hover:opacity-70 transition-opacity"
         alt="Next"
         src="<?php echo get_template_directory_uri(); ?>/assets/images/next.png" />
   </div>
</section>

<!-- News Section -->
<section id="news" class="max-w-[1349px] mx-auto py-12">
   <h2
      class="font-poppins text-[28px] text-center text-[#00265F] font-medium leading-8">
      News Latest Updates
   </h2>

   <div class="flex justify-center items-start gap-4 sm:gap-6 my-8">
      <div
         class="bg-[url(<?php echo get_template_directory_uri(); ?>/assets/images/news/bg.png)] bg-no-repeat bg-center bg-cover rounded-[12px] p-4 lg:p-6 flex flex-col justify-between w-[160px] md:w-[220px] lg:w-[304px] h-[100px] sm:h-[113px] md:h-[140px] lg:h-[175px] text-left">
         <p
            class="font-poppins text-[#212529] text-[10px] sm:text-[10px] md:text-[12px] lg:text-base font-light leading-[15px] mb-4">
            VDOSH Makes Investment in CausalFunnel
         </p>
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news1.png"
            alt="VDOSH"
            class="h-6 sm:h-7 md:h-10 lg:h-12 object-contain" />
      </div>

      <div
         class="bg-[url(<?php echo get_template_directory_uri(); ?>/assets/images/news/bg.png)] bg-no-repeat bg-center bg-cover rounded-[12px] p-4 lg:p-6 flex flex-col justify-between w-[160px] w-[220px] lg:w-[304px] h-[100px] sm:h-[113px] md:h-[140px] lg:h-[175px] text-left">
         <p
            class="font-poppins text-[#212529] text-[10px] sm:text-[10px] md:text-[12px] lg:text-base font-light leading-[15px] mb-2">
            CausalFunnel named Top 50 AI CEOs of 2021 by Technology
            Innovators Magazine.
         </p>
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news2.png"
            alt="Technology Innovators"
            class="h-6 sm:h-7 md:h-10 lg:h-12 object-contain" />
      </div>

      <div
         class="bg-[url(<?php echo get_template_directory_uri(); ?>/assets/images/news/bg.png)] bg-no-repeat bg-center bg-cover rounded-[12px] p-6 hidden md:flex flex-col justify-between w-[304px] h-[175px] text-left">
         <p
            class="font-poppins text-[#212529] text-base font-light leading-5 mb-4">
            CausalFunnel invited to the Fast Company Executive Board for
            our industry expertise.
         </p>
         <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news3.png"
            alt="Fast Company"
            class="h-12 object-contain" />
      </div>
   </div>

   <div class="flex justify-center">
      <button
         class="bg-[#00265F] text-white text-[17px] px-6 py-3 rounded-lg font-poppins font-medium transition">
         Start Free Trial
      </button>
   </div>
</section>


</body>
</html>

<?php get_footer(); ?>