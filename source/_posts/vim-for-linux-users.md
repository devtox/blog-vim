---
title: Vim for Linux Users
date: 2022-04-12
image: https://res.cloudinary.com/practicaldev/image/fetch/s--siZCuNk5--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/5z9fzd0bk2dqmgdhwhy6.jpg
comments: true
---
Linux users often have a tough time switching over to Vim because many of the commands are different. There's a learning curve to understand what all of these commands mean, and it can be a pain trying to memorize them all.

Here we'll provide some tips that will help you get started with Vim on Linux, and hopefully make it a little easier for you to jump into the crazy world of Vim.First, it's important to understand that Vim is a modal text editor. This means that there are different modes you can be in, each with their own set of commands. The most important mode for beginning Vim users to know is Normal mode. This is the mode you start in when you open Vim. In Normal mode, you can navigate around your document and perform basic tasks such as cutting and pasting text.

To enter Insert mode, simply press the "i" key on your keyboard. In Insert mode, you can insert new text into your document. To exit Insert mode and return to Normal mode, press the "esc" key on your keyboard.

Finally, there's one more important thing to know about vim modes: pressing the "esc" key will always take you back to Normal mode no matter what other mode you're currently in. So if you find yourself getting lost in one of the other modes, just hit "esc" a few times and you'll be back in Normal Mode where you started.

## Cursor

The "h" key will move your cursor to the left. The "l" key will move your cursor to the right. The "k" and "j" keys will move the cursor up and down, respectively.


## Deleting text


The next set of commands are for deleting text. There are two ways to delete text in Vim: explicitly (using a command) or implicitly by overtyping. Explicit commands include "x", which deletes the character under the cursor, or "dd", which deletes from the current location to the end of the line. Implicit commands include typing over existing text; this causes both instances of it to be deleted.

In Vim, pressing d will delete forward (to the right), whereas dd will delete backward (leftward). These commands may also be used on whole words if preceded by a capital letter ("D" and "C"). Vim has a dual mode: insert mode and command mode.

When you first start vim, you're placed in insert mode; when you press an appropriate key (usually ), you'll switch into command mode, where all sorts of useful things become available to you, like formatting text or changing case.