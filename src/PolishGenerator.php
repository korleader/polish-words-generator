<?php
/**
 * Polish Word Generator
 *
 * PHP version 5.3+
 *
 * Licensed under The MIT License.
 * Redistribution of these files must retain the above copyright notice.
 *
 * @author    Piotr Koryciński <piotr@korycinski.pl>
 * @copyright Copyright 2017 Piotr Koryciński
 * @license   http://www.opensource.org/licenses/mit-license.html
 * @link      https://github.com/korleader/polish-words-generator
 */

namespace korleader;

class PolishGenerator
{
    /**
     * @var array
     */
    public $words = [
        "aby", "angielskiej", "asesor", "balu", "bez", "bezładnie", "bieg", "biegało", "bielsze", "Bonapart",
        "bronisz", "bronić", "broszurki", "brząknął", "bukietów", "był", "było", "były", "błoni", "błękitnym",
        "chartów", "chciano", "chwały", "chybkim", "chłopiec", "ciche", "ciekawymi", "cielic", "czarował", "czary",
        "czekają", "czerwone", "czuł", "czyje", "czytano", "często", "Częstochowy", "człek", "dalej", "damach",
        "dawno", "dał", "deszcz", "dla", "doczekał", "dom", "domu", "domysłów", "dorodniejsza", "dostatecznej",
        "dostatek", "drodze", "drzeć", "dwa", "dziedziniec", "dzieje", "dzisiejszej", "echem", "ekonomom", "faworytny",
        "fijołkowe", "folwarku", "francuszczyzny", "Francuza", "Francuzów", "gdy", "gdyby", "go", "gospodarstwo",
        "gości", "grządek", "góry", "głowa", "głupie", "ich", "iskier", "ja", "jak", "jakich", "jakim", "jakoby", "jasnej",
        "jegomościa", "jest", "jeśli", "jąkał", "kapitol", "kazał", "każdej", "kim", "kołkiem", "końca", "końcu",
        "kończył", "krocz", "kryjomu", "krzaki", "krzycząc", "krzykliwy", "kręciła", "kształt", "który", "którą",
        "kwestarz", "kłaść", "Lachowicz", "lasem", "laty", "lecz", "lepiej", "leżące", "litości", "lity", "ma", "maleńki",
        "miejscu", "mieszka", "między", "miły", "mniej", "moda", "mody", "mogłem", "moim", "moje", "Moskali", "mu", "mógł",
        "mój", "mówiąc", "mądry", "młodzie", "młodzież", "nad", "nadobnej", "nadzwyczajnej", "nagle", "nagłym", "Napoleon",
        "naprzód", "nareszcie", "nas", "nasza", "nauki", "nic", "nich", "nie", "nieczynności", "niej", "Niemnem",
        "nieporządek", "Niesiołowski", "niestare", "nigdy", "nikt", "nim", "no", "obejrzał", "obiegłszy", "objął",
        "obok", "obszerność", "obyczaje", "oczy", "oczyma", "od", "odgadywał", "odgłos", "odmiana", "odmienił", "ogrodowych",
        "ogródek", "ojczyzn", "opieki", "palcami", "palestra", "pan", "pana", "panny", "Paryża", "pas", "pazurami", "pewna",
        "pełen", "pierwsze", "pierwszy", "pies", "pieszo", "pod", "podkomorzy", "podróżny", "politycznych", "porznięty",
        "porządkiem", "powiewając", "pozłocist", "prace", "prowadzić", "przeciw", "przeczyć", "przed", "przeprosiwszy",
        "przerywał", "przesuwają", "przetknięto", "przy", "przyjąć", "przypadkiem", "przyrzekł", "przysięgał", "przyszłą",
        "psy", "pustki", "pójdziemy", "płci", "rana", "raz", "razem", "reducie", "Rejtan", "rodzi", "rolnicze", "rozciągnionych",
        "rozkaz", "rozlewał", "rozmawiał", "ruch", "ruchawy", "rymsza", "rzekł", "rzęsisty", "równie", "róży", "rąk", "ręku",
        "sam", "siadł", "siebie", "sieci", "siekąc", "sieni", "skończywszy", "skłonił", "sobie", "spory", "spostrzegł",
        "spotykać", "sprawach", "spójrzała", "spór", "stado", "stają", "stanie", "stary", "stempel", "sto", "stogi",
        "stosach", "stoła", "stołu", "strzelby", "susy", "suwarów", "szedł", "szlachcic", "szmery", "sznurek", "sędzia",
        "służyć", "Tadeusza", "tajnie", "tak", "takim", "tem", "teraz", "to", "trawy", "trudno", "trzeba", "trzy", "trzykrólskie",
        "trąbki", "twarz", "tym", "tyrolskich", "ubiór", "ucichły", "urządza", "utrzymywał", "użątku", "wachlarz", "wam",
        "waszeć", "wbiega", "wedle", "wewnątrz", "widać", "widzę", "więc", "wojewoda", "Wojski", "wolał", "wolna", "wozów",
        "woźny", "wrogów", "wsiedli", "wstecz", "wszyscy", "wszystko", "wtem", "wtenczas", "wyjeżdża", "wyjść", "wykwintny",
        "wzrostem", "wójtom", "za", "zabawę", "zamiary", "zaradzić", "zaraz", "zaszczepki", "zawitała", "zawitała", "zawrócił",
        "zbyt", "zląkł", "zna", "zobaczenia", "zostawionem", "zwaliska", "zwierciadła", "zwrotem", "zwrócił", "zwłaszcza", "łące",
        "łąk", "ścieżkami", "świeżo", "święta", "żeby", "żonaty"
    ];

