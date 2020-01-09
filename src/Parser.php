<?php

namespace clair20\parser;

/**
 * @autor <email@gmail.com>
 */
class Parser implements ParserInterface
{
    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, strin $tag): array
    {
        $htmlPage = file_get_contents($url);
        
        if ($htmlPage === false) {
            return ['Invalid URL'];
        }
        
        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);
        
        if (empty($strings[1])) {
            return ['There are not such tags on the page'];
        }
        
        return $strings[1];
    }    
}