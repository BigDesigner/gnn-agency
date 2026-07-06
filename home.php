<?php get_header(); ?>

<!-- Blog Page template preserving custom feed columns -->

<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 glass-nav transition-all duration-300" id="topNav">
<div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-md w-full max-w-container-max mx-auto">
<a class="font-headline-sm text-headline-sm font-black tracking-tighter text-primary dark:text-on-primary" href="#">AGENCY.CO</a>
<!-- Desktop Nav -->
<div class="hidden md:flex items-center gap-lg ml-auto"><a class="text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary transition-colors font-body-md text-body-md" href="#">Work</a><a class="text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary transition-colors font-body-md text-body-md" href="#">Work</a><a class="text-primary dark:text-on-primary font-bold transition-colors font-body-md text-body-md" href="#">Insights</a><a class="text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary transition-colors font-body-md text-body-md" href="#">Services</a><a class="text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary transition-colors font-body-md text-body-md" href="#">About</a><a class="text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary transition-colors font-body-md text-body-md" href="#">Careers</a><a class="text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary transition-colors font-body-md text-body-md" href="#">Contact</a></div>
<!-- Actions -->
<div class="flex items-center gap-md">
<button class="hover:bg-surface-container-low dark:hover:bg-tertiary-container transition-all duration-200 p-sm rounded-full scale-95 hover:scale-100 ease-in-out">
<span class="material-symbols-outlined text-primary" data-icon="dark_mode">dark_mode</span>
</button>
<button class="md:hidden p-sm">
<span class="material-symbols-outlined text-primary">menu</span>
</button>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-grow flex flex-col">
<!-- Header Hero Canvas -->

<!-- Section A: Article Feed Grid System -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-xxl bg-background">
<div class="max-w-container-max mx-auto">
<!-- Filters/Controls Toolbar -->
<div class="flex flex-col md:flex-row justify-between items-center mb-xl pb-md border-b border-outline-variant gap-md">
<div class="flex gap-sm overflow-x-auto w-full md:w-auto pb-sm md:pb-0 hide-scrollbar">
<button class="bg-surface-container px-md py-xs font-label-md text-label-md text-primary uppercase whitespace-nowrap border border-outline-variant">All Posts</button>
<button class="bg-transparent px-md py-xs font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors uppercase whitespace-nowrap border border-transparent">Design</button>
<button class="bg-transparent px-md py-xs font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors uppercase whitespace-nowrap border border-transparent">Technology</button>
<button class="bg-transparent px-md py-xs font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors uppercase whitespace-nowrap border border-transparent">Strategy</button>
</div>
<div class="relative w-full md:w-64">
<span class="material-symbols-outlined absolute left-sm top-1/2 transform -translate-y-1/2 text-outline" data-icon="search">search</span>
<input class="w-full bg-surface border border-outline-variant py-xs pl-[40px] pr-md font-body-md text-body-md text-primary focus:outline-none focus:border-primary transition-colors" placeholder="Search articles..." type="text">
</div>
</div>
<!-- 3-Column Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Article Card 1 -->
<article class="flex flex-col bg-surface border border-outline-variant group hover:border-primary transition-colors duration-300">
<div class="w-full h-48 overflow-hidden bg-surface-container-high relative">
<div class="bg-cover bg-center w-full h-full group-hover:scale-105 transition-transform duration-500" data-alt="A minimalist architectural photograph of a brutalist concrete building under a harsh midday sun, casting sharp geometric shadows. High contrast black and white styling. Clear, structured composition." style="background-image: url('&lt;?php echo esc_url( get_template_directory_uri() ); ?&gt;/assets/images/image_4eo5n.jpg')"></div>
<div class="absolute top-sm right-sm bg-surface px-sm py-xs border border-outline-variant">
<span class="font-label-md text-label-md uppercase text-primary">Design</span>
</div>
</div>
<div class="p-lg flex flex-col flex-grow">
<div class="flex items-center gap-sm mb-sm font-label-md text-label-md text-on-surface-variant">
<span class="">Oct 12, 2024</span>
<span class="w-1 h-1 bg-outline rounded-full"></span>
<span class="">5 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-primary mb-sm line-clamp-2 group-hover:text-secondary transition-colors">
                                The Resurgence of Brutalism in Digital Interfaces
                            </h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-xl line-clamp-3 flex-grow">
                                Examining how harsh lines, high contrast, and raw structural elements are pushing back against the era of soft corporate flat design in modern web applications.
                            </p>
