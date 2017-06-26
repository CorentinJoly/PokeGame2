<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Repository\PokemonRepository;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction(Request $request)
    {
        return $this->render('default/inscription.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/new", name="new")
     */
    public function nouvelleCaptureAction(Request $request)
    {
        return $this->render('default/new.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/detail", name="detail")
     */
    public function detailPokemon(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/annonces", name="annonces")
     */
    public function annoncesPokemon(Request $request)
    {
        return $this->render('default/annonces.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/listPokemon", name="listPokemon")
     */
    public function listPokemons(EntityManagerInterface $em)
    {
        
        $repo = $em->getRepository('AppBundle:Pokemon');
        $list = $repo->getListPokemon();

        $res = new Response();
        $res->headers->set('Content-type:','application/json;charset=utf-8');;
        $res->setContent(json_encode($list));

        return $res;
    }

    //On met dresseur=? dans l'url
    /**
     * @Route("/listPokemonDresseur", name="listPokemonDresseur")
     */
    public function listPokemonsByDresseur(Request $request, EntityManagerInterface $em)
    {        
        $id = $request->query->get("dresseur");
        $list = $em->getRepository('AppBundle:PokemonAssoDresseur')->findByIdDresseurConcerne($id);

        $res = new Response();
        $res->headers->set('Content-type:','application/json;charset=utf-8');;
        $res->setContent(json_encode($list));

        return $res;
    }

    /**
     * @Route("/detailPokemon/{id}", name="detailPokemon")
     */
    public function detailPokemonByDresseur(EntityManagerInterface $em, $id)
    {
        $list = $em->getRepository('AppBundle:PokemonAssoDresseur')->findByIdPkm($id);

        $res = new Response();
        $res->headers->set('Content-type:','application/json;charset=utf-8');;
        $res->setContent(json_encode($list));

        return $res;
    }

}
