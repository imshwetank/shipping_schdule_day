# shipping_schdule_day
Link is below:

http://shwetank.co.in/shwetank/portfolio/shipping/index.php

![image](https://user-images.githubusercontent.com/63805720/191184828-dc269e51-5c7f-40f5-861c-1a1f4b720da2.png)





Imagine there is a webshop which sells some products. We need the code that calculates the expected shipping date when a user submits an order. The shop owner has decided NOT to ship on certain days of the week ($holidays variable in config.php). There is a cut off time for placing an order that will be shipped on the same day, for example, orders placed before 11 in the morning will be shipped on the same day, else it will only be shipped the next day/next shipping allowed day ($cutOffTime in config.php). Shipping means handing over the package to the courier company.

The main code with logic should be added to getShippingDate in functions.php and it should return the date (Y-m-d format) in which the product will be shipped.
