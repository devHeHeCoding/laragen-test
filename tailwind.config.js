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
            indigo: {
                100: '#4F46E50D',
                400: '#4F46E5'
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
    }
}

