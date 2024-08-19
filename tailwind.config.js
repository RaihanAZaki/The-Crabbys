export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
     "./node_modules/flowbite/**/*.js",
     'node_modules/preline/dist/*.js',
  ],
  darkMode : 'class',
  theme: {
    extend: {
      height: {
      '128': '40rem',
      },
      colors: {
        'background' :'#FEF9F2',
      },
      fontFamily: {
        customFont: ['"Libre Baskerville"', "sans-serif"],
      },
    },
  },
  plugins: [require('flowbite/plugin'), require('preline/plugin')],
  
}