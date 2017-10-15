
function run()
{
    var movies=["Diary Of A Wimpy Kid The Long Haul","Baby Driver","Big Sick","Gintama"];
    var selected = document.getElementById("movieSelected").value;

    for(var i=0; i<movies.length; i++)
    {
        if(selected==movies[i])
            document.getElementById(movies[i]).style.display="block";
        else
            document.getElementById(movies[i]).style.display="none";
    }
}


function checkFields()
{
    var movie = document.getElementById("movieSelected").value;
    var session = document.getElementById("session").value;


    var sessionError = document.getElementById("sessionError");
    var movieError = document.getElementById("movieError");

    if (movie == "") {
        movieError.textContent = "Select the movie";
        return false;
    }

    else {
        movieError.innerHTML = "";

    }

    if (session == "") {
        sessionError.textContent = "Select the session";
        return false;
    }

    else  {
        sessionError.innerHTML = "";
    }

    if(movie != "" && session != "")
    {

        return true;

    }

}
