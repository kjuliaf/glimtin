import LinkedIn from "../assets/icons/linkedin.svg"
import Instagram from "../assets/icons/instagram.svg"
import TikTok from "../assets/icons/tiktok.svg"
import Policy from "../assets/resources/Integritetsskyddspolicy-november-2025.pdf"

function Footer() {
	return (
		<footer
			id="kontakt"
			className="section-padding-y-lg section-padding-x section-center bg-primary-dark rounded-t-4xl"
		>
			<div className="section-wrapper section-padding-x section-restrict">
				<h2 className="section-heading-size-sm !text-secondary-light">
					Kontakta oss
				</h2>
				<p className="text-neutral-000 mt-4 mb-4 md:mb-6">
					Om du har några frågor, tveka inte på att höra av dig till
					oss!
				</p>
				<a
					className="text-neutral-000 underline"
					href="mailto:kontakt@glimtin.se"
				>
					kontakt@glimtin.se
				</a>

				<div className="mt-8 items-start justify-between sm:flex md:mt-16">
					<div className="mb-6 -ml-1.5 flex gap-1">
						<a
							href="https://www.linkedin.com/company/glimtin"
							target="_blank"
						>
							<img
								className="w-14"
								src={LinkedIn}
								alt="LinkedIn"
							/>
						</a>
						<a
							href="https://www.instagram.com/glimtin/"
							target="_blank"
						>
							<img
								className="w-14"
								src={Instagram}
								alt="Instagram"
							/>
						</a>
						<a
							href="https://www.tiktok.com/@glimtin3"
							target="_blank"
						>
							<img className="w-14" src={TikTok} alt="TikTok" />
						</a>
					</div>

					<div className="mb-10 text-sm opacity-70 md:text-base">
						<p className="text-neutral-000">
							Nastitech North AB 559506-7835
						</p>
						<a
							className="text-neutral-000 underline"
							target="_blank"
							href={Policy}
						>
							Personhantering
						</a>
					</div>
				</div>
			</div>
		</footer>
	)
}

export default Footer
