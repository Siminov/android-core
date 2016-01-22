

@import url('base.php');
@import url('menu.php');



/* top panel */

#top-panel, .button:hover, .submitbutton:hover, .button-primary:hover, .btn:hover, .buttons .button.checkout, #commentform #submit, .service-icon:hover span, .tags-widget a:hover, .comment-author a.comment-reply-link:hover, .slider-nav a.active, #top-panel .top-panel-inner, #open-top-panel:hover, #open-top-panel.active, .pricing-table .title, .blue-circle {
	background-color: #26bdef;
}

#top-panel {
	position: relative;
	width: 100%;
	z-index: 10;
}

#top-panel .top-panel-inner {
	padding: 30px 0 40px 0;
	overflow: hidden;
	display: none;
	position: relative;
	width: 100%;
	z-index: 2;
}

#top-panel .top-panel-inner * {
	z-index: 2;
}

#top-panel .three, #top-panel .row .three {
	width: 25%;
	padding: 0 10px;
}

#top-panel .top-login {
	padding-top: 10px;
	color: #fff;
}

#top-panel .top-login p {
	margin: 0;
	color: #fff;
}

#top-panel label {
	color: #fff;
}
	
label {
	display: inline-block;
	font-size: 12px;
	cursor: pointer;
	font-weight: 500;
	margin-bottom: 3px;
}

#top-panel .top-login input {
	-moz-transition: all .2s linear;
	-webkit-transition: all .2s linear;
	-o-transition: all .2s linear;
	transition: all .2s linear;
}

#top-panel .top-login input {
	background: #1aaede;
	border: 1px solid #1aaede;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	color: #fff;
}

#top-panel .top-login .login-remember {
	float: left;
}

.login-remember label {
	font-style: italic;
}

#top-panel .top-login .login-submit {
	float: right;
}

#top-panel .top-login input.button-primary {
	display: inline-block;
	border: 2px solid #fff;
	background: transparent;
	color: #fff;
	padding: 5px 20px;
	font-size: 12px;
	border-radius: 2px;
	behavior: url(border-radius.htc);
	text-transform: uppercase;
}

.button-primary, .btn, .button {
	width: auto;
	background: #ffffff;
	border: 2px solid #e7eef1;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	font-size: 13px;
	font-weight: 300;
	line-height: 20px;
	margin: 0;
	padding: 6px 20px;
	position: relative;
	text-align: center;
	text-decoration: none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-radius: 2px;
	behavior: url(border-radius.htc);
}

#top-panel .top-text {
	line-height: 1.5;
	color: #fff;
	padding: 0 10px;
}

.row .offset-by-one {
	margin-left: 8.33333%;
}

.eight, .row .eight {
	width: 66.66667%;
}

.top-text .icon {
	float: left;
	font-size: 17px;
	margin-right: 10px;
}

em, i {
	font-style: italic;
	line-height: inherit;
}

.awesome-list:before {
	content: "\f03a";
}

[class^="awesome-"]:before, [class*=" awesome-"]:before {
	display: inline-block;
	speak: none;
	font-family: FontAwesome;
	-webkit-font-smoothing: antialiased;
	font-style: normal;
	font-weight: normal;
	text-decoration: inherit;
	width: 1em;
	margin-right: .2em;
	text-align: center;
	font-variant: normal;
	text-transform: none;
	line-height: 1em;
	margin-left: .2em;
}

.top-text .title {
	color: #fff;
	font-size: 23px;
	margin-bottom: 25px;
}

#top-panel .soc-icons {
	padding-top: 40px;
}

.soc-icons a {
	margin-right: 15px;
	color: #fff;
	font-size: 18px;
}

#open-top-panel {
	display: block;
	position: absolute;
	bottom: -7px;
	left: 35%;
	width: 105px;
	height: 105px;
	border-radius: 7px;
	z-index: 1;
	transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	border: 3px solid #ff6565;
	-moz-transition: all .2s ease-in-out;
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

#open-top-panel:before {
	transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	font-family: sans-serif;
	width: 1em;
	text-align: center;
	position: absolute;
	bottom: 0;
	left: 84px;
	font-style: normal;
	font-weight: bold;
	content: '>';
	color: #f36f5f;
}

#open-top-panel.active:before {
    content: '>';
    color: #fff;
}

#open-top-panel:hover, #open-top-panel.active {
	border-color: #26bdef;
}

#open-top-panel:hover:before {
    color: #fff;
}

.main_header {
	margin-top: 10px;
	height: 75px;
	margin-left: 20px;
}

.product_header {
	float: left;
	height: 72px;
}

a {
	color: #4CA5B5;
}



