// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {

			colors: {
				"deep-black": "#272727",
				"light-white": "#DCD7D2",
				"light-overlay": "#c2aeb1",
				"deep-overlay-black": "#2a2a2a",
				"bg-overlay": "#dedfb0",
				"header-dark-overlay": "#E8C333",
				"contact-dark-overlay": "#837875",

             },


			fontFamily: {
				"libre-baskerville": ['Libre Baskerville', "serif"],
				"Antonio": ['Antonio', "sans-serif"],
				"Sohne-Bold-light": "Bold-light",
				"Sohne-Bold": "Bold",
				"migra-light": "migra",
			},

			maxWidth: {
				'8xl': '15001px',
			}
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Add Tailwind Typography.
		require('@tailwindcss/typography'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
