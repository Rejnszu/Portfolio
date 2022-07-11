<?php




$args = [
    "metaDescription" => "",

    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => ""
];
get_header(null, $args);
?>

<div id="entry" class="container-fluid entry justify-content-center align-items-center animate-fadein">
    <h1>Witaj w quizie dotyczącym wiedzy o mnie!</h1>
    <p>Jeśli odpowiesz poprawnie na wszystkie pytania, może warto by nawiązać współpracę.</p>
    <p>Pytania nie są trudne. Jeśli jesteś gotowy możesz przejść dalej
        klikając przycisk poniżej.</p>
    <button class="lets-start btn">Zaczynajmy</button>
</div>
<div id="main" class="container-fluid main  justify-content-center align-items-center">
    <span id="roundNumber" class="round-number"></span>
    <div id="gameContainer" class="container m-0 p-0">
        <div class="row p-0 m-0 d-flex justify-content-center">
            <span class="helper-wrapper">
                <span class="left-right"></span>
                <span class="right-left"></span>
                <img class="helper" src="<?php echo get_template_directory_uri() . '/assets/50.png'; ?>" alt="50/50">
            </span>
        </div>
        <h1 class="text-center mb-5">Co o mnie wiesz?</h1>
        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="col-sm-10 question-col">Czym zajmuje sie na co dzien ktos tam?</div>
        </div>
        <div class="row row-answers m-0 p-0">
            <div class="col-sm-6 p-0 wrapper">
                <div class="answer-col text-center">Odpowiedz a</div>
            </div>
            <div class="col-sm-6 p-0 wrapper">
                <div class="answer-col text-center">Odpowiedz b</div>
            </div>
            <div class="col-sm-6 p-0 wrapper">
                <div class="answer-col text-center">Odpowiedz c</div>
            </div>
            <div class="col-sm-6 p-0 wrapper">
                <div class="answer-col text-center">Odpowiedz d</div>
            </div>
            <button class="nextRound btn">Kolejne Pytanie</button>
        </div>

    </div>
    <div id="endContainer" class="container-end ">
        <p class="wynik-koncowy">Gratulacje twój wynik to!</p>
        <p class="comment">Komentarz do wyniku</p>
        <p class="comment">Hasło to : rejnszu1</p>
        <div class="btn-wrapper ">
            <button class="restart btn">Zagraj jeszcze raz</button>
            <a href="<?php echo get_home_url() ?>"> <button class="btn mt-3"> Wróc do strony głównej</button></a>
        </div>
    </div>
</div>


<?php get_footer(); ?>