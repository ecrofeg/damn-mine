import ko from 'knockout';
require('bootstrap');
require('bootstrap-material-design');

export default class Damn {
	/**
	 * @param {Node} koRootNode
	 */
	constructor(koRootNode = null) {
		this.initKoLoaders();
		ko.applyBindings({ app: this }, koRootNode);

		setTimeout(() => {
			$.material.init();
		}, 10);
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
				const pathParts = name.split('-').slice(1);
				const componentName = pathParts[pathParts.length - 1];
				const path = pathParts.join('/');
				
				callback({
					viewModel: require(`../../component/${path}/${componentName}.js`).default,
					template: require(`../../component/${path}/${componentName}.html`)
				});
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