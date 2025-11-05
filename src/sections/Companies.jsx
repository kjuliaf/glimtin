import FAQ from "../components/UI/FAQ"

function Companies() {
	return (
		<section className="section-padding-y-lg section-padding-x section-center">
			<div className="section-wrapper section-restrict mb-5">
				<h2 className="section-heading-size !text-accent">
					För företag
				</h2>
				<p className="mt-7">
					Vi på Glimtin vill tillsammans med er skapa framtidens
					ingenjörer. Genom ert engagemang och stöd kan vi ge unga
					tjejer möjlighet att upptäcka, prova och inspireras av
					teknik och ingenjörsyrket i praktiken.{" "}
				</p>
				<h3 className="!text-accent mt-10 text-xl md:text-2xl">
					Frågor & svar
				</h3>
				<FAQ />
			</div>
		</section>
	)
}

export default Companies
