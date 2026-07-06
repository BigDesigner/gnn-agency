<?php
/*
Template Name: Full Width Page
*/
get_header(); ?>

<!-- Custom Full Width Page layout (Full-bleed) -->

<!-- TopNavBar -->

<!-- Main Content Canvas - 100% Full Width Layout -->
<main class="flex-grow w-full mt-xxl">
<!-- Hero Section - Full Width -->
<section class="w-full min-h-[80vh] flex flex-col justify-center px-margin-mobile md:px-margin-desktop py-xxl bg-surface relative overflow-hidden">
<div class="max-w-[1000px] z-10 relative">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-lg uppercase">Precision in <br>Every Pixel.</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-xl">We engineer digital experiences that redefine industry standards. High-contrast, mathematically harmonious, and uncompromisingly modern.</p>
<div class="flex gap-md">
<button class="bg-primary text-on-primary font-label-md text-label-md uppercase px-xl py-md rounded-none hover:bg-surface-container-lowest hover:text-primary border border-primary transition-colors">Explore Work</button>
<button class="bg-transparent border border-primary text-primary font-label-md text-label-md uppercase px-xl py-md rounded-none hover:bg-primary hover:text-on-primary transition-colors">Our Studio</button>
</div>
</div>
<!-- Abstract background shape suggestion -->
<div class="absolute right-0 top-0 w-1/2 h-full bg-surface-container-high opacity-50 -z-0 hidden md:block" style="clip-path: polygon(25% 0%, 100% 0, 100% 100%, 0% 100%);"></div>
</section>
<!-- Full Width Image Feature -->
<section class="w-full h-[60vh] relative">
<div class="bg-cover bg-center w-full h-full" data-alt="A striking, full-width architectural photograph of a modern, minimalist concrete building interior. The scene is illuminated by stark, high-key white lighting streaming through a massive geometric skylight. The composition is highly structured, emphasizing sharp lines, pure white surfaces, deep black shadows, and a sense of quiet luxury. No organic elements, just pure architectural precision." style="background-image: url('&lt;?php echo esc_url( get_template_directory_uri() ); ?&gt;/assets/images/image_h4gcl.jpg')"></div>
<div class="absolute inset-0 bg-primary opacity-10"></div>
</section>
<!-- Value Proposition - Full Width Grid -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-xxl bg-background">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="p-xl border border-outline-variant bg-surface hover:bg-surface-container-low transition-colors duration-300">
<span class="material-symbols-outlined text-4xl text-primary mb-md" data-icon="architecture">architecture</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-sm">Structural Integrity</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Built on a strict 8px grid system, ensuring mathematical harmony across all digital touchpoints.</p>
</div>
<div class="p-xl border border-outline-variant bg-surface hover:bg-surface-container-low transition-colors duration-300">
<span class="material-symbols-outlined text-4xl text-primary mb-md" data-icon="contrast">contrast</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-sm">High-Contrast Execution</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Prioritizing clarity through tonal layers and bold typography over decorative, superfluous elements.</p>
</div>
<div class="p-xl border border-outline-variant bg-surface hover:bg-surface-container-low transition-colors duration-300">
<span class="material-symbols-outlined text-4xl text-primary mb-md" data-icon="diamond">diamond</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-sm">Quiet Luxury</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Quality felt through the rhythm of generous whitespace and authoritative typography.</p>
</div>
</div>
</section>
<!-- Featured Project - Asymmetric Split -->
<section class="w-full flex flex-col md:flex-row border-t border-b border-outline-variant">
<div class="w-full md:w-1/2 p-margin-mobile md:p-margin-desktop flex flex-col justify-center bg-surface">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-md">Featured Project</span>
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-lg">Aetherial Systems</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-xl max-w-md">A comprehensive digital overhaul for an enterprise tech firm, focusing on streamlined workflows and minimalist interface design.</p>
<div>
<button class="bg-transparent border border-primary text-primary font-label-md text-label-md uppercase px-xl py-md rounded-none hover:bg-primary hover:text-on-primary transition-colors inline-flex items-center gap-2">
                        View Case Study <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
<div class="w-full md:w-1/2 h-[50vh] md:h-auto min-h-[500px]">
<div class="bg-cover bg-center w-full h-full" data-alt="A sleek, high-end digital dashboard interface displayed on a modern, frameless monitor in a minimalist studio environment. The interface itself is high-contrast, featuring crisp black text on a pure white background with subtle grey structural lines. The studio lighting is soft and diffused, highlighting the premium quality of the hardware and the clarity of the software design." style="background-image: url('&lt;?php echo esc_url( get_template_directory_uri() ); ?&gt;/assets/images/image_t5z94.jpg')"></div>
</div>
</section>
</main>
<!-- Footer -->






<?php get_footer(); ?>
