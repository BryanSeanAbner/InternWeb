const defaultTheme = require('tailwindcss/defaultTheme');
const forms = require('@tailwindcss/forms');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      // Advanced Font Configuration
      fontFamily: {
        sans: ['Inter', 'Figtree', ...defaultTheme.fontFamily.sans],
        poppins: ['Poppins', 'sans-serif'],
        montserrat: ['Montserrat', 'sans-serif'],
        inter: ['Inter', 'sans-serif'],
        quicksand: ['Quicksand', 'sans-serif'],
        'bitcount': ['Bitcount Prop Single', 'monospace'],
        display: ['Poppins', 'sans-serif'],
        body: ['Inter', 'sans-serif'],
      },
      
      // Advanced Color System
      colors: {
        primary: {
          50: '#eff6ff',
          100: '#dbeafe',
          200: '#bfdbfe',
          300: '#93c5fd',
          400: '#60a5fa',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
          800: '#1e40af',
          900: '#1e3a8a',
          950: '#172554',
        },
        secondary: {
          50: '#f8fafc',
          100: '#f1f5f9',
          200: '#e2e8f0',
          300: '#cbd5e1',
          400: '#94a3b8',
          500: '#64748b',
          600: '#475569',
          700: '#334155',
          800: '#1e293b',
          900: '#0f172a',
        },
        accent: {
          50: '#fdf4ff',
          100: '#fae8ff',
          200: '#f5d0fe',
          300: '#f0abfc',
          400: '#e879f9',
          500: '#d946ef',
          600: '#c026d3',
          700: '#a21caf',
          800: '#86198f',
          900: '#701a75',
        },
        success: {
          50: '#f0fdf4',
          100: '#dcfce7',
          200: '#bbf7d0',
          300: '#86efac',
          400: '#4ade80',
          500: '#22c55e',
          600: '#16a34a',
          700: '#15803d',
          800: '#166534',
          900: '#14532d',
        },
        warning: {
          50: '#fffbeb',
          100: '#fef3c7',
          200: '#fde68a',
          300: '#fcd34d',
          400: '#fbbf24',
          500: '#f59e0b',
          600: '#d97706',
          700: '#b45309',
          800: '#92400e',
          900: '#78350f',
        },
        danger: {
          50: '#fef2f2',
          100: '#fee2e2',
          200: '#fecaca',
          300: '#fca5a5',
          400: '#f87171',
          500: '#ef4444',
          600: '#dc2626',
          700: '#b91c1c',
          800: '#991b1b',
          900: '#7f1d1d',
        },
        custom: {
          'blue-700': '#1d4ed8',
          'gray-100': '#f3f4f6',
          'gray-200': '#e5e7eb',
          'nusantara': '#1d4ed8',
        }
      },
      
      // Advanced Spacing System
      spacing: {
        '18': '4.5rem',
        '88': '22rem',
        '128': '32rem',
        '144': '36rem',
        '160': '40rem',
        '200': '50rem',
        '250': '62.5rem',
      },
      
      // Advanced Border Radius
      borderRadius: {
        '4xl': '2rem',
        '5xl': '2.5rem',
        '6xl': '3rem',
      },
      
      // Advanced Box Shadows
      boxShadow: {
        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
        'glow': '0 0 20px rgba(59, 130, 246, 0.3)',
        'glow-lg': '0 0 40px rgba(59, 130, 246, 0.4)',
        'inner-soft': 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
        'card': '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
        'card-hover': '0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
        'button': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        'button-hover': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
      },
      
      // Advanced Animations & Keyframes
      keyframes: {
        'scroll-x': {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-500%)' },
        },
        'fade-in-up': {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        'fade-in-down': {
          '0%': { opacity: '0', transform: 'translateY(-20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        'fade-in-left': {
          '0%': { opacity: '0', transform: 'translateX(-20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        'fade-in-right': {
          '0%': { opacity: '0', transform: 'translateX(20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        'slide-in-left': {
          '0%': { opacity: '0', transform: 'translateX(-20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        'slide-in-right': {
          '0%': { opacity: '0', transform: 'translateX(20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        'bounce-in': {
          '0%': { transform: 'scale(0.3)', opacity: '0' },
          '50%': { transform: 'scale(1.05)' },
          '70%': { transform: 'scale(0.9)' },
          '100%': { transform: 'scale(1)', opacity: '1' },
        },
        'pulse-slow': {
          '0%, 100%': { opacity: '1' },
          '50%': { opacity: '0.5' },
        },
        'float': {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-10px)' },
        },
        'wiggle': {
          '0%, 100%': { transform: 'rotate(-3deg)' },
          '50%': { transform: 'rotate(3deg)' },
        },
        'heartbeat': {
          '0%': { transform: 'scale(1)' },
          '14%': { transform: 'scale(1.3)' },
          '28%': { transform: 'scale(1)' },
          '42%': { transform: 'scale(1.3)' },
          '70%': { transform: 'scale(1)' },
        },
        'slide-up': {
          '0%': { transform: 'translateY(100%)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        'slide-down': {
          '0%': { transform: 'translateY(-100%)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        'zoom-in': {
          '0%': { transform: 'scale(0.5)', opacity: '0' },
          '100%': { transform: 'scale(1)', opacity: '1' },
        },
        'zoom-out': {
          '0%': { transform: 'scale(1.5)', opacity: '0' },
          '100%': { transform: 'scale(1)', opacity: '1' },
        },
        'rotate-in': {
          '0%': { transform: 'rotate(-200deg)', opacity: '0' },
          '100%': { transform: 'rotate(0deg)', opacity: '1' },
        },
        'flip-in': {
          '0%': { transform: 'perspective(400px) rotateY(90deg)', opacity: '0' },
          '40%': { transform: 'perspective(400px) rotateY(-20deg)' },
          '60%': { transform: 'perspective(400px) rotateY(10deg)' },
          '80%': { transform: 'perspective(400px) rotateY(-5deg)' },
          '100%': { transform: 'perspective(400px) rotateY(0deg)', opacity: '1' },
        },
        'shake': {
          '0%, 100%': { transform: 'translateX(0)' },
          '10%, 30%, 50%, 70%, 90%': { transform: 'translateX(-10px)' },
          '20%, 40%, 60%, 80%': { transform: 'translateX(10px)' },
        },
        'tada': {
          '0%': { transform: 'scale(1)' },
          '10%, 20%': { transform: 'scale(0.9) rotate(-3deg)' },
          '30%, 50%, 70%, 90%': { transform: 'scale(1.1) rotate(3deg)' },
          '40%, 60%, 80%': { transform: 'scale(1.1) rotate(-3deg)' },
          '100%': { transform: 'scale(1) rotate(0)' },
        },
        'bounce-in-up': {
          '0%': { opacity: '0', transform: 'translateY(300px)' },
          '60%': { opacity: '1', transform: 'translateY(-20px)' },
          '80%': { transform: 'translateY(10px)' },
          '100%': { transform: 'translateY(0)' },
        },
        'bounce-in-down': {
          '0%': { opacity: '0', transform: 'translateY(-300px)' },
          '60%': { opacity: '1', transform: 'translateY(20px)' },
          '80%': { transform: 'translateY(-10px)' },
          '100%': { transform: 'translateY(0)' },
        },
        'bounce-in-left': {
          '0%': { opacity: '0', transform: 'translateX(-300px)' },
          '60%': { opacity: '1', transform: 'translateX(20px)' },
          '80%': { transform: 'translateX(-10px)' },
          '100%': { transform: 'translateX(0)' },
        },
        'bounce-in-right': {
          '0%': { opacity: '0', transform: 'translateX(300px)' },
          '60%': { opacity: '1', transform: 'translateX(-20px)' },
          '80%': { transform: 'translateX(10px)' },
          '100%': { transform: 'translateX(0)' },
        },
      },
      
      // Advanced Animation Classes
      animation: {
        'scroll-x': 'scroll-x 300s linear infinite',
        'fade-in-up': 'fade-in-up 0.8s ease-out forwards',
        'fade-in-down': 'fade-in-down 0.8s ease-out forwards',
        'fade-in-left': 'fade-in-left 0.8s ease-out forwards',
        'fade-in-right': 'fade-in-right 0.8s ease-out forwards',
        'slide-in-left': 'slide-in-left 0.8s ease-out forwards',
        'slide-in-right': 'slide-in-right 0.8s ease-out forwards',
        'bounce-in': 'bounce-in 0.6s ease-out forwards',
        'pulse-slow': 'pulse-slow 3s ease-in-out infinite',
        'float': 'float 3s ease-in-out infinite',
        'wiggle': 'wiggle 1s ease-in-out infinite',
        'heartbeat': 'heartbeat 1.5s ease-in-out infinite',
        'slide-up': 'slide-up 0.6s ease-out forwards',
        'slide-down': 'slide-down 0.6s ease-out forwards',
        'zoom-in': 'zoom-in 0.6s ease-out forwards',
        'zoom-out': 'zoom-out 0.6s ease-out forwards',
        'rotate-in': 'rotate-in 0.8s ease-out forwards',
        'flip-in': 'flip-in 0.8s ease-out forwards',
        'shake': 'shake 0.8s ease-in-out',
        'tada': 'tada 1s ease-in-out',
        'bounce-in-up': 'bounce-in-up 0.8s ease-out forwards',
        'bounce-in-down': 'bounce-in-down 0.8s ease-out forwards',
        'bounce-in-left': 'bounce-in-left 0.8s ease-out forwards',
        'bounce-in-right': 'bounce-in-right 0.8s ease-out forwards',
      },
      
      // Advanced Backdrop Blur
      backdropBlur: {
        xs: '2px',
        '4xl': '72px',
      },
      
      // Advanced Z-Index
      zIndex: {
        '60': '60',
        '70': '70',
        '80': '80',
        '90': '90',
        '100': '100',
      },
      
      // Advanced Grid
      gridTemplateColumns: {
        '13': 'repeat(13, minmax(0, 1fr))',
        '14': 'repeat(14, minmax(0, 1fr))',
        '15': 'repeat(15, minmax(0, 1fr))',
        '16': 'repeat(16, minmax(0, 1fr))',
      },
      
      // Advanced Aspect Ratios
      aspectRatio: {
        '4/3': '4 / 3',
        '3/2': '3 / 2',
        '2/3': '2 / 3',
        '9/16': '9 / 16',
        '16/9': '16 / 9',
        '21/9': '21 / 9',
      },
      
      // Advanced Typography
      fontSize: {
        'xs': ['0.75rem', { lineHeight: '1rem' }],
        'sm': ['0.875rem', { lineHeight: '1.25rem' }],
        'base': ['1rem', { lineHeight: '1.5rem' }],
        'lg': ['1.125rem', { lineHeight: '1.75rem' }],
        'xl': ['1.25rem', { lineHeight: '1.75rem' }],
        '2xl': ['1.5rem', { lineHeight: '2rem' }],
        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
        '5xl': ['3rem', { lineHeight: '1' }],
        '6xl': ['3.75rem', { lineHeight: '1' }],
        '7xl': ['4.5rem', { lineHeight: '1' }],
        '8xl': ['6rem', { lineHeight: '1' }],
        '9xl': ['8rem', { lineHeight: '1' }],
        'hero': ['clamp(2rem, 5vw, 4rem)', { lineHeight: '1.1' }],
        'display': ['clamp(3rem, 8vw, 6rem)', { lineHeight: '1' }],
      },
      
      // Advanced Line Heights
      lineHeight: {
        'extra-tight': '1.1',
        'extra-loose': '2.5',
        '12': '3rem',
        '14': '3.5rem',
        '16': '4rem',
        '18': '4.5rem',
        '20': '5rem',
      },
      
      // Advanced Letter Spacing
      letterSpacing: {
        'tighter': '-0.05em',
        'tight': '-0.025em',
        'normal': '0em',
        'wide': '0.025em',
        'wider': '0.05em',
        'widest': '0.1em',
        'extra-wide': '0.15em',
        'ultra-wide': '0.2em',
      },
      
      // Advanced Min/Max Heights
      minHeight: {
        '0': '0px',
        'full': '100%',
        'screen': '100vh',
        'screen-75': '75vh',
        'screen-50': '50vh',
        'screen-25': '25vh',
      },
      
      maxHeight: {
        '0': '0px',
        'full': '100%',
        'screen': '100vh',
        'screen-75': '75vh',
        'screen-50': '50vh',
        'screen-25': '25vh',
      },
      
      // Advanced Min/Max Widths
      minWidth: {
        '0': '0px',
        'full': '100%',
        'min': 'min-content',
        'max': 'max-content',
        'fit': 'fit-content',
      },
      
      maxWidth: {
        '0': '0px',
        'full': '100%',
        'min': 'min-content',
        'max': 'max-content',
        'fit': 'fit-content',
        'prose': '65ch',
        'screen-sm': '640px',
        'screen-md': '768px',
        'screen-lg': '1024px',
        'screen-xl': '1280px',
        'screen-2xl': '1536px',
      },
    },
  },
  plugins: [
    forms,
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    // Custom plugin untuk utilities tambahan
    function({ addUtilities, theme }) {
      const newUtilities = {
        '.text-shadow': {
          textShadow: '0 2px 4px rgba(0,0,0,0.1)',
        },
        '.text-shadow-lg': {
          textShadow: '0 4px 8px rgba(0,0,0,0.12)',
        },
        '.text-shadow-none': {
          textShadow: 'none',
        },
        '.backdrop-blur-xs': {
          backdropFilter: 'blur(2px)',
        },
        '.scrollbar-hide': {
          '-ms-overflow-style': 'none',
          'scrollbar-width': 'none',
          '&::-webkit-scrollbar': {
            display: 'none',
          },
        },
        '.scrollbar-default': {
          '&::-webkit-scrollbar': {
            width: '16px',
            height: '16px',
          },
          '&::-webkit-scrollbar-track': {
            backgroundColor: '#f1f1f1',
          },
          '&::-webkit-scrollbar-thumb': {
            backgroundColor: '#c1c1c1',
            borderRadius: '8px',
          },
          '&::-webkit-scrollbar-thumb:hover': {
            backgroundColor: '#a8a8a8',
          },
        },
      }
      addUtilities(newUtilities)
    }
  ],
}