module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js"
    ],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#ffffff',
            black: '#000000',
            gray: {
                50: '#F8F9FB',
                100: '#F8F9FB',
                200: '#E6E6E6',
                300: '#E0E0E0',
                350: '#A3A3A3',
                400: '#666666'
            },
            blue: {
                200: '#80A5B4',
                400: '#244A53'
            },
            primary: {
                50: '#fdf2f8',
                100: '#fce7f3',
                200: '#fbcfe8',
                300: '#f9a8d4',
                400: '#f472b6',
                500: '#ec4899',
                600: '#db2777',
                700: '#be185d',
                800: '#9d174d',
                900: '#831843',
            },
            red: {
                50: '#fef2f2',
                100: '#fee2e2',
                200: '#fecaca',
                300: '#fca5a5',
                400: '#f87171',
                500: '#ef4444',
                600: '#dc2626',
                700: '#b91c1c',
                800: '#991b1b',
                900: '#7f1d1d'
            },
            green: {
                50: '#f0fdf4',
                100: '#dcfce7',
                200: '#bbf7d0',
                300: '#86efac',
                400: '#4ade80',
                500: '#22c55e',
                600: '#16a34a',
                700: '#15803d',
                800: '#166534',
                900: '#14532d'
            },
            orange: {
                400: '#C07606'
            }
        },
        borderRadius: {
            'none': '0',
            'sm': '5px',
            DEFAULT: '10px',
            'lg': '15px',
            'full': '9999px'
        },
        boxShadow: {
            DEFAULT: '0px 1px 4px rgba(0, 0, 0, 0.25)'
        },
        fontFamily: {
            'sans': ['Montserrat', 'system-ui', 'sans-serif'],
        },
        extend: {
            spacing: {
                '30': '30px',
            }
        },
    },
    safelist: [
        'rounded',
        'rounded-sm',
        'rounded-lg',
        'px-2.5',
        'py-1.5',
        'py-2',
        'py-3',
        'ml-2',
        'mr-2',
        'mx-1',
        'my-2',
        'pl-2',
        'pr-12',
        'underline',
        'border',
        'border-b-2',
        'border-transparent',
        'border-blue-400',
        'hover:border-gray-300',
        'inline-flex',
        'bg-red-400',
        'text-red-400',
        'opacity-90',
        'text-white',
        'hover:text-white',
        'text-xs',
        'text-sm',
        'text-lg',
        'text-xl',
        'leading-4',
        'leading-5',
        'leading-6',
        'leading-7',
        'opacity-50',
        'opacity-90',
        'cursor-not-allowed',
        'cursor-pointer',
        'max-h-64',
        'right-2',
        'top-6',
        'top-4',
        'flex-wrap',
        {
            pattern: /bg-(primary|secondary|white|gray|red|green)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['lg', 'hover', 'focus', 'lg:hover'],
        },
        {
            pattern: /text-(primary|red|green)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['lg', 'hover', 'focus', 'lg:hover'],
        },
        {
            pattern: /ring-(primary|secondary)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['lg', 'hover', 'focus', 'lg:hover'],
        },
    ]
}

