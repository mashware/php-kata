<?php
/**
 * Created by PhpStorm.
 * User: Fran Moraton
 * Date: 27/03/2018
 * Time: 12:48
 */

namespace Kata\Domain\Service\Poker\Combination;

class ThreeOfAKindService implements Combination
{
    public function execute(Hand $hand): bool
    {
        $arrayOfIdentifiers = [];
        foreach ($hand->getHand() as $card) {
            $arrayOfIdentifiers[] = $card->getIdentifier();
        }

        $sameNumberCardCount = array_count_values($arrayOfIdentifiers);
        rsort($sameNumberCardCount);

        return $sameNumberCardCount[0] === 3 ? true : false;
    }
}