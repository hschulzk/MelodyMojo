<style>
* {box-sizing: border-box;}

/*General element styling including behavior specific classes and bootstrap fixes*/
h1,h2,h3,h4 {color: #2E6FA5;}

div.container-fluid {
	padding-right: 0px;
	padding-left: 0px;
	margin-left: 0px;
	margin-right: 0px;
}

.centerContents {text-align: center !important;}
.leftContents {text-align: left !important;}
.rightContent {text-align: right !important;}
.borderBottom {border-bottom: .5px solid rgba(0,0,0,0.7);}
.borderTop {border-top: .5px solid rgba(0,0,0,0.7);}
.borderLeft {border-left: .5px solid rgba(0,0,0,0.7);}
.borderRight {border-right: .5px solid rgba(0,0,0,0.7);}
.w10 {width: 10%; margin: auto;}
.w20 {width: 20%; margin: auto;}
.w30 {width: 30%; margin: auto;}
.w40 {width: 40%; margin: auto;}
.w50 {width: 50%; margin: auto;}
.w60 {width: 60%; margin: auto;}
.w70 {width: 70%; margin: auto;}
.w80 {width: 80%; margin: auto;}
.w90 {width: 90%; margin: auto;}
.w100 {width: 100%;}

div.row {
	margin-left: 0px;
	margin-right: 0px;
	padding-right: 0px;
	padding-left: 0px;
}

/*Styles for the top banner*/
#bannerImageContainer {margin-top: 10rem;width: 100%;}

button#openModal.btn-info, 
button#openModal.btn-info:hover,
button#openModal.btn-info:active,
button#openModal.btn-info:focus
 {
	background-color: transparent; 
	border: none;
    color: #333;
    font-weight: bolder;
    font-size: 2em;
}

button#openModal.btn-info:focus{outline-color: black;}

div#aboveFold > div#graphicOverlay > .row > ul,
div.row.scrollNav#navRow ul
 {
	width: 100%;
	font-weight: bold;
	line-height: 100%;
	float: none;
    -webkit-margin-before: 0px;
    -webkit-margin-after: 0px;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 0px;
	display: flex;
	justify-content: center;
	margin: auto;
	z-index: 1000;
}

div#aboveFold > div#graphicOverlay > .row > ul a,
div.row.scrollNav#navRow ul a {width: 20%; outline-color: black;}

div.pageBody {margin-top: 100px; padding: 1em 1em 1em 1em; text-align: justify;}


div.pageBody .row div p {
 line-height: 1.5em;
 font-size: 1.25em;	
}

div.pageBody .row > div {
	padding-left: 0px;
	padding-right: 0px;
	margin-right: 0px;
	margin-left: 0px;
}

.row#navRow {width: 100%;}

/*Menu bar for its various statuses*/
/*.scrollNav is added by js on scroll past the fold*/
div#aboveFold > div#graphicOverlay > .row > ul li,
div.row.scrollNav#navRow ul li
 {
	line-height: 1.25em;
	text-align: center;
	padding: 1em 2em 1em 2em;
	float: none;
	margin: auto;
	font-weight: bolder;	
    font-family: Dosis, arial, sans-serif;
    text-decoration: none;
	text-transform: uppercase;
    letter-spacing: 1.25px;
	text-align: center;    
    color: #333;
    opacity: .99;
	list-style: none;        	
}

div.row#navRow ul li {font-size: 1.3em;}

div.row.scrollNav#navRow ul li {color: white;font-size: 1.25em;}

div#aboveFold > div#graphicOverlay > .row.scrollNav#navRow ul li {color: white;}

div#aboveFold > div#graphicOverlay > .row > ul a,
#findALesson a,
div.row.scrollNav#navRow ul a {text-decoration: none;}

div#aboveFold > div#graphicOverlay > .row > ul li:hover,
div.row.scrollNav#navRow ul li:hover {background-color: rgba(255,255,255,0.5);}  

.row.scrollNav#navRow {
	position: fixed;
	top:0px;
	background-color: rgba(0,0,0,0.8);
    width: 100%;
    min-height: 60px;
    max-height: 100px;
    color: white;	
}

.row.scrollNav#navRow ul {
	padding-top: 0em;
	width: 100%;
	color: white;
}

div#bannerPhotoBox {margin-top: 3em;}

div#findALesson {
	margin-top: 10vh;
    margin-bottom: 22vh;
	text-align: center;
	clear: both;
}

@media (max-width: 991px) { 
	div#findALesson {
		margin-top: 12vh;
		margin-bottom: 8vh;
	}
}

/*These are the hamburger and the mini-logo for the scrolling header on mobile. They are revealed by js*/
.mobileMenuIcons {display: none;}

/*Testimonial Section of the homepage*/
#testimonialP {padding-top: 6em;}		

#testimonialP p {
	width: 100%; 
	text-align: justify;  
	line-height: 2.25em;  
	font-size: 1.25em;
	padding-top: 1em;	
}

#testimonialP .col-sm-3 {text-align: center;}

