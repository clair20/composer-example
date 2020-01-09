<?php

namespace clair20\parser;
/**
 * @author Clair
 */
interface ParserInterface
{
    
    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}