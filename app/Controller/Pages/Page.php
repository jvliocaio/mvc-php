<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{

    /**
     * Retorna o header
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }

    /**
     * Retorna o footer
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }

    /**
     * Retorna o view da Page
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'footer' => self::getFooter(),
            'content' => $content,
        ]);
    }
}
