import CityImage from "../assets/images/city.jpeg"

function About() {
	return (
		<section>
			<div
				id="om"
				className="bg-background-medium mt-14 flex flex-col-reverse gap-2 rounded-t-4xl py-20 md:flex-row md:items-center md:gap-8 lg:gap-12"
			>
				<img
					className="m-5 aspect-3/2 max-w-120 rounded-3xl object-cover md:m-0 md:aspect-auto md:h-auto md:w-1/2 md:flex-shrink md:rounded-l-none md:rounded-r-3xl"
					src={CityImage}
					alt=""
				/>
				<div className="m-5 md:mr-10 md:max-w-180">
					<h2 className="text-3xl md:text-4xl lg:text-5xl">
						Ett nätverk där tjejer får veta mer om ingenjörsyrket
					</h2>
					<p className="mt-7">
						Glimtin öppnar dörrar för unga tjejer att upptäcka och
						utveckla sitt intresse för ingenjörsyrket. Genom ett
						stöttande nätverk får tjejer möjlighet att upptäcka och
						engagera sig i tekniska ämnen på ett inspirerande och
						praktiskt sätt.
					</p>
					<p className="mt-6">
						Här möts elever, företag och sponsorer i Umeå som alla
						är engagerade i att främja jämställdhet och mångfald
						inom ingenjörsbranschen.
					</p>
				</div>
			</div>
			<div className="bg-primary-dark p-12 px-5 text-lg md:px-12">
				<h3 className="!text-secondary-light">Vår vision</h3>
				<p className="text-neutral-000 mt-2 text-2xl md:text-3xl">
					“Att förändra bilden av teknik och göra den till en plats
					där tjejer är med och formar världen”
				</p>
			</div>
		</section>
	)
}

export default About
