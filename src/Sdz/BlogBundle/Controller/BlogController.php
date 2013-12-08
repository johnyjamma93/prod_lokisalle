<?php
// src/Sdz/BlogBundle/Controller/BlogController.php
namespace Sdz\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Commentaire;
use Sdz\BlogBundle\Entity\Categorie;
use Sdz\BlogBundle\Entity\ArticleCompetence;

class BlogController extends Controller
{
   
    public function indexAction()
{
  // …
  // Les articles :
  $articles = array(
    array(
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'id'      => 1,
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Repetition du National Day de Singapour',
      'id'      => 2,
      'auteur' => 'winzou',
      'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Salle Lucan vraiment top !',
      'id'      => 3, 
      'auteur' => 'Pierrot',
      'contenu' => 'Louée il y a 6 mois, elle était propre, et conforme à sa fiche produit',
      'date'    => new \Datetime())
     
   
  );
    
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
  return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
    'articles' => $articles
  ));
                }
  
  
  public function voirAction($id)
{
      // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('SdzBlogBundle:Article')
                  ->find($id);
    if($article === null)
    {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
    // On récupère la liste des commentaires
    $liste_commentaires = $em->getRepository('SdzBlogBundle:Commentaire')
                             ->findAll();
    // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
    return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
      'article'        => $article,
      'liste_commentaires' => $liste_commentaires
    ));
    
  return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
    'article' => $article
  ));
}
  
 public function ajouterAction()
  {
    // On récupére l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    // Création de l'entité Article
    $article = new Article();
    $article->setTitre('Mon dernier weekend');
    $article->setContenu("C'était vraiment super et on s'est bien amusé.");
    $article->setAuteur('winzou');

    // Dans ce cas, on doit créer effectivement l'article en bdd pour lui assigner un id
    // On doit faire cela pour pouvoir enregistrer les ArticleCompetence par la suite
    $em->persist($article);
    $em->flush(); // Maintenant, $article a un id défini

    // Les compétences existent déjà, on les récupère depuis la bdd
    $liste_competences = $em->getRepository('SdzBlogBundle:Competence')
                            ->findAll(); // Pour l'exemple, notre Article contient toutes les Competences

    // Pour chaque compétence
    foreach($liste_competences as $i => $competence)
    {
      // On crée une nouvelle « relation entre 1 article et 1 compétence »
      $articleCompetence[$i] = new ArticleCompetence;

      // On la lie à l'article, qui est ici toujours le même
      $articleCompetence[$i]->setArticle($article);
      // On la lie à la compétence, qui change ici dans la boucle foreach
      $articleCompetence[$i]->setCompetence($competence);

      // Arbitrairement, on dit que chaque compétence est requise au niveau 'Expert'
      $articleCompetence[$i]->setNiveau('Expert');

      // Et bien sûr, on persiste cette entité de relation, propriétaire des deux autres relations
      $em->persist($articleCompetence[$i]);
    }

    // On déclenche l'enregistrement
    $em->flush();
    
    // Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
    }
    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
  }
  
 
  // Ajout d'un article existant à plusieurs catégories existantes :
  public function modifierAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('SdzBlogBundle:Article')
                  ->find($id);

    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }

    // On récupère toutes les catégories :
    $liste_categories = $em->getRepository('SdzBlogBundle:Categorie')
                           ->findAll();

    // On boucle sur les catégories pour les lier à l'article
    foreach($liste_categories as $categorie)
    {
      $article->addCategorie($categorie);
    }

    // Inutile de persister l'article, on l'a récupéré avec Doctrine

    // Étape 2 : On déclenche l'enregistrement
    $em->flush();

    return new Response('OK');
  }
    
  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id
    // Ici, on gérera la suppression de l'article en question
    return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
  }

  
  public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    $liste = array(
      array('id' => 2, 'titre' => 'Pas de reseau'),
      array('id' => 5, 'titre' => 'Trop petite'),
      array('id' => 9, 'titre' => 'Petit test')
    );
    
    return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }

  }