.web-product-name {
	margin-left: 10px;
}

.studio-product-name {
	margin-left: 10px;
}

.product_name {
	width: 112px;
	text-align: center;
	display: -webkit-inline-box;
	float: left;
}

.product_name span {
	margin-top: 16px;
	display: block;
	font-weight: bold;
	font-size: 16px;
}

.product_header .product_logo {
	float: left;
	height: 70px;
	width: 70px;
}

.product_by {
	width: 70px;
	display: -webkit-inline-box;
	float: left;
	padding-left: 12px;
	margin-top: -9px;
}

.product_by span {
	padding-top: 25px;
	display: block;
	font-size: 12px;
}

.product_by span h2 {
	margin-left: 12px;
	line-height: 4px;
	font-style: italic;
}

.social_header_options {
	float: right;
	margin-top: 20px;
	height: 34px;
}

.social_header_options div {
	margin-right: 15px;
}

.twitter_option, .google_plus_option, .facebook_option, .github_header_option {
	float: left;
}

.developer_header_option {
	float: left;
}


.developer_header_option {
	height: 34px;
	width: 34px;
}


.github_header_option {
	border-right: 1px solid #eeeeee;
	padding-right: 12px;
	padding-left: 12px;
	height: 32px;
	width: 54px;
}


.product_header.sticky {
	left: 0;
	top: 0;
	width: 100%;
	background: #FFF;
	margin: 0px;
	padding-left: 20px;
	padding-top: 10px;
	box-shadow: 0 3px 5px -3px rgba(0, 0, 0, .3);
	-webkit-box-shadow: 0 3px 5px -3px rgba(0, 0, 0, .3);
}

.product_header.sticky .product_logo img {
	height: 40px;
	width: 40px;
}

.product_header.sticky .product_name {
	width: 90px;
}

.product_header.sticky .product_name span {
	font-size: 12px;
	margin-top: 2px;
	border: none;
}

.product_header.sticky .product_by {
	display: none;
}

/*Download Options */

.content.with-gradient {
	padding: 40px 0;
	background: #f5f5f5;
	margin: 0 auto;
}

.centered, .text-center {
	text-align: center;
}

.content.with-gradient h1 {
	font-size: 50px;
	font-weight: 100;
	line-height: 1.2;
	margin: .3rem 0;
}

