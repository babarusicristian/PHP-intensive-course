<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Your first script

Remember to write your answers in appropriate `php` files that are prepared for the exercises.  

#### Exercise 1

In `index.php` write the following command:

```PHP
<?php
    echo 'If I see this, it means that my code is working :)';
?>
```

Open the address **[localhost][localhost]** in your browser, choose a catalog where you have PHP prework. Next, choose the catalog `1_First_script`.
Note that the code from the `index.php` file was executed immediately.
Change the name of this file to `index2.php` and refresh the page.
This time, the code was not executed automatically. Instead, a list of files can be seen.
This happened because only the files named `index.php` are automatically executed by the server.

#### Exercise 2

In `exercise2.php` add code so that it looks in the following way:
```php
<?php
    echo '<h1>If I see this, it means that my code is working :)</h1>';
?>
```
Note that HTML tags are interpreted correctly by the browser and you can use them when writing in PHP.

Next, modify the code in the following way:
```php
<h2>Your name is: <?php echo 'ENTER_YOUR_NAME'; ?> </h2>
```

Note that PHP code can be put directly in the HTML code.
You only need to remember to surround PHP code with the tags: ```<?php ... ?>```.

##### Quiz Exercise 2

In `exercise2.php` you will find a variable named `$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

What will happen if you forget to write one of the tags mentioned above?
a) The code will be executed correctly
b) Only HTML code will be displayed - without PHP code
c) An error will occur
d) The browser will detect PHP code on its own and interpret it correctly

#### Exercise 3

In `exercise3.php` add code so that it looks in the following way:
```php
<h2>Your name is: <?= 'ENTER_YOUR_NAME'; ?> </h2>

```
To shorten the code when writing in HTML, you can surround the variable or textwith `<?= ?>` tags and the contents will automatically be displayed as if you used `echo`.

#### Exercise 4

In `exercise4.php` there are several code lines in a comment.
Remove the comments for each line in turn (**so that only one line is out of the comment at a given time**), then run the code.
Analyze the code (then, put it back in a comment so that it does not stand in your way later) and check what is displayed.
Below you will find the code that was placed in the file.

```php
echo("Hello World");
```  
```php
echo(Hello World);
```  
```php
echo("Hello World);
```  
```php
echoo("Hello World");
```
```php
echo("Hello 1")
echo("Hello 2");
```

Analyze the errors that you see in the browser.

##### Quiz Exercise 4

In `exercise4.php` there is a variable named `$quiz`. Set its value to `a`,`b`,`c` or `d` depending on your answer to the following question:

Why is the `echo(Hello World);` expression incorrect?  
a) `echo` should not have brackets  
b) Quotes or apostrophes are missing  
c) `echo` should be followed by a space if we want PHP to interpret such an expression correctly
d) This expression is correct

**Do the exercises in appropriate files.**


<!-- Links -->
[localhost]: http://localhost
