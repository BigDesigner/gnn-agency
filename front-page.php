<?php get_header(); ?>

<!-- Main content grid - directly preserving original HTML full-bleed layout flow -->

<!-- TopNavBar -->

<!-- Section A: Hero Slider -->
<section class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-tertiary">
<div class="absolute inset-0 z-0">
<div class="w-full h-full bg-cover bg-center opacity-60 mix-blend-multiply" data-alt="A striking architectural interior with soaring concrete ceilings and dramatic chiaroscuro lighting. minimalist digital art installation. A sophisticated palette of deep blacks and pristine whites, punctuated by intense accents of vibrant red. High contrast, sharp execution, architectural precision." style="background-image: url('&lt;?php echo esc_url( get_template_directory_uri() ); ?&gt;/assets/images/image_yh8w1.jpg')"></div>
</div>
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col items-center gap-lg">
<span class="font-label-md text-label-md text-on-primary tracking-[0.2em] uppercase border-b border-on-primary/30 pb-xs">Strategic Execution</span>
<h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-on-primary max-w-4xl uppercase">Precision in every pixel.</h1>
<p class="font-body-lg text-body-lg text-on-primary/80 max-w-2xl mt-sm">We architect digital experiences for enterprises that demand structural integrity and uncompromising quality.</p>
<div class="mt-xl flex gap-md">
<button class="font-label-md text-label-md px-xl py-md uppercase tracking-wider bg-on-primary !text-primary border border-transparent transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] hover:!bg-transparent hover:!text-on-primary hover:!border-on-primary hover:-translate-y-1 hover:shadow-[0_8px_24px_rgba(255,255,255,0.15)] active:scale-[0.98] active:translate-y-0">View Case Studies</button>
</div>
</div>
<div class="absolute bottom-xl left-1/2 -translate-x-1/2 flex gap-md z-10">
<div class="w-12 h-1 bg-on-primary cursor-pointer transition-transform duration-300 hover:scale-y-150"></div>
<div class="w-12 h-1 bg-on-primary/30 cursor-pointer transition-all duration-300 hover:bg-on-primary/80 hover:scale-y-150"></div>
<div class="w-12 h-1 bg-on-primary/30 cursor-pointer transition-all duration-300 hover:bg-on-primary/80 hover:scale-y-150"></div>
</div>
</section>
<!-- Footer -->



<?php get_footer(); ?>
