<?php

namespace App\Controller\Panel;

use App\Entity\Forum;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public static function __setupNavigation()
    {
        return [
            'type' => 'group',
            'parent' => 'root',
            'id' => 'null',
            'title' => null,
            'display' => false,
        ];
    }

    public static function __callNumber()
    {
        return 0;
    }

    public function notFound($navigation, Forum $forum)
    {
        return $this->render(
            'theme_admin1/not-found.html.twig',
            [
                'navigation_links' => $navigation,
                'current_forum' => $forum,
            ]
        );
    }
}
