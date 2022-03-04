<?php

// ここに配列を記述
$favorites = [
    'sport' => ['サッカー','野球','バスケ']
    'cooking'   => ['中華料理','','フレンチ']
    'exercise'   => ['ランニング','懸垂','腹筋']
];

echo <<<EOM
私の好きなスポーツは、
{$favorites['sport'][0]}、
{$favorites['sport'][2]}、
{$favorites['sport'][1]}です｡<br>
また、{$favorites['cooking'][1]}を作ることにもハマってまして、
その他にも
{$favorites['cooking'][2]}、
{$favorites['cooking'][0]}も作ります。<br>
最近は、運動にも取り組んでいて、
{$favorites['exercise'][2]}、
{$favorites['exercise'][1]}、
{$favorites['exercise'][0]}をよくします。
EOM;
