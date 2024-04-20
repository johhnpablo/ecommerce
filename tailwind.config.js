/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        'bg-blue-100',
        'bg-blue-200',
        'bg-blue-300',
        'bg-blue-400',
        'bg-blue-500',
        'bg-blue-600',
        'bg-blue-700',
        'bg-blue-800',
        'bg-blue-900',

    ],
  theme: {
    extend: {
        colors: {
            blue: {
                base: '#7988FD',
                100: '#E4E8FE',
                200: '#B1BFE4',
                300: '#C9D1FE',
                400: '#9AA6FD',
                500: '#7988FD',
                600: '#5865D9',
                700: '#3C47B6',
                800: '#262F92',
                900: '#171D79',
            },
        },
        fontSize: {
                "title-1": ['68px', '74px'],
                "title-2": ['48px', '62px'],
                "title-3": ['36px', '46.8px'],
                "title-4": ['28px', '36.4px'],
                "title-5": ['16px', '20.8px'],
        },
        boxShadow: {
            hard: '0px 2px 4px rgba(0, 0, 0, 0.16)',
            regular: '0px 4px 23px rgba(0, 0, 0, 0.12)',
            medium: '0px 4px 22px rgba(0, 0, 0, 0.06)',
            big: '1px 5px 22px 4px rgba(0, 0, 0, 0.15)',
            card: '0px 7px 20px rgba(0, 0, 0, 0.08)',
            badge: '0px 2px 8px rgba(0, 0, 0, 0.16) , 0px 20px 32px rgba(0, 0, 0, 0.24)',

        }
    },
  },
  plugins: [],
}

