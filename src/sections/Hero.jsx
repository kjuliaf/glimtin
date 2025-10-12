import HeroImage from '../assets/images/hero.jpg'

function Hero() {
	return (
		<section className="">
			<div className=''>
				<h1 className="">Från studier till möjligheter</h1>
				<p className="">– för tjejer som vill forma framtiden med ingenjörskap</p>
			</div>
			<div className=''>
				<img src={HeroImage} alt="" className='' />
			</div>

		</section>
	);
}

export default Hero;
