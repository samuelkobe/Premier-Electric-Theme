module.exports = {
  purge: ["./**/*.php", "./**/*.css"],
  theme: {
    extend: {
      colors: {
        brand: {
          light: "#FFFFFF",
          bright: "#F5F5F6",
          grey: "#e1e1e1",
          lightgrey: "#afafaf",
          clay: "#747474",
          dark: "#202621",
          dim: "#2B332C",
          default: "#00A651",
        },
      },
      height: {
        "2px": "2px",
        "50p": "50%",
        "60p": "60%",
        "75p": "75%",
        108: "27rem",
        112: "28rem",
        128: "32rem",
        144: "36rem",
        168: "42rem",
        192: "48rem",
        224: "56rem",
        256: "64rem",
        "25vh": "25vh",
        "50vh": "50vh",
        "75vh": "75vh",
        "100vh": "100vh",
      },
      minHeight: {
        44: "11rem",
        144: "36rem",
        192: "48rem",
        256: "64rem",
        "15vh": "15vh",
        "25vh": "25vh",
        "50vh": "50vh",
      },
      opacity: {
        15: "15%",
      },
      borderWidth: {
        3: "3px",
      },
      inset: {
        "50p-center": "calc(50% - 50vh)",
        "50p": "50%",
      },
      transitionProperty: {
        width: "width",
      },
      transitionDuration: {
        0: "0ms",
        400: "400ms",
      },
      transformOrigin: {
        custom: "0.475rem",
      },
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
        title: ["Oswald", "sans-serif"],
      },
      backgroundSize: {
        "85p": "85%",
      },
      backgroundPosition: {
        "left-center-65": "65% center",
        "65-15": "65% 15%",
      },
    },
  },
  plugins: [],
};
