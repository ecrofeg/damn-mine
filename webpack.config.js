const path = require('path');
const webpack = require('webpack');

const config = {
	watch: true,
	entry: './src/damn-mine.js',
	output: {
		path: path.resolve(__dirname, 'public/dist'),
		filename: 'damn-mine.js'
	},
	resolve: {
		modules: [
			path.join(__dirname, 'src'),
			'node_modules'
		],
		extensions: ['.js']
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				loader: 'babel-loader',
				options: {
					presets: 'es2015'
				}
			}
		]
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: 'jquery',
			jQuery: 'jquery',
			'window.jQuery': 'jquery'
		})
	]
};

module.exports = config;