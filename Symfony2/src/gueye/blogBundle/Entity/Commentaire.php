<?php

namespace gueye\blogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use gueye\blogBundle\Validator\AntiFlood;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gueye\blogBundle\Entity\CommentaireRepository")
 */
class Commentaire
{
    /**
    * @ORM\ManyToOne(targetEntity="gueye\blogBundle\Entity\Article", inversedBy="commentaires")
    * @ORM\JoinColumn(nullable=false)
    */
    private $article;

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
     * @ORM\Column(name="auteur", type="string")
     * @AntiFlood()
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \Datetime();
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
     * Set auteur
     *
     * @param string $auteur
     * @return Commentaire
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
     * @return Commentaire
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
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
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

    /**
     * Set article
     *
     * @param \gueye\blogBundle\Entity\Article $article
     * @return Commentaire
     */
    public function setArticle(\gueye\blogBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \gueye\blogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