hr.subtle {
	background: -webkit-radial-gradient(#7f8c8d,rgba(127,140,141,0) 60%);
	background: -moz-radial-gradient(#7f8c8d,rgba(127,140,141,0) 60%);
	background: radial-gradient(#7f8c8d,rgba(127,140,141,0) 60%);
	border: 0;
	height: 1px;
	margin: 40px 40px;
	padding: 0;
}

.dark-blue-headings p {
	margin-bottom: 16px;
	text-align: center;
}

.dark-blue-headings.width-10 {
	margin: 0 auto;
	width: 95%;
	overflow: hidden;
}

#product-started-guide .dark-blue-headings.width-10 {
	overflow: visible;
}

.dark-blue-headings .cell.width-4 {
	width: 33.333%;
	padding: 30px;
}

.dark-blue-headings .cell {
	margin: 0;
	float: left;
	position: relative;
	border-left: 1px solid #ccc;
	
	-webkit-transition: box-shadow 200ms cubic-bezier(0.215,0.61,0.355,1);
	-moz-transition: box-shadow 200ms cubic-bezier(0.215,0.61,0.355,1);
	-ms-transition: box-shadow 200ms cubic-bezier(0.215,0.61,0.355,1);
	transition: box-shadow 200ms cubic-bezier(0.215,0.61,0.355,1);
}

.dark-blue-headings .cell.first {
	margin-left: 0!important;
	clear: left;
	border-left: none;
}

.dark-blue-headings .cell:last-of-type {
	margin-right: 0!important;
}

.dark-blue-headings .cell:hover {
	background: rgba(255,255,255,0.5);
	box-shadow: 0 4px 20px rgba(0,0,0,0.2);
	border-radius: 6px;
	border-color: transparent;
}

.dark-blue-headings .omnilink {
	color: #4e5758;
	text-decoration: none;
	margin: -30px;
	padding: 30px;
	display: block;
}

.omnilink h1.dark-blue {
	font-size: 35px;
	font-weight: 200;
}

.get-started-core-img {
  	margin-top: 30px;
}

.get-started-connect-img {
	margin-top: 10px;
}

.get-started-web-img {
	margin-top: 20px;
}

#call-to-actions .icon {
	width: 81px;
	height: 81px;
	margin-bottom: -45px;
}

.dark-blue-headings h3 {
	color: #2c3e50;
}

h3:not(:first-child) {
	margin-top: 1em;
}

p:last-child, ul:last-child, ol:last-child, pre:last-child, blockquote:last-child {
	margin-bottom: 0;
}

.action-button.featured {
	background: transparent; 
	border-color: #ddd;
	color: #828a93;
	-webkit-font-smoothing: antialiased;
	text-decoration: none;
	font-weight: 600;
	border: 1px solid #bdc3c7;
	display: inline-block;
	padding: 5px 20px 7px;
	border-radius: 100px;
	line-height: normal;
	white-space: nowrap;
	font-size: 15px;
	text-transform: uppercase;
	vertical-align: middle;
	outline: 0;
	cursor: pointer;
	box-shadow: none;
	-webkit-transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
	-moz-transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
	-ms-transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
	transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
}


.action-button.featured:hover {
	border-color: #3498db;
	color: #3498db;
}

.action-button.featured label {
	display: block;
	font-size: 0.5em;
	height: 16px;
}

.action-button-label {
	width: 77%;
	float: left;
	padding-left: 9px;
}


/*.action-button.featured {
	background: #3498db;
	border-color: transparent;
	color: #fff;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.action-button {
	color: #2c3e50;
	text-decoration: none;
	font-weight: 600;
	border: 1px solid #bdc3c7;
	display: inline-block;
	padding: 5px 20px 7px;
	border-radius: 100px;
	line-height: normal;
	white-space: nowrap;
	font-size: 15px;
	vertical-align: middle;
	outline: 0;
	cursor: pointer;
	box-shadow: none;
	-webkit-transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
	-moz-transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
	-ms-transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
	transition: background 100ms cubic-bezier(0.215,0.61,0.355,1),border-color 100ms linear,color 100ms linear;
}*/

.more {
	font-weight: 600;
	font-size: 16px;	
}

.more:after, .caret:after {
	content: "";
	position: relative;
	display: inline-block;
	margin-left: 6px;
	vertical-align: baseline;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 6px 0 6px 6px;
	border-color: transparent transparent transparent #3498db;
}

/* Features summary */
.after-showcase-container {
	margin-right: auto;
	margin-left: auto;
	padding-left: 60px;
	padding-right: 60px;
	overflow: hidden;
	margin: 3em auto;
}

.block.block-bottom-padding.block-padding-half {
	padding-bottom: 30px;
}

.col-md-4, .col-xs-12 {
	float: left;
}

.col-xs-12 {
	width: 100%;
}

.col-md-4 {
	width: 31.9%;
}

.col-xs-12, .col-sm-12, .col-md-12, .col-lg-12, .col-md-4, .col-lg-4, .col-xs-6, .col-sm-6, {
	position: relative;
	min-height: 1px;
	padding-left: 15px;
	padding-right: 15px;
}

h3.sideline-heading {
	font-size: 14pt;
	text-transform: uppercase;
}

h3.sideline-heading::before {
	content: "_";
	display: block;
	font-size: 60px;
	color: #00b5ff;
	line-height: 0px;
	height: 44px;
}

.big-grid-item {
	margin-right: 2%;
	border-right: 1px solid #ECECEC;
}

.big-grid-item:nth-child(4), .big-grid-item:nth-child(7) {
	margin-right: 0px;
	border-right: 0;
}

.big-grid-item1 {
	margin-top: 2em;
	padding-top: 2em;
	position: relative;
}

.big-grid-item1 label {
	background: #ECECEC;
	height: 1px;
	display: block;
	position: absolute;
	top: -16px;
	width: 94%;
}

.text-center {
	text-align: center;
	margin-top: 70px;
}

.text-gray.text-shade-7 {
	color: #838383;
	line-height: 1.6em;
	font-size: 0.9em;
	width: 87%;
	margin: 0 auto;
}

.big-grid-item .feature_name, .code-sample .feature_name {
	font-size: 1.5em;
	color: #232323;
	font-family: trebuchet ms,'open_sansregular';
	font-weight: 700;
	padding: 1em 0 0.6em 0;
	display: block;
	color: #3498db;
}

/* scroll to top */
#scrollUp {
    bottom: 0;
	right: 0;
	width: 54px;
	height: 54px;
	background-repeat: no-repeat;
	-webkit-transition: margin-bottom 150ms linear;
	-moz-transition: margin-bottom 150ms linear;
	-o-transition: margin-bottom 150ms linear;
	transition: margin-bottom 150ms linear;
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAMAAACf4xmcAAAA+VBMVEVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUX////4+PhycnLV1dVGRkZQUFBzc3NkZGRtbW1vb29xcXFJSUlMTEx0dHR8fHyHh4eampqsrKytra2wsLC4uLi7u7u9vb3AwMDGxsbOzs7U1NRPT0/c3Nzd3d3e3t7l5eXq6urw8PD39/dHR0f5+fn6+vr7+/v+/v5ZWVl9i3TGAAAAKXRSTlMABAwPJSYnLS5MTlBRW1xdb3BxcnOoqarMzc7Q0dXW7O3u8fLz+fr7/LYykjkAAAFHSURBVHhejdRnc4JAEIDhBQtoEkOLYhTRKOpiS++99/b/f0x2ZDIuBwjv52fm5g52IZSi1xptz2s3aroCCcmmgyzHlGOQpLko5GqSqPI2xmTnw6q0hbF1S1ytDTChQWWhykNMbFj+V8UuLqlbDJRk49Ls4L4apqQDJbtpzJWJmZiaScxJZw6AGgFHNweiU0GPqJF/PRWYARuC2h75vn8msCo0w2pMijoNsya4UUX9nCDPBS+i7s/JfR9z5oXY+J3A5GF6SW60yxk/dD9QiB+35N522KH8Ci+Bog4n5J74FaoL9kpqhvNmz77/yR/EWLC9uytSQb+PXxf8eVXMkJr104OVzqxMv2VbBkpPY3qmkdmUsgxgr5h9nIMqiW64DqyVXsKJqxCqUI9T9UJ0DXZE1NEkiJazWhy1rBwkpBi0ovt9WtGGArw/4UO4DhGHfjwAAAAASUVORK5CYII=);
	/*top.png*/
}


