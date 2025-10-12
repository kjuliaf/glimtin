import Logo from '../assets/images/logo.svg?react';
import Button from './UI/Button';

function Header() {
	return (
		<header className="flex justify-between items-center px-4 py-2">
			<Logo className="w-45 h-auto" />
			<Button bgColor='secondary' onClick={() => alert('maila oss på: kontakt@glimtin.se')}>Kontakt</Button>
		</header>
	);
}

export default Header;
