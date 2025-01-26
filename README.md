# PHP Pass-by-Reference Array Modification Bug

This repository demonstrates a subtle but common error in PHP related to pass-by-reference and array modifications within functions. The example highlights the unexpected behavior that can occur if the pass-by-reference mechanism is not fully understood.

The `bug.php` file showcases the problematic code, while `bugSolution.php` presents the corrected version. The README explains the issue and how to avoid it.

**Understanding the Issue:**

PHP's pass-by-reference can lead to surprises when working with arrays. The example shows that even if you don't explicitly use `&` when returning an array from a function, modifications inside the function can still affect the original array if references are involved within the function's foreach loop. This is because `foreach` with `&` inside the loop creates references to the array elements.