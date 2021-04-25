# LoginForm

Authentication and registration using php

## Tecnologies
HTML, CSS, JavaScript, php

## About
![slika1](https://user-images.githubusercontent.com/76435969/115989479-dc1a1c00-a5be-11eb-89c9-0edbf0aa680b.png)

The application contains two forms, one to check if the user exists, to allow him access to
confidential content and the other form to register the user,
which takes data from the user and enters it into the database,
with the normalization of user parameters. The page containing
confidential data does not allow the user to access, but redirects
to the form for authentication of the user, more precisely 
verification of his identity based on the password and username.
After the parameters are entered correctly, the user is given access.
User parameters are compared with the information in the database.

![slika2](https://user-images.githubusercontent.com/76435969/115989495-f3590980-a5be-11eb-830f-79b9062e750d.png)

The registration form takes data from the user, which it normalizes and enters into the database. This is achieved using
a php file, which makes a connection to the database in the background and writes it to the database. Lozinka se cuva kao
hash vrednosti, ukoliko neko nasilno pristupi bazi nece moci direktno doci do lozinke. Na tu hash vrednsot se takodje dodaje
i salt. The data entered by the user is checked on the client side using a java script. It is necessary that the input 
parameters meet certain conditions, as far as the email form and password length are concerned.

## Contributing
Pull requests are welcome.
