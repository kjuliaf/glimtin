import Header from "./components/Header"
import Hero from "./sections/Hero"
import About from "./sections/About"
import Background from "./sections/Background"
import Footer from "./components/Footer"
import Statistics from "./sections/Statistics"
import Companies from "./sections/Companies"
import { Analytics } from "@vercel/analytics/react"

function App() {
	return (
		<>
			<Header />
			<Hero />
			<About />
			<Background />
			<Statistics />
			<Companies />
			<Footer />
			<Analytics />
		</>
	)
}

export default App
