<?php
/**
 * The Auction class represents a second-price, sealed-bid auction.
 * An object is for sale with a reserve price, and potential buyers can place bids.
 * The class provides methods to place bids and find the winner and winning price.
 */
class Auction {
    private $reservePrice;
    private $bids;
    
    /**
     * Creates a new Auction instance with the specified reserve price.
     *
     * @param int $reservePrice The reserve price for the auction.
     */

    public function __construct($reservePrice) {
        $this->reservePrice = $reservePrice;
        $this->bids = [];
    }
    
    /**
     * Places a bid for a buyer with the specified price.
     *
     * @param string $buyer The buyer placing the bid.
     * @param int $price The bid price.
     */

    public function placeBid($buyer, $price) {
        $this->bids[$buyer] = $price;
    }
    
    /**
     * Finds the winner and winning price of the auction.
     *
     * @return array An array containing the winner and winning price.
     *               The first element is the winner (buyer name), and the second element is the winning price.
     */
    
    public function findWinner() {
        $winningPrice = $this->reservePrice;
        $winner = null;
        
        foreach ($this->bids as $buyer => $price) {
            if ($price >= $this->reservePrice && $price > $winningPrice) {
                if ($winner !== null) {
                    $winningPrice = min($price, $winningPrice);
                } else {
                    $winningPrice = $price;
                }
                $winner = $buyer;
            }
        }
        
        return [$winner, $winningPrice];
    }
}