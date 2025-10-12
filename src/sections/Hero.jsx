import HeroImage from "../assets/images/hero.jpg"
import Button from "../components/UI/Button"
import Arrow from "../assets/icons/arrow.svg?react"

function Hero() {
	return (
		<section className="mx-8 sm:mx-10 md:mx-12 lg:mx-20">
			<div className="mx-auto my-12 flex flex-col justify-between gap-6 md:my-2 md:flex-row md:items-center lg:max-w-320">
				<div className="max-w-90 md:max-w-130 md:min-w-110">
					<h1 className="text-5xl md:text-6xl lg:text-7xl">
						Från studier till möjligheter
					</h1>
					<p className="mt-3 max-w-80 text-xl md:max-w-100 md:text-2xl lg:max-w-none lg:text-3xl">
						– för tjejer som vill forma framtiden med ingenjörskap
					</p>
					<Button
						className="mt-12 hidden items-end gap-1 md:flex"
						outlined
					>
						Läs mer
						<Arrow className="mb-0.5 text-current" />
					</Button>
				</div>

				<div className="flex max-w-110 items-center justify-center md:h-150 md:max-w-120">
					<img
						src={HeroImage}
						alt=""
						className="mt-2 rounded-2xl md:mt-0 md:aspect-11/12 md:max-h-150 md:object-cover"
					/>
				</div>

				<div className="mt-6 flex gap-2 md:hidden">
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