    /**
     * @var int
     */
    public $minWordsInSentence = 10;

    /**
     * @var int
     */
    public $maxWordsInSentence = 15;

    /**
     * @var int
     */
    public $minSentencesInParagraph = 5;

    /**
     * @var int
     */
    public $maxSentencesInParagraph = 10;

    /**
     * @var string
     */
    public $paragraphTag = 'p';

    /**
     * PolishGenerator constructor.
     * @param array $params
     */
    public function __construct($params = array())
    {
        if (isset($params['minWordsInSentence']) && isset($params['maxWordsInSentence'])) {
            $this->setSentenceWordsCount($params['minWordsInSentence'], $params['maxWordsInSentence']);
        }
        if (isset($params['minSentencesInParagraph']) && isset($params['maxSentencesInParagraph'])) {
            $this->setParagraphSentencesCount($params['minSentencesInParagraph'], $params['maxSentencesInParagraph']);
        }
        if (isset($params['paragraphTag'])) {
            $this->paragraphTag = $params['paragraphTag'];
        }
        if (isset($params['wordsArray']) && is_array($params['wordsArray'])) {
            $this->words = $params['wordsArray'];
        }
    }

    /**
     * @param int $min
     * @param int $max
     */
    public function setSentenceWordsCount($min, $max = null)
    {
        $this->minWordsInSentence = $min;
        $this->maxWordsInSentence = isset($max) ? $max : $min;
    }

    /**
     * @param int $min
     * @param int $max
     */
    public function setParagraphSentencesCount($min, $max = null)
    {
        $this->minSentencesInParagraph = $min;
        $this->maxSentencesInParagraph = isset($max) ? $max : $min;
    }

    /**
     * @param int $count how many words to generate
     * @return string
     */
    public function words($count = 1)
    {
        $words = array();
        for ($i = 0; $i < $count; $i++) {
            shuffle($this->words);
            $words[] = reset($this->words);
        }
        return $this->render($words);
    }

    /**
     * @param int $count how many paragraphs to generate
     * @return string
     */
    public function paragraphs($count = 1)
    {
        $paragraphs = array();
        for ($i = 0; $i < $count; $i++) {
            $string = $this->sentences($this->randomCount($this->minSentencesInParagraph, $this->maxSentencesInParagraph));

            $paragraphs[] = sprintf('<%1$s>%2$s</%1$s>', $this->paragraphTag, $string);
        }
        return $this->render($paragraphs);
    }

    /**
     * @param int $count how many sentences to generate
     * @return string
     */
    public function sentences($count = 1)
    {
        $sentences = array();
        for ($i = 0; $i < $count; $i++) {
            $sentences[] = $this->words($this->randomCount($this->minWordsInSentence, $this->maxWordsInSentence)) . ".";
        }
        return $this->render($sentences);
    }

    /**
     * @param array $output array of generated strings
     * @return string
     */
    private function render($output)
    {
        $text = implode(" ", $output);
        return ucfirst($text);
    }

    /**
     * @param $min
     * @param $max
     * @return int
     */
    private function randomCount($min, $max)
    {
        return mt_rand($min, $max);
    }
}