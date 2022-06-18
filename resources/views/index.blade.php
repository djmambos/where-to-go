<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
<main class="wrapper__main">
    <!-- Main button for search random place -->
    <div id="wrapper" class="">
        <div class="">
            <button id="search_country_btn" class="btn btn__search" type="submit">
                Where to go? 🤨
            </button>
        </div>
    </div>

    <section id="country_section" class="section section__country hidden">
        <h1 id="country_title" class="section__title"></h1>
        <p id="country_description" class=""></p>
    </section>

</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    const countrySection = document.querySelector('#country_section');

    $(document).ready(function () {
        let btnSearch = $('#search_country_btn');
        let countrySection = $('#country_section');

        // Add click event for search place button
       $(btnSearch).click(function () {
            btnSearch.addClass('hidden');
            countrySection.removeClass('hidden');
            $.get('/get_country')
                .done(function (data) {
                    let countryDescription = data.description;
                    let iso2 = data.iso_2;
                    let name_en = data.name_en;

                    let countrySection = $('#country_section');
                    console.log(countrySection.find('#country_title'));
                    countrySection.find('#country_title').text(`${iso2} ${name_en}`);
                    countrySection.find('#country_description').text(countryDescription);
                });
       });
    });

</script>
</body>
</html>
