<?php

namespace gueye\blogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Sdz\BlogBundle\Entity\Tag;
// On rajoute ce use pour le context :
use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gueye\blogBundle\Entity\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 * N'oubliez pas cet Assert :
 * @Assert\Callback(methods={"contenuValide"})
 *
 *@UniqueEntity(fields="titre", message="Un article existe déjà avec ce titre.")
 */
class Article
{
    /**
    * @ORM\OneToMany(targetEntity="gueye\blogBundle\Entity\Commentaire", mappedBy="article")
    */
    private $commentaires; // Ici commentaires prend un « s », car un article a plusieurs commentaires !
    
    /**
    * @ORM\ManyToMany(targetEntity="gueye\blogBundle\Entity\Categorie", cascade={"persist"})
    */
    private $categories;

    /**
    * @ORM\OneToOne(targetEntity="gueye\blogBundle\Entity\Image", cascade={"persist", "remove"})
    * @Assert\Valid()
    */
    private $image;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdition", type="datetime", nullable=true)
     */
    private $dateEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, unique=true)
     * @Assert\Length(
     *              min=10,
     *              minMessage="Le titre doit faire au moins 10 caractères")
     */
    private $titre;

    /**
    * @Gedmo\Slug(fields={"titre"})
    * @ORM\Column(name="slug", length=128, unique=true)
    */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     * @Assert\Length(
     *                min=2, 
     *                minMessage="Le nom de l'auteur doit faire au moins 2 caractères")
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
    * @var boolean
    *
    * @ORM\Column(name="publication", type="boolean")
    */
    private $publication;
    
    public function __construct()
    {
    $this->date = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
    $this->publication = true;
    $this->Categories = new \Doctrine\Common\Collections\ArrayCollection();
    $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
    * @ORM\preUpdate
    * Callback pour mettre à jour la date d'édition à chaque modification de l'entité
    */
    public function updateDate()
    {
    $this->setDateEdition(new \Datetime());
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
     * @param \DateTime $date
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
     * @return \DateTime 
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
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set image
     *
     * @param \gueye\blogBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\gueye\blogBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \gueye\blogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
    * Add categories
    *
    *@param gueye\blogBundle\Entity\Categorie $categories
    */
    public function addCategorie(\gueye\blogBundle\Entity\Categorie $categorie) // addCategorie sans « s » !
    {
    // Ici, on utilise l'ArrayCollection vraiment comme un tableau, avec la syntaxe []
    $this->Categories[] = $categorie;
    }
    /**
    * Remove Categories
    *
    *@param gueye\blogBundle\Entity\Categorie $categories
    */
    public function removeCategorie(\gueye\blogBundle\Entity\Categorie $categorie) // removeCategorie sans « s » !
    {
    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    $this->Categories->removeElement($categorie);
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
     * Add commentaires
     *
     * @param \gueye\blogBundle\Entity\Commentaire $commentaires
     * @return Article
     */
    public function addCommentaire(\gueye\blogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;
        $commentaires->setArticle($this); // On ajoute ceci

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \gueye\blogBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\gueye\blogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Add categories
     *
     * @param \gueye\blogBundle\Entity\Categorie $categories
     * @return Article
     */
    public function addCategory(\gueye\blogBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \gueye\blogBundle\Entity\Categorie $categories
     */
    public function removeCategory(\gueye\blogBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     * @return Article
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return \DateTime 
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }


    public function contenuValide(ExecutionContextInterface $context)
    {
        $mots_interdits = array('échec', 'abandon');
        // On vérifie que le contenu ne contient pas l'un des mots
        if (preg_match('#'.implode('|', $mots_interdits).'#', $this->getContenu())) {
            // La règle est violée, on définit l'erreur et son message
            // 1er argument : on dit quel attribut l'erreur concerne, ici «contenu »
            // 2e argument : le message d'erreur
            $context->addViolationAt('contenu', 'Contenu invalide car il contient un mot interdit.', array(), null);
        }
    }
}
