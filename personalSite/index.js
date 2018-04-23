//Function grab random title text.
function getTitle(){
	//Random quotes array.
		var quotes = [
			'love coding in JavaScript!',
			'have an eye for CSS!',
			'enjoy coding',
			'really wish that this would work!',
			'できます！ means it works!'
		];

		//Generate random number, and then pass that to the quote var.
		var getQuote = [Math.floor(Math.random() * quotes.length)];
		var	randomQuote = quotes[getQuote];

		//Output
		document.getElementById("title-output").innerHTML = "Hello, my name is Simon and I "+randomQuote+"";
};

//Load function on pade load.
window.onload = getTitle;
