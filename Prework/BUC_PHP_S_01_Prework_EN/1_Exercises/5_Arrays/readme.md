Exercise<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Arrays

Remember to put your answers in appropriate `php` files that are prepared for the exercises.  
Additional exercises are not obligatory to pass the prework but try to complete them.

#### Exercise 1

In `exercise01.php`:

1. Create an array with **three** elements e.g. numbers, and name the variable with the array `onlyThree`
2. Next, display on the page all array elements  one by one, separated with spaces.

#### Exercise 2

In `exercise02.php` create an array with a list of your favorite fruit. Name the variable with the array `fruits`.  

Then:

1. Display the **first** fruit on the page in the following way: `The first fruit is: strawberry`.
2. Display the **last** fruit on the page in the following way: `The last fruit is: raspberry` (use the `count` function).
3. In a loop, display all fruit **one per line** `<br>` (use the `count` function).

#### Exercise 3

In `exercise03.php`:

1. Create an array with any 10 numbers. Name the variable with the array `numbers`.
2. Create a variable named ```sum``` and assign the number `0` to it
3. Using a ```for``` loop, calculate the sum of numbers from the array.
4. Display the sum on the page in the following way: `The sum of array elements is: 381.`

#### Exercise 4

In `exercise04.php`:

1. Create an array with any 10 numbers. Name the variable with the array `numbers`.
2. In a ```for``` loop, check which of the numbers are even and display them on the page **one under another** `<br>`.
3. Create an additional variable named `sumOdd` with the value of `0`.
4. Modify the loop from point 2 so that it **additionally** summed odd numbers.
5. Display an additional message: `The sum of all odd numbers is: 87.` on the page.


#### Exercise 5

In `exercise05.php`:

1. Create an array with any 10 numbers. Name the variable with the array `numbers`.
2. Create a variable named ```max``` and assign `0` to it.
3. In a ```for``` loop, find the greatest number, assign it to the ```max``` variable and display on the page.
4. To do this, iterate through the array and check if current element is greater than current `max` value. If so, update the `max` variable.
5. Check if your code works properly if the array contains **only** negative numbers.
6. Try to modify the code to make it universal (hint: you only need to modify the first line of code)

#### Exercise 6

In `exercise06.php`:

1. Create an array with any 10 numbers. Name the variable with the array `numbers`.
2. Display it end-to-beginning using a ```for``` loop, so that each element is in a separate line `<br>`.

#### Exercise 7 - additional

In `exercise07.php`:

1. Create an array with 100 random numbers in the range `0-20`. Name the variable with the array `randNumbers`.
2. Use a `for` loop - you can use the `mt_rand()` function to get a random number.  
   Instructions on using this function can be found in the [documentation][mt_rand]
3. Display the randomly drawn numbers on the page, separated with commas `18,12,1,3...`. Place the numbers in a `div` element with `numbersList` class.
4. Calculate the sum of the numbers in the array and save it in the `sum` variable.
5. Display the sum in a new line on the page. Make it look in the following way: `The sum of a 100 random numbers in the range from 0 to 20 is: 876.`. Place the message in a `div` element with `result` class.

#### Exercise 8 - additional

In `exercise08.php`:

1. Create a variable named `$numberToFind`.
2. Copy the code responsible for generating the `randNumbers` array from exercise 7.
3. Then, find **all** indices in the array from exercise 7 under which your searched number is stored.
4. Save the indices in an additional array named `$keys`.
5. To do it, you only need to iterate through the array (move through each array element using a loop, e.g. `for`) and save the value of `$i` variable in the `$keys` array each time you find the searched number (assuming that `i` is the name of the variable that operates your `for` loop).
6. To add a value at the end of the array, you can use the `[] =` operator, e.g.:

```php
$myArr = [1,2,3,4];
var_dump($myArr); // => [1,2,3,4]

$myArr[] = 5;     // Adding the value of 5 at the end of the array
var_dump($myArr); // => [1,2,3,4,5]
```

#### Exercise 9 - additional

In `exercise09.php` there is an array named `$capitals` that contains country names and their capitals.

1. Display on the page a message about a country and its capital in the following way: `Capital of Poland is Warsaw.`

#### Exercise 10 - additional

In `exercise10.php` there is an array with temperatures.

1. The temperature is written in Celsius degrees - change them to Fahrenheit:
   `tempCelc * 1.8 + 32`
2. To do this, iterate through the array and overwrite a given index with a new calculated value.
3. In a new array, calculate the average temperature and save in a variable named `avg`.
4. Display the variable on the page in the following way: `Average temperature is: 3.95`. Round the number to 2 decimal places, use the function named [number_format()][number_format].

#### Exercise 11 - additional

In `exercise11.php`:

1. Create arrays named `tab1, tab2`. The arrays **must** have different numbers of elements, e.g. 8 and 3.
2. Display on the page the sum of elements of the greater array whose indices are not in the other array.
3. Example of the message to display on the page: `The sum of elements is: 54`.
4. The code should work no matter which of the two  arrays is greater.

Example:

```php
1) [4, 1, 98, 3, 3, 1, 34, 4];
2) [3, 90, 14]

//array 1 is greater
//it is longer by 5 elements
//therefore, we calculate the sum of the last 5 elements of array 1
//3 + 3 + 1 + 34 + 4 = 45
```

<!-- Links -->
[mt_rand]: https://secure.php.net/manual/pl/function.mt-rand.php
[number_format]: http://php.net/manual/en/function.number-format.php
