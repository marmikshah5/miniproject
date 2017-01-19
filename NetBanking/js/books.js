/**
 * @author root
 */
function BooksModel(){
	this.title=ko.observable("100 shades of gray");
	this.pages=ko.observable(0);
	this.price=ko.observable(0.0);
	this.books=ko.observableArray([]);
	
	this.onSave =function(){
		alert(this.title() + "\n" + this.pages() + "\n" + this.price());
		
		//whenever calling function on observable array, do not use() syntax
		this.books.push({
			title:this.title(),
			pages:this.pages(),
			price:this.price()
		});
		
		this.title("");
		this.pages(0);
		this.price(0.0);
	};
}

ko.applyBindings(new BooksModel());//it will apply view model to the view applied if knockout file is there
