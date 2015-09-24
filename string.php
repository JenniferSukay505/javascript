<script>
string = "THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG";
//with statement not recommended by phpstorm or mozilla
with(string)
{
document.write ("The string is " + length + " characters <br>");
document.write ("In upper case it's: " + toUpperCase())
}
</script>
