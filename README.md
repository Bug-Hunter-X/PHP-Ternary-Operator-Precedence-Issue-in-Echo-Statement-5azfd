# PHP Ternary Operator Precedence Bug

This repository demonstrates a subtle but common error in PHP involving the ternary operator's precedence when used within an `echo` statement.  The bug arises from the unexpected behavior of string concatenation in this context, which can lead to incorrect output.  The solution provides a corrected approach to ensure the intended functionality.

**Bug:** The primary issue lies in the precedence of the ternary operator (?:) relative to the string concatenation operator (.).  Incorrectly placing the ternary expression in an echo will result in unexpected behavior, depending on the condition's truthiness.

**Solution:** The solution illustrates how to correctly structure the expression to achieve the desired output while prioritizing the string concatenation correctly by using parentheses for proper order of operations.