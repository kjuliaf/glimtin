const colors = {
	primary: "bg-primary text-neutral-000 hover:bg-primary-dark",
	secondary: "bg-secondary text-neutral-000 hover:bg-secondary-dark",
}

const colorOutlines = {
	primary:
		"border-primary text-primary hover:bg-primarey hover:text-neutral-000",
	secondary:
		"border-secondary text-secondary hover:bg-secondary hover:text-neutral-000",
}

function Button({ children, onClick, outlined = false, color = "primary" }) {
	return (
		<button
			className={`cursor-pointer rounded-lg px-6 py-2 transition duration-200 ease-in-out ${
				!outlined ? colors[color] : `border ${colorOutlines[color]}`
			}`}
			onClick={onClick}
		>
			{children}
		</button>
	)
}

export default Button
