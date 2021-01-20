<?php
class Card
{
    public int $val;
    public string $name;

    function __construct(int $v, string $n)
    {
        $this->val = $v;
        $this->name = $n;
    }
}

class Player
{
    public bool $status_bankier;
    public int $score;
    public int $money;
    public  $cardarr;
   

    function __construct(bool $status = false, $scor = 0, $money = 10, $Cardarr = array()) 
    {
        $this->status_bankier = $status;
        $this->score = $scor;
        $this->money = $money;
        $this->cardarr = $Cardarr;
    }

    function AddCard(Card $var)
    {
        $this->cardarr[] = $var;
    }
}

///////////////////////////////////////////////////////////////////////////
                                  //Function//
///////////////////////////////////////////////////////////////////////////

function PrintDeck($deck) 
{
    foreach ($deck as $item) {
        echo "Suit:" . $item->name . " Face: " . $item->val . "<br>";
    }
}

function Game($deck_card = [null], Player $first, Player $second)
{
    /* $player1_score = 0;
    $player2_score = 0; */

    while (count($first->cardarr) < 5 || count($second->cardarr) < 5) {
        $player1_score = 0;
        $player2_score = 0;

        $first->cardarr[] = array_pop($deck_card);
        echo "First player send ", count($first->cardarr) . " card<br><br>";

        for ($i = 0; $i < count($first->cardarr); $i++) {
            $player1_score += $first->cardarr[$i]->val;  
        }

        $second->cardarr[] = array_pop($deck_card);
        echo "Second player send ", count($second->cardarr) . " card<br><br>";

        for ($i = 0; $i < count($second->cardarr); $i++) {
            $player2_score += $second->cardarr[$i]->val;
        }

        if ($player1_score > 21 && $player2_score > 21) {
            echo "<h3>Both player loose first player($player1_score) : second player($player2_score)</h3>";
            echo "<h4>First player cards:</h4>", PrintDeck($first->cardarr) . "<br>";
            echo "<h4>Second player cards:</h4>", PrintDeck($second->cardarr);
            return;
        } elseif ($player1_score > 21) {
            echo "<h3>Second player WIN with score $player2_score! First player score: $player1_score</h3>";
            echo "<h4>First player cards:</h4>", PrintDeck($first->cardarr);
            return;
        } elseif ($player2_score > 21) {
            echo "<h3>First player WIN with score $player1_score! Second player score: $player2_score, </h3>";
            echo "<h4>Second player cards:</h4>", PrintDeck($second->cardarr);
            return;
        }
    
        if (count($first->cardarr) == 5 && count($second->cardarr) == 5) {
            if ($player1_score > $player2_score) {
                echo "<h3>First player WIN!</h3>";
            } elseif ($player1_score < $player2_score) {
                echo "<h3>Second player WIN!</h3>";
            } else {
                echo "Equal score<br>";
            }
            echo " <h4>firstplayer: $player1_score</h4><br>", PrintDeck($first->cardarr) . "<br>" . 
                "<h4>secondplayer: $player2_score</h4><br>", PrintDeck($second->cardarr) . "<br>";
        }
    }
}
///////////////////////////////////////////////////////////////////////////
                                //Prog//
///////////////////////////////////////////////////////////////////////////
$arrsuit = array('heart', 'diamond', 'club', 'spade');
$arrface = array(1, 2, 3, 4, 6, 7, 8, 9, 10);

$card_deck = array();

for ($i = 0; $i < count($arrsuit); $i++) {
    for ($j = 0; $j < count($arrface); $j++) {
        
        $var = new Card($arrface[$j], $arrsuit[$i]);
        $card_deck[] = $var;
    }
}

shuffle($card_deck);
echo "<h2>Game started</h2>";
$player1 = new Player();
$player2 = new Player(false, 0, 15);
Game($card_deck, $player1, $player2);


