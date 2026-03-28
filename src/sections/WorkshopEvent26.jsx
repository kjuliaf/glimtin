import DateIcon from "./../assets/icons/date.svg"
import LocationIcon from "./../assets/icons/location.svg"
import TimeIcon from "./../assets/icons/time.svg"
import RobotInteraction from "./../assets/images/robot-interaction.png"
import Sparkles from "./../assets/icons/sparkles-yellow.svg"
import Download from "./../assets/icons/download.svg"
import DownloadPrimary from "./../assets/icons/download-primary.svg"
import Button from "./../components/UI/Button"
import StudentWSInfo from "../assets/resources/Inbjudan-Elever-WS.pdf"
import CompanyWSInfo from "../assets/resources/Inbjudan-Workshop.pdf"

function WorkshopEvent26() {
	return (
		<>
			<h2 className="section-heading-size text-secondary-light!">
				Missa inte vårt workshopevent!
			</h2>
			<p className="mt-7">
				Den 14 april håller vi ett workshopevent för unga tjejer och
				icke-binära från högstadiet och teknikprogrammet. Förbered er
				för en kväll där teknik möter kreativitet och framtidstro genom
				praktiska inslag, tävlingar och aktiviteter.
			</p>

			<div className="mt-5 flex gap-5 text-sm sm:text-base">
				<div className="flex items-center gap-2">
					<img
						src={LocationIcon}
						alt="Plats"
						className="w-5 max-w-5 min-w-5"
					/>
					<p>Curiosum</p>
				</div>
				<div className="flex items-center gap-2">
					<img
						src={DateIcon}
						alt="Datum"
						className="w-6 max-w-6 min-w-6"
					/>
					<p>14 april</p>
				</div>
				<div className="flex items-center gap-1">
					<img
						src={TimeIcon}
						alt="Tid"
						className="w-7 max-w-7 min-w-7"
					/>
					<p>16:00-19:00</p>
				</div>
			</div>

			<div className="justify-between gap-10 lg:flex">
				<div className="mt-10 lg:max-w-150">
					<h3 className="section-heading-size-sm text-secondary-light! lg:text-nowrap">
						Vill du som elev eller företag delta?
					</h3>
					<p className="mt-5">
						Som elev kan du anmäla dig till eventet{" "}
						<a
							className="text-secondary-light underline"
							href="https://docs.google.com/forms/d/e/1FAIpQLSdYOI93gab9GYtEhHcgCjijXGQiv5btNRi9yOyn-4g6XLpEIQ/viewform?usp=header&utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnPLSHhmui_g67p-1AIiYK1RQHN-p-6sH4iGEfjBeB7qwSpkGGUTUpI4v5DV0_aem_X2NnsB1ySD1gFZncg5ujTQ"
							target="_blank"
						>
							här
						</a>
						.
					</p>
					<p className="mt-5">
						Som företag kan du bidra till att väcka nyfikenhet för
						teknik och ingenjörsyrket. Kontakta oss på{" "}
						<a
							className="text-secondary-light underline"
							href="mailto:kontakt@glimtin.se"
						>
							kontakt@glimtin.se
						</a>{" "}
						för att få veta mer.
					</p>

					<div className="mt-8 flex gap-4 lg:mt-12">
						<Button
							className="flex items-center gap-2 text-sm sm:text-base"
							color="neutral"
							link={StudentWSInfo}
						>
							Information för elever
							<img src={DownloadPrimary} alt="Ladda ner" />
						</Button>
						<Button
							className="flex items-center gap-2 text-sm sm:text-base"
							color="neutral"
							outlined
							link={CompanyWSInfo}
						>
							Information för företag
							<img src={Download} alt="Ladda ner" />
						</Button>
					</div>
				</div>
				<div className="relative">
					<img
						className="img-rounded mt-10 aspect-5/3 w-full object-cover lg:mt-5 lg:aspect-auto lg:h-full lg:max-w-120 xl:mt-0"
						src={RobotInteraction}
						alt="Interaktion med robot"
					/>
					<img
						className="absolute -top-10 -right-2 w-20 sm:w-26 lg:-right-6"
						src={Sparkles}
						alt="Glitter"
					/>
				</div>
			</div>

			<hr className="mt-15 border-[#B3A5C9] pb-15" />
		</>
	)
}

export default WorkshopEvent26
