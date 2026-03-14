import { useEffect, useMemo, useState } from "react"
import Slider from "react-slick"
import EventImg1 from "./../../assets/images/event/event1.jpeg"
import EventImg2 from "./../../assets/images/event/event2.jpeg"
import EventImg3 from "./../../assets/images/event/event3.jpeg"
import EventImg4 from "./../../assets/images/event/event4.jpeg"
import EventImg5 from "./../../assets/images/event/event5.jpeg"
import EventImg6 from "./../../assets/images/event/event6.jpg"
import EventImg7 from "./../../assets/images/event/event7.jpeg"
import EventImg8 from "./../../assets/images/event/event8.jpeg"
import EventImg9 from "./../../assets/images/event/event9.jpeg"
import EventImg10 from "./../../assets/images/event/event10.jpeg"
import EventImg11 from "./../../assets/images/event/event11.jpeg"
import EventImg12 from "./../../assets/images/event/event12.jpeg"
import EventImg13 from "./../../assets/images/event/event13.jpeg"
import EventImg14 from "./../../assets/images/event/event14.jpeg"
import EventImg15 from "./../../assets/images/event/event15.jpeg"

function useMediaQuery(query) {
	const get = () =>
		typeof window !== "undefined" ? window.matchMedia(query).matches : false
	const [matches, setMatches] = useState(get)

	useEffect(() => {
		const mql = window.matchMedia(query)
		const onChange = () => setMatches(mql.matches)

		setMatches(mql.matches)

		if (mql.addEventListener) mql.addEventListener("change", onChange)
		else mql.addListener(onChange)

		return () => {
			if (mql.removeEventListener)
				mql.removeEventListener("change", onChange)
			else mql.removeListener(onChange)
		}
	}, [query])

	return matches
}

const eventImages = [
	{"src": EventImg1, "alt": "Glimtingänget presenterar"},
	{"src": EventImg2, "alt": "Interaktion med robot"},
	{"src": EventImg3, "alt": "Johanna presenterar"},
	{"src": EventImg4, "alt": "Lyko goodiebags"},
	{"src": EventImg5, "alt": "Mingelbingo"},
	{"src": EventImg6, "alt": "Johanna och Leia från Glimtin"},
	{"src": EventImg7, "alt": "Martinsons presenterar"},
	{"src": EventImg8, "alt": "Glimtin och Robot Girls robot"},
	{"src": EventImg9, "alt": "Goodiebags delas ut"},
	{"src": EventImg10, "alt": "Glimtin event lokal"},
	{"src": EventImg11, "alt": "Pizzabuffé"},
	{"src": EventImg12, "alt": "Fanta"},
	{"src": EventImg13, "alt": "Johanna presenterar"},
	{"src": EventImg14, "alt": "Dragonskolan presenterar"},
	{"src": EventImg15, "alt": "Glimtin event robot"},
]

function ImageCarousel() {
	const isDesktop = useMediaQuery("(min-width: 1024px)")

	const settings = useMemo(() => {
		return {
			dots: true,
			infinite: false,
			speed: 500,
			slidesToShow: isDesktop ? 2 : 1,
			slidesToScroll: 1,
			arrows: isDesktop,
		}
	}, [isDesktop])

	return (
		<div className="section-restrict w-full">
			<Slider key={isDesktop ? "desktop" : "mobile"} {...settings}>
				{eventImages.map((image, i) => (
					<div key={i} className="w-full h-100 overflow-hidden">
						<img
							src={image.src}
							alt={image.alt}
							className="w-full h-full object-cover"
						/>
					</div>
				))}
			</Slider>
		</div>
	)
}

export default ImageCarousel
