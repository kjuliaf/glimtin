import Logo from "../assets/images/logo.svg?react"
import Button from "./UI/Button"

function Header() {
	return (
		<header className="flex items-center justify-between px-4 py-2">
			<a href="/">
				<Logo className="h-auto w-35 sm:w-40 md:w-45" />
			</a>
			<Button
				className="hidden md:block"
				color="secondary"
				onClick={() => alert("maila oss på: kontakt@glimtin.se")}
			>
				Kontakt
			</Button>
		</header>
	)
}

export default Header
