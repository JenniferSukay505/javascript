<script>
	/*
	function function_name([parameter [, ...]])
	{
		statements
	}

	displayItems("Dog", "Cat", "Pony", "Hamster", "Tortoise")

	function displayItems(v1,v2,v3,v4,v5)
	{
		document.write(v1 + "<br>")
		document.write(v2 + "<br>")
		document.write(v3 + "<br>")
		document.write(v4 + "<br>")
		document.write(v5 + "<br>")
	}
	*/
</script>
<script>
	//written with loop
	displayItems("Dog", "Cat", "Pony", "Hamster", "Tortoise")
	function displayItems()
	{
		for(j = 0; j < displayItems.arguments.length ; ++j)
			document.write(displayItems.arguments[j] + "<br>")
	}
</script>
<script>
	/*
	document.write(fixNames("the", "DALLAS", "CowBoys"))

	function fixNames()
	{
		var s = ""

		for (j = 0 ; j < fixNames.arguments.length; ++j)
		s += fixNames.arguments[j].charAt(0).toUpperCase() +
				fixNames.arguments[j].substr(1).toLowerCase() + " "
				return s.substr(0, s.length-1)
	}
	*/
</script>

<script>
	//return array
	words = fixNames("the", "DALLAS", "Cowboys")
	for (j = 0 ; j < words.length ; ++j)
		document.write(words[j] + "<br>")

	function fixNames()
	{
		var s = array();

		for (j = 0 ; j < fixNames.arguments.length ; ++j)
		s[j] = fixNames.arguments[j].charAt(0).toUpperCase() +
				fixNames.arguments[j].substr(1).toLowerCase()

		return s
	}
</script>
<script>
	words = fixNames("the", "DALLAS", "CowBoys")
	document.write(words[0] + " " + words[2])

</script>
