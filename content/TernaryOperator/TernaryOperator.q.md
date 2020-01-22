# Ternary Operator

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
$studentGrade = 80;
$remarks = ($studentGrade > 75) ? "Very Good" : "Needs Improvement";
echo $remarks;
?>
```
/// type=SS, answer=[3]

Execute the program. What is its output?

 - It prints `80`.

 - It prints `$remarks`.

 - It prints `Very Good`.

 - It prints `"Very Good"`.

 - It prints `Needs Improvement`.


/// type=MS, answer=[2,4]

Which of the following are variables?

 - `80`

 - `$remarks`

 - `Very Good`

 - `$studentGrade`

 - `$studentGrade > 75`


/// type=MS, answer=[3,5]

Which of the following are strings?

 - `80`

 - `$remarks`

 - `Very Good`

 - `$studentGrade`

 - `Needs Improvement`


/// type=SS, answer=[3]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `?:`?

 - It is a separator.

 - It is a question mark.

 - It is a ternary operator.

 - It is a comparison operator.

 - It is an assignment operator.


/// type=SS, answer=[3]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `($studentGrade > 75)`?

 - It is an operator.

 - It is a ternary operator.

 - It is a condition operand.

 - It is a value for `true` operand.

 - It is a value for `false` operand.


/// type=SS, answer=[4]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `"Very Good"`?

 - It is an operator.

 - It is a ternary operator.

 - It is a condition operand.

 - It is a value for `true` operand.

 - It is a value for `false` operand.


/// type=SS, answer=[5]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `"Needs Improvement"`?

 - It is an operator.

 - It is a ternary operator.

 - It is a condition operand.

 - It is a value for `true` operand.

 - It is a value for `false` operand.


/// type=SS, answer=[3]

What is the result of the conditional expression `($studentGrade > 75)` on line 3?

 - `80`

 - `75`

 - `true`

 - `false`

 - `Very Good`


/// type=SS, answer=[2]

Which statement best describes the code on line 3?

 - It assigns the strings `Very Good` and `Needs Improvement` to `$remarks`. 

 - The conditional expression `($studentGrade > 75)` evaluates to `true` and the string `Very Good` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `false` and the string `Very Good` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `true` and the string `Needs Improvement` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `false` and the string `Needs Improvement` is assigned to `$remarks`.


/// type=SS, answer=[4]

What value is assigned to `$remarks` on line 3?

 - `80`

 - `true`

 - `false`

 - `Very Good`

 - `Needs Improvement`

:::


:::

/// type=REPL, readonly=true

```php
<?php
$studentGrade = 75;
$remarks = ($studentGrade > 75) ? "Very Good" : "Needs Improvement";
echo $remarks;
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It prints `80`.

 - It prints `$remarks`.

 - It prints `Very Good`.

 - It prints `"Very Good"`.

 - It prints `Needs Improvement`.


/// type=MS, answer=[2,4,5]

Which of the following are ternary operands?

 - `$remarks`

 - `"Very Good"`

 - `$studentGrade = 75`

 - `"Needs Improvement"`

 - `($studentGrade > 75)`


/// type=SS, answer=[5]

Which of the following is a ternary expression?

 - `$studentGrade = 75`

 - `"Needs Improvement"`

 - `($studentGrade > 75)`

 - `$remarks = ($studentGrade > 75)`

 - `($studentGrade > 75) ? "Very Good" : "Needs Improvement"`


/// type=SS, answer=[4]

What is the result of the conditional expression `($studentGrade > 75)` on line 3?

 - `80`

 - `75`

 - `true`

 - `false`

 - `Very Good`


/// type=SS, answer=[5]

What value is assigned to `$remarks` on line 3?

 - `80`

 - `true`

 - `false`

 - `Very Good`

 - `Needs Improvement`


/// type=SS, answer=[5]

Which statement best describes the code on line 3?

 - It assigns the strings `Very Good` and `Needs Improvement` to `$remarks`. 

 - The conditional expression `($studentGrade > 75)` evaluates to `true` and the string `Very Good` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `false` and the string `Very Good` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `true` and the string `Needs Improvement` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `false` and the string `Needs Improvement` is assigned to `$remarks`.

:::


:::

/// type=REPL, readonly=true