/*View on Mobile display-- most of this is header styling*/
@media (max-width: 767px) { 
	div#aboveFold > div#graphicOverlay > div.row#navRow ul {
    	display: block;
	    list-style-type: disc;
	    background-color: rgba(0,0,0,0.75);
	    color: white;	
	}

	div#aboveFold > div#graphicOverlay > div.row#navRow ul li {color: white; font-size: 1em;}

	div#findALesson {margin-top: 2em;}
	
	.row#navRow {position: absolute; bottom: 0px;}

	div.row.scrollNav#navRow ul#header2 {display: none;}		
	
	div#aboveFold > div#graphicOverlay > .row.scrollNav#navRow ul,
	.row.scrollNav#navRow ul {	
		display: none;
		position: absolute;
		top: 120px;
		margin-top: 0px;
	}

	.row.scrollNav#navRow {max-height: 120px;}

	.row.scrollNav#navRow .mobileMenuIcons {display: inline-block; font-size: 5rem;}

	.row.scrollNav#navRow img.mobileMenuIcons {width: 80px; height: 60px;}

	.row.scrollNav#navRow #mobileImageWrap {
		float: left;
		padding: 1em 1em 1em 1em;
		margin: 1em 1em 1em 1em;
		border-radius: 50%;
		background-color: white;
	}
	.row.scrollNav#navRow #hamburgerWrap {
	    width: 50%;
	    float: right;
	    text-align: right;
	    height: 100%;
	    padding-top: 30px;
	    padding-right: 3em;
	}
	#testimonialP p {padding-left: 1em;}

	div#bannerPhotoBox img {height: 200px; width: 175px;}		
}

img#bannerPhoto {width: 100%; height: 100vh;}

div#aboveFold {height: 100vh; position: relative;}

div#aboveFold > #bannerOverlay {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	background-color: rgba(255,255,255,0.45);
}

div#aboveFold > div#graphicOverlay {
	width: 100%;
    height: 100vh;	
	position: absolute;
	top: 0px;
    z-index: 59;
    color: #fff;
    text-align: center;    
}

div.row.scrollNav#navRow ul#header2 a {width: 16%;}

div.row.lessonSection {padding-top: 6rem;}

div.row.lessonSection > div.sectionDescription {
	line-height: 180%;
	font-size: 1.75rem;
	padding: 0em 1.5em 0em 1.5em;
	text-align: justify;
}

div.row.lessonSection > div.sectionDescription h2,
div.row.lessonSection > div.sectionDescription h3 {text-align: center;}

.row.lessonSection img {
	vertical-align: middle; 
	max-width: 100%;
	max-height: 350px;

}

div.row#findALesson a {
	font-size: 20px;
	color: #333;
	font-family: Dosis, arial, sans-serif;
	letter-spacing: 2px;
	font-weight: bolder;
}

img#testimonialPhoto {
	border-radius: 50%;
	float: none;
	margin: auto;
}

.modal .modal-dialog .modal-content {
	width: 90vw;
	margin: auto;
	text-align: center;
}

.modal .modal-dialog .modal-content h2,
.modal .modal-dialog .modal-content h3,
.modal .modal-dialog .modal-content h4,
.modal .modal-dialog .modal-content h5 {
	color: rgba(0,0,0,0.8);
}

.modal .modal-dialog .modal-content form label {
	display: block;
	text-align: left;
	font-size: 20px;
}

.modal .modal-dialog .modal-content form input,
.modal .modal-dialog .modal-content form select,
.modal .modal-dialog .modal-content form textarea {
	width: 100%;
	min-width: 250px;
	border-radius: 3px;
	padding: .5em .5em .5em .5em;
	font-size: 25px;
	background-color: #e8ebed;
	border: none;
}
.modal .modal-dialog .modal-content form input,
.modal .modal-dialog .modal-content form select,
.modal .modal-dialog .modal-content form textarea,
.modal .modal-dialog .modal-content form label {
	color: rgba(0,0,0,0.6);
}

.modal .modal-dialog .modal-content form .col-sm-12 {
	text-align: left;
}


.modal .modal-dialog .modal-content form input[type="submit"] {
	width: 20%;
	min-width: 200px;
	margin: auto;
	color: white;
	background-color: #2E6FA5;
}
.modal .modal-dialog .modal-content form input[type="radio"] {
	width: 30px;
	min-width: 30px;
	font-size: 20px;
	line-height: 20px;
	height: 20px;
}

.modal .modal-dialog .modal-content form span {
	font-size: 20px;
	padding-left: .25em;
	line-height: 20px;
	height: 20px;
	padding-bottom: .2em;	
}

.modal .modal-dialog {
	width: 100%;
	text-align: center;
	margin: 10px 0px 0px 0px;
}
/*About Video*/

iframe#aboutVideo {
	width: 100%;
	height: 28vw;
	margin-top: 3em;
}


form input[type="submit"] {
	border: none;
	background-color: rgba(0,0,0,0.7);
	padding: 1em 2em 1em 2em;
	color: white;
}

img.aboutPhotos {
	border-radius: 50%; 
	width: 80%;
	z-index: 1;
}

.pageBody > ul, .pageBody > ul > li {
	list-style: none;
    -webkit-margin-before: 0px;
    -webkit-margin-after: 0px;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 0px;	
}

.pageBody div h1, .pageBody div h3 {color: #337ab7;}

div.pageBody.mrPageBody ul li a button {
	border: none; 
	padding: 1em 3em 1em 3em; 
	background-color: #FF753A; 
	color: white; 
	font-size: 1.3em; 
	margin-top: 1em;
}
</style>