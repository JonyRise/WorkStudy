<?php
class Card
{
    public string $val;
    public string $name;

    function __construct(string $v, string $n)
    {
        $this->val=$v;
        $this->name=$n;
    }
    
}

class Player
{
    public bool $status_bankier;
    public int $score;
    public int $money;
    public  $cardarr;

    function __construct(bool $status = false, $scor = 0, $money = 10, $Cardarr = array()) {
        $this->status_bankier = $status;
        $this->score = $scor;
        $this->money = $money;
        $this->cardarr;
    }

    function AddCard(Card $var)
    {
        $this->cardarr[]=$var;
    }
    
    function GiveCard(Card $newcard, Player $concurent)
    {
        
    }
    

}

///////////////////////////////////////////////////////////////////////////
                                  //Function//
///////////////////////////////////////////////////////////////////////////

function PrintDeck($deck) {
    foreach($deck as $item) {
    echo "Suit:" . $item->name . " Face: " . $item->val . "<br>";
    }
}

///////////////////////////////////////////////////////////////////////////
                                //Prog//
///////////////////////////////////////////////////////////////////////////
$arrsuit = array('heart', 'diamond', 'club', 'spade');
$arrface = array('6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');



$player1 = new Player();
$player2 = new Player(false, 0, 15);




$card_deck = array();

for($i = 0; $i < count($arrsuit); $i++) {
    for($j = 0; $j < count($arrface); $j++) {
        
        $var = new Card($arrface[$j], $arrsuit[$i]);
        $card_deck[] = $var;
    }
}

shuffle($card_deck);
PrintDeck($card_deck);