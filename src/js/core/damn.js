import ko from 'knockout';

require('bootstrap');
require('bootstrap-material-design');

export default class Damn {
	constructor() {
		this.initKoLoaders();
	}

	/**
	 * Run the application.
	 * 
	 * @param {Node} koRootNode
	 */
	run(koRootNode = null) {
		ko.applyBindings({ app: this }, koRootNode);
	}

	/**
	 * Initialize custom component loader.
	 */
	initKoLoaders() {
		ko.components.getComponentNameForNode = function (node) {
			const tagNameLower = node.tagName && node.tagName.toLowerCase();
			const prefix = 'damn-';
			
			if (ko.components.isRegistered(tagNameLower)) {
				return tagNameLower;
			}
			else if (tagNameLower.substr(0, prefix.length) === prefix) {
				return tagNameLower;
			}
			else {
				return null;
			}
		};

		ko.components.loaders.unshift({
			getConfig: function (name, callback) {
				const 
					pathParts = name.split('-').slice(1),
					componentName = pathParts[pathParts.length - 1],
					path = pathParts.join('/');

				const 
					viewModel = require(`@component/${path}/${componentName}.js`).default,
					template = require(`@component/${path}/${componentName}.html`);

				callback({ viewModel, template });
			},
			loadViewModel: function (name, viewModelConstructor, callback) {
				callback(function (params) {
					params.app = this;

					return new viewModelConstructor(params);
				});
			}
		});
	}
}