```php
<?php
$score = 75;
$studentGrade = $score ?: "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - It prints `75`.

 - It prints `$score`.

 - It prints `Invalid value`.

 - It prints `The student grade is: 75`.

 - It prints `The student grade is: Invalid value`.


/// type=SS, answer=[4]

Which of the following is a ternary expression?

 - `$score ?:`

 - `$score = 75`

 - `$studentGrade = $score`

 - `$score ?: "Invalid value"`

 - `"The student grade is: " . $studentGrade`


/// type=SS, answer=[5]

What is `$score ?: "Invalid value"` on line 3?

 - It is a boolean expression.

 - It is an arithmetic expression.

 - It is a comparison expression.

 - It is an assignment statement.

 - It is a shorthand ternary expression.


/// type=MS, answer=[2,5]

Which statements correctly describe the code on line 3?

 - It returns the expression `$score ?: "Invalid value"`.

 - It assigns the value of the first operand `$score` to `$studentGrade`.

 - It assigns the expression `$score ?: "Invalid value"` to `$studentGrade`.

 - It assigns the value of the third operand `Invalid value` to `$studentGrade`.

 - `$score ?: "Invalid value"` is a ternary expression with the second operand omitted.


/// type=SS, answer=[2]

What value is assigned to `$studentGrade` on line 3?

 - `0`

 - `75`

 - `true`

 - `false`

 - `Invalid value`

:::


:::

/// type=REPL

```php
<?php
$score = 75;
$studentGrade = $score ?: "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```
/// type=SS, answer=[5]

In the statement `$score = 75;` on line 2, replace `75` with `0`. Execute the program. What is its output?

 - It prints `0`.

 - It prints `$score`.

 - It prints `Invalid value`.

 - It prints `The student grade is: 75`.

 - It prints `The student grade is: Invalid value`.

:::


:::

/// type=REPL

```php
<?php
$score = 0;
$studentGrade = $score ?: "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```
/// type=SS, answer=[5]

What value is assigned to `$studentGrade` on line 3?

 - `0`

 - `75`

 - `true`

 - `false`

 - `Invalid value`


/// type=SS, answer=[4]

In the statement `$score = 0;` on line 2, replace `0` with `-5`. Execute the program. What is its output?

 - It prints `0`.

 - It prints `$score`.

 - It prints `Invalid value`.

 - It prints `The student grade is: -5`.

 - It prints `The student grade is: Invalid value`.

:::


:::

/// type=REPL

```php
<?php
$score = -5;
$studentGrade = $score ?: "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```
/// type=SS, answer=[2]

What value is assigned to `$studentGrade` on line 3?

 - `0`

 - `-5`

 - `true`

 - `false`

 - `Invalid value`


/// type=SS, answer=[4]

In the statement `$score = -5;` on line 2, replace `-5` with `"A"`. Execute the program. What is its output?

 - It prints `A`.

 - It prints `$score`.

 - It prints `Invalid value`.

 - It prints `The student grade is: A`.

 - It prints `The student grade is: Invalid value`.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, answer=[3]

How many operands does a ternary operator have?

 - `1`

 - `2`

 - `3`

 - `4`

 - `5`


/// type=MS, answer=[3,4]

Which statements are true about the ternary operator `?:`?

 - It is a statement that assigns a value to a variable.

 - It defines the rules of which operand to evaluate first.

 - It is a conditional operator that simplifies an `if/else` statement.

 - It has three operands: a condition, a value for `true`, and a value for `false`.

 - It is a statement that contains constant values to be compared to the result of the evaluated expression.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
