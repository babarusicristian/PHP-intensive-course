Exercise<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Program flow control

Remember to put your answers in appropriate `php` files that are prepared for the exercises.  
Additional exercises are not obligatory to pass the prework but try to complete them.

#### Exercise 1

1. In `exercise1.php` create two variables named `nr1, nr2` and assign any integers to them.
2. Next, using the conditional ```if ... else ``` statement, display on the page which of the two numbers is greater.
3. The displayed string should be as follows: `7 is the greater of the two numbers.`

#### Exercise 2

1. In `exercise2.php` create two variables named `nr1, nr2, nr3` that will store integers.
2. Next, using Następnie the conditional `if ... elseif ... else` statement, display on the page which of the three numbers is the greatest.
3. The displayed string should be as follows: `The greatest number of 7, 2, 11 is 11.`

#### Exercise 3

1. In `exercise3.php` create a loop that will write the text "I like PHP" on the page 10 times.
2. Write both `for` loop, and `while` loop.
3. In total, the text will be displayed 20 times on the page.

#### Exercise 4

1. In `exercise4.php` create a loop that will display numbers from 1 to 100 on the page, one per line (`<br>`).
2. Write both `for` loop, and `while` loop.
3. In total, 200 numbers will be displayed on the page.

#### Exercise 5

1. In `exercise5.php` create variables named `$resultFor` and `$resultWhile` and assign the number `0` to both of them.
2. Next, create a loop that will add numbers from 1 to 10 and save the result in `$resultFor` or `$resultWhile` variable.
3. The loop should add the next number from the given range to `$resultFor` or `$resultWhile` variable every time it is launched (in every iteration of the loop).
4. Write both `for` loop, and `while` loop.

#### Exercise 6

1. In `exercise6.php` write code that will display all numbers from zero to **n** based on the variable value, e.g. `$n = 5;`.
For each number, write if it is even or odd.  

Example:

```php
0 – even
1 – odd
2 – even
3 – odd
...
```

Change the value of`$n` and run the page.
Write both `for` loop, and `while` loop.

*Hint: How do we check if a number is even or odd? You just calculate modulo Jak sprawdzić czy liczba jest parzysta lub nieparzysta? All you need to do is calculate the remainder of its division by `2`. If the result is 0, the number is even. Otherwise it is odd.*

#### Exercise 7

1. In `exercise7.php` create two nested independent loops and display the values of their counters (counters should be named `$i` and `$j`) in each iteration.
2. Each of the loops should iterate from `0` to `10` **including 10**
3. The way the data should be displlayed is: ```echo "i = $i, j = $j";```
4. Complete the task using two `for` loops.

#### Exercise 8

In `exercise8.php` there is a script that displays in the console a pattern made of `n` asterisks, as the one you can see below.
Asterisks in a single line should be separated with spaces.
Rows should be separated with a new line sign `<br>`.  
Analyze it very carefully.
Example for ```$n = 5```:

```php
* * * * *

* * * * *

* * * * *

* * * * *

* * * * *
```

Use nested loops in this exercise!

#### Exercise 9

In `exercise9.php` write script that will draw the following pattern based on the `n` variable value:

for `$n = 5`:

```php
* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
```

for `$n = 3`:

```php
* 2 3
* * 3
* * *
```

Elements in a single row should be separated with spaces.
Rows should be separated with a new line sign `<br>`.

To create such a pattern, use the conditional `if` statement within the nested loop. This will allow you to decide if an asterisk should be written in a given place or the counter from the nested loop.

#### Exercise 10

In `exercise10.php` write a script that will draw the following pattern based on the value of the `n` variable (below you see it for ```$n = 5```).  
Use nested loops to achieve it.

```php
*
* *
* * *
* * * *
* * * * *
```

You can do this exercise in two ways:
1. using dependent loops.
2. using independent loops and the conditional `if` statement.

Elements in a single row should be separated with spaces.
Rows should be separated with a new line sign `<br>`.

*Get your inspiration prom previous exercises. You will need to think for a bit and to understand nested loops.*


#### Exercise 11

In `exercise11.php` write a script that will draw the following pattern based on the value of the `n` variable (here you see it for ```n = 5```):

```php
* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
* * * * *
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5
```

Elements in a single row should be separated with spaces.
Rows should be separated with a new line sign `<br>`.

To create such a pattern, use the conditional `if` statement within the nested loop. This will allow you to decide if an asterisk should be written in a given place or the counter from the nested loop.

#### Exercise 12 - additional

1. In `exercise12.php` write script that will define three letters in variables: `a, b, c`.
2. The script should check if the given data can be lengths of the three sides of a triangle.
3. This geometrical figure can only be be built from three lines if the sum of two line lengths is greater than the third length, which means:

```php
a + b > c
c + b > a
a + c > b
```

When checked, display the following information on the page:  

`A triangle can be built from the given sides.`  

or  

`A triangle cannot be built from the given sides.`

#### Exercise 13 - additional

In `exercise13.php` write script that will grade a test.

* `0 - 39` pts - unsatisfactory
* `40 - 54` pts - passing
* `55 - 69` pts - satisfactory
* `70 - 84` pts - good
* `85 - 98` pts - very good
* `99 - 100` pts - excellent

1. Create a variable named `points` that will store the test result.
2. First, check if the number of points is equal to or greater than `0`. If not, display the following message on the page: `Score below 0.`
3. Check if the number of points is less than or equal to `100`. If not, display the following message on the page: `Score over 100.`
4. Then, check what grade corresponds with the given score and display it on the page in the form: `Result: good`
5. Complete this exercise once using the `if ... elseif ... else` construction, and a second time using `switch`.

#### Exercise 14 - additional

In `exercise14.php` write script that will create a multiplication table for a given `n` variable. For example, for ```$n = 3``` the result will be the following:

<table>
  <tr>
    <td>1 x 1 = 1</td>
    <td>1 x 2 = 2</td>
    <td>1 x 3 = 3</td>
  </tr>
  <tr>
    <td>2 x 1 = 2</td>
    <td>2 x 2 = 4</td>
    <td>2 x 3 = 6</td>
  </tr>
  <tr>
    <td>3 x 1 = 3</td>
    <td>3 x 2 = 6</td>
    <td>3 x 3 = 9</td>
  </tr>
</table>


Use the `*` operator to multiply numbers.
Use `HTML` and `CSS` for table formatting.
Remember to add a space between numbers and the signs: `x` and `=`.

#### Exercise 15 - additional

In `exercise15.php`:

1. Write a script that will calculate the value of `x!`, where `!` means factorial, and `x` is a variable.  
2. Use both known loops to achieve this.
3. The factorial should be saved in the `factorial` variable.
4. After you calculate the factorial, display a message on the page, e.g.: `Factorial 3! equals 6.`

A factorial is the result of multiplying all integers starting from 1 and ending with the given number, which means:

```php
5! = 1*2*3*4*5 = 120
8! = 1*2*3*4*5*6*7*8 = 40320
```

#### Exercise 16 - additional

In `exercise16.php`:

1. Add two variables `x` and `y` that will be positive integers.
2. Write script that will calculate the greatest common divisor (GDC) of the two integers.
3. Use the description on [this page][GDC].
4. Display the result on the page along with numbers it was calculated for: `For 420 and 168 GDC is: 84`.

<!-- Links -->
[GDC]: http://www.programming-algorithms.net/article/43434/Greatest-common-divisor
