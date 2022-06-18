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
            <button id="search_country" class="btn btn__search" type="submit">
                Where to go? 🤨
            </button>
        </div>
    </div>

    <section id="country_section" class="section section__country hidden">
        <h1 class="section__title">🇩🇪 Germany</h1>
        <p>Germany (German: Deutschland, pronounced [ˈdɔʏtʃlant] (listen)), officially the Federal Republic of Germany,[e] is a country in Central Europe. It is the second most populous country in Europe after Russia and the most populous member state of the European Union. Germany is situated between the Baltic and North seas to the north, and the Alps to the south; it covers an area of 357,022 square kilometres (137,847 sq mi), with a population of over 83 million within its 16 constituent states. Germany borders Denmark to the north, Poland and the Czech Republic to the east, Austria and Switzerland to the south and France, Luxembourg, Belgium and the Netherlands to the west. The nation's capital and largest city is Berlin and its financial centre is Frankfurt; the largest urban area is the Ruhr.</p>
    </section>

</main>

<script>
    const btnSearch = document.querySelector('#search_country');
    const countrySection = document.querySelector('#country_section');

    btnSearch.addEventListener('click', () => {
        btnSearch.classList.add('hidden');
        countrySection.classList.remove('hidden');
    });

</script>
</body>
</html>
