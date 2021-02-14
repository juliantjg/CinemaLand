# Cinema Land

## Welcome

Cinema Land is movie vendor web app made using Laravel framework. Access the deployed website on Heroku here: 
http://cinemaland.herokuapp.com/home

## Functionalities

On the register account page user would need to choose a role:

![](https://i.imgur.com/ocuCuj5.png)

#### Testing account: 

Admin -> admin@cinemaland.com, password: asdaasda

User -> user@cinemaland.com, password: asdaasda

### 1. Account Roles

Every account has the ability to update their profile

![](https://i.imgur.com/FDJNDHX.png)

#### 1.1 Admin
An admin account is able to edit the website's cover image, add movies to the website by providing a poster, name, price and an IMDB link.

![](https://i.imgur.com/kNyLdFS.png)

Admin can also delete a movie

![](https://i.imgur.com/W1ftoKZ.png)

#### 1.2 User
A user account is able to purchase a movie

![](https://i.imgur.com/INMS5L4.png)

#### 1.3 Not logged in 
Without logging in, the web only provides the search functionality:
![](https://i.imgur.com/eN41JXH.png)


## Purchasing a movie test

The web app provides payment via Stripe Test Mode.

Data to test:

Name on Card: Anything

Card Number: 4242 4242 4242 4242

CVC: Any three digits number

Expiration Month/Expiration Year: Any date starting today

## Deploying on Heroku

Uploading images is not available since deploying on Heroku also requires me having a clout storage such as AWS S3, hence movies added to the website will have image unavailable as the poster and cover image and profile picture aren't available for update.

![](https://i.imgur.com/GLSqIbC.png)

The original code providing image uploads can be found on the [main](https://github.com/juliantjg/CinemaLand/tree/main) branch, while the deployed version (no image uploads) can be found on the [herokuDeployment](https://github.com/juliantjg/CinemaLand/tree/herokuDeployment) branch.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
