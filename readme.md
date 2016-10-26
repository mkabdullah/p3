# P3 -- Developer's Best Friend

## Lorem Ipsum and Random User Generators

## Author: Muhammad Kaleem Abdullah

## Description

This is my third project (P3) for the course CSCI E-15 Dynamic Web Applications. The project provides the following functionality:

1. Provide two utilities, which generate dummy data that can be used for prototyping.
2. The first utility is a 'Lorem Ipsum' text generator.
3. The second utility is a random user generator.
4. The Lorem Ipsum generator can generate up to 99 paragraphs of Lorem Ipsum text.
5. the random user generator can generate up to 99 user names, along with addresses and emails.


## Program Logic

It is a Laravel framework based web side and it follows "separation of concerns" design principle. It has two controllers:

1. LoremIpsumController.php
                This controller has an index() method which redirects to the index view for Lorem Ipsum generator. The index view renders the form which takes a user's input for the number of paragraphs to generate. The index view extends a master layout (layouts.master) and supplies html FORM based contents for the master layout. The contoller also has a generate() method, which processes the FORM input from the index view. This method redirects to 'generate' view which displays the Lorem Ipsum text. To generate Lorem Ipsum paragraphs, I am using external [Lorem Ipsum generator package](https://github.com/Badcow/LoremIpsum).

2. RandomUserController.php
                This controller has an index() method which redirects to the index view for random user generator. The index view renders the form which takes a user's input for the number of users to generate. The index view extends a master layout (layouts.master) and supplies html FORM based contents for the master layout. The contoller also has a generate() method, which processes the FORM input from the index view. This method redirects to 'generate' view which displays the generated random users. To generate random users, I am using external [random user generator package](https://github.com/fzaninotto/Faker).


## Where is it?

Project [Link](http://p3.kaleemabdullah.com).
Project code is available at [Github](https://github.com/mkabdullah/p3)

## Project Demo

The project demo video is hosted [here](https://www.youtube.com/watch?v=i1Lk7kRjFHw)

## Credits
The project uses two external packages: [Lorem Ipsum Generator](https://github.com/Badcow/LoremIpsum) and [Random User Generator](https://github.com/fzaninotto/Faker)
