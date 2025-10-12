import HeroImage from "../assets/images/hero.jpg"
import Button from "../components/UI/Button"
import Arrow from "../assets/icons/arrow.svg?react"
import { Typewriter } from "react-simple-typewriter"

function Hero() {
	return (
		<section className="mx-6 flex items-center sm:mx-10 sm:block md:mx-12 lg:mx-20">
			<div className="mx-auto my-12 flex flex-col justify-between gap-6 sm:my-2 sm:flex-row sm:items-center sm:gap-2 md:gap-4 lg:max-w-320 lg:gap-14">
				<div className="max-w-90 sm:min-w-90 md:max-w-130 md:min-w-110 lg:min-w-122">
					<h1 className="text-5xl md:text-6xl lg:text-7xl">
						Från studier till
						<br />
						<span>
							<Typewriter
								words={[
									"möjligheter",
									"innovation",
									"problemlösning",
									"kreativitet",
								]}
								loop={0}
								cursor
								cursorStyle="|"
								typeSpeed={120}
								deleteSpeed={50}
								delaySpeed={1500}
							/>
						</span>
					</h1>
					<p className="mt-3 max-w-80 text-xl md:max-w-100 md:text-2xl lg:max-w-none lg:text-3xl">
						– för tjejer som vill forma framtiden med ingenjörskap
					</p>
					<Button
						className="mt-12 hidden items-end gap-1 sm:flex"
						outlined
					>
						Läs mer
						<Arrow className="mb-0.5 text-current" />
					</Button>
				</div>
				<div className="flex max-w-110 items-center justify-center sm:h-150 md:max-w-120">
					<img
						src={HeroImage}
						alt=""
						className="mt-2 rounded-2xl sm:aspect-11/12 sm:max-h-150 sm:object-cover md:mt-0"
					/>
				</div>
				<div className="mt-6 flex gap-2 sm:hidden">
					<Button className="flex items-end gap-1" outlined>
						Läs mer
						<Arrow className="mb-0.5 text-current" />
					</Button>
					<Button
						color="secondary"
						onClick={() =>
							alert("maila oss på: kontakt@glimtin.se")
						}
					>
						Kontakt
					</Button>
				</div>
			</div>
		</section>
	)
}

export default Hero
