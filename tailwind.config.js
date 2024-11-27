/* Pinegrow generated Design Panel Begin */

const pg_colors = {
  gray: {
    50: "#f9fafb",
    100: "#f3f4f6",
    200: "#e5e7eb",
    300: "#d1d5db",
    400: "#9ca3af",
    500: "#6b7280",
    600: "#4b5563",
    700: "#374151",
    800: "#1f2937",
    900: "#111827",
  },
  red: {
    50: "#fef2f2",
    100: "#fee2e2",
    200: "#fecaca",
    300: "#fca5a5",
    400: "#f87171",
    500: "#ef4444",
    600: "#dc2626",
    700: "#b91c1c",
    800: "#991b1b",
    900: "#7f1d1d",
  },
  yellow: {
    50: "#fffbeb",
    100: "#fef3c7",
    200: "#fde68a",
    300: "#fcd34d",
    400: "#fbbf24",
    500: "#f59e0b",
    600: "#d97706",
    700: "#b45309",
    800: "#92400e",
    900: "#78350f",
  },
  green: {
    50: "#ecfdf5",
    100: "#d1fae5",
    200: "#a7f3d0",
    300: "#6ee7b7",
    400: "#34d399",
    500: "#10b981",
    600: "#059669",
    700: "#047857",
    800: "#065f46",
    900: "#064e3b",
  },
  blue: {
    50: "#eff6ff",
    100: "#dbeafe",
    200: "#bfdbfe",
    300: "#93c5fd",
    400: "#60a5fa",
    500: "#3b82f6",
    600: "#2563eb",
    700: "#1d4ed8",
    800: "#1e40af",
    900: "#1e3a8a",
  },
  indigo: {
    50: "#eef2ff",
    100: "#e0e7ff",
    200: "#c7d2fe",
    300: "#a5b4fc",
    400: "#818cf8",
    500: "#6366f1",
    600: "#4f46e5",
    700: "#4338ca",
    800: "#3730a3",
    900: "#312e81",
  },
  purple: {
    50: "#f5f3ff",
    100: "#ede9fe",
    200: "#ddd6fe",
    300: "#c4b5fd",
    400: "#a78bfa",
    500: "#8b5cf6",
    600: "#7c3aed",
    700: "#6d28d9",
    800: "#5b21b6",
    900: "#4c1d95",
  },
  pink: {
    50: "#fdf2f8",
    100: "#fce7f3",
    200: "#fbcfe8",
    300: "#f9a8d4",
    400: "#f472b6",
    500: "#ec4899",
    600: "#db2777",
    700: "#be185d",
    800: "#9d174d",
    900: "#831843",
  },
  primary: {
    50: "#f7f0ec",
    100: "#f0d7c9",
    200: "#e8bfa6",
    300: "#dda884",
    400: "#d19163",
    500: "#c47a42",
    600: "#af6d3b",
    700: "#9b6134",
    800: "#87542e",
    900: "#744827",
  },
  secondary: {
    50: "#efeceb",
    100: "#dbc2bb",
    200: "#c4998e",
    300: "#ab7162",
    400: "#914b3a",
    500: "#742414",
    600: "#682012",
    700: "#5c1d11",
    800: "#50190f",
    900: "#45150c",
  },
  color3: {
    50: "#fcfaf6",
    100: "#f8f5eb",
    200: "#f5efe0",
    300: "#f1e9d4",
    400: "#ede4c9",
    500: "#e9debe",
    600: "#d0c7aa",
    700: "#b8b096",
    800: "#a19983",
    900: "#8a8370",
  },
  color4: {
    50: "#f4f1ee",
    100: "#e5dcd1",
    200: "#d5c8b4",
    300: "#c6b499",
    400: "#b6a07d",
    500: "#a68d63",
    600: "#947e59",
    700: "#83704e",
    800: "#736144",
    900: "#62533b",
  },
};

const pg_fonts = {
  sans: ["'Sora', sans-serif"],
  serif: ["'Overlock', sans-serif"],
};

const pg_backgrounds = {
  "design-image":
    "url('https://images.unsplash.com/photo-1461988091159-192b6df7054f?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDEyNHx8Y2FmZXxlbnwwfHx8fDE3MzI2ODA3NDd8MA&ixlib=rb-4.0.3q=85&fm=jpg&crop=faces&cs=srgb&w=1200&fit=max')",
  "design-image-large":
    "url('https://images.unsplash.com/photo-1461988091159-192b6df7054f?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDEyNHx8Y2FmZXxlbnwwfHx8fDE3MzI2ODA3NDd8MA&ixlib=rb-4.0.3q=85&fm=jpg&crop=faces&cs=srgb&w=2000&fit=max')",
};

/* Pinegrow generated Design Panel End */
/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "class",
  plugins: [],
  theme: {
    extend: {
      colors: pg_colors,
      fontFamily: pg_fonts,
      backgroundImage: pg_backgrounds,
    },
  },

  corePlugins: {
    get preflight() {
      return !process.env.WP;
    },
  },

  /* Please ensure that you update the filenames and paths to accurately match those used in your project. */
  get content() {
    let _content = [
      "./index.html",
      "./src/**/*.{html,vue,svelte,astro,js,cjs,mjs,ts,cts,mts,jsx,tsx,md,mdx}",
      "!./node_modules",
    ];
    return {
      relative: true, // IMPORTANT
      files:
        process.env.NODE_ENV === "production"
          ? _content
          : [..._content, "./_pginfo/**/*.{html,js}"], // used by Vue Desginer for live-designing during development,
    };
  },
};
