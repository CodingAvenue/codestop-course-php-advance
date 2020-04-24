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
/// type=SS, id=7eaf6756-47d7-4ebf-8973-fad4fcd64017, answer=[3]

Execute the program. What is its output?

 - It prints `80`.

 - It prints `$remarks`.

 - It prints `Very Good`.

 - It prints `"Very Good"`.

 - It prints `Needs Improvement`.


/// type=MS, id=c803b96a-6ba7-4ff0-b388-66e87fc829ab, answer=[2,4]

Which of the following are variables?

 - `80`

 - `$remarks`

 - `Very Good`

 - `$studentGrade`

 - `$studentGrade > 75`


/// type=MS, id=89beb9eb-a58c-4bab-8325-a309000ce79c, answer=[3,5]

Which of the following are strings?

 - `80`

 - `$remarks`

 - `Very Good`

 - `$studentGrade`

 - `Needs Improvement`


/// type=SS, id=b2cdd465-1787-4c9a-95f8-2b85f87c3197, answer=[3]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `?:`?

 - It is a separator.

 - It is a question mark.

 - It is a ternary operator.

 - It is a comparison operator.

 - It is an assignment operator.


/// type=SS, id=82102e0b-071a-4f4b-b759-248336ca0f28, answer=[3]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `($studentGrade > 75)`?

 - It is an operator.

 - It is a ternary operator.

 - It is a condition operand.

 - It is a value for `true` operand.

 - It is a value for `false` operand.


/// type=SS, id=b442e196-765b-47dc-bbfb-c14acf362868, answer=[4]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `"Very Good"`?

 - It is an operator.

 - It is a ternary operator.

 - It is a condition operand.

 - It is a value for `true` operand.

 - It is a value for `false` operand.


/// type=SS, id=0c5de10e-5c67-4b7a-bc05-e72e19b643b7, answer=[5]

In the expression `($studentGrade > 75) ? "Very Good" : "Needs Improvement"` on line 3, what is `"Needs Improvement"`?

 - It is an operator.

 - It is a ternary operator.

 - It is a condition operand.

 - It is a value for `true` operand.

 - It is a value for `false` operand.


/// type=SS, id=65ec4e3f-0947-4bb2-ab29-0764d37c6df5, answer=[3]

What is the result of the conditional expression `($studentGrade > 75)` on line 3?

 - `80`

 - `75`

 - `true`

 - `false`

 - `Very Good`


/// type=SS, id=e32167f9-cd17-4ecc-967f-781c2c02b242, answer=[2]

Which statement best describes the code on line 3?

 - It assigns the strings `Very Good` and `Needs Improvement` to `$remarks`. 

 - The conditional expression `($studentGrade > 75)` evaluates to `true` and the string `Very Good` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `false` and the string `Very Good` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `true` and the string `Needs Improvement` is assigned to `$remarks`.

 - The conditional expression `($studentGrade > 75)` evaluates to `false` and the string `Needs Improvement` is assigned to `$remarks`.


/// type=SS, id=b297ac57-9996-4158-b98a-f5b0e3e742fd, answer=[4]

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
/// type=SS, id=717cb7b4-2b78-4d82-95fe-51854c55d9c1, answer=[5]

Execute the program. What is its output?

 - It prints `80`.

 - It prints `$remarks`.

 - It prints `Very Good`.

 - It prints `"Very Good"`.

 - It prints `Needs Improvement`.


/// type=MS, id=1fb43351-d119-4730-ad52-4c54ef523189, answer=[2,4,5]

Which of the following are ternary operands?

 - `$remarks`

 - `"Very Good"`

 - `$studentGrade = 75`

 - `"Needs Improvement"`

 - `($studentGrade > 75)`


/// type=SS, id=d00abcc0-5cf0-4cb3-b5b7-91c6d00c5e16, answer=[5]

Which of the following is a ternary expression?

 - `$studentGrade = 75`

 - `"Needs Improvement"`

 - `($studentGrade > 75)`

 - `$remarks = ($studentGrade > 75)`

 - `($studentGrade > 75) ? "Very Good" : "Needs Improvement"`


/// type=SS, id=f2b114c4-9c44-4d04-94de-648351a1b06c, answer=[4]

