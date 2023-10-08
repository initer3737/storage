<?php
namespace wordowarudo;

    /**@test */
class CountingWord
{
    public function countWords(string $sentence):int
    {
        return count(explode(" ",$sentence));
    }
}

?>