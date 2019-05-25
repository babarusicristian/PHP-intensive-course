exercise<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Variables and data types

Remember to put your answers in appropriate `php` files that are prepared for the exercises.  

#### Exercise 1
In `exercise1.php` create 5 variables.
Assign the following data to them:

1. integer
2. floating point number
3. string
4. number + string, e.g. (`2 . "two"`), the full stop is a concatenation (connection) sign
5. boolean

Names of the variables should be created according to the pattern: `$var` and the exercise point number, e.g. `$var1` or `$var3`.  
Display the values of those variables on the page.
Use `var_dump` function to check variable data type

Example:
```php
//This variable stores an integer
$var8 = 23;
var_dump($var8);
echo $var8;
```

##### Quiz Exercise 1

In `exercise1.php` there is a variable named `$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

What will be the type of variable obtained from joining a string with a **float**?  
a) Integer
b) String  
c) Error, those types cannot be joined together
d) Float

#### Exercise 2
In `exercise2.php` create three variables named `nr1, nr2, result`.

1. Two of them should store any **integers**
2. The one named `$result` should store the number `0`
3. Save the sum (use the addition sign`+`) of those numbers in the `$result` variable and display the result on the page.
4. See what the type of the `$result` variable is.

#### Exercise 3
In `exercise3.php` create three variables named `nr1, nr2, result`.

1. `nr1` should store any **integer**
2. `nr2`should store any **float**
3. `$result` should store the number `0`
4. Save the sum of those numbers in the `$result` variable and display the result on the page
5. See what the type of the `$result` variable is.

##### Quiz Exercise 3

In `exercise3.php` there is a variable named`$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

What will be the type of variable obtained from joining an integer with a **float**?  
a) Integer
b) Float  
c) Error, those types cannot be joined together
d)  Number in exponential form

#### Exercise 4
In `exercise4.php` create a variable named `$someVariable` and **do not assign anything to it**.

1. Display it on the page and check its type.

##### Quiz Exercise 4

In `exercise4quiz.php` there is a variable named`$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

What was displayed on the page when you checked the variable from this exercise?
a) Variable value is `0` and it is an integer
b) Code was not executed
c) Nothing
d) `Notice` about an unidentified variable

#### Exercise 5
In `exercise5.php` create a variable named `$number` and save any integer in it.

1. Create two variables with strings as shown below:

   ```php
   $string1 = "My favorite number is: $number";
   $string2 = 'My favorite number is: $number';
   ```
2. Display them on the page.

##### Quiz Exercise 5

In `exercise5.php` there is a variable named `$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

What is the difference between using `'` and `"` in the case of strings?
a) There is none
b) In the case of `'` use, a `Notice` appears
c) `'` displays text as it is, whereas `"` changes variables (if there are any) to their values
d) If you use `"`, automatic concatenation occurs.
