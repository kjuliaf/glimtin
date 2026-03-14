import HeroImage from "../assets/images/event/event-hero.jpeg"
import ClearStreetLogo from "../assets/images/clearstreet.svg"
import MartinsonsLogo from "../assets/images/martinsons.png"

function Hero() {
	return (
		<section className="section-padding-x flex items-center sm:block">
			<div className="mx-auto my-8 flex flex-col justify-between gap-6 sm:my-2 sm:flex-row sm:items-center sm:gap-2 md:gap-4 lg:max-w-320 lg:gap-14">
				<div className="max-w-90 sm:min-w-90 md:max-w-130 md:min-w-110 lg:min-w-122">
					<h1 className="text-[2.75em] md:text-6xl lg:text-7xl">
						Event
					</h1>
					<div className="sm:max-w-80 md:max-w-100 lg:max-w-none">
						<p className="mt-3 text-base lg:text-lg">
							Glimtin stöttar framtidens teknikkompetens för en
							mer jämställd teknikbransch. Genom interaktiva
							events, praktiska workshops och inspirerande
							presentationer ger vi en inblick i vad ingenjörer
							faktiskt gör.
						</p>
						<div className="hidden sm:block">
							<hr className="text-primary mt-6 opacity-50 md:mt-8 lg:mt-10" />
							<h2 className="section-heading-size-sm mt-6 md:mt-7 lg:mt-8">
								De som gör detta möjligt ♡
							</h2>
							<div className="mt-4 flex gap-2 lg:mt-5">
								<img
									src={ClearStreetLogo}
									alt="Clear Street"
									className="max-w-40"
								/>
								<img
									src={MartinsonsLogo}
									alt="Martinsons"
									className="max-w-40"
								/>
							</div>
						</div>
					</div>
				</div>
				<div className="flex max-w-110 flex-col justify-center sm:h-150 md:max-w-120">
					<img
						src={HeroImage}
						alt="Glimtin-teamet"
						className="img-rounded sm:aspect-11/12 sm:max-h-150 sm:object-cover md:mt-0"
					/>
					<div className="sm:hidden">
						<hr className="text-primary mt-8 opacity-50" />

						<h2 className="section-heading-size-sm mt-4">
							De som gör detta möjligt ♡
						</h2>
						<div className="mt-3 flex gap-2">
							<img
								src={ClearStreetLogo}
								alt="Clear Street"
								className="max-w-40"
							/>
							<img
								src={MartinsonsLogo}
								alt="Martinsons"
								className="max-w-40"
							/>
						</div>
					</div>
				</div>
			</div>
		</section>
	)
}

export default Hero
