<?php 

/*
The Problem Solve By MD Rafsan 
The Problem is 

Given the names and grades for each student in a class of
students, store them in a nested list and print the name(s) of any student(s) having the second lowest grade.
Note: If there are multiple students with the second lowest grade, order their names alphabetically and print each name on a new line.

Example
The ordered list of scores is , so the second lowest score is . There are two students with that score:
. Ordered alphabetically, the names are printed as:

        alpha
        beta

Input Format
The first line contains an integer, the number of students.
The subsequent lines describe each student over lines.
- The first line contains a student's name.
- The second line contains their grade.

Constraints
   There will always be one or more students having the second lowest grade.

Output Format
Print the name(s) of any student(s) having the second lowest grade in. If there are multiple students, order their names alphabetically and print each one on a new line.

Sample Input 0

            5
            Harry
            37.21
            Berry
            37.21
            Tina
            37.2
            Akriti
            41
            Harsh
            39

Sample Output 0

            Berry
            Harry

Explanation 0

There are students in this class whose names and grades are assembled to build the following list:

python students = [['Harry', 37.21], ['Berry', 37.21], ['Tina', 37.2], ['Akriti', 41], ['Harsh', 39]]
The lowest grade of belongs to Tina. The second lowest grade of belongs to both Harry and Berry, so we order their names alphabetically and 
print each name on a new line.

*/


// Initialize an empty list to store names and scores
$datalist = [];

// Get the number of inputs
$test_cases = intval(readline("Enter the number of students: "));

for ($i = 0; $i < $test_cases; $i++) {
    // Get the name and score for each student
    $name = readline("Enter name: ");
    $score = floatval(readline("Enter score: "));

    // Add name and score as a sublist to datalist
    $datalist[] = [$name, $score];
}

// Function to solve and process the data, same as earlier example
function solve($datalist) {
    // Step 1: Extract the unique scores
    $scores = array_map(function($entry) {
        return $entry[1];
    }, $datalist);

    $scores = array_unique($scores);  // Remove duplicates
    sort($scores);  // Sort scores in ascending order

    // Step 2: Find the second lowest score
    $second_lowest_score = $scores[1];

    // Step 3: Extract the sublists where the score is equal to the second-lowest score
    $second_lowest_students = [];
    foreach ($datalist as $entry) {
        if ($entry[1] == $second_lowest_score) {
            $second_lowest_students[] = $entry;
        }
    }

    // Step 4: Sort the sublist alphabetically by name
    usort($second_lowest_students, function($a, $b) {
        return strcmp($a[0], $b[0]);  // Compare names alphabetically
    });

    // Step 5: Print the names along with their scores
    foreach ($second_lowest_students as $student) {
     print( $student[0] . ": " . $student[1] . "\n");
    }
}

// Call the solve function with the collected data
print_r (solve($datalist));
