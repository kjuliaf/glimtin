import Header from "./components/Header"
import { Analytics } from "@vercel/analytics/react"
import { BrowserRouter, Routes, Route } from "react-router-dom"
import Home from "./pages/Home"
import Event from "./pages/Event"

function App() {
	return (
		<>
			<BrowserRouter>
				<Header />
				<Routes>
					<Route path="/" element={<Home />} />
					<Route path="/event" element={<Event />} />
				</Routes>
				<Analytics />
			</BrowserRouter>
		</>
	)
}

export default App
