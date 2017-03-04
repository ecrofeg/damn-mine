import Damn from './js/core/damn';

const app = new Damn();

app.run(document.getElementById('root'));

setTimeout(() => {
	$.material.init();
}, 10);