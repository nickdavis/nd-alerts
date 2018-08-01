
// import * as Cookies from 'js-cookie';

//import Cookies from '../../../node_modules/js-cookie/src/js.cookie.js';

console.log( 'alert.js outside jQuery' );

document.body.classList.add( 'alert--on' );

const closeButtons = document.getElementsByClassName( 'close_alert' );

closeButtons[0].addEventListener( 'click', alertClose );

function alertClose() {
	Cookies.set( 'nd-alerts', 'hide', { expires: 0.006944444 } );
	document.body.classList.remove( 'alert--on' );
}

// closeButtons[0].onClick = function() {
// 	console.log( 'click' );
// 	document.body.classList.remove( 'alert--on' );
// };

// closeButton.onClick = function() {
// 	console.log( 'click 2nd function' );
// 	document.body.classList.remove( 'alert--on' );
// };





//body.classList.add( 'alert--on' );

//Cookies.set( 'nd-alerts', 'hide', { expires: 0.006944444 } );


// jQuery( function ( $ ) {
//
// 	// COOKIES
// 	// @link https://alexcican.com/post/set-cookies-javascript/
//
// 	$( 'body' ).addClass( 'alert--on' );
//
// 	// if the cookie is true, hide the alert box
// 	// if ( $.cookie( 'hide-after-click' ) == 'yes' ) {
// 	// 	$( 'body' ).removeClass( 'alert--on' );
// 	// } else {
// 	// 	$( 'body' ).addClass( 'alert--on' );
// 	// }
//
// 	console.log( 'alert.js' );
//
// 	// when clicked on “X” icon do something
// 	$( '.close_alert' ).click( function () {
// 		Cookies.set( 'nd-alerts', 'hide', { expires: 0.006944444 } );
//
//
// 		$( 'body' ).removeClass( 'alert--on' );
// 		// add cookie setting that user has clicked
// 		// $.cookie( 'hide-after-click', 'yes', {
// 		// 	expires: 0.006944444, // expires = 10 mins of a day (10/1440)
// 		// 	path: '/' // Set for all pages on the domain
// 		// } );
//
// 		return false;
// 	} );
//
// } );
