<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Operators

Remember to put your answers in appropriate `php` files that are prepared for the exercises.  
Additional exercises are not obligatory to pass the prework but try to complete them.

#### Exercise 1

In `exercise1.php` create two variables named `first, second`.

1. Assign two **different** logical values to them.
2. Compare them using the ```==``` operator and assign the result to a third variable named `isFirstEqualSecond`.
3. Use `var_dump()` to check the result.
4. Change the value of the `second` variable to the opposite and check the result again.
5. Set both variables to `false` and check the result again.

##### Quiz Exercise 1

In `exercise1.php` there is a variable named `$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

What is the difference in the use of `==` and `===`?  
a) `==` is used to compare integers and `===` to compare strings  
b) `==` compares values, while `===` compares the type of variable as well  
c) `===` changes the value of a logical variable to the opposite value  
d) There is no difference

#### Exercise 2

In `exercise2.php` create three variables named `nr1, nr2, resultModulo`.

1. Two of them should store any integers
2. The third one named ```$resultModulo``` should store the number 0.
3. Calculate the remainder of the division (`modulo`) of those two numbers (`nr1 modulo nr2`) and assign the result to the ```$resultModulo``` variable
4. Display the ```$resultModulo``` variable on the page.

If you are not sure how the modulo operator works, test it with other numbers.

#### Exercise 3

In `exercise3.php` create three variables named `str1, str2, joinedStrings`.

1. Two of them should store any strings of your choice
2. The one named ```$joinedStrings``` should store an empty string, e.g. `$joinedStrings = '';`
3. Concatenate the strings (`.`) and save the result in the ```$joinedStrings``` variable
4. Display the result on the page.

#### Exercise 4

In `exercise4.php` create two variables:

 ```php
$myNumber = 4;
$myString = "4";
 ```

1. Compare those variables using ```==``` and ```===``` operators and save the results in variables named respectively `resultFirst, resultSecond`.
2. Display the results on the page.
3. Display the results again, this time using `var_dump()` function.

##### Quiz Exercise 4

In `exercise4.php` there is a variable named `$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

What is the difference between using `echo` and `var_dump()`?
a) `echo` displays the text on the page while `var_dump()` displays variable value and type
b) There is no difference
c) `echo` works only for numbers and strings
d) `echo` displays the text on the page while `var_dump()` checks variable type and returns it as a string

#### Exercise 5

In `exercise5.php` create a variable named ```counter```. Assign the number `145` to it.

1. Display its value on the page (in a new line `<br>`).
2. Using incrementation, increase the value of the ```counter``` variable.
3. Display its value on the page (in a new line `<br>`).
4. Using decrementation, decrease the value of the ```counter``` variable.
5. Display its value on the page (in a new line `<br>`).

#### Exercise 6

In `exercise6.php` create three variables named `nr1, nr2, result`.

1. Two of them should store any **integers**
2. The one named ```$result``` should store the ```null``` value
3. Check if the first number is greater than the second one using an appropriate operator and save the result in the ```$result``` variable as a boolean value
4. Display the variable and its type on the page using `var_dump()`.

#### Exercise 7

In `exercise7.php` create three variables named `nr1, nr2, result`.

1. Assign numbers `7` and `4` to variables `nr1` and `nr2` respectively.
2. Assign their sum to the `result` variable and display it on the page.
3. Change the value of the `nr1` variable to `10` but do not change the code that you have already written. Write new code in the lines below.
4. Again, calculate the sum, assign it to the `result` variable and display on the page.

##### Quiz Exercise 7

In `exercise7.php` there is a variable named `$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

The result in point 4 is different than in point 2. Why?  
a) This is a PHP error
b) In PHP automatic variable addition occurs if the variables are numbers
c) The variable was overwritten with new value
d) The result is exactly the same

#### Exercise 8 - additional

1. Read what is the actual difference between loose equality (`==`) and strict equality (`===`).
   Detailed description can be found [here][comparison].
2. Compare two arrays that you will find on the page above.

#### Exercise 9 - additional

In `exercise9.php` do the following:

1. Define variable `x` with the value of `16`, and variable `y` with the value of `15`
2. Define variable `x_y` that will store a **logical value** being the result of the expression `x < y`
3. Define variable `t` with the logical value of truth, and variable `f` with the logical value of false.
4. Define variable `t_f` that will store a **logical value** being the result of the expression `t OR f`
5. Define variable `last` that will store a **logical value** being the result of the expression `x_y and t_f`
6. Check if the result in the `last` variable is in line with the expected `false`.

<!-- Links -->
[comparison]: https://php.net/manual/en/types.comparisons.php
