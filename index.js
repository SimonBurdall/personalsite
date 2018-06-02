//Function grab random title text.
function getTitle(){
	//Random quotes array.
		var quotes = [
			'I love coding in JavaScript!',
			'I have an eye for CSS!',
			'I enjoy coding',
			'I really wish that this would work!',
			'できます！ means it works!'
		];

		//Generate random number, and then pass that to the quote var.
		var getQuote = [Math.floor(Math.random() * quotes.length)];
		var	randomQuote = quotes[getQuote];

		//Output
		document.getElementById("title-output").innerHTML = "Hello, my name is Simon and "+randomQuote+"";
};

//Load function on pade load.
window.onload = getTitle;
