import AbstractComponent from '@core/component';
import Utils from '@core/utils';

export default class TasksComponent extends AbstractComponent {
	constructor(params) {
		super(params);
		
		this.tasks = Utils.rewrap(params.tasks);
	}
}