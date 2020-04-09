<?php

namespace App\Controller;


use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig');
    }

    /**
     * @Route("/category/{id}", name="app_category")
     */
    public function showCategory(int $id): Response
    {
        return $this->render('product/index.html.twig', [
            'currentCategoryId' => $id,
        ]);
    }

    /**
     * @Route("/product/{id}", name="app_product")
     */
    public function showProduct(int $id): Response
    {
        return $this->render('product/index.html.twig');
    }

    /**
     * Get a list of all the categories
     */
    private function getCategories(): array
    {
        $entityManager = $this->getDoctrine()->getManager();

        return $entityManager->getRepository(Category::class)->findAll();
    }
}