$studentGrade = 80;
$remarks = ($studentGrade > 75) ! "Very Good" : "Needs Improvement";
echo $remarks;
?>
```
/// type=SS, answer=[2]

Execute the program. What is its output?

 - It prints `80`.

 - It produces an error.

 - It prints `Very Good`.

 - It prints `"Very Good"`.

 - It prints `Needs Improvement`.


/// type=SS, answer=[2]

What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is enclosed in double quotes `""`.

 - On line 3, the exclamation `!` between `($studentGrade > 75)` and `"Very Good"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ! "Very Good" : "Needs Improvement"` is invalid.

 - On line 3, the exclamation `!` between `($studentGrade > 75)` and `"Very Good"` should be replaced with a question mark `?`.

:::


/// type=CR, answer=[tests/TernaryOperator/MissingQuestionMarkTest.php]

Correct the code so that it outputs the string `Very Good`.

```php
<?php
$studentGrade = 80;
$remarks = ($studentGrade > 75) ! "Very Good" : "Needs Improvement";
echo $remarks;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$studentGrade = 80;
$remarks = ($studentGrade > 75) ? "Very Good" ; "Needs Improvement";
echo $remarks;
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is enclosed in double quotes `""`.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ? "Very Good" ; "Needs Improvement"` is invalid.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` should be replaced with a colon `:`.


:::


/// type=CR, answer=[tests/TernaryOperator/MissingColonOnTernaryTest.php]

Correct the code so that it outputs the string `Very Good`.

```php
<?php
$studentGrade = 80;
$remarks = ($studentGrade > 75) ? "Very Good" ; "Needs Improvement";
echo $remarks;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$studentGrade = 75
$remarks = ($studentGrade > 75) ? "Very Good" : "Needs Improvement";
echo $remarks;
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=SS, answer=[1]

Which statement best describes the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is enclosed in double quotes `""`.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ? "Very Good" ; "Needs Improvement"` is invalid.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` should be replaced with a colon `:`.

:::


/// type=CR, answer=[tests/TernaryOperator/MissingSemiColonTest.php]

Correct the code so that it outputs the string `Needs Improvement`.

```php
<?php
$studentGrade = 75
$remarks = ($studentGrade > 75) ? "Very Good" : "Needs Improvement";
echo $remarks;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$studentGrade = 75;
$remarks = ($studentGrade > 75) ? Very Good : "Needs Improvement";
echo $remarks;
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, answer=[2,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is not enclosed in double quotes `""`.

 - On line 3, the colon `:` between `"Very Good"` and `"Needs Improvement"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ? Very Good : "Needs Improvement"` is invalid.

 - On line 3, the colon `:` between `"Very Good"` and `"Needs Improvement"` should be replaced with a question mark `?`.

:::


/// type=CR, answer=[tests/TernaryOperator/MissingDoubleQuotesOnOperandTest.php]

Correct the code so that it outputs the string `Needs Improvement`.

```php
<?php
$studentGrade = 75;
$remarks = ($studentGrade > 75) ? Very Good : "Needs Improvement";
echo $remarks;
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
$score = 75;
$studentGrade = $score  "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the operand `Invalid value` is enclosed in double quotes `""`.

 - On line 3, the statement `$studentGrade = $score  "Invalid value";` is invalid.

 - There is an assignment operator `=` between `$studentGrade` and `$score` on line 3.

 - There is no ternary operator `?:` specified between `$score` and `"Invalid value"` on line 3.

:::


/// type=CR, answer=[tests/TernaryOperator/MissingTernaryOperatorTest.php]

Correct the code so that it outputs the string `The student grade is: 75`.

```php
<?php
$score = 75;
$studentGrade = $score  "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```


:::

/// type=REPL

```php
<?php
$score = 75;
$studentGrade = $score ?: "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```
/// type=SS, answer=[1]

Remove the colon `:` from the expression `$score ?: "Invalid value"` on line 3. Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3

:::


:::

/// type=REPL

```php
<?php
$score = 75;
$studentGrade = $score ? "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```
/// type=SS, answer=[4]

Remove the semicolon `;` from the statement `$score = 75;` on line 2. Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$studentGrade'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3

:::


/// type=CR, answer=[tests/TernaryOperator/CorrectMultipleErrorsTest.php]

Correct the code so that it outputs the string `The student grade is: 75`.

```php
<?php
$score = 75
$studentGrade = $score ? "Invalid value";
echo "The student grade is: " . $studentGrade;
?>
```


+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/TernaryOperator/UseTernaryOperatorTest.php]

Write a program that uses a ternary operator `?:` to determine if a certain number is positive or negative. First, create a variable named `$number` and assign it the value `50`. Then, create a ternary expression that identifies if the value of `$number` is `positive` or `negative`. Assign the result to a variable named `$result`. Lastly, use `echo` to display the value of `$result`.

```php
<?php


?>
```


+++
