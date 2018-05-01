function showDescription(desc){
	var coll = document.getElementById('desc-content');

	document.getElementById('brand-ambassador').classList.remove("active");
	document.getElementById('digital-marketing').classList.remove("active");
	document.getElementById('corporate').classList.remove("active");
	document.getElementById('college').classList.remove("active");
	document.getElementById('designer').classList.remove("active");

	var item = document.getElementById(desc).className += " active";

	switch(desc){
		case "brand-ambassador":
			coll.innerHTML = "<li class=\"collection-item\">Brand Ambassador Stuff</li>" +
						"<li class=\"collection-item\">Build and manage the SEM and SMM campaigns across digital marketing platforms and optimise the spends to drive campaign performance</li>" +
						"<li class=\"collection-item\">Utilise a range of techniques including paid search, SEO and PPC.</li>" +
						"<li class=\"collection-item\">Create online banner adverts and oversee pay per click (PPC) ad management</li>" +
						"<li class=\"collection-item\">Managing the redesign of the company website.</li>" +
						"<li class=\"collection-item\">Manage the email marketing platform for the company and ensure it delivers maximum returns</li>" +
						"<li class=\"collection-item\">Develop and manage digital marketing campaigns, keep them upto-date with relevant and engaging content</li>" +
						"<li class=\"collection-item\">Write and optimise content for the website and social networking accounts such as Facebook and Twitter</li>" +
						"<li class=\"collection-item\">Edit and post videos, podcasts and audio content to online sites</li>" +
						"<li class=\"collection-item\">Arrange webinars and webcasts</li>" +
						"<li class=\"collection-item\">Identify new trends in digital marketing, evaluate new technologies and ensure the brand is at the forefront of industry developments, particularly developments in mobile marketing</li>" +
						"<li class=\"collection-item\">Excellent communication and project management skills</li>" +
						"<li class=\"collection-item\">Basic graphic designing skills are necessary</li>" +
						"<li class=\"collection-item\">Able to work independently in extremely fast paced, team environment; entrepreneurial mindset</li>";
			break;
		case "digital-marketing":
			coll.innerHTML = "<li class=\"collection-item\">Managing online brand and product campaigns to raise brand awareness.</li>" +
						"<li class=\"collection-item\">Build and manage the SEM and SMM campaigns across digital marketing platforms and optimise the spends to drive campaign performance</li>" +
						"<li class=\"collection-item\">Utilise a range of techniques including paid search, SEO and PPC.</li>" +
						"<li class=\"collection-item\">Create online banner adverts and oversee pay per click (PPC) ad management</li>" +
						"<li class=\"collection-item\">Managing the redesign of the company website.</li>" +
						"<li class=\"collection-item\">Manage the email marketing platform for the company and ensure it delivers maximum returns</li>" +
						"<li class=\"collection-item\">Develop and manage digital marketing campaigns, keep them upto-date with relevant and engaging content</li>" +
						"<li class=\"collection-item\">Write and optimise content for the website and social networking accounts such as Facebook and Twitter</li>" +
						"<li class=\"collection-item\">Edit and post videos, podcasts and audio content to online sites</li>" +
						"<li class=\"collection-item\">Arrange webinars and webcasts</li>" +
						"<li class=\"collection-item\">Identify new trends in digital marketing, evaluate new technologies and ensure the brand is at the forefront of industry developments, particularly developments in mobile marketing</li>" +
						"<li class=\"collection-item\">Excellent communication and project management skills</li>" +
						"<li class=\"collection-item\">Basic graphic designing skills are necessary</li>" +
						"<li class=\"collection-item\">Able to work independently in extremely fast paced, team environment; entrepreneurial mindset</li>";
			break;
		case "corporate":
			coll.innerHTML = "<li class=\"collection-item\">Corporate Executive Stuff</li>" +
						"<li class=\"collection-item\">Build and manage the SEM and SMM campaigns across digital marketing platforms and optimise the spends to drive campaign performance</li>" +
						"<li class=\"collection-item\">Utilise a range of techniques including paid search, SEO and PPC.</li>" +
						"<li class=\"collection-item\">Create online banner adverts and oversee pay per click (PPC) ad management</li>" +
						"<li class=\"collection-item\">Managing the redesign of the company website.</li>" +
						"<li class=\"collection-item\">Manage the email marketing platform for the company and ensure it delivers maximum returns</li>" +
						"<li class=\"collection-item\">Develop and manage digital marketing campaigns, keep them upto-date with relevant and engaging content</li>" +
						"<li class=\"collection-item\">Write and optimise content for the website and social networking accounts such as Facebook and Twitter</li>" +
						"<li class=\"collection-item\">Edit and post videos, podcasts and audio content to online sites</li>" +
						"<li class=\"collection-item\">Arrange webinars and webcasts</li>" +
						"<li class=\"collection-item\">Identify new trends in digital marketing, evaluate new technologies and ensure the brand is at the forefront of industry developments, particularly developments in mobile marketing</li>" +
						"<li class=\"collection-item\">Excellent communication and project management skills</li>" +
						"<li class=\"collection-item\">Basic graphic designing skills are necessary</li>" +
						"<li class=\"collection-item\">Able to work independently in extremely fast paced, team environment; entrepreneurial mindset</li>";
			break;
		case "college":
			coll.innerHTML = "<li class=\"collection-item\">College Executive</li>" +
						"<li class=\"collection-item\">Build and manage the SEM and SMM campaigns across digital marketing platforms and optimise the spends to drive campaign performance</li>" +
						"<li class=\"collection-item\">Utilise a range of techniques including paid search, SEO and PPC.</li>" +
						"<li class=\"collection-item\">Create online banner adverts and oversee pay per click (PPC) ad management</li>" +
						"<li class=\"collection-item\">Managing the redesign of the company website.</li>" +
						"<li class=\"collection-item\">Manage the email marketing platform for the company and ensure it delivers maximum returns</li>" +
						"<li class=\"collection-item\">Develop and manage digital marketing campaigns, keep them upto-date with relevant and engaging content</li>" +
						"<li class=\"collection-item\">Write and optimise content for the website and social networking accounts such as Facebook and Twitter</li>" +
						"<li class=\"collection-item\">Edit and post videos, podcasts and audio content to online sites</li>" +
						"<li class=\"collection-item\">Arrange webinars and webcasts</li>" +
						"<li class=\"collection-item\">Identify new trends in digital marketing, evaluate new technologies and ensure the brand is at the forefront of industry developments, particularly developments in mobile marketing</li>" +
						"<li class=\"collection-item\">Excellent communication and project management skills</li>" +
						"<li class=\"collection-item\">Basic graphic designing skills are necessary</li>" +
						"<li class=\"collection-item\">Able to work independently in extremely fast paced, team environment; entrepreneurial mindset</li>";
			break;
		case "designer":
			coll.innerHTML = "<li class=\"collection-item\">Designer Stuff</li>" +
						"<li class=\"collection-item\">Build and manage the SEM and SMM campaigns across digital marketing platforms and optimise the spends to drive campaign performance</li>" +
						"<li class=\"collection-item\">Utilise a range of techniques including paid search, SEO and PPC.</li>" +
						"<li class=\"collection-item\">Create online banner adverts and oversee pay per click (PPC) ad management</li>" +
						"<li class=\"collection-item\">Managing the redesign of the company website.</li>" +
						"<li class=\"collection-item\">Manage the email marketing platform for the company and ensure it delivers maximum returns</li>" +
						"<li class=\"collection-item\">Develop and manage digital marketing campaigns, keep them upto-date with relevant and engaging content</li>" +
						"<li class=\"collection-item\">Write and optimise content for the website and social networking accounts such as Facebook and Twitter</li>" +
						"<li class=\"collection-item\">Edit and post videos, podcasts and audio content to online sites</li>" +
						"<li class=\"collection-item\">Arrange webinars and webcasts</li>" +
						"<li class=\"collection-item\">Identify new trends in digital marketing, evaluate new technologies and ensure the brand is at the forefront of industry developments, particularly developments in mobile marketing</li>" +
						"<li class=\"collection-item\">Excellent communication and project management skills</li>" +
						"<li class=\"collection-item\">Basic graphic designing skills are necessary</li>" +
						"<li class=\"collection-item\">Able to work independently in extremely fast paced, team environment; entrepreneurial mindset</li>";
			break;
	}
}


function form(id) {
	console.log(id);
}