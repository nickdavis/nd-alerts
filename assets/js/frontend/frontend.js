import Cookies from 'js-cookie';

const closeButtons = document.getElementsByClassName( 'nd-alerts__close' );
const cookieValue = Cookies.get( 'nd-alerts' );

function alertClose() {
	Cookies.set( 'nd-alerts', 'hide', {expires: 0.006944444} );
	document.body.classList.remove( 'nd-alerts--visible' );
}

// Adds a click listener to the close button.
if ( closeButtons[ 0 ] !== undefined ) {
	closeButtons[ 0 ].addEventListener( 'click', alertClose );
}

// If the cookie is set, hide the alert box.
if ( cookieValue === 'hide' ) {
	document.body.classList.remove( 'nd-alerts--visible' );
} else {
	document.body.classList.add( 'nd-alerts--visible' );
}
