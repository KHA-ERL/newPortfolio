/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {
      darkMode: "class", // instead of 'media'
      fontFamily: {
        poppins: ["Poppins"],
      },
      animation: {
        slide: "slide 0.5s ease-in-out",
        "hover-lift": "hover-lift 0.3s ease-in-out",
      },
      keyframes: {
        slide: {
          "0%": { transform: "translateX(0)" },
          "100%": { transform: "translateX(-100%)" },
        },
        "hover-lift": {
          "0%": { transform: "translateY(0)" },
          "100%": { transform: "translateY(-4px)" },
        },
      },
      transitionDuration: {
        500: "500ms",
      },
    },
  },
  plugins: [require("tailwindcss-motion")],
};