What is the result of the conditional expression `($studentGrade > 75)` on line 3?

 - `80`

 - `75`

 - `true`

 - `false`

 - `Very Good`


/// type=SS, id=2b79b315-aaf0-4730-9423-5d5f8b3d6bbe, answer=[5]

What value is assigned to `$remarks` on line 3?

 - `80`

 - `true`

 - `false`

 - `Very Good`

 - `Needs Improvement`


/// type=SS, id=bf8cfe2d-9c94-4999-91a2-d24e585f2050, answer=[5]

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
/// type=SS, id=1ffeb726-2e3f-4eaa-8357-0e3fb5d792f4, answer=[4]

Execute the program. What is its output?

 - It prints `75`.

 - It prints `$score`.

 - It prints `Invalid value`.

 - It prints `The student grade is: 75`.

 - It prints `The student grade is: Invalid value`.


/// type=SS, id=cb9851e6-b1a9-4c7d-93ec-e09b0aef6103, answer=[4]

Which of the following is a ternary expression?

 - `$score ?:`

 - `$score = 75`

 - `$studentGrade = $score`

 - `$score ?: "Invalid value"`

 - `"The student grade is: " . $studentGrade`


/// type=SS, id=3214521c-905c-48ef-9375-749ffa631b70, answer=[5]

What is `$score ?: "Invalid value"` on line 3?

 - It is a boolean expression.

 - It is an arithmetic expression.

 - It is a comparison expression.

 - It is an assignment statement.

 - It is a shorthand ternary expression.


/// type=MS, id=7cdd9b3c-d947-446d-bb2c-24e6e5d865f6, answer=[2,5]

Which statements correctly describe the code on line 3?

 - It returns the expression `$score ?: "Invalid value"`.

 - It assigns the value of the first operand `$score` to `$studentGrade`.

 - It assigns the expression `$score ?: "Invalid value"` to `$studentGrade`.

 - It assigns the value of the third operand `Invalid value` to `$studentGrade`.

 - `$score ?: "Invalid value"` is a ternary expression with the second operand omitted.


/// type=SS, id=1faf7219-0216-4120-a869-1a7b423fc3b6, answer=[2]

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
/// type=SS, id=72e4d1b6-f43f-41d0-b8a7-fc77691a934c, answer=[5]

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
/// type=SS, id=fba44087-af6a-414a-8037-ae3063d5fbbf, answer=[5]

What value is assigned to `$studentGrade` on line 3?

 - `0`

 - `75`

 - `true`

 - `false`

 - `Invalid value`


/// type=SS, id=7fbc8883-bcb8-43f3-86f5-f8c18de35596, answer=[4]

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
/// type=SS, id=1aba9b4b-ad92-4fb2-8af2-97ac48d318e4, answer=[2]

What value is assigned to `$studentGrade` on line 3?

 - `0`

 - `-5`

 - `true`

 - `false`

 - `Invalid value`


/// type=SS, id=2e4ce6d8-a120-4cfc-a307-0f989f1b81b8, answer=[4]

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

/// type=SS, id=4a905157-1667-4be3-b5af-b5c3f39d7d62, answer=[3]

How many operands does a ternary operator have?

 - `1`

 - `2`

 - `3`

 - `4`

 - `5`


/// type=MS, id=e8b722a4-d6c1-4fd9-a223-e9236f0bfb37, answer=[3,4]

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
/// type=SS, id=b4cd16f8-8c38-4902-a8f9-4b18d07ae485, answer=[2]

Execute the program. What is its output?

 - It prints `80`.

 - It produces an error.

 - It prints `Very Good`.

 - It prints `"Very Good"`.

 - It prints `Needs Improvement`.


/// type=SS, id=e3d37148-0d5d-4f3d-805e-d163adb96a43, answer=[2]

What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, id=07f66515-302d-4906-8ef4-230025a95414, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is enclosed in double quotes `""`.

 - On line 3, the exclamation `!` between `($studentGrade > 75)` and `"Very Good"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ! "Very Good" : "Needs Improvement"` is invalid.

 - On line 3, the exclamation `!` between `($studentGrade > 75)` and `"Very Good"` should be replaced with a question mark `?`.

:::


