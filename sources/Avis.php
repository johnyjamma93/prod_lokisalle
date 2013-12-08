<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\AvisRepository")
 */
class Avis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer", length=5)
     */
    private $id_membre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_salle", type="integer", length=5)
     */
    private $id_salle;

    /**
     * @var text
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", length=5)
     */
    private $note;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * Set id_membre
     *
     * @param integer $idMembre
     * @return Avis
     */
    public function setIdMembre($idMembre)
    {
        $this->id_membre = $idMembre;
    
        return $this;
    }

    /**
     * Get id_membre
     *
     * @return integer 
     */
    public function getIdMembre()
    {
        return $this->id_membre;
    }

    /**
     * Set id_salle
     *
     * @param integer $idSalle
     * @return Avis
     */
    public function setIdSalle($idSalle)
    {
        $this->id_salle = $idSalle;
    
        return $this;
    }

    /**
     * Get id_salle
     *
     * @return integer 
     */
    public function getIdSalle()
    {
        return $this->id_salle;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Avis
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Avis
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Avis
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}