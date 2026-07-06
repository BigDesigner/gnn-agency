/**
 * GNN - Agency Theme Javascript
 *
 * Handles animations, responsive navbar toggles, and interactivity.
 */
document.addEventListener('DOMContentLoaded', function() {
  // Mobile Navigation Menu Toggle Handler
  var mobileMenuButton = document.getElementById('mobile-menu-button');
  var navMenu = document.querySelector('header nav');
  if (mobileMenuButton && navMenu) {
    mobileMenuButton.addEventListener('click', function() {
      navMenu.classList.toggle('hidden');
      navMenu.classList.toggle('flex');
    });
  }
});
