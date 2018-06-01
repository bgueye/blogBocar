<?php

namespace gueye\blogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCompetence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gueye\blogBundle\Entity\ArticleCompetenceRepository")
 */
class ArticleCompetence
{
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="gueye\blogBundle\Entity\Article")
    */
    private $article;
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="gueye\blogBundle\Entity\Competence")
    */
    private $competence;
    /**
    * @var string
    * @ORM\Column(name="niveau", type="string", length=255)
    */
    private $niveau; // Ici j'ai un attribut de relation « niveau »
    // … vous pouvez ajouter d'autres attributs bien entendu

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return ArticleCompetence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set article
     *
     * @param \gueye\blogBundle\Entity\Article $article
     * @return ArticleCompetence
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

    /**
     * Set competence
     *
     * @param \gueye\blogBundle\Entity\Competence $competence
     * @return ArticleCompetence
     */
    public function setCompetence(\gueye\blogBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \gueye\blogBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->competence;
    }
}