#scrollUp:hover {
    margin-bottom: 0;
}

#scrollUp-active {
	display: none;
}

/* contribute */

.bg-blue-dark {
	background-color: #f5f5f5;
	color: #000;
	margin: auto;
	overflow: hidden;
}

.bg-blue-dark .container {
	float: left;
	padding: 40;
	width: 100%;
}

.bg-blue-dark h1 {
	color: #000;
	text-transform: uppercase;
}

.bg-blue-dark h2 {
	color: #000;
}

.contribute {
	margin-bottom: 12px;
	font-size: 34px; 
	font-weight: 100;
}

.contribute-center {

}

.contribute-option-container {
	float: left;
	margin-top: 30px;
	width: 60%;
	margin-right: 30px;
}

.contribute-options {
	float: left;
	width: 30%;
	text-align: center;
	color:#3498db;
}

.contribute-button-container {
	width: 30%;
	float: left;
	margin-top: 30px;
}

.btn.btn-ag-white-outlined {
	background: transparent;
	border-color: #ddd;
	color: #828a93;
	padding-top: 14px;
	padding-bottom: 14px;
	text-transform: uppercase;
	font-family: "Proxima N W01 Smbd";
}

.btn.btn-ag-white-outlined:hover {
	background: transparent;
	border-color: #3498db;
	color: #3498db;
}

/* Footer */	
#global-footer {
	overflow: hidden;
	background-image: url(data:image/png;base64,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);
	/*footer.png*/
	background-repeat: repeat;
	padding-top: 60px;
	position: relative;
}

#global-footer .wrapper {
	padding-left: 40px;
	max-width: 1220px;
}	

#global-footer .hexagon {
	float: left;
	margin-top: 6px;
	height: 70px;
	width: 70px;
}

#global-footer .navigation {
	padding-left: 70px;
	padding-right: 70px;
}

#global-footer .navigation .sub-info {
	padding-bottom: 40px;
	display: table;
	width: 67%;
}

.columns {
	float: left;
	min-height: 1px;
	position: relative;
}

#global-footer ul {
	list-style: none;
	padding: 0;
	border: 0;
	margin: 0;
	font: inherit;
	color: inherit;
	line-height: normal;
}

#global-footer .navigation .sub-info>ul:after {
	content: ".";
	visibility: hidden;
	display: block;
	height: 0;
	clear: both;
}

#global-footer .navigation .sub-info>ul>li {
	display: table-cell;
	width: 200px;
	padding-left: 24px;
	font-size: 18px;
	color: #bdc3c7;
}

#global-footer .navigation .sub-info>ul>li ul {
	margin-top: .4em;
}

#global-footer .navigation .sub-info>ul>li ul li {
	line-height: 1.6;
}

#global-footer .navigation .sub-info>ul>li ul li a {
	color: #75b9e7;
	font-size: 15px;
	-webkit-transition: color 100ms linear;
	-moz-transition: color 100ms linear;
	-ms-transition: color 100ms linear;
	transition: color 100ms linear;
}

