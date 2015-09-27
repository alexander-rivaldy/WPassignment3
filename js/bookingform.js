// JavaScript Document
var bookingForm = document.forms["form"];

var children = [
	{display: "Monday", value: "Monday"},
	{display: "Tuesday", value: "Tuesday"},
	{display: "Wednesday", value: "Wednesday"},
	{display: "Thursday", value: "Thursday"},
	{display: "Friday", value: "Friday"},
	{display: "Saturday", value: "Saturday"},
	{display: "Sunday", value: "Sunday"},
]

var action = [
	{display: "Wednesday", value: "Wednesday"},
	{display: "Thursday", value: "Thursday"},
	{display: "Friday", value: "Friday"},
	{display: "Saturday", value: "Saturday"},
	{display: "Sunday", value: "Sunday"},
]

var artForeign = [
	{display: "Monday", value: "Monday"},
	{display: "Tuesday", value: "Tuesday"},
	{display: "Saturday", value: "Saturday"},
	{display: "Sunday", value: "Sunday"},
]

var romanticComedy = [
	{display: "Monday", value: "Monday"},
	{display: "Tuesday", value: "Tuesday"},
	{display: "Wednesday", value: "Wednesday"},
	{display: "Thursday", value: "Thursday"},
	{display: "Friday", value: "Friday"},
	{display: "Saturday", value: "Saturday"},
	{display: "Sunday", value: "Sunday"},
]

var standardPrice = [
	{category: "SA", value: 18},
	{category: "SP", value: 15},
	{category: "SC", value: 12},
	{category: "FA", value: 30},
	{category: "FC", value: 25},
	{category: "B1", value: 30},
	{category: "B2", value: 30},
	{category: "B3", value: 30},
]

var discountPrice = [
	{category: "SA", value: 12},
	{category: "SP", value: 10},
	{category: "SC", value: 8},
	{category: "FA", value: 25},
	{category: "FC", value: 20},
	{category: "B1", value: 20},
	{category: "B2", value: 20},
	{category: "B3", value: 20},
]

// function to display the days and times for each movie
function displayDay(genre) {
	var daySelection = document.getElementById("day");
	var length = daySelection.options.length;
	
	for (var j = 0; j < length; j++) {
		daySelection.remove(daySelection.j);
	}
	
	for (var i = 0; i < genre.length; i++) {
		var option = document.createElement("option");
		option.text = genre[i].display;
		option.value = genre[i].value;
		daySelection.add(option);
	}

}

// function to call when the movie selection changes
function movieChange() { 
	var movieTitle = document.getElementById("movie").value;
	var daySelection = document.getElementById("day");
	var movieTime = document.getElementById("time");
	
	switch(movieTitle) {
		case 'CH':
			displayDay(children);
			movieTime.value = "01:00 PM";
			break;
		case 'AC':
			displayDay(action);
			movieTime.value = "09:00 PM";
			break;
		case 'AF':
			displayDay(artForeign);
			movieTime.value = "06:00 PM";
			break;
		case 'RC':
			displayDay(romanticComedy);
			movieTime.value = "09:00 PM";
			break;
		default:
			daySelection.value = "";
			movieTime.value = "";
			daySelection.disabled=true;
	}
	
	daySelection.disabled=false;
	prices = standardPrice;
	resetTotal(prices);
}

// function to call when the day selection changes
function dayChange() { 
	var movieTitle = document.getElementById("movie").value;
	var movieDay = document.getElementById("day").value;
	var movieTime = document.getElementById("time");
	
	prices = standardPrice;
	resetTotal(prices);
	
	switch(movieTitle) {
		case 'CH':
			switch(movieDay) {
				case 'Monday':
				case 'Tuesday': 			
					movieTime.value = "01:00 PM";
					break;
				case 'Wednesday': 	
				case 'Thursday':
				case 'Friday':			
					movieTime.value =  "06:00 PM";
					break;
				case 'Saturday':
				case 'Sunday':
					movieTime.value = "12:00 PM";
			}
			break;
		case 'AC':
			movieTime.value =  "09:00 PM";
			break;
		case 'AF':
			switch(movieDay) {
				case 'Monday':
				case 'Tuesday': 			
					movieTime.value = "06:00 PM";
					break;
				case 'Saturday':
				case 'Sunday':
					movieTime.value =  "03:00 PM";
			}
			break;
		case 'RC':
			switch(movieDay) {
				case 'Monday':
				case 'Tuesday': 			
					movieTime.value =  "09:00 PM";
					break;
				case 'Wednesday': 	
				case 'Thursday':
				case 'Friday':			
					movieTime.value =  "01:00 PM";
					break;
				case 'Saturday':
				case 'Sunday':
					movieTime.value =  "06:00 PM";
			}
			break;
	}
	
	
}

function seatChange() { 
	var movieTitle = document.getElementById("movie").value;
	var movieDay = document.getElementById("day").value;
	var movieTime = document.getElementById("time").value;
	
	if (movieDay == "Monday" || movieDay == "Tuesday") {
		prices = discountPrice;
	} else if (movieTime == "01:00 PM") {
		prices = discountPrice;
	} else {
		prices = standardPrice;
	}

	calculateTotal(prices);
}

function calculateTotal(prices) {
	var totalPrice = 0;
	
	for (var i = 0; i < prices.length; i++) {
		var category = prices[i].category;
		var selectedAmount = document.getElementById(category).value;
		var subtotal = prices[i].value * parseInt(selectedAmount);
		document.getElementById("subtotal"+category).innerHTML = "$" + parseFloat(subtotal).toFixed(2);
		
		totalPrice += subtotal;
	}
	
	document.getElementById("price").value = "$" + parseFloat(totalPrice).toFixed(2);
}

function resetTotal(prices) {
	var totalPrice = 0;
	
	for (var i = 0; i < prices.length; i++) {
		
		var category = prices[i].category;
		document.getElementById(category).selectedIndex = 0;

		var subtotal = 0;
		document.getElementById("subtotal"+category).innerHTML = "$" + parseFloat(subtotal).toFixed(2);
		
		document.getElementById("price").value = "$" + parseFloat(totalPrice).toFixed(2);
	}
}