/// type=CR, id=c5f08030-9701-4819-93d5-6f36dffc7c34, answer=[tests/TernaryOperator/MissingQuestionMarkTest.php]

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
/// type=SS, id=7cb25b66-5751-41a5-b46f-a6711779c9bd, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, id=5e67ff4d-1324-407e-9a3a-3384b53f44c5, answer=[3,4,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is enclosed in double quotes `""`.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ? "Very Good" ; "Needs Improvement"` is invalid.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` should be replaced with a colon `:`.


:::


/// type=CR, id=d05d6687-d018-4875-aaec-c6e3548596ae, answer=[tests/TernaryOperator/MissingColonOnTernaryTest.php]

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
/// type=SS, id=97a672ad-2949-473b-8024-0f955c91550a, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=SS, id=22f56e54-cfc4-4782-9577-ec019ddad1f6, answer=[1]

Which statement best describes the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is enclosed in double quotes `""`.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ? "Very Good" ; "Needs Improvement"` is invalid.

 - On line 3, the semicolon `;` between `"Very Good"` and `"Needs Improvement"` should be replaced with a colon `:`.

:::


/// type=CR, id=ae131dc3-3e10-46cb-846f-25c229265406, answer=[tests/TernaryOperator/MissingSemiColonTest.php]

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
/// type=SS, id=5dda6003-4f56-4fde-86e3-a97674b03e25, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, id=ebd05e88-503b-4ca0-b0e5-2c04dc91eed7, answer=[2,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the second operand `Very Good` is not enclosed in double quotes `""`.

 - On line 3, the colon `:` between `"Very Good"` and `"Needs Improvement"` is not allowed.

 - On line 3, the ternary expression `($studentGrade > 75) ? Very Good : "Needs Improvement"` is invalid.

 - On line 3, the colon `:` between `"Very Good"` and `"Needs Improvement"` should be replaced with a question mark `?`.

:::


/// type=CR, id=9f9b488b-64c5-432a-86fd-52881c9bf057, answer=[tests/TernaryOperator/MissingDoubleQuotesOnOperandTest.php]

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
/// type=SS, id=ce87ef08-5b44-442c-b2f2-43f4c49c8624, answer=[5]

Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$remarks'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3


/// type=MS, id=110d618b-e8a1-4ae2-905c-04c9f4d07624, answer=[3,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 2;

 - On line 3, the operand `Invalid value` is enclosed in double quotes `""`.

 - On line 3, the statement `$studentGrade = $score  "Invalid value";` is invalid.

 - There is an assignment operator `=` between `$studentGrade` and `$score` on line 3.

 - There is no ternary operator `?:` specified between `$score` and `"Invalid value"` on line 3.

:::


/// type=CR, id=9e6d76e1-42ec-4ee0-b604-8ce715565679, answer=[tests/TernaryOperator/MissingTernaryOperatorTest.php]

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
/// type=SS, id=fdcd061b-b65b-4168-90e9-f57f6bc2755e, answer=[1]

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
/// type=SS, id=51772595-a664-4fc0-927c-f573fea36254, answer=[4]

Remove the semicolon `;` from the statement `$score = 75;` on line 2. Execute the program. What is the error message?

 - syntax error, unexpected `';'` on line number 3

 - syntax error, unexpected `'!'` on line number 3

 - syntax error, unexpected `'Good'` (T_STRING) on line number 3

 - syntax error, unexpected `'$studentGrade'` (T_VARIABLE) on line number 3

 - syntax error, unexpected `'"Invalid value"'` (T_CONSTANT_ENCAPSED_STRING) on line number 3

:::


/// type=CR, id=676c25ea-d99b-47d7-ac9e-de238d19be6d, answer=[tests/TernaryOperator/CorrectMultipleErrorsTest.php]

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

/// type=CR, id=a0c2f854-51d1-4e09-8276-b1ec224c9a27, answer=[tests/TernaryOperator/UseTernaryOperatorTest.php]

Write a program that uses a ternary operator `?:` to determine if a certain number is positive or negative. First, create a variable named `$number` and assign it the value `50`. Then, create a ternary expression that identifies if the value of `$number` is `positive` or `negative`. Assign the result to a variable named `$result`. Lastly, use `echo` to display the value of `$result`.

```php
<?php


?>
```


+++
