# polish-words-generator

Polish words generator

## Installation

The preferred installation method is via `composer`. First use the require command, just run:

```bash
composer require korleader/polish-words-generator
```

Then run `composer update`

## Usage

### Getting Started

```php
$polgen = new korleader\PolishGenerator();
```

or create object with extra parameters

```php
$polgen = new korleader\PolishGenerator([
    'minWordsInSentence' => 10,
    'maxWordsInSentence' => 15,
    'minSentencesInParagraph' => 5,
    'maxSentencesInParagraph' => 10
]);
```

### Enable parameters

* minWordsInSentence - Minimum number of words in a sentence
* maxWordsInSentence - Maximum number of words in a sentence
* minSentencesInParagraph - Minimum number of sentences in the paragraph
* maxSentencesInParagraph - Maximum number of sentences in the paragraph
* paragraphTag - The HTML tag used to wrapping paragraphs
* wordsArray - Array with words to generate

### Generating words

```php
echo '1 word: '  . $polgen->words();
echo '10 words: ' . $polgen->words(10);
```

### Generating sentences

```php
echo '1 sentence:  ' . $polgen->sentences();
echo '10 sentences: ' . $polgen->sentences(10);
```

### Generating paragraphs

```php
echo '1 paragraph:  ' . $polgen->paragraphs();
echo '10 paragraphs: ' . $polgen->paragraphs(10);
```

### Extra methods

Set 10 words to generate in sentence
```php
$polgen->setSentenceWordsCount(10)
```

Set random between 10 and 15 words to generate in sentence
```php
$polgen->setSentenceWordsCount(10, 15)
```
Set 10 of sentences to generate in paragraph
```php
$polgen->setParagraphSentencesCount(5)
```

Set random between 10 and 15 sentences to generate in paragraph
```php
$polgen->setParagraphSentencesCount(5, 10)
```