# 🐍 Python Guide

This guide contains **12 beginner-friendly Python labs**.  Each lab has **theory, practical tasks, and sample outputs**.

---

## **Lab#1: Introduction to Printing**

### 📖 Theory  
Python is a programming language that helps us tell the computer what to do.  
The `print()` function is used to show something on the screen.  

Example:  
```python
print("Hello, World!")
```

### 🛠️ Practical Tasks  
1. Print your name.  
2. Print your age.  
3. Print the sentence: `I love Python!`.  

### 🎯 Sample Output  
```
My name is Jane
I am 12 years old
I love Python!
```

---

## **Lab#2: Variables & Data Types**

### 📖 Theory  
- A **variable** stores information.  
- Example: `name = "Sara"`  
- Common data types:  
  - `str` → text  
  - `int` → numbers (10, 25)  
  - `float` → decimal (5.5, 10.2)  
  - `bool` → True/False  

### 🛠️ Practical Tasks  
1. Store your name, age, and height in variables.  
2. Print them in one sentence.  

### 🎯 Sample Output  
```
My name is Sara, I am 13 years old and my height is 5.2 feet.
```

---

## **Lab#3: Basic Math in Python**

### 📖 Theory  
We can use Python like a calculator:  
- `+` add  
- `-` subtract  
- `*` multiply  
- `/` divide  

### 🛠️ Practical Tasks  
1. Add 2 numbers.  
2. Multiply 3 and 5.  
3. Divide 10 by 2.  

### 🎯 Sample Output  
```
Addition: 7
Multiplication: 15
Division: 5.0
```

---

## **Lab#4: Input from Users**

### 📖 Theory  
We use `input()` to ask the user something.  
Example:  
```python
name = input("Enter your name: ")
```

### 🛠️ Practical Tasks  
1. Ask the user’s name and greet them.  
2. Ask for two numbers and print their sum.  

### 🎯 Sample Output  
```
Enter your name: John
Hello, John! Welcome to Python.

Enter first number: 5
Enter second number: 7
The sum is 12
```

---

## **Lab#5: If-Else Conditions**

### 📖 Theory  
`if` lets us make decisions.  

Example:  
```python
age = 15
if age >= 18:
    print("You are an adult")
else:
    print("You are a child")
```

### 🛠️ Practical Tasks  
1. Check if a number is even or odd.  
2. Ask the user’s age and print whether they are a child, teenager, or adult.  

### 🎯 Sample Output  
```
Enter a number: 6
Even Number

Enter your age: 14
You are a teenager
```

---

## **Lab#6:  While & For Loops**

### 📖 Theory  
Loops repeat code.  
- `for` → repeats a fixed number of times.  
- `while` → repeats until condition is false.  

### 🛠️ Practical Tasks  
1. Print numbers from 1 to 10 using a loop.  
2. Print the multiplication table of a number.  

### 🎯 Sample Output  
```
1 2 3 4 5 6 7 8 9 10

Enter a number: 3
3 x 1 = 3
3 x 2 = 6
...
3 x 10 = 30
```

---

## **Lab#7: Strings and Text Fun**

### 📖 Theory  
Strings are text.  
- `upper()` → capital letters  
- `lower()` → small letters  
- `len()` → length of string  

### 🛠️ Practical Tasks  
1. Ask for a name and print it in uppercase and lowercase.  
2. Print the first and last letter of the name.  

### 🎯 Sample Output  
```
Enter your name: Jay
Uppercase: JAY
Lowercase: jay
First Letter: J
Last Letter: y
```

---

## **Lab#8: Lists – Storing Multiple Items**

### 📖 Theory  
Lists store many values.  
Example:  
```python
fruits = ["apple", "banana", "mango"]
```

### 🛠️ Practical Tasks  
1. Create a list of 5 favorite fruits.  
2. Print each fruit one by one.  

### 🎯 Sample Output  
```
My favorite fruits are:
apple
banana
mango
orange
grapes
```

---

## **Lab#9: Functions – Reusable Code**

### 📖 Theory  
Functions are small blocks of code that we can reuse.  

Example:  
```python
def greet(name):
    print("Hello", name)
```

### 🛠️ Practical Tasks  
1. Write a function that adds two numbers.  
2. Write a function that greets a user.  

### 🎯 Sample Output  
```
Enter first number: 5
Enter second number: 7
Sum = 12

Enter your name: Sara
Hello Sara
```

---

## **Lab#10: Random Numbers & Simple Games**

### 📖 Theory  
We can use `import random` to create random numbers.  

Example:  
```python
import random
print(random.randint(1,6))
```

### 🛠️ Practical Tasks  
1. Roll a dice (print a number between 1–6).  
2. Guess the number game (1–10).  

### 🎯 Sample Output  
```
Dice rolled: 4

Guess a number between 1 and 10: 7
Correct! You guessed it.
```

---

## **Lab#11: Working with Files**

### 📖 Theory  
We can save data in files:  
- `open("file.txt", "w")` → write  
- `open("file.txt", "r")` → read  

### 🛠️ Practical Tasks  
1. Write your name and age into a file.  
2. Read and print from the file.  

### 🎯 Sample Output  
**file.txt content:**  
```
Name: John
Age: 14
```

---

## **Lab#12: Mini Project – Putting It All Together**

### 📖 Theory  
Now let’s use everything we learned.  

### 🛠️ Practical Project (choose one):  
- **Quiz Game**: Ask 5 questions and count score.  
- **Contact Book**: Store names & numbers in a list.  
- **Simple Calculator**: Addition, subtraction, multiplication, division.  

### 🎯 Sample Output (Quiz Example)  
```
Q1: What is 5+3? 8
Correct!

Q2: What is the capital of France? Paris
Correct!

Your score: 2/2
```

## **!!! Now solve the Python Challenges !!!**