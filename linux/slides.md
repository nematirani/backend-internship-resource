
class: center, middle

# Linux for a better life

--

<br><br>
Ali Zakeri _(Shahin Sorkh)_

[shahin@malltina.com](mailto:shahin@malltina.com)

<br><br>
[![CC-by-sa](https://licensebuttons.net/l/by-sa/4.0/80x15.png "Creative Commons Attribution-ShareAlike 4.0 International License")](http://creativecommons.org/licenses/by-sa/4.0/)

---

# Table of contents

- Brief History
- Distributions
  - Debian based
  - RPM based
- Filesystem
- Basic Commandline
  - Terminal / Shell
  - Common Commands
  - Piping / Redirecting
- Basic Networking
- Basic Scripting
- Tools
  - vim
  - crontab

---

class: center, middle

# Brief History

---

## Before UNIX

<!-- .thumb[![mainframe 704](/img/mainframe-704.jpg)] -->
.thumb[![mainframe 704](/img/IBM_704_mainframe.gif)]

---

## Before UNIX

- GM-NAA _(1956)_ _(IBM 704)_: The first. Widely diverse HWs and OSes

- OS/360 series & DOS/360 series _(1960s)_: Same instructions and I/O architectures

- TOPS-10 _(1967)_: For 36-bit computers _(PDP-10)_ used in universities mostly

- SCOPE, MACE, NOS _(1970s)_: By Control Data Co. and University of Minnesota for batch processing and time sharing

---

## And UNIX happened

- Released in the late 1960s at AT&T Bell Laboratories

- UNIX was an oracle!

    - Essentially free in early releases
    - Easily obtainable
    - Easily modifiable
    - Easily portable _(Thanks to its C code base)_

- The 2nd generation of minicomputers and the 1st generation of workstations has been built with UNIX

- One of the roots of FOSS projects including GNU project, Linux and BSD _(macOS included)_

---

## UNIX philosophy

- The OS has limited responsibilities

    - A set of simple tools _(with limited well-defined functions)_
    - A unified filesystem
    - An inter-process communication mechanism _(known as pipes)_
    - A shell-scripting and command language _(to combine the mentioned functions)_

--

## UNIX components

- Kernel _(conf, dev, sys, h)_

- Development Environment _(cc, as, ld, lib, make, include, other langs)_

- Commands _(sh, utils, document formatting, graphics, communications)_

- Documentations _(man, doc)_

---

## POSIX .small[_Portable Operating System Interface_]

__IEEE 1003__ _or_ __ISO/IEC 9945__

- core programming interface
- commandline and shell scripting interface
- many user-level programs, services and utilities
- many program-level services _(basic I/O)_
- threading library API

--

### POSIX-compliant operating systems

- macOS _(since 10.5 Leopard)_ _(fully compliant)_
- Darwin _(core of macOS and iOS)_
- FreeBSD _and_ OpenBSD
- Linux _(most distros)_
- etc.

---

class: center, middle

![unix programs](/img/unix-programs.jpg)

---

class: center, middle

## But
# UNIX is dead
## -._-

### We use _UNIX-like_ systems in a daily basis

---

class: center, middle

# GNU project

![gnu](/img/gnu.svg)

---

## GNU project

- Free software mass collaboration project founded by Richard Stallman in 1983
- An extensive collection of _free software_
- GNU's not unix, designed to be unix-like, with no unix code
- GNU's free. Free as in _Freedom_ not in _Free beer_
- Mostly in GPL license

--

### Components

- `gcc` _(GNU Compiler Collection)_
- `glibc` _(GNU C library)_
- `coreutils` _(GNU Core Utilities)_
- `gdb` _(GNU Debugger)_
- `binutils` _(GNU Binary Utilities)_
- `bash` _(GNU Bash shell)_
- `emacs` _(GNU text editor)_
- `linux-libre` _(GNU port of Linux kernel)_

---

class: center, middle

.thumb[![fsf](/img/fsf.svg)]

---

## Free Software Foundation

- Non-profit organization founded by Richard Stallman in 1985
- The goal is to support _free software movement_ which promotes the universal freedom to study, distribute, create and modify computer software
- Used its funding to employ software developers to work on GNU project and legal and structural issues for the free software movement and the free software community

--

### Activities

- The GNU Project
- GNU licenses
- GNU Press
- The Free Software Directory
- Maintaining the Free Software Definition
- Project hosting
- Hardware-Node _(h-node)_
- Advocacy
- Annual awards
- LibrePlanet wiki

---

class: center, middle

# Linux Distributions

---

## Debian based

- Main distros
  - Debian _(1993)_
  - Ubuntu _(2004)_
  - Linux Mint _(2006)_
  - Kali Linux _(2013)_

- Others
  - Deepin _(2004)_
  - Parrot OS _(2013)_
  - Pop!\_OS _(2017)_

---

### RPM based

- Red Hat Linux _(1995-2004)_

- Red Hat Enterprise Linux _(2002)_

- Fedora _(2003)_

- CentOS _(2004)_

---

class: center, middle

# Filesystem

---

## Filesystem Root tree

.thumb[![fs tree](/img/fs-tree.png)]

---

## Filesystem hierarchy

.thumb[![fs hierarchy](/img/fs-hierarchy.png)]

---

## Ownership and Permissions

--

### Types of Users

- Owner _(u)_
- Group _(g)_
- Others/All _(o)_

--

### Permission Types

- Read / _4_ _(r)_
- Write / _2_ _(w)_
- Execute / _1_ _(x)_

--

#### As octal character

```
0755 -> u:rwx g:rx  o:rx
0644 -> u:rw  g:r   o:r
0316 -> u:wx  g:x   o:rw
```

.ls-explained[![ls owner perms](/img/ls-explained.jpg)]

---

## `/dev/sdXX` and friends

- `/dev/sda1`: 1st partition on the 1st disk
- `/etc/fstab`: instructions on how to mount blocks


--


- `fdisk`: modify disk's partition table
- `mkfs`: format a block into the given filesystem type
- `lsblk`: list available blocks
- `df`: disk free
- `du`: disk usage
- `mount`: mount a block on a directory
- `umount`: unmount a mounted directory or block

--

#### Swap

- As a disk partition or a simple file
- Used to free up memory as needed


--


- `mkswap`: format a block to use as swap
- `swapon`: add a formatted block to swap space
- `swapoff`: remove a block from swap space

---

class: center, middle

# Basic Commandline

???

https://www.geeksforgeeks.org/difference-between-terminal-console-shell-and-command-line/

https://www.linusakesson.net/programming/tty/

https://unix.stackexchange.com/a/4132/296839

---

## Terminal

![hw terminal](/img/hw-terminal.jpg)

## Teletype _(TTY)_

![teletype](/img/tty.jpg)

---

## Shell

.thumb[![kde shell](/img/kde-shell.svg)]

---

## Shell

.thumb[![win shell](/img/win-shell.png)]

---

## Unix Shell

- Exposes an operating system's services to a human user or other program
- Unix shell is both _an interactive command language_ and _a scripting language_
- All Unix shells provide _filename wildcarding_, _piping_, _here documents_, _command substitution_, _variables_ and _control structures_
- Unix shell is the only way to interact with operating system kernel

### Available shells

- `sh` _(Bourne shell)_: first with basic features common to all Unix shells
- `ash` _(Almquist shell)_: BSD licensed on systems with limited resources
* `bash` _(Bourne-Again shell)_: part of GNU project and mainly, the default shell
* `zsh` _(Z shell)_: relatively modern, backward compatible with `bash` and the default shell in _Kali Linux (since 2020.4)_ and _macOS (since 10.15 Catalina)_
- `fish` _(Friendly interactive shell)_: the most popular non-POSIX shell

---

class: center, middle

# We work with `bash` primarily

---

class: two-columns

## Visit GNU coreutils .small[and friends]

.col-left[
- `man`
- `info`
* `echo`
* `cat`
* `tail`
* `head`
* `less`
* `grep`
- `dirname`
- `basename`
* `ps`
* `top`
* `nproc`
* `free`
* `uptime`
]

.col-right[
- `pwd`
- `cd`
- `ls`
- `cp`
- `mv`
- `rm`
- `ln`
- `find`
* `touch`
* `mkdir`
* `rmdir`
* `mktemp`
- `chown`
- `chgrp`
- `chmod`
]

---

## Piping / Redirecting

- Piping is based on `stdout` and `stdin` terminal streams
  - Any command, can be used to feed the next command through pipes
  - Take the following as an example:

```sh
tail -f /var/log/syslog | grep -F 'CRON' | cut -d'(' -f3 | cut -d')' -f1
```

- Redirecting is about files
  - You may redirect a file's contents into some command's `stdin`
  - Or redirect a command's `stdout`/`stderr` output, into a file
  - As an example:

```sh
ip addr > network-addr.txt
wc -l < network-addr.txt > network-addr.len
```

---

class: center, middle

# Basic Networking
## Watch jadi's course on youtube

???

https://youtube.com/playlist?list=PL-tKrPVkKKE00meXoxmIy6EgldK5XE-Z_

---

class: two-columns

## Network related

.col-left[
### Commands

- `ip`
- `ss`
- `ping`
- `dig`
- `ssh`
- `scp`
]

.col-right[
### Config files

- `/etc/hosts`
- `/etc/resolv.conf`
]

---

## SSH _(Secure shell)_

- On UNIX-like systems:

```sh
ssh user@hostname
# enter password when prompted
```

- On Windows:
  - Download `putty`
  - Run it :))
  - Fill out the fields
  - Click `connect` button

#### Good job! You are in

---

class: center, middle

# Basic Scripting

---

## Environment variables

## SH script syntax and flow control

## SH variables and functions

## Shebang

---

class: center, middle

# Tools

---

## vim .small[_(vi improved)_]

- Run `vim` on your terminal
- Try to exit back to the shell :)

--

### Run `vimtutor`

---

## crontab

- Run commands on specific schedule
- May it seems weird at first, but you will get used to it _(hopefully)_

---

class: center, middle

# Linux is friendly

--

## Though too selective about its friends
### Happy linux-ing