<!-- Meta Links -->
<div class="flex items-center justify-between pt-md border-t border-outline-variant mt-auto">
<div class="flex gap-md">
<button class="flex items-center gap-xs text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="favorite">favorite</span>
<span class="font-label-md text-label-md">124</span>
</button>
<button class="flex items-center gap-xs text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="chat_bubble">chat_bubble</span>
<span class="font-label-md text-label-md">18</span>
</button>
</div>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="share">share</span>
</button>
</div>
</div>
</article>
<!-- Article Card 2 -->
<article class="flex flex-col bg-surface border border-outline-variant group hover:border-primary transition-colors duration-300">
<div class="w-full h-48 overflow-hidden bg-surface-container-high relative">
<div class="bg-cover bg-center w-full h-full group-hover:scale-105 transition-transform duration-500" data-alt="Abstract macro photography of fiber optic cables glowing with a subtle, icy blue light against a deep black background. High technical precision, sterile and modern aesthetic." style="background-image: url('&lt;?php echo esc_url( get_template_directory_uri() ); ?&gt;/assets/images/image_uce0a.jpg')"></div>
<div class="absolute top-sm right-sm bg-surface px-sm py-xs border border-outline-variant">
<span class="font-label-md text-label-md uppercase text-primary">Technology</span>
</div>
</div>
<div class="p-lg flex flex-col flex-grow">
<div class="flex items-center gap-sm mb-sm font-label-md text-label-md text-on-surface-variant">
<span class="">Oct 08, 2024</span>
<span class="w-1 h-1 bg-outline rounded-full"></span>
<span class="">8 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-primary mb-sm line-clamp-2 group-hover:text-secondary transition-colors">
                                Optimizing State Management in Large-Scale React Applications
                            </h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-xl line-clamp-3 flex-grow">
                                A technical deep-dive into resolving prop-drilling and context fragmentation when scaling enterprise-level dashboards with complex data flows.
                            </p>
<!-- Meta Links -->
<div class="flex items-center justify-between pt-md border-t border-outline-variant mt-auto">
<div class="flex gap-md">
<button class="flex items-center gap-xs text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="favorite">favorite</span>
<span class="font-label-md text-label-md">89</span>
</button>
<button class="flex items-center gap-xs text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="chat_bubble">chat_bubble</span>
<span class="font-label-md text-label-md">42</span>
</button>
</div>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="share">share</span>
</button>
</div>
</div>
</article>
<!-- Article Card 3 -->
<article class="flex flex-col bg-surface border border-outline-variant group hover:border-primary transition-colors duration-300">
<div class="w-full h-48 overflow-hidden bg-surface-container-high relative">
<div class="bg-cover bg-center w-full h-full group-hover:scale-105 transition-transform duration-500" data-alt="A meticulously organized desk workspace seen from top-down. Monochrome palette featuring a metallic notebook, a precision pen, and sharp architectural blueprints. Clean, corporate, minimalist." style="background-image: url('&lt;?php echo esc_url( get_template_directory_uri() ); ?&gt;/assets/images/image_8vbeh.jpg')"></div>
<div class="absolute top-sm right-sm bg-surface px-sm py-xs border border-outline-variant">
<span class="font-label-md text-label-md uppercase text-primary">Strategy</span>
</div>
</div>
<div class="p-lg flex flex-col flex-grow">
<div class="flex items-center gap-sm mb-sm font-label-md text-label-md text-on-surface-variant">
<span class="">Oct 01, 2024</span>
<span class="w-1 h-1 bg-outline rounded-full"></span>
<span class="">6 min read</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-primary mb-sm line-clamp-2 group-hover:text-secondary transition-colors">
                                The Mathematical Harmony of the 8pt Grid
                            </h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-xl line-clamp-3 flex-grow">
                                Why strict adherence to spatial mathematics creates a subconscious sense of luxury and reliability in digital product design.
                            </p>
<!-- Meta Links -->
<div class="flex items-center justify-between pt-md border-t border-outline-variant mt-auto">
<div class="flex gap-md">
<button class="flex items-center gap-xs text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="favorite">favorite</span>
<span class="font-label-md text-label-md">215</span>
</button>
<button class="flex items-center gap-xs text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="chat_bubble">chat_bubble</span>
<span class="font-label-md text-label-md">31</span>
</button>
</div>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="share">share</span>
</button>
</div>
</div>
</article>
</div>
<!-- Pagination -->
<div class="mt-xl flex justify-center">
<button class="bg-transparent border border-primary text-primary px-lg py-sm font-label-md text-label-md uppercase hover:bg-primary hover:text-on-primary transition-colors">
                        Load More Articles
                    </button>
</div>
</div>
</section>
</main>
<!-- Footer -->






<?php get_footer(); ?>
