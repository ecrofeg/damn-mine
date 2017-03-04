const path = require('path');
const webpack = require('webpack');

const config = {
	watch: true,
	entry: './src/frontend/damn-mine.js',
	output: {
		path: path.resolve(__dirname, 'public/dist'),
		filename: 'damn-mine.js'
	},
	resolve: {
		modules: [
			path.join(__dirname, 'src/frontend'),
			'node_modules'
		],
		extensions: ['.js'],
		alias: {
			'@core': path.resolve(__dirname, 'src/frontend/js/core'),
			'@component': path.resolve(__dirname, 'src/frontend/component')
		}
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				loader: 'babel-loader',
				options: {
					presets: 'es2015'
				}
			},
			{
				test: /\.html$/,
				loader: 'html-loader'
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