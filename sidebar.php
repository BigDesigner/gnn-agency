<!-- Responsive Sidebar widgets container -->
<aside class="w-full lg:w-1/3 bg-slate-950 p-6 rounded-2xl border border-slate-800">
      <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'primary-sidebar' ); ?>
      <?php else : ?>
        <h4 class="text-base font-bold text-white mb-4">Sidebar Widget</h4>
        <p class="text-xs text-slate-400">Go to Appearance > Widgets in WordPress to populate this area.</p>
      <?php endif; ?>
    </aside>
