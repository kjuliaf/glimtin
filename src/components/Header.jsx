import Logo from "../assets/images/logo.svg?react"
import Button from "./UI/Button"

function Header() {
	return (
		<header className="flex items-center justify-between px-4 py-2 sm:px-6">
			<a href="/">
				<Logo className="h-auto w-32 sm:w-37 md:w-42" />
			</a>
			<nav>
				<ul className="text-primary mr-2 flex items-center gap-4 text-lg">
					<li>
						<div>
							<Button className="leading-snug" link="/event">
								Event
							</Button>
						</div>
					</li>
				</ul>
			</nav>
		</header>
	)
}

export default Header
