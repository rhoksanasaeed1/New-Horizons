// Imports
import scala.io.Source

// Read in a file
val lines = Source.fromFile("New Horizons.txt").getLines.toList

// Splits lines in the file by words
val words = lines.flatMap(_.split("\\W+"))

// Filter out empty words
val nonEmptyWords = words.filter(_.nonEmpty)

// Count the words in the file
val count = nonEmptyWords.map(word => (word, 1)).groupBy(_._1).mapValues(_.map(_._2).sum)

// Calculate the top 10 words
val top10Words = count.toSeq.sortBy(- _._2).take(10).toMap

// Print out the top 10 word alongside with count
println("Top 10 Most Common Words")
top10Words.foreach { case(word, count) => println(s"$word: $count") }

// Create an array of the words in the file, sorted alphabetically
val sortedWords = nonEmptyWords.sorted

// Create a map from the words to their frequency
val wordFreq = scala.collection.mutable.Map[String, Int]().withDefaultValue(0)
for (word <- sortedWords) wordFreq(word) += 1

// Filters the map so only words that occur at least twice remain
val frequentWords = wordFreq.filter { case(word, count) => count > 1 }

// Print out the words that occur multiple times and how many times
println("Words that Occur More than Once:")
frequentWords.foreach { case(word, count) => println(s"$word: $count") }

// Create a map from each word to its length
val wordLengths = frequentWords.map { case(word, _) => (word, word.length) }

// Print out the words and their lengths
println("Lengths of Each Word:")
wordLengths.foreach { case(word, length) => println(s"$word: $length") }

// Calculate the average length of the words
val avgLength = wordLengths.map(_._2).sum / wordLengths.size
println("Average Word Length: " + avgLength)

// Find all the words starting with the same letter as the file
val sameLetterWords = nonEmptyWords.filter(_.head == lines.head.head)

// Print out all the words starting with the same letter
println("Words Starting with Same Letter as File:")
sameLetterWords.foreach(println)

// Create a map from each word to its reversed form
val reversedWords = sameLetterWords.map { word => (word, word.reverse) }

// Print out all the words and their reversed forms
println("Reversed Words:")
reversedWords.foreach { case(word, reverse) => println(s"$word: $reverse") }

// Create a map from each word to its sorted form
val sortedWords = sameLetterWords.map { word => (word, word.sorted) }

// Print out all the words and their sorted forms
println("Sorted Words:")
sortedWords.foreach { case(word, sorted) => println(s"$word: $sorted") }

// Find all the words which are anagrams
val anagrams = wordFreq.filter { case(word, _) => sortedWords(word) == sortedWords.values.toSet.head }.keys

// Print out all the anagrams
println("Anagrams:")
anagrams.foreach(println)