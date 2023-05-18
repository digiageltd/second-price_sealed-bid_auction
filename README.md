# Auction PHP Code

This repository contains a PHP implementation of a second-price, sealed-bid auction. It includes a class `Auction` that represents the auction and provides methods for placing bids and finding the winner and winning price.

## How it Works

The `Auction` class works as follows:

- **Constructor:** The `Auction` class is initialized with a reserve price, which is the minimum price for an item to be sold.
- **Placing Bids:** Buyers can place bids by calling the `placeBid()` method on the `Auction` instance and providing the buyer's name and bid price.
- **Finding the Winner:** The `findWinner()` method determines the winner and winning price of the auction based on the bids. The winner is the buyer with the highest bid above or equal to the reserve price. The winning price is the highest bid price from a non-winning buyer above the reserve price, or the reserve price if none applies.

## How to Test

To test the `Auction` class, we have provided a PHPUnit test case called `AuctionTest`. This test case verifies the correctness of the `findWinner()` method.

To run the tests, follow these steps:

1. Open the terminal and navigate to the project directory.

2. Run the PHPUnit test by executing the following command: php phpunit-10.1.3.phar AuctionTest.php

3. The test results will be displayed in the terminal, indicating if the tests passed or failed.

Please note that the provided test case is just an example and covers a specific scenario.

## License

This code is released under the MIT License. Feel free to use and modify it according to your needs.