#global-footer .navigation .sub-info>ul>li ul li a:hover, #global-footer footer a:hover {
	color:#fff;
}	

#global-footer .navigation .four {
	width: 33%;
}

#rss_mail_subscribe-3 {
	margin-bottom: 0;
}

.widget_rss_mail_subscribe {
	color: #bdc4c7;
	font-style: italic;
	font-size: 12px;
}

#global-footer .widget-title {
	margin-bottom: 30px;
	color: #fff;
	font-size: 17px;
	padding-left: 34px;
	line-height: 1.5;
}

#global-footer .widget-title:before {
	content: '';
	height: 20px;
	width: 20px;
	position: absolute;
	left: 0;
}

#feedburner_subscribe {
	margin: 0 0 10px 0;
}

#feedburner_subscribe .enter_text {
	width: 75%;
}

#feedburner_subscribe .submit_button {
	width: 25%;
}

.row:before, .row:after {
	content: " ";
	display: table;
}

.row:after {
 	clear: both;
}

input[type="text"], input[type="password"], input[type="email"], textarea {
	background-color: #fafafa;
	font-family: 'Source Sans Pro', "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
	font-style: normal;
	border: 1px solid #eaeaea;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	font-size: 12px;
	margin: 0 0 12px 0;
	padding: 6px 16px 6px 14px;
	height: 37px;
	width: 100%;
}

#feedburner_subscribe input[type="submit"] {
	border: none;
	height: 37px;
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	cursor: pointer;
	text-align: center;
	background-color: #26bdef;
}

.postfix {
	right: 2px;
	-moz-border-radius-topright: 2px;
	-webkit-border-top-right-radius: 2px;
	border-top-right-radius: 2px;
	-moz-border-radius-bottomright: 2px;
	-webkit-border-bottom-right-radius: 2px;
	border-bottom-right-radius: 2px;
}

.feedb-follows {
	padding-top: 28px;
}

.feedb-follows .item {
	float: right;
	margin-bottom: 28px;
	margin-right: 13px;
	height: 32px;
	width: 32px;
}

#global-footer footer {
	background: rgba(23, 27, 31, 0.5);
	clear: both;
	padding: 30px;
	color: #75818c;
}

#global-footer footer:after {
	content: ".";
	visibility: hidden;
	display: block;
	height: 0;
	clear: both;
}

footer .wrapper {
	padding-right: 40px;
}

#global-footer footer .contact {
	float: left;
}

#global-footer footer a {
	padding: 0 10px;
	color: inherit;
	text-decoration: none;
	-webkit-transition: color 100ms linear;
	-moz-transition: color 100ms linear;
	-ms-transition: color 100ms linear;
	transition: color 100ms linear;
}

#global-footer footer .legal {
	float: right;
}

/*contact-page*/

#stuning-header {
	height: 147px;
	padding-top: 36px;
	color: #fff;
	margin-bottom: 40px;
	margin-top: 10px;
}

#stuning-header.about-header {
	padding-top: 7px;
}

#stuning-header .twelve {
	width: 100%;
}

#page-title {
	position: relative;
	overflow: hidden;
	padding: 0 55px 25px;
	margin: 10px 0 20px;
	text-align: center;
}

#stuning-header a.back, #stuning-header a.back:before {
	border-color: #fff;
}

#stuning-header h1, #stuning-header a, #stuning-header .breadcrumbs span.del, #stuning-header .breadcrumbs a, #stuning-header .breadcrumbs {
	color: #fff;
}

a.back {
	display: inline-block;
	width: 41px;
	height: 41px;
	margin-right: 18px;
	text-align: center;
	border: 3px solid;
	border-radius: 100em;
	behavior: url(border-radius.htc);
	position: relative;
}

a.back, #stuning-header a.back {
	-moz-transition: color .2s linear, border-color .2s linear;
	-webkit-transition: color .2s linear, border-color .2s linear;
	-o-transition: color .2s linear, border-color .2s linear;
	transition: color .2s linear, border-color .2s linear;
}

a.back:before {
	content: '<';
	font-family: "fontello";
	font-style: normal;
	font-weight: bolder;
	speak: none;
	display: inline-block;
	text-decoration: inherit;
	width: 34px;
	font-size: 24px;
	line-height: 34px;
	left: 0;
	text-align: center;
	font-variant: normal;
	text-transform: none;
	position: absolute;
}

.page-title-inner {
	display: inline-block;
}

h1.page-title {
	font-weight: 400;
	padding-bottom: 4px;
	text-align: left;
	font-size: 26px;
}

.breadcrumbs {
	text-align: left;
	padding-left: 2px;
}

