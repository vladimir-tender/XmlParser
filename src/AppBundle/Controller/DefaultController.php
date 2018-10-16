<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    const MAX_NEWS = 5;

    private $rss = 'http://rss.cnn.com/rss/edition_technology.rss';

    /**
     * RSS feed action
     *
     * @return Response
     */
    public function indexAction()
    {
        /** @var \SimpleXMLElement $rss */
        $rss = simplexml_load_file($this->rss);

        $news = $rss->children()->children();
        $twigNews = [];

        for ($i = 0; $i <= (self::MAX_NEWS - 1); $i++) {
           $twigNews[] = [
               'title' => (string) $news->item[$i]->title,
               'href' => (string) $news->item[$i]->link,
               'description' => (string) strip_tags($news->item[$i]->description)
           ];
        }

        return $this->render('@App/default/index.html.twig', [
            'news' => $twigNews
        ]);
    }

    /**
     * Rates index action
     *
     * @return Response
     */
    public function ratesAction()
    {
        return $this->render('@App/default/rates.html.twig');
    }
}
