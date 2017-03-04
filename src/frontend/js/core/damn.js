import ko from 'knockout';
import request from 'request-promise';

require('bootstrap');
require('bootstrap-material-design');

export default class Damn {
	constructor() {
		this.apiVersion = 'v0.1';
		this.apiOrigin = window.location.origin;
		this.apiUrl = `${this.apiOrigin}/api/${this.apiVersion}`;
		
		this.request = {
			get: (url, params = {}) => {
				return request({
					uri: this.apiUrl + url,
					qs: params,
					json: true
				});
			},
			post: (url, params = {}) => {
				return request({
					method: 'POST',
					uri: this.apiUrl + url,
					body: params,
					json: true
				});
			},
			put: (url, params = {}) => {
				return request({
					method: 'PUT',
					uri: this.apiUrl + url,
					body: params,
					json: true
				});
			},
			delete: (url, params = {}) => {
				return request({
					method: 'DELETE',
					uri: this.apiUrl + url,
					body: params,
					json: true
				});
			}
		};
		
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
			loadViewModel: (name, viewModelConstructor, callback) => {
				callback((params) => {
					params.app = this;

					return new viewModelConstructor(params);
				});
			}
		});
	}
}