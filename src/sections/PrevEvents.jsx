import Bubble from "./../assets/icons/bubble.svg"
import Spark from "./../assets/icons/spark.svg"
import Lightbulb from "./../assets/icons/lightbulb-secondary.svg"
import ImageCarousel from "./../components/UI/ImageCarousel"
import Line1 from "./../assets/icons/line1.svg"

function PrevEvents() {
	return (
		<section className="section-padding-x section-padding-y-lg bg-primary-dark text-background mt-6 rounded-t-4xl sm:mt-14">
			<div className="section-wrapper section-restrict">
				<h2 className="section-heading-size text-secondary-light!">
					Tidigare event
				</h2>
				<p className="mt-7">
					Den 4:e december anordnade Glimtin ett inspirationsevent för
					unga tjejer och ickebinära från högstadiet och
					teknikprogrammet. På Väven i Umeå samlades unga tjejer,
					samarbetsföretag, beslutsfattare och skolrepresentanter på
					totalt cirka 60 personer.
				</p>
				<h3 className="text-secondary-light! section-heading-size-sm mt-10 lg:mt-12">
					Ett event fyllt med...
				</h3>
				<ul className="mt-5 flex flex-col gap-4 md:mt-6">
					<li className="flex gap-4">
						<img
							src={Bubble}
							alt="Tankebubbla"
							className="mt-1 h-6 w-6"
						/>
						Inspiration, gemenskap och framtidspepp för att bredda
						bilden av vad teknikbranschen och ingenjörsyrket kan
						vara
					</li>
					<li className="flex gap-4">
						<img
							src={Spark}
							alt="Glitter"
							className="mt-1 h-6 w-6"
						/>
						Värdefulla och upplyftande insikter genom presentationer
						av företagsrepresentater från Clear Street och
						Martinsons
					</li>
					<li className="flex gap-4">
						<img
							src={Lightbulb}
							alt="Glödlampa"
							className="mt-1 h-6 w-6"
						/>
						Aktiviteter och tävlingar med priser sponsrade av Lyko
						och Megazone
					</li>
				</ul>
			</div>

			<div className="mt-12 md:mt-14 lg:mt-16">
				<ImageCarousel />
			</div>

			<div className="mt-16 justify-center md:mt-20 lg:-mt-35 lg:flex">
				<div className="flex flex-col items-center lg:flex-row">
					<div className="flex aspect-3/2 w-90 max-w-full flex-col justify-center rounded-3xl bg-[#50467A] p-10 text-lg sm:w-105 sm:max-w-105 sm:min-w-105 sm:text-xl lg:ml-10 xl:w-140 xl:max-w-140 xl:min-w-140 xl:rounded-4xl xl:text-2xl">
						<p>
							Jag visste inte att ingenjörer kunde göra så många
							olika saker
						</p>
						<p className="mt-4 opacity-70"> - Elev</p>
					</div>
					<div className="max-w-full lg:mt-85">
						<img
							src={Line1}
							alt="Line"
							className="ml-20 w-30 md:w-55 lg:ml-0"
						/>
						<div className="flex aspect-3/2 w-90 max-w-full flex-col justify-center rounded-3xl bg-[#50467A] p-10 text-lg sm:w-105 sm:max-w-105 sm:min-w-105 sm:text-xl lg:ml-10 xl:w-140 xl:max-w-140 xl:min-w-140 xl:rounded-4xl xl:text-2xl">
							<p>
								Det här hade jag velat gå på när jag var yngre!
							</p>
							<p className="mt-4 opacity-70">
								{" "}
								- Företagsrepresentant
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	)
}

export default PrevEvents