.breadcrumbs, .breadcrumbs a {
	font-size: 12px;
	color: #b9b9b9;
	font-style: italic;
}

#stuning-header .breadcrumbs span.del {
	text-indent: 7px;
	font-size: 22px;
	font-weight: bold;
	line-height: 12px;
}

.breadcrumbs span.del {
	display: inline-block;
}

.contact-info-rows {
	width: 90%;
	margin: auto;
}

.contact-info-rows .six {
	width: 60%;
	margin-right: 30px;
	margin-bottom: 20px;
	box-shadow: 0px 0px 1px #888898;
	padding: 30px;
}

.contact-info-rows .four {
	width: 36%;
}

#page_feedback {
	padding-top: 5px;
}

.commentform-inner input {
	width: 31%;
	margin-right: 2.8%;
	margin-bottom: 17px;
	display: inline-block;
}

.page-block-title {
	padding-bottom: 12px;
	margin-bottom: 15px;
}

.page-block-title h2 {
	font-size: 21px;
	margin: 0;
	line-height: 1.3;
	font-weight: 300;
}

.commentform-inner input:last-child {
	margin-right: 0;
}	

textarea {
	padding: 10px 6px 10px 14px;
	min-height: 130px;
	resize: vertical;
}

.three, .row .three {
	width: 25%;
}

.anti-spam-question {
	padding-top: 10px;
}

button.button {
	-webkit-appearance: none;
}

.contact-info {
	margin-bottom: 20px;
	box-shadow: 0px 0px 1px #888898;
	padding: 30px;
}

.contact-desc {
    line-height: 30px;
    font-style: italic;
}

.contact-desc p {
    font-style: italic;
}

/*about Us html page */ 
.about-us-info {
	width: 90%;
	margin: auto;
	margin-bottom: 30px;
	box-shadow: 0px 0px 1px #888898;
	padding: 30px;
}


.faq-info {
	box-shadow: 0px 0px 1px #888898;
	padding: 30px;
}

/*license page */ 

.license-info {
	font-size: 15px;
	width: 90%;
	margin: auto;
	margin-bottom: 30px;
	margin-top: 10px;
	box-shadow: 0px 0px 1px #888898;
	padding: 30px;
}

.license-info p {
	margin-bottom: 1em;
}

.license-info a {
	color: #3E4F90;
	font-weight: bold;
}

.license-info li {
	margin-left: 30px;
}

.license-info .codehilite {
	background: #f0f0f0;
}

.license-info pre, .license-info ol {
	margin-bottom: 20px;
}

/*faq page */ 

.faq-info {
	width: 90%;
	margin: auto;
	margin-bottom: 30px;
	margin-top: 10px;
}

.faq-info h2:first-child {
	margin-top: 0;
}	

.faq-info h2 {
	margin-top: 1em;
	line-height: 1.2em;
	margin-bottom: .3em;
	font-size: 18px;
	margin-top: 2.3em;
}

/*features page */

#wrap {
	margin: 30px auto;
}

.feature-list li .cell-title, .feature-list li .empty-cell {
	display: none;
}

.feature-list li.first .cell-title, .feature-list li.first .empty-cell {
	display: block;
}

.title-block {
	width: 100%;
	margin: 44px 0;
	text-align: center;
}

.title-block h1 {
	font-size: 2.4em;
}

.feature-list li.first {
	width: 357px;
}

.feature-list li {
	list-style: none;
	float: left;
	width: 82px;
	text-shadow: #fff 0 1px 0;
	-webkit-box-shadow: #888 0 1px 4px;
	-moz-box-shadow: #888 0 1px 4px;
	-o-box-shadow: #888 0 1px 4px;
	box-shadow: #888 0 1px 4px;
}

.feature-list li {
	width: 95px;
}

.clear-break {
	height: 22px;
	clear: both;
	border: none;
}

.feature-list li .cell {
	text-align: center;
	-webkit-transition: background-color .25s;
	-moz-transition: background-color .25s;
	transition: background-color .25s;
}

.feature-list li.first .empty-cell {
	display: block;
}	

.feature-list li .cell, .feature-list li .cell-title, .feature-list li .cell-header, .feature-list li .empty-cell {
	float: left;
	width: 58px;
	padding-left: 11px;
	vertical-align: middle;
	border: #aaa 1px solid;
	border-left-color: #fff;
	border-top-color: #fff;
	background: #ddd;
	background: rgba(255,255,255,0.6);
}


