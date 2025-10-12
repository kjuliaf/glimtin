
function Button({ children, onClick, outlined = false, textColor = "neutral-000", bgColor = "primary" }) {
	return (
		<button className={`px-6 py-2 rounded-lg text-${textColor} bg-${bgColor} ${outlined && "border"}`} onClick={onClick}>
			{children}
		</button>
	);
}

export default Button;
