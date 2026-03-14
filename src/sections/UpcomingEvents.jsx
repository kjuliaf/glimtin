import TeamImage from "./../assets/images/event/event-all.jpeg"

function UpcomingEvents() {
	return (
		<section className="section-padding-y-lg section-padding-x section-center">
			<div className="section-wrapper section-restrict sm:mb-5">
				<div className="flex flex-col justify-between gap-2 md:gap-4 lg:flex-row lg:items-center lg:gap-14">
					<div className="mb-5 lg:max-w-140">
						<h2 className="section-heading-size">
							Inspirera(s) med oss!
						</h2>
						<p className="mt-7">
							Vi planerar redan nästa event - håll utkik!
						</p>
						<p className="mt-4 lg:mt-6">
							Om du har frågor eller vill delta som elev,
							företagsrepresentant eller beslutsfattare{" "}
							<a
								className="text-primary underline"
								href="#kontakt"
							>
								hör av dig
							</a>{" "}
							till oss redan nu.
						</p>
					</div>
					<img
						className="img-rounded my-5 w-full self-end object-cover lg:m-0 lg:aspect-8/7 lg:h-auto lg:max-w-120 lg:min-w-100 lg:flex-shrink"
						src={TeamImage}
						alt="Bild på Glimtin-teamet"
					/>
				</div>
			</div>
		</section>
	)
}

export default UpcomingEvents
