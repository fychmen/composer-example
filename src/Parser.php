<?php

namespace fych\parser;

/**
 * @author Student <fyhmen@gmail.com>
 */
interface ParserInterface
{

    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $tag, string $url): array;
    
