$(document).ready(function () {
    $.getJSON("https://api.openweathermap.org/data/2.5/weather?q=Odense&units=metric&appid=886705b4c1182eb1c69f28eb8c520e20", function (data) {
        console.log(data)

        var icon = "https://api.openweathermap.org/img/w/" + data.weather[0].icon + ".png";

        var temp = data.main.temp + "°";

        var weather = data.weather[0].main;

        $('.weathericon').attr('src', icon);
        $('.temp').append(temp);
        $('.weather').append(weather);



    })

});

