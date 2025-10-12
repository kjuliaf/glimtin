import Logo from "../assets/images/logo.svg?react"
import Button from "./UI/Button"

function Header() {
	return (
		<header className="flex items-center justify-between px-4 py-2">
			<Logo className="h-auto w-45" />
			<Button
				color="secondary"
				onClick={() => alert("maila oss på: kontakt@glimtin.se")}
			>
				Kontakt
			</Button>
		</header>
	)
}

export default Header
