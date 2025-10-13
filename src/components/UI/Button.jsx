const colors = {
	primary: "bg-primary text-neutral-000 hover:bg-primary-dark",
	secondary: "bg-secondary text-neutral-000 hover:bg-secondary-dark",
}

const colorOutlines = {
	primary:
		"border-primary text-primary hover:bg-primary hover:text-neutral-000",
	secondary:
		"border-secondary text-secondary hover:bg-secondary hover:text-neutral-000",
}

function Button({
	children,
	onClick,
	outlined = false,
	color = "primary",
	className = "",
}) {
	return (
		<button
			className={`cursor-pointer rounded-lg px-5 py-2 pb-2.5 transition duration-200 ease-in-out ${className} ${
				!outlined ? colors[color] : `border ${colorOutlines[color]}`
			}`}
			onClick={onClick}
		>
			{children}
		</button>
	)
}

export default Button
