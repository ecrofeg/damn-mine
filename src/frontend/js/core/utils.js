import ko from 'knockout';

export default class Utils {
	static rewrap(object) {
		let result;
		
		if (object instanceof Array) {
			result = ko.observableArray(object);
		}
		else if (ko.isObservable(object) || ko.isComputed(object)) {
			result = object;
		}
		else {
			result = ko.pureComputed(() => object);
		}
		
		return result;
	}
}