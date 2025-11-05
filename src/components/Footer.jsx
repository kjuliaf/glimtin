import LinkedIn from "../assets/icons/linkedin.svg"
import Instagram from "../assets/icons/instagram.svg"
import TikTok from "../assets/icons/tiktok.svg"

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
				<p className="text-neutral-000 mt-6 mb-8">
					Om du har några frågor, tveka inte på att höra av dig till
					oss
				</p>
				<a
					className="text-neutral-000 underline"
					href="mailto:kontakt@glimtin.se"
				>
					kontakt@glimtin.se
				</a>

				<div className="mt-12 mb-10 flex gap-1">
					<a
						href="https://www.linkedin.com/company/glimtin"
						target="_blank"
					>
						<img className="w-14" src={LinkedIn} alt="LinkedIn" />
					</a>
					<a
						href="https://www.instagram.com/glimtin/"
						target="_blank"
					>
						<img className="w-14" src={Instagram} alt="Instagram" />
					</a>
					{/* <a href="">
						<img className="w-14" src={TikTok} alt="TikTok" />
					</a> */}
				</div>
			</div>
		</footer>
	)
}

export default Footer
