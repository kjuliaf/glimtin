import TeamImage from "../assets/images/team.jpg"

function Background() {
	return (
		<section className="section-padding-y-lg section-padding-x section-center md:pr-0">
			<div className="section-wrapper mb-5">
				<div className="flex flex-col items-center justify-between gap-2 md:flex-row md:gap-8 lg:gap-12">
					<div className="mb-5">
						<h2 className="!text-accent section-heading-size">
							Bakgrund
						</h2>
						<p className="mt-7">
							Glimtin grundades med en tanke om att vilja ge
							vidare till kommande elever av de tankar och kunskap
							vi fått längs vägen. Vi vill visa hur mycket som
							finns att jobba med och konkretisera vad detta kan
							vara. Vi vill även ge elever en inblick i
							företagslivet som stort och visa hur behövda de är.
							Med företag i ryggen gör vi detta som mellanhanden
							mellan elever och företag.
						</p>
						<p className="mt-6">
							Vi på glimtin är ett team unga tjejer som själva
							gått vägen från grundskola till
							universitetsutbildning och viss del arbetsliv.
						</p>
					</div>
					<img
						className="img-rounded my-5 aspect-3/2 self-end object-cover md:m-0 md:aspect-auto md:h-auto md:w-1/2 md:max-w-120 md:flex-shrink md:rounded-l-3xl md:rounded-r-none"
						src={TeamImage}
						alt="Bild på Glimtin-teamet"
					/>
				</div>
			</div>
		</section>
	)
}

export default Background
