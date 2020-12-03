### Facts for Ternary Operator lesson:

The ternary operator `?:` is a conditional operator that simplifies an `if/else` statement. It has three operands: a condition, a value for `true`, and a value for `false`.

The ternary operator `?:` uses the left-hand operand if the condition evaluates to `true`. Otherwise, the right-hand operand is used for `falsy values`.

```php
$grade = 85;
$remarks = ($grade >= 75) ? 'Passed' : 'Failed';
```

In the example above, the conditional expression `$grade >= 75` evaluates to `true` and the string `Passed` is assigned to `$remarks`. 
