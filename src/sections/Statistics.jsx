import Lightbulb from "../assets/icons/lightbulb.svg"
import Spark from "../assets/icons/spark.svg"
import Handshake from "../assets/icons/handshake.svg"

function Statistics() {
	return (
		<section className="section-padding-x section-padding-y-lg section-center bg-background-medium">
			<div className="section-wrapper">
				<h2 className="section-heading-size">
					Ett arbete för att främja jämställdhet
				</h2>
				<p className="mt-7">
					I dagsläget utgör kvinnor ca 32 % av techbranschen. Ny
					rapporter och forskning visar på en långsamt uppåtgående
					kurva. Trots satsningen på kvinnor i tech är det inte mycket
					som har förändrats senaste decenniet.{" "}
					{/* <span className="text-primary text-sm">
						Källa:{" "}
						<a className="underline" href="">
							Teknikföretagen
						</a>
					</span> */}
				</p>
				<h3 className="mt-10 text-xl md:text-2xl">
					Men varför är det så viktigt med jämställdhet inom
					teknikbranschen?
				</h3>
				<div className="mt-7 flex flex-col gap-4 lg:flex-row">
					<div className="bg-accent-light card">
						<img className="w-7" src={Lightbulb} alt="Glödlampa" />
						<h3 className="!text-accent-dark text-xl">
							En förutsättning för innovation
						</h3>
						<p className="">
							Utöver frågan om inkludering och rättvisa, ger en
							diversifierad team förutsättningar till utveckling
							och innovation. En jämställd bransch är en
							strategisk fördel för alla.
						</p>
					</div>
					<div className="bg-primary-dark card">
						<img className="w-9" src={Spark} alt="Gnista" />
						<h3 className="!text-secondary-light text-xl">
							Bidrar till en hälsosam dynamik
						</h3>
						<p className="text-neutral-000">
							Fler kvinnor på arbetsplatsen bidrar till en mer
							hälsosam dynamik, vilket i sin tur leder till att
							fler mår bra på jobbet. Kvinnor i team ger även
							bredare perspektiv som tillgodoser fler behov i
							marknaden.
						</p>
					</div>
					<div className="bg-secondary-light card">
						<img className="w-9" src={Handshake} alt="Handslag" />
						<h3 className="!text-primary-dark text-xl">
							Minskar könsklyftor
						</h3>
						<p className="">
							Med fler kvinnor i teknikbranschen kan vi
							tillsammans jobba mot att bryta ohälsosamma normer
							och minska könsklyftan på arbetsplatsen!
						</p>
					</div>
				</div>
			</div>
		</section>
	)
}

export default Statistics
