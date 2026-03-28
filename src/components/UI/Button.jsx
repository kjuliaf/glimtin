import { Link } from "react-router-dom"

const colors = {
	primary: "bg-primary text-neutral-000 hover:bg-primary-dark",
	secondary: "bg-secondary text-neutral-000 hover:bg-secondary-dark",
	accent: "bg-accent text-neutral-000 hover:bg-accent-dark",
	neutral: "bg-background text-primary-dark",
}

const colorOutlines = {
	primary:
		"border-primary text-primary hover:bg-primary hover:text-neutral-000",
	secondary:
		"border-secondary text-secondary hover:bg-secondary hover:text-neutral-000",
	neutral: "border-background text-background",
}

function Button({
	children,
	onClick,
	outlined = false,
	color = "primary",
	className = "",
	link = "",
}) {
	return (
		<a href={link}>
			<button
				type="submit"
				className={`cursor-pointer rounded-lg px-5 py-2 pb-2.5 transition duration-200 ease-in-out ${className} ${
					!outlined ? colors[color] : `border ${colorOutlines[color]}`
				}`}
				onClick={onClick}
			>
				{children}
			</button>
		</a>
	)
}

export default Button