.feature-list li .cell-header, .feature-list li .empty-cell {
	font-size: 0.8em;
	text-align: center;
	line-height: 1;
	padding: 11px;
	height: 50px;
	background: #2d3033;
	color: #fff;
	text-shadow: #333 0 -1px 0;
	border-left-color: #fff;
	border-top: none;
	border-left-color: transparent;
}

.feature-list li .cell-title, .feature-list li .empty-cell {
	width: 261px;
}

.feature-list li .cell-title, .feature-list li .cell {
	padding-top: 6px;
	height: 36px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}	

.feature-list li .cell, .feature-list li .cell-header {
	width: 96px;
}

.feature-list li .cell-title:nth-child(4n+2), .feature-list li .cell:nth-child(4n+3) {
	background: #eee;
	background: rgba(255,255,255,0.9);
}

.supported {
	color: #5192c5;
}

/*build page */

.content.alternate {
	background: #f5f5f5;
}

.content {
	padding: 60px 40px;
	margin: 0 auto;
}

.wrapper.width-10 {
	max-width: 751.667px;
}

.width-10 {
	margin: 0 auto;
	width: 83.333%;
}

h1.hero {
	font-size: 70px;
	color: #3498db;
	font-weight: 100;
	line-height: 1.2;
	margin: .3rem 0;
}

.feature {
	font-size: 22px;
	color: #7f8c8d;
	line-height: 1.6;
}

.build-archives {
	margin: 2em 2em;
	overflow: hidden;
}

.build-archives td:hover {
	background-color: #29beef;
}

.build-archives td:hover .link-list {
	color: #fff;
}

.build-archives td:hover:after {
	border-color: transparent transparent transparent #fff;
}

.core-build-archives, .connect-build-archives, .web-build-archives {
	box-shadow: #888 0 1px 4px;
	width: 29.3%;
	float: left;
	margin: 2%;
}

th {
	font-size: 16px;
	padding: 15px;
}

td {
	border-top: 1px solid #ddd;
	padding: 15px;
}

.link-list {
	font-weight: 400;
	position: relative;
	transition: background-color .25s;
	float: left;
	width: 100%;
	color: #111;
}

.link-list .title {
	display: block;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.link-list .label {
	font-weight: 300;
	font-size: 0.9em;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	display: block;
	margin-top: 5px;
}

td:after {
	content: "";
	margin-top: 10px;
	position: absolute;
	border-style: solid;
	border-width: 6px 0 6px 6px;
	border-color: transparent transparent transparent #787878;
}


.underprogress {
	padding-top: 100px; 
	background-color: white;
}

.underprogress .header-container {
	width: 100%; 
	height: 200px;
}

.center {
	margin: 0 auto;
	display: table;
}

.underprogress .header {
	border: 3px solid #f2f2f2;
	display: table;
	margin: 0 auto;
	padding: 15px 30px;position: relative;font-size: 50px;font-weight: 100;
}

.underprogress .header-sub-container {
	display: table;
	margin: 0 auto;
	margin-top: 30px; 
	font-size: 20px;
}

.faq-header {
	background-color: #; 
	background-position: left;
}

.privacy-policy-header {
	background-color: #; 
	background-position: left;
}

.utility-bar input::-webkit-input-placeholder, .utility-bar input::-moz-placeholde {
	color: #E0E7E8; 
}

.utility-bar {
 	margin-top: -1px;
  	position: relative;
  	padding: 17px;
  	width: 100%;
 	background: #D3EDF2;
}

.utility-bar .container {
  overflow: hidden;
  color: #DAE7FD;
  text-overflow: ellipsis;
  white-space: nowrap;
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}

.container:before, .container:after {
  content: " ";
  display: table;
}

.social-row {
  margin: 7px 0 0 0;
  font-family: "AvenirNextLTPro-UltLt", "HelveticaNeue-Light", Helvetica, Arial, sans-serif;
  font-weight: bold;
}

.col-md-7 {
	width: 58.33333%;
	float: left;
}

.social-row li {
  display: inline-block;
  height: 27px;
  margin-right: 22px;
  font-size: 12px;
}

.social-row a {
  text-decoration: none;
  opacity: 0.6;
  -webkit-user-drag: none;
  -webkit-tap-highlight-color: transparent;
}

.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}

.col-md-5 {
  width: 41.66667%;
}

.utility-bar input {
  background: #A0CDD5;
  font-size: 13px;
  color: white;
}

.input-group-btn, .input-group .form-control {
  display: table-cell;
}

.input-group .form-control {
  width: 100%;
  margin-bottom: 0;
}

.input-group-btn {
  	position: relative;
  	white-space: nowrap;
  	width: 1%;
  	vertical-align: middle;
}

