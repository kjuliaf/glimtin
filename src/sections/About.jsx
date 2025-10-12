import CityImage from "../assets/images/city.jpeg"

function About() {
	return (
		<section className="bg-background-medium flex flex-row-reverse py-20">
			<div>
				<h2>Ett nätverk där tjejer får veta mer om ingenjörsyrket</h2>
				<p>
					Glimtin öppnar dörrar för unga tjejer att upptäcka och
					utveckla sitt intresse för ingenjörsyrket. Genom ett
					stöttande nätverk får tjejer möjlighet att upptäcka och
					engagera sig i tekniska ämnen på ett inspirerande och
					praktiskt sätt.
				</p>
				<p>
					Här möts elever, företag och sponsorer i Umeå som alla är
					engagerade i att främja jämställdhet och mångfald inom
					ingenjörsbranschen.
				</p>
			</div>
			<img src={CityImage} alt="" />
		</section>
	)
}

export default About
