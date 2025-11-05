import { useState } from "react"

const faqData = [
	{
		question: "Vad innebär det att medverka?",
		answer: "Som partner blir ni en del av ett lokalt nätverk där skola, elever och företag möts. Ni får synlighet i våra aktiviteter, på hemsidan och i sociala medier samtidigt som ni visar ert engagemang för framtidens kompetensförsörjning. Tillsammans kan vi öppna dörrar och visa hur spännande och betydelsefullt teknikområdet är - och hur mycket som väntar den generation som ska forma framtiden.",
	},
	{
		question: "Vilken skillnad kan ni göra?",
		answer: "Vi på Glimtin vill tillsammans med er skapa framtidens ingenjörer. Genom ert engagemang och stöd kan vi ge unga tjejer möjlighet att upptäcka, prova och inspireras av teknik och ingenjörsyrket i praktiken. Som företag får ni chansen att möta framtidens talanger tidigt och bidra till ökad jämställdhet och mångfald inom ingenjörsbranschen.",
	},
	{
		question: "Hur blir man partner?",
		answer: "Vill ni vara med och stötta Glimtin? Hör av er till oss så berättar vi mer om hur ert företag kan bli en del av vår satsning.",
	},
]

export default function FAQ() {
	const [openItems, setOpenItems] = useState(
		Array(faqData.length).fill(false)
	)

	const toggle = (index) => {
		const newOpenItems = [...openItems]
		newOpenItems[index] = !newOpenItems[index]
		setOpenItems(newOpenItems)
	}

	return (
		<div className="mx-auto mt-6 w-full border-t border-b border-neutral-300">
			{faqData.map((item, index) => (
				<div key={index} className="border-b border-neutral-300">
					<button
						className="focus:ring-accent flex w-full items-center justify-between px-2 py-3 text-left focus:ring-2 focus:outline-none"
						aria-expanded={openItems[index]}
						aria-controls={`faq-panel-${index}`}
						id={`faq-header-${index}`}
						onClick={() => toggle(index)}
					>
						<span className="flex items-center gap-2 text-lg font-medium">
							<span className="text-accent flex h-5 w-5 items-center justify-center">
								{openItems[index] ? "−" : "+"}
							</span>
							{item.question}
						</span>
					</button>
					<div
						id={`faq-panel-${index}`}
						role="region"
						aria-labelledby={`faq-header-${index}`}
						className={`overflow-hidden px-2 transition-all duration-300 ease-in-out ${
							openItems[index] ? "mt-0 max-h-[500px]" : "max-h-0"
						}`}
					>
						<p className="mb-4 text-neutral-900">{item.answer}</p>
					</div>
				</div>
			))}
		</div>
	)
}
