<?php 
header('Content-type: text/css');
$master = parse_ini_file('../templates/config/master.ini');
$palette = parse_ini_file('../templates/config/themepalettes.ini', true);
?>
html,body {
	background:<?php echo($palette[$master[palette]][bgcolor]) ?>;
}
#hd {
	background:<?php echo($palette[$master[palette]][color4]) ?>;
	border-bottom:20px <?php echo($palette[$master[palette]][sepcolor]) ?> solid;
	margin-top:10px;
	padding:5px;
}
#bd {
	background:<?php echo($palette[$master[palette]][color2]) ?>;
	font-size:1.05em;
}
a {
	text-decoration:none;
	color:<?php echo($palette[$master[palette]][link]) ?>;
}
img.floatright {
	float:right;
	margin-left:5px;
}
img.floatleft {
	float:left;
	margin-right:5px;
}
abbr, acronym, span.abbr {
	cursor: help;
	border-bottom: 1px dotted #646545;
}
strong {
	font-weight:bold;
}
li {
	margin:0 0 3px 14px;
	text-align:left;
}
ol li {
	list-style-type:decimal;	
}
ul li {
	list-style-type:square;	
}
ol, ul {
	margin:1.5em 0;
}
.help {
	font-size:.8em;
	margin:10px;
}
#pn-maincontent {
	padding:0 5px;
}
#pn-maincontent blockquote {
	margin: 0.5em 0 0 3em;
	font-weight:bold;
	line-height:1.5em;
	text-align:left;
}
#pn-maincontent p {
	margin-bottom: 10px;
}
#pn-maincontent li {
	margin:0 0 0 25px;
}
#pn-maincontent h1 {
	color:<?php echo($palette[$master[palette]][link]) ?>;
	font-size:2.5em;
	display:block;
}
#pn-maincontent h2, #pn-maincontent h3 {
	color:<?php echo($palette[$master[palette]][link]) ?>;
	font-size:1.2em;
	font-weight:bold;
	margin-top:10px;
}
#nav{
  padding:5px 5px 5px 0;
}
#ft {
	background:<?php echo($palette[$master[palette]][color3]) ?>;
	height:60px;
	padding:5px;
	text-align:center;
}
#ft a {
  color:black;
}