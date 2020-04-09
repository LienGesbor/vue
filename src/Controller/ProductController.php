<?php

namespace App\Controller;


use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'categoriesJson' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/category/{id}", name="app_category")
     */
    public function showCategory(int $id, CategoryRepository $categoryRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'currentCategoryId' => $id,
            'categoriesJson' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/product/{id}", name="app_product")
     */
    public function showProduct(int $id): Response
    {
        return $this->render('product/index.html.twig');
    }
}
