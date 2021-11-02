<?php

function debug(array $tableau)
{
    echo '<pre style="height:300px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

function imgMovie($film)
{
    return '<img src="https://formation.weblitzer.fr/posters/'.$film['id'].'.jpg" alt="'.$film['title'].'">';
}