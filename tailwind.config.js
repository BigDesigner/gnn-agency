/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./assets/js/**/*.js",
    "./inc/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        // Material Design 3 Colors (used in theme templates)
        background: '#0a0a0c', // Deep black/slate dark background
        'on-background': '#f1f5f9', // Slate 100
        primary: '#14b8a6', // Teal 500
        'on-primary': '#ffffff',
        secondary: '#38bdf8', // Sky 400
        'on-secondary': '#0f172a',
        tertiary: '#1e293b', // Slate 800
        'on-tertiary': '#ffffff',
        surface: '#111118', // Very dark blue-gray
        'on-surface': '#f8fafc',
        'on-surface-variant': '#94a3b8', // Slate 400
        'surface-container-lowest': '#050508',
        'surface-container-low': '#0e0e15',
        'surface-container': '#12121c',
        'surface-container-high': '#1e1e2d',
        'surface-container-highest': '#2a2a3c',
        'inverse-surface': '#f8fafc',
        outline: '#475569',
        'outline-variant': '#1e293b',
        'on-tertiary-container': '#cbd5e1',
        'on-secondary-fixed-variant': '#38bdf8',
      },
      spacing: {
        // Custom margins/gutters
        'margin-mobile': '1rem',
        'margin-desktop': '3rem',
        'gutter': '1.5rem',
        
        // Custom space scale
        'xs': '0.25rem',   // 4px
        'sm': '0.5rem',    // 8px
        'md': '1rem',      // 16px
        'lg': '1.5rem',    // 24px
        'xl': '2rem',      // 32px
        'xxl': '4rem',     // 64px
      },
      maxWidth: {
        'container-max': '90rem', // 1440px
      },
      fontFamily: {
        // Custom font family fallbacks for standard M3 text typography
        'display-lg': ['Inter', 'sans-serif'],
        'display-lg-mobile': ['Inter', 'sans-serif'],
        'headline-lg': ['Inter', 'sans-serif'],
        'headline-md': ['Inter', 'sans-serif'],
        'headline-sm': ['Inter', 'sans-serif'],
        'body-lg': ['Inter', 'sans-serif'],
        'body-md': ['Inter', 'sans-serif'],
        'label-md': ['Inter', 'sans-serif'],
      },
      fontSize: {
        // Custom typography classes (size, line-height, font-weight)
        'display-lg': ['3.75rem', { lineHeight: '1.1', fontWeight: '800' }],
        'display-lg-mobile': ['2.25rem', { lineHeight: '1.1', fontWeight: '800' }],
        'headline-lg': ['2rem', { lineHeight: '1.2', fontWeight: '700' }],
        'headline-md': ['1.5rem', { lineHeight: '1.3', fontWeight: '600' }],
        'headline-sm': ['1.25rem', { lineHeight: '1.4', fontWeight: '600' }],
        'body-lg': ['1.125rem', { lineHeight: '1.5', fontWeight: '400' }],
        'body-md': ['1rem', { lineHeight: '1.5', fontWeight: '400' }],
        'label-md': ['0.875rem', { lineHeight: '1.4', fontWeight: '600', letterSpacing: '0.05em' }],
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/container-queries'),
  ],
}
