<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\ArticleRepository")
 */
class Article
{
    /**
    * @ORM\ManyToMany(targetEntity="Sdz\BlogBundle\Entity\Categorie", cascade={"persist"})
    */
  private $categories;  
  
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

// Comme la propriété $categories doit être un ArrayCollection, souvenez-vous
  // On doit la définir dans un constructeur :
  public function __construct()
  {
    // Si vous aviez déjà un constructeur, ajoutez juste cette ligne :
    $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
    * Add categories
    *
    * @param Sdz\BlogBundle\Entity\Categorie $categories
    */
  public function addCategorie(\Sdz\BlogBundle\Entity\Categorie $categorie) // addCategorie sans « s » !
  {
    // Ici, on utilise l'ArrayCollection vraiment comme un tableau, avec la syntaxe []
    $this->categories[] = $categorie;
  }

  /**
    * Remove categories
    *
    * @param Sdz\BlogBundle\Entity\Categorie $categories
    */
  public function removeCategorie(\Sdz\BlogBundle\Entity\Categorie $categorie) // removeCategorie sans « s » !
  {
    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    $this->categories->removeElement($categorie);
  }

  /**
    * Get categories
    *
    * @return Doctrine\Common\Collections\Collection
    */
  public function getCategories() // Notez le « s », on récupère une liste de catégories ici !
  {
    return $this->categories;
  }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
    /**
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image", cascade={"persist"})
   */
  private $image;
  
 // Vos autres attributs…
  /**
   * @param Sdz\BlogBundle\Entity\Image $image
   */
  public function setImage(\Sdz\BlogBundle\Entity\Image $image = null)
  {
    $this->image = $image;
  }
  /**
   * @return Sdz\BlogBundle\Entity\Image 
   */
  public function getImage()
  {
    return $this->image;
  }
}
