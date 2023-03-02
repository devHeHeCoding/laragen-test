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
                400: '#B50000'
            },
            green: {
                400: '#00951F'
            },
            orange: {
                400: '#C07606'
            }
        },
        borderRadius: {
            'none': '0',
            'sm': '5px',
            DEFAULT: '10px',
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
        'px-2.5',
        'py-1.5',
        'py-2',
        'py-3',
        'underline',
        'border',
        'border-transparent',
        'hover:border-gray-300',
        'inline-flex',
        {
            pattern: /bg-(primary|secondary|white|gray)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['lg', 'hover', 'focus', 'lg:hover'],
        },
        {
            pattern: /text-(primary)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['lg', 'hover', 'focus', 'lg:hover'],
        },
        {
            pattern: /ring-(primary|secondary)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['lg', 'hover', 'focus', 'lg:hover'],
        },
    ]
}

