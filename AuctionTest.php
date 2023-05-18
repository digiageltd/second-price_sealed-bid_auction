<?php

require_once 'phpunit-10.1.3.phar';
require_once 'Auction.php';
use PHPUnit\Framework\TestCase;

/**
 * The AuctionTest class contains test cases for the Auction class.
 */

class AuctionTest extends TestCase {

    /**
     * Test case to verify the findWinner() method of the Auction class.
     */
    public function testFindWinner() {
        // Create an Auction instance with a reserve price of 100.
        $auction = new Auction(100);

        // Place bids for various buyers.
        $auction->placeBid('A', 110);
        $auction->placeBid('A', 130);
        $auction->placeBid('C', 125);
        $auction->placeBid('D', 105);
        $auction->placeBid('D', 115);
        $auction->placeBid('D', 90);
        $auction->placeBid('E', 132);
        $auction->placeBid('E', 135);
        $auction->placeBid('E', 140);

        // Get the winner and winning price using the findWinner() method.
        [$winner, $winningPrice] = $auction->findWinner();

        // Assert that the winner is 'E' and the winning price is 130.
        $this->assertEquals('E', $winner);
        $this->assertEquals(130, $winningPrice);
    }
}