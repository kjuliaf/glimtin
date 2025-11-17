import Button from "../components/UI/Button"
import Download from "../assets/icons/download.svg?react"
import FlyerStudents from "../assets/resources/flyer-student.pdf"
import FlyerCompanies from "../assets/resources/flyer-company.pdf"

function Event() {
	return (
		<section className="section-padding-x section-padding-y-lg section-center bg-background-purple">
			<div className="section-wrapper section-restrict">
				<h2 className="section-heading-size">
					Missa inte vårt första stora event!
				</h2>
				<p className="mt-7">
					Den 4e december håller vi ett inspirationsevent för unga
					tjejer och ickebinära från högstadiet och teknikprogrammet.
					Kvällen kommer vara fylld med inspiration, framtidspepp och
					möten med teknikföretag.
				</p>

				<h3 className="mt-10 text-xl md:text-2xl">
					Vill du som elev delta?
				</h3>
				<p className="mt-3">
					Anmäl dig till eventet{" "}
					<a
						className="text-primary underline"
						href="https://docs.google.com/forms/d/e/1FAIpQLSf9DF04pG2xst_9ljITb0_J4-KbPsfPyToFJDo9zqMYmBTokA/viewform"
						target="_blank"
					>
						här
					</a>
					.
				</p>

				<h3 className="mt-8 text-xl md:text-2xl">
					Vill du som företag bidra?
				</h3>
				<p className="mt-3">
					Som företag kan du bidra till att väcka nyfikenhet för
					teknik och ingenjörsyrket. Kontakta oss på{" "}
					<a
						className="text-primary underline"
						href="mailto:kontakt@glimtin.se"
					>
						kontakt@glimtin.se
					</a>{" "}
					för att få veta mer.
				</p>

				<div className="mt-12 flex flex-col gap-3 sm:flex-row">
					<a
						href={FlyerStudents}
						download="Flyer Event 4de dec"
						target="_blank"
					>
						<Button
							color="secondary"
							className="flex w-fit items-center gap-2"
						>
							Information för elever
							<Download className="mt-0.5" />
						</Button>
					</a>
					<a
						href={FlyerCompanies}
						download="Flyer Event 4de dec"
						target="_blank"
					>
						<Button className="flex w-fit items-center gap-2">
							Information för företag
							<Download className="mt-0.5" />
						</Button>
					</a>
				</div>
			</div>
		</section>
	)
}

export default Event
