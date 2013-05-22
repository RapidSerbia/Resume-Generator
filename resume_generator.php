<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:400,300|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">


<!-- HTML5 shim for IE backward compatability -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
	<![endif]-->
      
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    </script><script type="text/javascript" src="http://www.quirksmode.org/quirksmode.js"></script>

<script type="text/javascript">
<!--

var counter = 0;

function init() {
	document.getElementById('moreFields').onclick = moreFields;
	moreFields();
	document.getElementById('moreFields2').onclick = moreFields2;
	moreFields2();
}


function moreFields() {
	counter++;
	var newFields = document.getElementById('readroot').cloneNode(true);
	newFields.id = '';
	newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name
		if (theName)
			newField[i].name = theName + counter;
	}
	var insertHere = document.getElementById('writeroot');
	insertHere.parentNode.insertBefore(newFields,insertHere);
}


function moreFields2() {
	counter++;
	var newFields = document.getElementById('readroot2').cloneNode(true);
	newFields.id = '';
	newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name
		if (theName)
			newField[i].name = theName + counter;
	}
	var insertHere = document.getElementById('writeroot2');
	insertHere.parentNode.insertBefore(newFields,insertHere);
}

// -->
</script>





<title>Untitled Document</title>
</head>

<body style="padding-top: 0px;">
<div class="container-fluid">
<header class="row-fluid">
<h1>Helen's Resume Generator</h1>
<p style="font-size: 19px; margin: 15px 0 0px">Click the big blue button to view my resume. (Or go ahead and make your own!)</p>

</header>
<section class="row-fluid">

<form action="resume.php" method="post">
<div class="generate"><input class="btn btn-large btn-info transition" type="submit" value="Generate Resume"/></div>

<article class="span12">
<h2 style="padding-top: 30px;">Contact</h2>
<p class="span2">Name:</p> <input class="span10" type="text" name="fname" value="Helen Frost">
<p class="span2">Phone: </p><input class="span10" type="tel" name="phone" value="612 251 2236">
<p class="span2">Email: </p><input class="span10" type="email" name="email" value="helen@frostcreative.co">
<p class="span2">Address:</p> <input class="span10" type="text" name="address" value="13 1/2 5th Street NE, Minneapolis MN, 55413">
</article>

<article class="span12">
<h2>Experience</h2>
<p class="span2">Title:</p> <input class="span10" type="text" name="title" value="Web Developer">
<p class="span2">Company: </p><input class="span10" type="text" name="company" value="Frost Creative">
<p class="span2">Dates: </p><input class="span10" type="text" name="dates" value="Jan 2012 - Present">
<p class="span2">Location: </p><input class="span10" type="text" name="location" value="Minneapolis, MN">
<p class="span2">Website: </p><input class="span10" type="text" name="website" value="www.frostcreative.co">
<p class="span2">Description: </p><textarea class="span10" rows="6" name="description">
Develop responsive websites including custom Wordpress themes
Execute web development based on wireframes and prototypes
Provide current technology solutions to meet job requirements
Contribute to creative direction for web projects, including UI and UX design
Manage all aspects of client relationships</textarea>
</article>

<article class="span12">
<p class="span2">Title:</p> <input class="span10" type="text" name="title2" value="Web Designer & Developer">
<p class="span2">Company: </p><input class="span10" type="text" name="company2" value="DDMS">
<p class="span2">Dates: </p><input class="span10" type="text" name="dates2" value="April 2013 - Present">
<p class="span2">Location: </p><input class="span10" type="text" name="location2" value="St Paul, MN">
<p class="span2">Website: </p><input class="span10" type="text" name="website2" value="www.ddmsinc.com">
<p class="span2">Description: </p><textarea class="span10" rows="6" name="description2">
Responsible for redesign and development of ddms website (not yet live)
Designing and developing websites for client projects
Provide web support to current website clients
Execute concepts and designs for workflow diagrams</textarea>
</article>

