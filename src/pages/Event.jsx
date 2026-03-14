import Footer from "../components/Footer"
import PrevEvents from "../sections/PrevEvents"
import UpcomingEvents from "../sections/UpcomingEvents"
import EventHero from "./../sections/EventHero"

function Event() {
	return (
		<>
			<EventHero />
			<PrevEvents />
			<UpcomingEvents />
			<Footer />
		</>
	)
}

export default Event
