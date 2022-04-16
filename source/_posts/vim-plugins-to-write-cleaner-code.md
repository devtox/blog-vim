---
title: Vim Plugins to Write Cleaner Code
date: 2022-04-16
image: /assets/images/vim-plugins.png
comments: true
---
Vim is the most powerful code editor available. Every time I use it, I am amazed at how many features are available.  In this post, I'll share plugins that will help you write cleaner code.

**vim-airline**

The [vim-airline](https://github.com/vim-airline/vim-airline) plugin adds a status bar to Vim that shows information about your current file, including the filename, the current line number, the column number, and the character encoding. It also shows whether your file has been modified since it was last saved. vim-airline is highly configurable, so you can customize it to show exactly the information that you want.

**YankRing**

The [YankRing](https://github.com/vim-scripts/YankRing.vim) plugin keeps track of all the things you've yanked (copied) in Vim. So if you accidentally overwrite something, you can just go back and yank it again from the YankRing. No need to remember what you copied!

**Syntastic**

[Syntastic](https://github.com/vim-syntastic/syntastic) is a syntax checking plugin that highlights errors in your code as you edit it. That way, you can fix them right away before they cause any problems. Syntastic also has support for a lot of different languages, so it's sure to be useful no matter what you're working on.

![syntastic plugin vim](/assets/images/syntastic.png)

**Gundo**

[Gundo](https://docs.stevelosh.com/gundo.vim/) is a plugin that allows you to undo changes in your code not just one at a time, but all at once. It's like having an Undo button for your whole file! This comes in handy when you make a bunch of changes and then realize that none of them were actually what you wanted. With Gundo, you can just undo them all in one go.

**Narrow**

The [Narrow](https://www.vim.org/scripts/script.php?script_id=2097) plugin allows you to focus in on a specific part of your code. This is useful when you're working on a large file and you only want to see the section that you're currently working on. 

**ctrlp.vim**

[CtrlP](https://github.com/ctrlpvim/ctrlp.vim) is a plugin that allows you to quickly search for files by name. Just type a few characters of the filename and CtrlP will show you a list of matching files. You can even narrow down the results by typing more characters of the filename. CtrlP is especially useful when you're working on a project with a lot of files.

![vim ctrlp plugin](/assets/images/vim-ctrlp.png)