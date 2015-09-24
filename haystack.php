<script>//loop
    counter=0

    while (counter < 5)
    {
        document.write("Counter: " + counter + "<br>")
        ++counter
    }
</script>
<script>
    count = 1
    do
    {
        document.write(count + " times 7 is " + count * 7 + "<br>")
    } while (++count <=7)
</script>
<script>
    for (count = 1; count <=7; ++count)
    {
        document.write(count + "times 7 is " + count * 7 + "<br>");
    }
</script>
<script>
    haystack      = new Array()
    haystack[17]  = "Needle"

    for (j=0; j<20; ++j)
    {
        if (haystack[j] == "Needle")
        {
            document.write("<br> Found at location " + j)
            break
        }
        else document.write(j + ",")
    }
    document.write "<br>"

</script>
<script>
    haystack = new Array()
    haystack[4] = "Needle"
    haystack[11] = "Needle"
    haystack[17] = "Needle"

    for (j = 0; j < 20; ++j)
    {
        if (haystack[j] == "Needle")
        {
            document.write ("<br> Found at location " + j + "<br>")
            continue
        }
        document.write(j + ", ")
    }
</script>