<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{   
    #[Route('/api/songs/{id<\d+>}',methods: ['GET'],name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger):Response
    {
        
        $songs = [
            1 => ['name' => 'Suzume', 'url' => '/audio/Suzume no tojimari.mp3'],
            2 => ['name' => 'Shootout', 'url' => '/audio/Izzamuzzic - Shootout.mp3'],
            3 => ['name' => 'I Follow Rivers', 'url' => '/audio/I Follow Rivers - Lykke Li.mp3'],
            4 => ['name' => 'Sweater Weather', 'url' => '/audio/Sweater Weather.mp3'],
            5 => ['name' => 'Petit Biscuit - Sunset Lover', 'url' => '/audio/Petit Biscuit - Sunset Lover.mp3'],
            6 => ['name' => 'Modjo - Lady', 'url' => '/audio/Modjo - Lady.mp3'],
            7 => ['name' => 'diedlonelly', 'url' => '/audio/diedlonely.mp3'],
            
        ];

        
        return $this->json($songs[$id]);
    }

}