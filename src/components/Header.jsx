import Logo from "../assets/images/logo.svg?react"
import Button from "./UI/Button"
import ArrowCurved from "../assets/icons/arrow-curved.svg"
import { useLocation } from "react-router-dom"

function Header() {
	const location = useLocation()
	console.log(location.pathname)

	return (
		<header className="flex items-center justify-between px-4 py-2 sm:px-6">
			<a href="/">
				<Logo className="h-auto w-32 sm:w-37 md:w-42" />
			</a>
			<nav>
				<ul className="text-primary mr-2 flex items-center gap-4 text-lg">
					<li>
						<div className="relative">
							<Button className="leading-snug" link="/event">
								Event
							</Button>
							{location.pathname != "/event" && (
								<div className="text-primary-dark absolute top-11 right-14 flex gap-0.5 text-sm">
									<p>Missa inte vårt workshopevent!</p>
									<img
										className="w-8"
										src={ArrowCurved}
										alt="Pil"
									/>
								</div>
							)}
						</div>
					</li>
				</ul>
			</nav>
		</header>
	)
}

export default Header
