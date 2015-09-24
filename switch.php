<script>
    onerror = errorHandler;

    document.write("Welcome to this website");
    document.write("<br>");

    function errorHandler(message, url, line)
    {
        out  =    "Sorry, an error was encountered.   \n\n";
        out +=    "Error: "        + message        + "\n";
        out +=    "URL: "          +  url           + "\n";
        out +=    "Line:"          + line           + "\n\n";
        out +=    "Click OK to continue.              \n\n";
        alert(out);
        return true;
    }

    page= "News";
    switch(page)
    {
        case "Home":
            document.write("You selected Home");
            break;
        case "About":
            document.write ("You selected About");
            break;
        case "News":
            document.write("You selected News");
            break;
        case "Login":
            document.write("You selected Login");
            break;
        case "Links":
            document.write("You selected Links");
            break;
        default:
            document.write("Unrecognized selection");
            break;
    }
</script>
