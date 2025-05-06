document.addEventListener("DOMContentLoaded", function () {
	const eventCards = document.querySelectorAll(".event_card");
    
	eventCards.forEach((card) => {
	    card.addEventListener("click", function (e) {
		e.stopPropagation(); // Stoppar klicket från att nå dokumentet
		// Stäng andra kort
		eventCards.forEach((otherCard) => {
		    if (otherCard !== card) {
			otherCard.classList.remove("active");
		    }
		});
    
		// Växla aktiv klass
		card.classList.toggle("active");
	    });
	});
    
	// Klick utanför kort => stäng alla kort
	document.addEventListener("click", function (e) {
	    // Om klicket är på ett kort, gör ingenting
	    if (!e.target.closest('.event_card')) {
		eventCards.forEach((card) => {
		    card.classList.remove("active");
		});
	    }
	});
    });
    