# _Address Book_

#### _Object-Oriented PHP Independent Project, 06.30.2017_

#### By _**Calla Rudolph**_

## Description

_This PHP project allows the user to enter individual personal information for contacts, which is then stored into an address book. The user can view his entire contact list, enter additional contacts, and delete all contacts as needed. There is also a search feature by name to return a matching contact._

## Setup Requirements

* Open GitHub site on your browser: https://github.com/CallaRudolph/php-address-book
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then copy the repository link and press enter
  * type 'cd php-address-book' to access the document root (project folder) on your computer
  * type 'composer install' to download dependencies (Silex & Twig)
  * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
* Open browser and type 'localhost:8000' to view address book.
* Enter in a contact, add it to your address book, view all contacts, and delete them when finished!

## Specifications
* It allows the user to enter one contact at a time from the root path '/', and displays the new entry on '/create_contact' URL.
  * Example Input: Name: 'Becky', Phone Number: '503.222.2222', Address: '21 Forest Street'
  * Example Output: User is directed to '/create_contact' URL in browser, where 'New contact added! Becky, 503.222.2222, 21 Forest Street' is displayed. The root path will now show the new contact within the address book.
* It allows the user to delete all contacts from the root path '/' and displays confirmation of deletion on '/delete_contacts' URL.
  * Example Input: User presses 'Delete' button on root path '/'
  * Example Output: User is directed to '/delete_contacts' URL, where confirmation of contact list deletion is displayed. The root path will now show an empty address book.
* It allows the user to search the contact list by name (on the root path '/') to retrieve a full contact match. The search match will display on the '/search_contacts' URL.
  * Example Input: User searches for 'rudolph' on root path '/'
  * Example Output: User is directed to '/search_contacts' URL, where the match is returned: 'Calla Rudolph, Phone: 503.333.3333'

## Technologies Used

* _PHP_
* _HTML_
* _Bootstrap_
* _CSS_
* _Silex_
* _Twig_

### License

Copyright &copy; 2017 Calla Rudolph

This software is licensed under the MIT license.
