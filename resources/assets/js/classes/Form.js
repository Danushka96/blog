import Errors from './Error'

class Form {
	constructor (fields) {
		this.OriginalData = fields;
		
		for (let field in fields) {
			this[field] = fields[field];
		}	

		this.errors = new Errors();
	}

	reset () {
		for (let field in this.OriginalData) {
			this[field] = '';
		}
	}

	data () {
		let data = {};

		for ( let property in this.OriginalData) {
			data[property] = this[property];
		}

		return data;
	}

	submit (method, url) {
		return new Promise((resolve, reject) => {
			axios[method](url, this.data())
				.then(response => {
					this.onSuccess(response.data);
					resolve(response.data);
				})
				.catch(error => {
					console.log(error.response.data);
					this.onFail(error.response.data);

					reject(error.response.data);
				});
			
		});
	}

	onSuccess (data) {
		// console.log(data);
		this.errors.clear();
		// this.reset();	
	}

	onFail (errors) {
		// console.log(errors);
		this.errors.record(errors);
	}
}

export default Form;
