---
title: Vim for Linux Users
date: 2022-04-12
image: /assets/images/vim.png
comments: false
---
Linux users often have a tough time switching over to Vim because many of the commands are different. There's a learning curve to understand what all of these commands mean, and it can be a pain trying to memorize them all.

Here we'll provide some tips that will help you get started with Vim on Linux, and hopefully make it a little easier for you to jump into the crazy world of Vim. 

## Modes

First, it's important to understand that Vim is a modal text editor. 

This means that there are different modes you can be in, each with their own set of commands. The most important mode for beginning Vim users to know is Normal mode. This is the mode you start in when you open Vim. In Normal mode, you can navigate around your document and perform basic tasks such as cutting and pasting text.

To enter Insert mode, simply press the "i" key on your keyboard. In Insert mode, you can insert new text into your document. To exit Insert mode and return to Normal mode, press the "esc" key on your keyboard.

Finally, there's one more important thing to know about vim modes: pressing the "esc" key will always take you back to Normal mode no matter what other mode you're currently in. So if you find yourself getting lost in one of the other modes, just hit "esc" a few times and you'll be back in Normal Mode where you started.

## How do you quit vim?

The way I quit vim is by using the **:q!** command. The q! means "quit without saving".

It's not the most polite way to end a process, but if you've been editing text in vim, you've probably had an accident that you don't want to save. This will ensure that it does not get saved.

If you're in a hurry, you can always press **ZZ** to stop without saving your progress.

<a href="https://asciinema.org/a/0KY9FVtXIn0vwkYWbqsk76zyY" target="_blank"><img src="https://asciinema.org/a/0KY9FVtXIn0vwkYWbqsk76zyY.svg" /></a>

## Cursor

The "h" key will move your cursor to the left. The "l" key will move your cursor to the right. The "k" and "j" keys will move the cursor up and down, respectively.

Those actions can be repeated. Typing 5j will move down five lines at once. Typing 6k will move five lines up at once.

You can also use the arrow keys to move around. However, if you open vi instead of vim that will not work.

## Delete text

The next set of commands are for deleting text. There are two ways to delete text in Vim: explicitly (using a command) or implicitly by overtyping. 

Explicit commands include "x", which deletes the character under the cursor, or "dd", which deletes the current line. Implicit commands include typing over existing text; this causes both instances of it to be deleted. To cut to the next word you can use "dw".

Vim has a dual mode: insert mode and command mode.

When you first start vim, you're placed in insert mode; when you pressthe esc key, you'll switch into command mode, where all sorts of useful things become available to you.

<a href="https://asciinema.org/a/JzsBe4qATDCrZAUeqVKFrKgeH" target="_blank"><img src="https://asciinema.org/a/JzsBe4qATDCrZAUeqVKFrKgeH.svg" /></a>

## Save file

Saving a file in vim is pretty easy, we just **:w** followed by the name of the file. If you want to save and exit you can use **:wq**.
 
## File commands

Open a single file

```
vim file
```

Open multiple files at the same time

```
vim file1 file2 file3 ...
```

Open a new file in a vim window

```
:open file
```

## In-line movement

Besides these there are many more commands. You can jump the cursor in line. The commands below are some you can use:

* 0 : Move the cursor to the beginning of the line
* $ : Cursor moves to the end of the line
* b : cursor to the beginning of the previous character
* w : Cursor to the beginning of the next word
* e : Cursor goes to the end of the next word
* ge : cursor moves to the end of the previous word
* fa : move to the next a position ('F' is the opposite of that)
* ta : move to the position before the next a ('T' is the opposite)
* G : cursor moves to the end of the text
* gg : cursor moves to the beginning

