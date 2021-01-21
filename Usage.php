<?php

require('Rating.php');
require('Printer.php');

use App\Rating;
use App\Printer;

$text = '
RegExr was created by gskinner.com, and is proudly hosted by Media Temple.

Edit the \U3345 0000____dsss ==== = ..v,,vasdf kjg Expression & Text to see matches. Roll over matches or the expression for details. PCRE & JavaScript flavors of RegEx are supported. Validate your expression with Tests mode.

ssf iu%^Y#RIT^GHFJPK<L{  6^* {}}{  7ff8s u-------$ tesst tesst tesst3 tesst tesst
The side bar includes a Cheatsheet, full Reference, and Help. You can also Save & Share with the Community, and view patterns you create or favorite in My Patterns.

Explore results with the Tools below. Replace & List output custom results. Details lists capture groups. Explain describes your expression in plain English.

To help you tackle this problem easily, PHP has two different functions which maintain key-value association while sorting arrays by their values. These two functions are asort() and arsort(). The following code snippet sorts the same $fruit_preferences array but uses asort() to do so.

';

$rating =  Rating::createWordsRating($text);

echo Printer::print($rating);