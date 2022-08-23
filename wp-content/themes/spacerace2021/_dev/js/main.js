'use strict';

const $ = require('jquery');
const App = require('./modules/app.js');
const Viewport = require('./modules/viewport.js');
const Header = require('./modules/header.js');
const Tabs = require('./modules/tabs.js');
const ScrollTo = require('./modules/scrollTo.js');
const Carousel = require('./modules/carousel.js');
const Accordion = require('./modules/accordion.js');
//const Form = require('./modules/form.js');
const Draw = require('./modules/draw.js');
const Rotate = require('./modules/rotate.js');
const Click = require('./modules/click.js');

$(function(){
	let app = new App();
	let viewport = new Viewport();
	let header = new Header();
	let tabs = new Tabs();
	let scrollTo = new ScrollTo();
	let carousel = new Carousel();
	let accordion = new Accordion();
	let draw = new Draw();
	let rotate = new Rotate();
	let click = new Click();
});