<article class="span12">
<p class="span2">Title:</p> <input class="span10" type="text" name="title3" value="Administrative Technician (Part Time)">
<p class="span2">Company: </p><input class="span10" type="text" name="company3" value="DDMS">
<p class="span2">Dates: </p><input class="span10" type="text" name="dates3" value="April 2012 - March 2013">
<p class="span2">Location: </p><input class="span10" type="text" name="location3" value="St Paul, MN">
<p class="span2">Website: </p><input class="span10" type="text" name="website3" value="www.ddmsinc.com">
<p class="span2">Description: </p><textarea class="span10" rows="6" name="description3">
Provided content management & maintenance for internal and external web projects
Developed user friendly help documentation for cloud based internet application, Project Portal
Assisted in weekly testing, tracking and reporting of Project Portal updates
Developed standard operating procedures for various administrative tasks</textarea>
</article>

<article class="span12">
<p class="span2">Title:</p> <input class="span10" type="text" name="title4" value="Web Developer">
<p class="span2">Company: </p><input class="span10" type="text" name="company4" value="Media Axis">
<p class="span2">Dates: </p><input class="span10" type="text" name="dates4" value="February 2009 - December 2011">
<p class="span2">Location: </p><input class="span10" type="text" name="location4" value="Port Elizabeth, South Africa">
<p class="span2">Website: </p><input class="span10" type="text" name="website4" value="www.mediaaxis.co.za">
<p class="span2">Description: </p><textarea class="span10" rows="6" name="description4">
Led front end development on a multitude of web projects
Met with clients to discuss website goals and proposals for development
Collaborated on projects from concepts to production
Created and managed client email campaigns</textarea>
</article>


<div id="readroot" style="display: none; margin-bottom: 40px;" class="add">
<p class="span2">Title:</p> <input class="span10" type="text" name="title5" value="Audit Coordinator">
<p class="span2">Company: </p><input class="span10" type="text" name="company5" value="Infor Global Solutions">
<p class="span2">Dates: </p><input class="span10" type="text" name="dates5" value="March 2008 - Jan 2009">
<p class="span2">Location: </p><input class="span10" type="text" name="location5" value="Kings Hill, United Kingdom">
<p class="span2">Website: </p><input class="span10" type="text" name="website5" value="www.infor.com">
<p class="span2">Description: </p><textarea class="span10" rows="6" name="description5">
Coordinated software audits with corporate IT directors worldwide
Provided technical support throughout audit lifecycles
Managed time effectively with 100+ clients across eight time zones</textarea>
<input style="margin-bottom: 8px" class="btn btn-small" type="button" value="- Remove Position"
		onclick="this.parentNode.parentNode.removeChild(this.parentNode);" />
</div>
<span id="writeroot"></span>
<input style="margin-top: -40px" class="btn btn-small" type="button" id="moreFields" value="+ Add Another Position" />


<h2>Education</h2>
<div id="readroot2" style="display: none; margin-bottom: 40px;" class="add">
<p class="span2">Degree:</p> <input class="span10" type="text" name="degree" value="B.A. in Media Communication">
<p class="span2">Institution: </p><input class="span10" type="text" name="institution" value="Nelson Mandela Metropolitan University">
<p class="span2">Location: </p><input class="span10" type="text" name="ed_location" value="Port Elizabeth, South Africa">
<p class="span2">Graduated:</p> <input class="span10" type="text" name="graduated" value="December 2007" style="margin-bottom: 20px;">
<input style="margin-bottom: 8px" class="btn btn-small" type="button" value="- Remove Education"
		onclick="this.parentNode.parentNode.removeChild(this.parentNode);" />
</div>
<span id="writeroot2"></span>
<input style="margin-top: -40px" class="btn btn-small" type="button" id="moreFields2" value="+ Add More Education" />



<article class="span12">
<h2>Skills</h2>
<p class="span2">Things I'm good at: </p><textarea class="span10"rows="4" name="skills">
Proficient in Adobe CS6 Dreamweaver, Fireworks, Photoshop, Illustrator
HTML5, CSS3, Less, jQuery, JavaScript, Wordpress, Bootstrap
Experience with PHP, MySQL, CoffeeScript</textarea>
</article>

<div class="span12 generate_bottom">
<input class="btn btn-large btn-info" type="submit" value="Generate Resume" />
</div>

</form>

</section>

</div>
</body>
</html>