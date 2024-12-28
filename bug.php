This code snippet demonstrates a common error in PHP related to using the ternary operator within an echo statement.  The issue stems from operator precedence and the way PHP handles string concatenation in this context.

```php
<?php
echo $a = 10 ? 'Value is: ' . $a : 'Value is not set';
?>
```

This code *intends* to check if variable `$a` is set and, if so, echo 'Value is: 10'; otherwise, it should echo 'Value is not set'. However, due to PHP's operator precedence, the ternary operator's result will be concatenated with the string 'Value is: ' *only if* the condition is true. If `$a` isn't set or is null or falsey, the ternary operator's `false` result will not be concatenated, it will just be echoed on its own because of the position of `echo` operator.

The unexpected behavior arises because the ternary operator has higher precedence than the concatenation operator (.). Thus, PHP evaluates the ternary expression first, and then performs the concatenation.  If the condition is false, this results in just outputting 'Value is not set'.  This leads to unexpected or incorrect output in many instances.

This is subtle and frequently missed, especially by those transitioning from other languages with different operator precedence rules.