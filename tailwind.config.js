/** @type {import('tailwindcss').Config} */
module.exports = {
	important: true,
  content: ["./templates/**/*.{php,js}","./api/*.{php,js}"],
    theme: {
    screens: {
      'xlg': {'max': '1366px'},
      // => @media (max-width: 1366px) { ... }

      'lg': {'max': '1024px'},
      // => @media (max-width: 1024px) { ... }

      'md': {'max': '800px'},
      // => @media (max-width: 800px) { ... }

      'sm': {'max': '640px'},
      // => @media (max-width: 640px) { ... }

      'xsm': {'max': '480px'},
      // => @media (max-width: 480px) { ... }
    }
  },
 plugins: [
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/forms'),
  ],
}
// npx tailwindcss -i ./assets/css/tailwind.css -o ./assets/css/output.css --watch