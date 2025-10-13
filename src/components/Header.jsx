import Logo from "../assets/images/logo.svg?react"
import Button from "./UI/Button"

function Header() {
	return (
		<header className="flex items-center justify-between px-4 py-2 sm:px-6">
			<a href="/">
				<Logo className="h-auto w-32 sm:w-37 md:w-42" />
			</a>
			<a href="#kontakt">
				<Button
					className="hidden sm:block"
					color="secondary"
				>
					Kontakt
				</Button>
			</a>
		</header>
	)
}

export default Header
