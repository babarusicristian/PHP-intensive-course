<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

# PHP Prework - Snippets
> Short pieces of code that solve various problems, illustrate dependencies, or show how to use some more complicated functions.


#### 1. Why do files with `php` code need to have `.php` extension?

This is caused by the default configuration of server which makes it send `.php` files only to the interpreter.
The server can be configured to send other files to the interpreter as well, e.g. `.dog` and then they will be interpreted as `php` but this is not good practice.

#### 2. What rules should we follow when creating variables?

Variable names should begin with a letter `[a-zA-Z]` or an underscore `_`. Besides those characters, the names can also contain digits `[0-9]`.
Remember that names should be descriptive - they should tell you what they store.

#### 3. How does a `php` file look when it is combined with `html` code and when it is pure php?

Example of a file containing **only** the `php` code:

```php
<?php
//our code
```

If a file contains `php` code **only** you do not have to use the closing tag `?>`

Example of a file with both `php` and `html` code:

```php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= 'Example title'; ?></title>
</head>
<body>
<?php
//our code
?>
</body>
</html>
```

In this file, there are both `html` and `php` code that is contained between the tags `<?php` and `?>`, as well as thee special `php` tag `<?=` that makes the content display on the page as if `echo` function was used.

#### 4. Are there other tags that open the `php` mode?

Yes, you can encounter the following tags: `<?` or `?>`. These are called "short tags" and should not be used as some of the servers have turned off support for them which prevents the tags from being interpreted correctly.

#### 5. What kind of comments are there in `php`?

```php
//single line comment

#single line comment

/**
 * multiple
 * line
 * comment
 */

```

#### 6. How do I check the type of a variable?

It is best to use `var_dump()` function and pass it the variable or value as a parameter.

#### 7. How do I add a variable in a string?

If you want the variable to be interpreted and changed into its value, use `"` to begin and end the string. In the case of `'` - the string is treated literally and variable names are not changed into values.
You can also add multiple variables to a string, see the example below with two ways of placing variables in a string:

```php
$name = 'Mark';
$age = '25';

echo 'My name is ' . $name .' and I am ' .$age . ' years old.';
echo "My name is $name and I am $age years old.";

//you can also mix the two ways
echo "My name is $name".' and I am ' . $age . " years old.";
```

#### 8. How to calculate modulo (the rest from dividing) correctly?

The easiest way to understand modulo is to imagine a basket with apples.

We will calculate `12 % 4` (it is read: 12 modulo 4):

```
We have 12 apples and want to give each person 4 apples.

We give 4 apples to Mark, 8 apples are left.
We give 4 apples to John, 4 apples are left.
We give 4 apples to Tom, 0 apples are left.

We do not have enough apples to give 4 apples to another person.
We have no apples left so our rest from dividing (modulo) is 0.
```

Now let's calculate `11 % 3`:

```
We have 11 apples and want to give each person 3 apples.

We give 3 apples to Mark, 8 apples are left.
We give 3 apples to John, 5 apples are left.
We give 3 apples to Tom, 2 apples are left.

We do not have enough apples to give 3 apples to another person.
We have 2 apples left so our rest from dividing (modulo) is 2.
```

Let's calculate `3 % 7`:

```
We have 3 apples and want to give each person 7 apples.

We do not have enough apples to give 7 apples to Mark.
We have 3 apples left so our rest from dividing (modulo) is 3.
```

Let's calculate `2 % 8`:

```
We have 2 apples and want to give each person 8 apples.

We do not have enough apples to give 8 apples to Mark.
We have 2 apples left so our rest from dividing (modulo) is 2.
```

#### 9. What forms can the conditional `if` `else` function have?

1. `if` function alone
   ```php
   if ($number > 5) {
       echo 'ok';
   }
   ```

2. `if` function with `else`
   ```php
   if ($number > 5) {
       echo 'ok';
   } else {
       echo 'not ok';
   }
   ```   

3. `if` function with `elseif`
   ```php
   if ($number > 5) {
       echo 'ok';
   } elseif ($number > 3) {
       echo 'also ok';
   }
   ```   

4. `if` function with `elseif` and `else`
   ```php
   if( $number > 5 ){
       echo 'ok';
   } elseif ($number > 3) {
       echo 'also ok';
   } else {
       echo 'not ok';
   }
   ```   

5. `if` function with multiple `elseif` and an `else`
   ```php
   if( $number > 5 ){
       echo 'ok';
   } elseif ($number > 3) {
       echo 'also ok';
   } elseif ($number > 1) {
       echo 'another ok';
   } else {
       echo 'not ok';
   }
   ```  
#### 10. Can conditional expressions be used in `switch`?

Yes, and here is an example:

```php
switch($number){
    case ($number > 5):
        echo '>5';
    break;
    case ($number > 3);
        echo '>3';
    break;
}
```

#### 11. How to use `break` to stop a loop before the end condition is met?

```php
for ($i = 0; $i < 500; $i++) {
    echo $i . '<br>';
    if ($i % 4 === 0){ //if this condition is met
        break; //break will stop the for loop
    }
}
```

`break` can also take a number when it is called. That number will tell how many nested structures will be stopped.
Two examples of code with a nested `for`.  

```php
for ($i = 0; $i < 500; $i++) {
    echo $i . '<br>';
    for ($j = 0; $j < 500; $j++) {
        echo $j . '<br>';
        if ($j % 4 === 0){ //if this condition is met
            break; //break will stop the for loop - by default only the nearest one, the one with variable $i
        }
    }
}
```

```php
for ($i = 0; $i < 500; $i++) {
    echo $i . '<br>';
    for ($j = 0; $j < 500; $j++) {
        echo $j . '<br>';
        if ($j % 4 === 0){ //if this condition is met
            break 2; //break will stop the for loop - number 2 makes php look if there is a loop higher (2 in total) and also stop it
        }
    }
}
```

#### 12. Can a `for` loop be called without all 3 parameters?

Yes, you can omit, for example, the end condition:

```php
for ($i=0; ; $i++){
    //...
}
```

Such a loop will be infinite by default because it has no condition that would stop it, which means that
in the block of the loop a condition must be added that will use `break` to stop the loop.  

The situation is analogical for other parameters. In the extreme case, the loop can look the following way:

```php
for (;;){
    //...
}
```

Such a loop is infinite as well, and a possible end condition and change after a single iteration must be written directly in the loop block.


#### 13. How to iterate through elements of an array?

A universal loop for iterating is `foreach`:

```php
<?php
foreach ($tab as $key => $val) {
    //$key - key (index) from an array
    //$val - value from an array
}
?>
```

#### 14. How to extract the first and last element of an array?

```php
$arr = [1, 3, 5, 7, 9];

$first = $arr[0];//extracts BUT DOES NOT DELETE the first array element
$first = array_shift($arr);//extracts AND DELETES the first array element

$lastKey = count($arr) - 1;
$last = $arr[$lastKey];//extracts BUT DOES NOT DELETE the last array element
$last = array_pop($arr);//extracts AND DELETES the last array element
```

#### 15. How to check if a given element is in an array?

```php
$array = [1, 4, 12, 3, 15];
$toSearch = 15;

$isInIt = in_array($toSearch, $array);// returns a boolean
```

You will learn more functions connected with arrays and strings in the first week of your course.