.btn.btn-default {
  border-color: #ddd;
  background: linear-gradient(to right, #52BED2 0%, #4CA5B5 100%);
  color: white;
}

.input-group-btn > .btn {
  position: relative;
}

.middle-header {
  background: linear-gradient(to right, #52BED2 0%, #4CA5B5 100%);
}

.middle-header .container {
	margin-right: auto;
  	margin-left: auto;
}

.middle-header .col-sm-6 {
}

.feature-img {
  -webkit-animation: fadeInDown 1s both;
  animation: fadeInDown 1s both;
  height: 510px;
  margin-top: 20px;
  margin-bottom: 20px;
  background-size: 520px 486px;
  min-height: 405px;
  background-position: center 15px;
}

.middle-header .col-sm-6 {
  width: 100%;
}

.middle-header h1 {
	margin: 70px 20px 70px 20px;
  	font-size: 42px;
  	font-weight: 200;
  	color: #ebf3ff;
  	align: center;
}

.middle-header h2 {
  margin: 0 0 70px 0;
  font-size: 25px;
  color: #B0E5F9;
  line-height: 28px;
  font-weight: bold;
  -webkit-font-smoothing: antialiased;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.grid-fixed {
  margin: 0 auto;
}

.grid-fixed:after, .grid-fixed:before {
  content: '.';
  clear: both;
  display: block;
  overflow: hidden;
  visibility: hidden;
  font-size: 0;
  line-height: 0;
  width: 0;
  height: 0;
}

.grid-fixed .code-sample {
  display: inline;
  float: left;
  width: 50%;
}

.codebox {
  border-left: 4px solid #52BED2;
  position: relative;
  padding-top: 40px;
  margin-bottom: 20px;
  background: #D3EDF2;
}

.codebox header {
  padding: 7px 7px 0 7px;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
  border-bottom: 2px solid #52BED2;
}

.codebox header nav {
  //float: left;
  //display: block;
  
  	margin:0;
    padding:0;
    text-align:center;
}

.codebox header nav .button-codebox:hover {
	cursor: pointer;
}

.codebox header nav .button-codebox {
  font-family: proxima-nova,"Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  font-weight: 600;
  font-style: normal;
  height: 23px;
  font-size: 11px;
  background: none;
  color: #3498db;
  border: none;
  border-right: 1px solid #1aaede;
}

.noborder {
	border: none !important;
}

.codebox header nav .button-codebox.selected {
  color: #fff;
  outline: 0;
  font-size: inherit;
}

.codebox .prettyprint {
  border-radius: 0 0 3px 3px;
  margin-bottom: 0;
}

.code-examples .prettyprint {
  overflow: scroll;
  position: relative;
  padding: 0;
  font-size: 13px;
  line-height: 24px;
  font-family: Monaco,"Lucida Console",monospace;
  height: 300px;
}

.token.comment {
  color: #7D8B99;
}

.sectCont {
	background: #D3EDF2 url(data:image/png;base64,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) repeat-x scroll left bottom;
	position: relative;
  	width: 100%;
 	padding-top: 35px;
}

.sectCont-hd {
  margin-bottom: 40px;
  text-align: center;
}

.mix-hdg_standout {
  color: #52BED2;
}

.hdg_2 {
  font-size: 32px;
}

.hdg {
  padding: 0;
  margin: 0;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-weight: 300;
  line-height: 1;
}

.sectCont-bd:last-child {
  margin-bottom: 0;
  padding-bottom: 20px;
}

.tile {
  display: block;
  padding: 18px;
  min-height: 320px;
  background: #ffffff none scroll no-repeat 0 0;
  border-radius: 5px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
}

.title-hd {
  margin-bottom: 18px;
}

.mix-hdg_thick {
  font-weight: 700;
}

.tile-media {
  border: 1px solid #e0e1e1;
  margin-bottom: 18px;
}

.tile-media > img {
  display: block;
}

.tile-desc {
  margin-bottom: 14px;
  font-size: 13px;
  line-height: 1.71429;
  text-overflow: ellipsis;
}

.tile-action {
  margin-bottom: 0;
}

.support-options {
	display: inline-block;
	padding-left: 50px;
	width:250px;
}



.about-header {
	background:linear-gradient(to right, #52BED2 0%, #4CA5B5 100%);
	background-position: center;
}



.faq-header {
	background:linear-gradient(to right, #52BED2 0%, #4CA5B5 100%);
	background-position: center;
}


.license-header {
	background:linear-gradient(to right, #52BED2 0%, #4CA5B5 100%);
	background-position: center;
}

.privacy-policy-header {
	background:linear-gradient(to right, #52BED2 0%, #4CA5B5 100%);
	background-position: center;
}



